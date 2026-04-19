# 💬 GESTION-FORUM — Module Forum & Communication

> **Projet** : Harmony — Plateforme de bien-être communautaire  
> **Branche** : `GESTION-FORUM`  
> **Framework** : Symfony 7.4  
> **Étudiant** : Mayssa  
> **Sprint** : Sprint 2

---

## 📌 Description du module

Le module **Forum & Communication** permet aux utilisateurs de la plateforme Harmony d'échanger, poser des questions et partager leurs connaissances au sein de catégories thématiques. Il intègre plusieurs fonctionnalités avancées propulsées par l'Intelligence Artificielle.

---

## ✨ Fonctionnalités implémentées

### 📂 CRUD de base
| Fonctionnalité | Description |
|---|---|
| Gestion des catégories | Créer, modifier, supprimer des catégories de discussion |
| Gestion des posts | Publier, modifier, supprimer des posts avec image |
| Gestion des commentaires | Commenter, modifier, supprimer des réponses |
| Système de likes | Liker / unliker un post en AJAX |
| Recherche & tri | Recherche par mots-clés, tri par date et popularité |
| Pagination | KnpPaginatorBundle — 5 posts par page |

---

### 🤖 Fonctionnalités IA & APIs avancées

#### 🎨 Génération d'image IA — HuggingFace Stable Diffusion XL
- Génération d'images depuis une description textuelle (prompt)
- Choix du style artistique : Réaliste, Digital Art, Peinture, Anime, Aquarelle
- Affichage dans une modale avec option de téléchargement
- Gestion asynchrone avec retry automatique (3 tentatives)

```
POST /forum/generate-image
Body: { prompt: string, style: string }
Response: { image: base64_string }
```

#### 📝 Résumé IA des discussions — Groq API (LLaMA 3.3)
- Résumé automatique de tous les commentaires d'un post en 3 phrases
- Affichage dans une modale stylisée avec animation de chargement
- Appel AJAX sans rechargement de page

```
POST /forum/post/{id}/summarize
Response: { summary: string }
```

#### 😊 Analyse de sentiment — Groq API (LLaMA 3.3)
- Classification de chaque commentaire : **Positif** / **Neutre** / **Négatif**
- Score de confiance en pourcentage (0–100%)
- Badge coloré dynamique : 🟢 Vert / 🟡 Jaune / 🔴 Rouge
- Appel à la demande par commentaire

```
POST /forum/comment/{id}/sentiment
Response: { sentiment: string, emoji: string, score: int }
```

#### 🌍 Traduction multilingue — MyMemory API
- Traduction des posts en : Anglais, Arabe, Espagnol, Allemand, Italien
- Dropdown de sélection de langue
- Mise à jour dynamique du titre et contenu sans rechargement
- Badge de langue active avec option "Voir original"

```
POST /forum/post/{id}/translate
Body: { lang: string }
Response: { titre: string, contenu: string }
```

#### ✍️ Correction orthographique — LanguageTool API
- Correction automatique du français à la perte du focus
- Appliquée sur : titre du post, contenu, description de catégorie

#### 🚫 Détection de contenu inapproprié — PurgoMalum API
- Double protection : liste locale française + API externe anglaise
- Blocage à la soumission + retour visuel (bordure rouge) en temps réel

---

## 🏗️ Architecture du module

```
src/
├── Controller/
│   └── ForumController.php          # Routes CRUD + AJAX + IA
├── Entity/
│   ├── Categorie.php
│   ├── Post.php
│   ├── Commentaire.php
│   └── Reaction.php
├── Repository/
│   ├── CategorieRepository.php
│   ├── PostRepository.php
│   ├── CommentaireRepository.php
│   └── ReactionRepository.php
└── Service/
    ├── SummaryService.php           # Résumé IA via Groq
    ├── SentimentService.php         # Analyse sentiment via Groq
    ├── TranslationService.php       # Traduction via MyMemory
    ├── SpellCheckService.php        # Correction via LanguageTool
    ├── ImageGenerationService.php   # Génération image via HuggingFace
    └── ModerationService.php        # Détection contenu via PurgoMalum

templates/forum/
├── index.html.twig                  # Page liste des catégories
├── posts.html.twig                  # Page liste des posts
├── new_post.html.twig               # Formulaire nouveau post
└── edit_post.html.twig              # Formulaire modification post
```

---

## 🔗 Routes principales

| Méthode | Route | Description |
|---|---|---|
| GET | `/forum` | Liste des catégories |
| GET | `/forum/categorie/{id}` | Posts d'une catégorie |
| GET/POST | `/forum/post/new` | Nouveau post |
| GET/POST | `/forum/post/{id}/edit` | Modifier un post |
| POST | `/forum/post/{id}/delete` | Supprimer un post |
| POST | `/forum/post/{id}/like` | Like AJAX |
| POST | `/forum/post/{id}/summarize` | Résumé IA |
| POST | `/forum/post/{id}/translate` | Traduction |
| POST | `/forum/comment/{id}/sentiment` | Analyse sentiment |
| POST | `/forum/generate-image` | Génération image IA |

---

## 📦 Dépendances principales

```json
{
    "knplabs/knp-paginator-bundle": "^6.0",
    "symfony/http-client": "*",
    "symfony/form": "*",
    "doctrine/orm": "*"
}
```

---

## 🧪 Tests manuels

| Scénario | Résultat attendu |
|---|---|
| Soumettre un post avec mot interdit | ❌ Bloqué + message d'erreur |
| Cliquer "Résumé IA" sur un post avec commentaires | ✅ Modale avec résumé en 3 phrases |
| Cliquer "Sentiment IA" sur un commentaire positif | ✅ Badge vert 😊 positif (80–95%) |
| Traduire un post en arabe | ✅ Titre et contenu mis à jour + badge langue |
| Générer une image style Anime | ✅ Image affichée dans modale + téléchargement |

---

## 🚀 Modèles IA utilisés

| Service | Modèle | Provider |
|---|---|---|
| Résumé discussion | `llama-3.3-70b-versatile` | Groq |
| Analyse sentiment | `llama-3.3-70b-versatile` | Groq |
| Génération image | `stable-diffusion-xl-base-1.0` | HuggingFace |

---

## 👩‍💻 Auteure

**Mayssa** — Module Forum & Communication  
Projet intégré : **Harmony** — Plateforme de bien-être  
École : **ESPRIT** | Année académique : **2025–2026**
