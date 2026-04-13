# 🎯 Harmonie — Module Planning & Événements

> **Projet** : Esprit PIDEV 3A — 2025/2026  
> **Branche** : `planning-&-evenements`  
> **Repo** : [fermayssa/Esprit-PIDEV-3A24-2526-Harmonie](https://github.com/fermayssa/Esprit-PIDEV-3A24-2526-Harmonie/tree/planning-%26-evenements)

---

## 📋 Description du module

Ce module gère l'ensemble du système de **planification et d'événements** de l'application Harmonie. Il comprend un tableau Kanban, un calendrier interactif et un chatbot IA capable d'interagir avec la base de données en temps réel.

---

## ✨ Fonctionnalités principales

### 🗂️ Tableau Kanban
- 3 colonnes : **TODO** / **DOING** / **DONE**
- Cartes avec titre, date, description
- Icônes **voir** (👁) et **modifier** (✏) sur chaque carte
- Badge **#N** cliquable lié aux Issues GitHub
- Compteur de tâches par colonne
- Barre de progression globale
- Drag & drop avec animations fluides
- Filtres par priorité et barre de recherche
- Synchronisation bidirectionnelle avec **GitHub Issues**

### 📅 Calendrier
- Affichage des événements par date
- Synchronisation bidirectionnelle avec **Google Calendar**
- Création / modification / suppression d'événements
- Mise à jour instantanée de l'interface

### 🤖 Chatbot IA — Harmonie Assistant
- Propulsé par **Google Gemini 2.5 Flash-Lite**
- Lit toute la base de données avant chaque réponse
- Peut **ajouter**, **modifier** et **supprimer** des événements et des tâches
- Mise à jour instantanée du calendrier et du Kanban après chaque action
- Réponses formatées en Markdown avec rendu HTML

---

## 🔌 APIs intégrées

| API | Usage | Gratuit |
|-----|-------|---------|
| **Google Gemini 2.5 Flash-Lite** | Chatbot IA du module | ✅ 1 000 req/jour |
| **Google Calendar API** | Sync bidirectionnelle calendrier | ✅ 1M req/jour |
| **GitHub API** | Sync tâches Kanban ↔ Issues GitHub | ✅ 5 000 req/heure |

---

## ⚙️ Configuration des APIs

### 🔑 Variables d'environnement
Créer un fichier `.env` à la racine du projet :

```env
GEMINI_API_KEY=AIzaxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
GOOGLE_CALENDAR_CLIENT_ID=xxxxxxxxxxxx.apps.googleusercontent.com
GOOGLE_CALENDAR_CLIENT_SECRET=xxxxxxxxxxxxxxxxxxxxxxxx
GITHUB_PAT=ghp_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
GITHUB_REPO=fermayssa/Esprit-PIDEV-3A24-2526-Harmonie
GITHUB_BRANCH=planning-&-evenements
```

> ⚠️ Ne jamais commiter le fichier `.env`. Il est dans `.gitignore`.

---

### 🤖 Gemini AI — Configuration

**Modèle utilisé** : `gemini-2.5-flash-lite`

**Limites tier gratuit** :
- 15 requêtes / minute
- 1 000 requêtes / jour
- Reset quotidien à minuit (heure Pacifique)

**Endpoint** :
```
https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-lite:generateContent?key=GEMINI_API_KEY
```

**Comportement du chatbot** :
1. Charge tous les événements et tâches depuis la base de données
2. Injecte les données dans le system prompt
3. Envoie la requête à Gemini
4. Si Gemini détecte une action → exécute en base de données
5. Rafraîchit l'interface instantanément

**Format de réponse structurée (actions)** :
```json
{
  "action": "ADD_EVENT | UPDATE_EVENT | DELETE_EVENT | ADD_TASK | UPDATE_TASK | DELETE_TASK | NONE",
  "data": { ... },
  "message": "Confirmation affichée à l'utilisateur"
}
```

---

### 📅 Google Calendar API — Configuration

**Authentification** : OAuth 2.0

**Étapes de configuration** :
1. Créer un projet sur [Google Cloud Console](https://console.cloud.google.com)
2. Activer **Google Calendar API**
3. Générer un **OAuth 2.0 Client ID**
4. Stocker `access_token` et `refresh_token` en base de données

**Correspondance colonnes ↔ Google Calendar** :

| Action dans l'app | Action Google Calendar |
|---|---|
| Créer un événement | `events.insert()` |
| Modifier un événement | `events.update()` |
| Supprimer un événement | `events.delete()` |
| Charger les événements | `events.list()` |

**Champs synchronisés** :
- `summary` → Titre
- `start.dateTime` → Date et heure de début
- `end.dateTime` → Date et heure de fin
- `description` → Description
- `location` → Lieu

---

### 🐙 GitHub API — Configuration

**Authentification** : Personal Access Token (PAT)

**Permissions requises** : ✅ `repo` (cocher toute la section)

**Configuration dans l'app** :

| Champ | Valeur |
|---|---|
| Personal Access Token | `ghp_...` |
| Dépôt (owner/repo) | `fermayssa/Esprit-PIDEV-3A24-2526-Harmonie` |
| Branche | `planning-&-evenements` |

**Correspondance Kanban ↔ GitHub Issues** :

| Colonne Kanban | Label GitHub | État |
|---|---|---|
| TODO | `todo` | open |
| DOING | `doing` | open |
| DONE | aucun label | closed |

**Webhooks** : Configurés pour écouter les events `issues` (opened, edited, closed, labeled) et synchroniser en temps réel.

---

## 🗄️ Structure de la base de données

### Table `events`
```sql
id                  INT PRIMARY KEY
title               VARCHAR
description         TEXT
start_date          DATETIME
end_date            DATETIME
location            VARCHAR
google_event_id     VARCHAR   -- lien avec Google Calendar
created_at          DATETIME
updated_at          DATETIME
```

### Table `tasks`
```sql
id                  INT PRIMARY KEY
title               VARCHAR
description         TEXT
due_date            DATE
column              ENUM('TODO', 'DOING', 'DONE')
priority            ENUM('HIGH', 'MEDIUM', 'LOW')
github_issue_number INT       -- lien avec GitHub Issues
github_repo         VARCHAR
created_at          DATETIME
updated_at          DATETIME
```

---

## 💬 Exemples d'utilisation du chatbot

| Message utilisateur | Action exécutée |
|---|---|
| `"Qu'est-ce que j'ai prévu demain ?"` | Lit les événements du lendemain en base |
| `"Ajoute une réunion le 20 avril à 14h"` | INSERT en base + Google Calendar + affichage |
| `"Supprime l'événement Réunion du 15 avril"` | DELETE en base + Google Calendar + retrait UI |
| `"Quelles sont mes tâches en cours ?"` | Lit les tâches DOING en base |
| `"Déplace la tâche X en colonne DONE"` | UPDATE colonne + GitHub label + Kanban |
| `"Ajoute une tâche correction des bugs en TODO"` | INSERT en base + GitHub Issue + Kanban |

---

## 🎨 Design & UI

- **Thème** : Violet / Indigo (`#6366f1`)
- **Police** : Sans-serif, lisible
- **Colonnes Kanban** :
  - TODO → bordure grise
  - DOING → bordure bleue
  - DONE → bordure verte
- **Dates** :
  - Rouge → date dépassée
  - Orange → dans les 3 prochains jours
  - Grise → date normale
- **Badges GitHub** : fond violet clair, texte violet foncé, cliquables

---

## 🚀 Lancement du module

```bash
# Cloner le repo et se placer sur la bonne branche
git clone https://github.com/fermayssa/Esprit-PIDEV-3A24-2526-Harmonie.git
cd Esprit-PIDEV-3A24-2526-Harmonie
git checkout planning-\&-evenements

# Installer les dépendances
npm install

# Configurer les variables d'environnement
cp .env.example .env
# Remplir les clés API dans .env

# Lancer l'application
npm run dev
```

---

## 📁 Structure des fichiers du module

```
src/
├── components/
│   ├── Kanban/
│   │   ├── KanbanBoard.jsx       # Tableau principal
│   │   ├── KanbanColumn.jsx      # Colonne TODO/DOING/DONE
│   │   └── KanbanCard.jsx        # Carte individuelle
│   ├── Calendar/
│   │   └── CalendarView.jsx      # Vue calendrier
│   └── Chatbot/
│       └── HarmonieAssistant.jsx # Chatbot IA
├── api/
│   ├── gemini.js                 # Appels Gemini API
│   ├── googleCalendar.js         # Appels Google Calendar API
│   └── github.js                 # Appels GitHub API
├── hooks/
│   ├── useTasks.js               # Gestion des tâches
│   └── useEvents.js              # Gestion des événements
└── webhooks/
    └── github.js                 # Endpoint webhook GitHub
```

---

## 👤 Auteur

**Gmati Rayen** — Module Planning & Événements  
Projet PIDEV 3A — Esprit School of Engineering — 2025/2026

---

> *"The hardest things to say are usually the most important."*
