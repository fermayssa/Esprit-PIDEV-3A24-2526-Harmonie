# Architecture du Chatbot avec Intégration Base de Données

## Vue d'ensemble du système

Le chatbot Harmonie fonctionne selon une architecture **Backend-for-Frontend (BFF)** qui :
1. **Protège** la clé API Gemini (pas d'exposition côté client)
2. **Accède** directement à la base de données
3. **Exécute** les actions demandées par l'IA
4. **Formate** les données pour l'affichage

---

## Architecture générale

```
┌─────────────────────────────────────────────────────────┐
│          NAVIGATEUR (Frontend JavaScript)               │
│ • harmonie-chatbot-widget.js                            │
│ • Interface chat / Gestion UI                           │
└──────────────────────┬──────────────────────────────────┘
                       │
                       │ JSON (HTTP POST)
                       │ userMessage + history
                       ↓
┌─────────────────────────────────────────────────────────┐
│     SERVEUR (Backend - ChatApiController.php)           │
│ • Reçoit message utilisateur                            │
│ • Lit données de la BD                                  │
│ • Appelle API Gemini avec contexte                      │
│ • Parse réponse JSON de l'IA                            │
│ • Exécute actions sur la BD (CRUD)                      │
│ • Retourne réponse + confirmation d'action              │
└──────────────────────┬──────────────────────────────────┘
                       │
                       │ JSON Response
                       │ (message + action)
                       ↓
┌─────────────────────────────────────────────────────────┐
│          BASE DE DONNÉES (Doctrine ORM)                 │
│ • Tâches (Tache.php)                                    │
│ • Événements (Evenement.php)                            │
│ • Calendrier (Calendrier.php)                           │
└─────────────────────────────────────────────────────────┘
```

---

## Flux de communication détaillé

### **ÉTAPE 1 : Frontend envoie message**

```javascript
// public/harmonie-chatbot-widget.js

const response = await fetch('/api/chat', {
  method: 'POST',
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify({
    userMessage: "Ajoute une tâche: Faire les courses, priorité haute, pour demain",
    history: [],
    model: 'gemini-2.5-flash-lite'
  })
});
```

### **ÉTAPE 2 : Backend reçoit et prépare le contexte BD**

```php
// src/Controller/Api/ChatApiController.php - ligne 40-50

$tasks = $this->serializeTasks();      // Lecture BD → JSON
$events = $this->serializeEvents();    // Lecture BD → JSON

// Exemple : Les tâches récupérées deviennent :
$tasks = [
  [
    'id' => 1,
    'title' => 'Faire les courses',
    'priority' => 'haute',
    'dueDate' => '2026-04-14',
    'statut' => 'A_FAIRE'
  ]
];
```

### **ÉTAPE 3 : Construction du Prompt système**

```php
// ChatApiController.php - ligne 57-70

$systemPrompt = "Tu es Harmonie Assistant...
ÉVÉNEMENTS : " . json_encode($events) . "
TÂCHES KANBAN : " . json_encode($tasks) . "
Tu as la permission de lire, ajouter, modifier et supprimer ces données.
Si une action est nécessaire, réponds STRICTEMENT en JSON :
{\"action\":\"ADD_TASK|UPDATE_TASK|DELETE_TASK|...\", \"data\":{...}, \"message\":\"...\"}
Si aucune action : action=NONE avec message formaté.";
```

**L'IA reçoit donc :**
- Le contexte complet de la BD sous forme JSON
- L'historique de conversation
- Les règles de formatage (Markdown, statuts, etc.)

### **ÉTAPE 4 : Appel API Gemini**

```php
// ChatApiController.php - ligne 85-95

$response = $this->httpClient->request('POST', $url, [
  'json' => [
    'systemInstruction' => ['parts' => [['text' => $systemPrompt]]],
    'contents' => $contents  // Historique + nouveau message
  ]
]);
```

**Gemini traite :**
- Le contexte (tâches + événements actuels)
- La demande de l'utilisateur
- Les règles d'action JSON

### **ÉTAPE 5 : Gemini répond en JSON structuré**

```json
{
  "action": "ADD_TASK",
  "data": {
    "title": "Faire les courses",
    "priority": "haute",
    "dueDate": "2026-04-14",
    "notes": "Lait, pain, œufs"
  },
  "message": "✅ J'ai créé la tâche 'Faire les courses' pour demain"
}
```

### **ÉTAPE 6 : Backend exécute l'action**

```php
// ChatApiController.php - ligne 268-283

private function executeAction(string $action, array $data): void
{
    switch ($action) {
        case 'ADD_TASK':
            $task = new Tache();
            $task->setNom($data['title']);
            $task->setPriorite($data['priority']);
            $task->setDeadline(new \DateTime($data['dueDate']));
            $task->setStatutTache('A_FAIRE');
            
            // Récupère le calendrier principal
            if ($cal = $this->calendrierRepository->findPrimary()) {
                $task->setCalendrier($cal);
            }
            
            // Persiste et flush = enregistrement en BD
            $this->em->persist($task);
            $this->em->flush();
            return;
        // ...
    }
}
```

### **ÉTAPE 7 : Réponse retournée au Frontend**

```json
{
  "success": true,
  "text": "✅ J'ai créé la tâche 'Faire les courses' pour demain",
  "action": "ADD_TASK"
}
```

### **ÉTAPE 8 : Frontend affiche le résultat**

```javascript
// harmonie-chatbot-widget.js - gestion de la réponse

if (resp.text) {
  // Affiche le message avec Markdown, badges, etc.
  displayMessage(resp.text);
  
  // Déclenche une mise à jour du Kanban si action effectuée
  if (resp.action && resp.action !== 'NONE') {
    document.dispatchEvent(
      new CustomEvent('harmonie_data_updated')
    );
  }
}
```

---

## Opérations supportées

### **Sur les Tâches :**
```
ADD_TASK       → Crée nouvelle tâche
UPDATE_TASK    → Modifie titre, priorité, statut, date
DELETE_TASK    → Supprime tâche
```

### **Sur les Événements :**
```
ADD_EVENT      → Crée nouvel événement
UPDATE_EVENT   → Modifie titre, description, horaires
DELETE_EVENT   → Supprime événement
```

---

## Exemples de commandes utilisateur

### Exemple 1 : Créer une tâche
```
Utilisateur: "Crée une tâche 'Réviser math' priorité haute pour vendredi"

Gemini reconnaît:
- Action: ADD_TASK
- Title: "Réviser math"
- Priority: "haute"
- DueDate: 2026-04-18 (vendredi)

Backend:
- Crée Tache() en BD
- Retourne ✅
```

### Exemple 2 : Mettre à jour une tâche
```
Utilisateur: "Marquer 'Réviser math' comme terminée"

Gemini reconnaît:
- Action: UPDATE_TASK
- ID: 1 (trouve par titre)
- Statut: "TERMINEE"

Backend:
- Modifie Tache.id=1
- setStatutTache('TERMINEE')
- Flush BD
- Retourne ✅
```

### Exemple 3 : Créer un événement
```
Utilisateur: "Ajoute une réunion mercredi à 14h30 en salle 205"

Gemini reconnaît:
- Action: ADD_EVENT
- Title: "Réunion"
- StartTime: 2026-04-16 14:30:00
- Location: "Salle 205"

Backend:
- Crée Evenement() en BD
- Retourne ✅
```

---

## Sécurité : Pourquoi Backend-for-Frontend ?

### ❌ Mauvais (exposer clé côté client)
```javascript
// DANGER ! Ne pas faire ceci
const response = await fetch(
  'https://generativelanguage.googleapis.com/...',
  { headers: { 'Authorization': 'GEMINI_API_KEY_PUBLIQUE' } }
);
```
**Problèmes :**
- Clé visible dans le code source du navigateur
- Utilisateurs malveillants peuvent copier et utiliser
- Facture API hors de contrôle

### ✅ Bon (clé sécurisée côté serveur)
```php
// Backend seulement
private readonly string $geminiApiKey;  // .env (secret)

$response = $this->httpClient->request('POST', $url, [...]);
```
**Avantages :**
- Clé stockée en variable d'environnement `.env`
- Non visible côté client
- Serveur contrôle toutes les requêtes
- Authentification requise (utilisateur loggé)
- Audit complet des actions

---

## Repositories : Accès aux données

### TacheRepository
```php
// src/Repository/TacheRepository.php
$tasks = $this->tacheRepository->findAll();
// Récupère TOUTES les tâches de l'utilisateur
// Mappées en JSON pour Gemini
```

### EvenementRepository
```php
// src/Repository/EvenementRepository.php
$events = $this->evenementRepository->findAll();
// Récupère TOUS les événements
// Mappés en JSON pour Gemini
```

### CalendrierRepository
```php
// Récupère le calendrier principal
if ($cal = $this->calendrierRepository->findPrimary()) {
    $task->setCalendrier($cal);  // Associe tâche au calendrier
}
```

---

## Injection de dépendances Symfony

```php
public function __construct(
    private readonly HttpClientInterface $httpClient,        // Client HTTP
    private readonly TacheRepository $tacheRepository,       // BD Tâches
    private readonly EvenementRepository $evenementRepository, // BD Événements
    private readonly CalendrierRepository $calendrierRepository, // Calendrier
    private readonly EntityManagerInterface $em,             // ORM Doctrine
    private readonly KanbanRealtimeNotifier $realtimeNotifier, // Notifications
    #[Autowire('%env(string:GEMINI_API_KEY)%')]
    private readonly string $geminiApiKey,                   // Clé API (env)
)
```

Chaque dépendance est injectée automatiquement par Symfony et disponible dans toute la classe.

---

## Résumé en 3 points

### 1. **Flux bidirectionnel**
```
Frontend → Message utilisateur → Backend → API Gemini
Backend ← Réponse JSON ← Gemini
Backend → Commandes BD (CRUD) → Doctrine
Frontend ← Réponse confirmée ← Backend
```

### 2. **Protection des données**
- Clé API jamais exposée
- Authentification requise
- Audit de toutes les actions
- ORM Doctrine = requêtes sécurisées (pas de SQL injection)

### 3. **Actions autonomes de l'IA**
- Gemini comprend le contexte BD entier
- Peut décider de créer/modifier/supprimer
- Backend exécute les commandes JSON parsées
- Frontend synchronisé automatiquement

---

## Fichiers clés

| Fichier | Rôle |
|---------|------|
| `src/Controller/Api/ChatApiController.php` | Contrôleur API (réception, logique, exécution) |
| `public/harmonie-chatbot-widget.js` | Interface chat et gestion UI |
| `src/Entity/Tache.php` | Modèle base de données (Tâche) |
| `src/Entity/Evenement.php` | Modèle base de données (Événement) |
| `src/Repository/TacheRepository.php` | Accès BD pour Tâches |
| `src/Repository/EvenementRepository.php` | Accès BD pour Événements |

---

## Questions fréquentes

**Q : Comment Gemini sait-il quelles tâches modifier ?**  
R : On passe `'id'` dans `$data`, et on cherche la tâche par ID puis on la modifie.

**Q : Et si l'IA crée deux tâches ?**  
R : Elle renvoie une seule action JSON. Pour plusieurs, il faudrait modifier le système.

**Q : Comment sont synchronisés les changements ?**  
R : Le frontend écoute l'événement `harmonie_data_updated` et recharge le Kanban.

**Q : La BD est-elle protégée contre les injections ?**  
R : Oui ! Doctrine ORM utilise des requêtes paramétrées (PDO prepared statements).
