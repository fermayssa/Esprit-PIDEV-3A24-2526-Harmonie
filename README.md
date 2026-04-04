# Harmony — Back-office Symfony 6.4 (`integration-pi2`)

Projet Symfony aligné sur le schéma MySQL fourni (`integration-pi2.sql`), avec CRUD pour chaque table, services métier par domaine, thème **SB Admin 2** et fixtures optionnelles.

## Prérequis

- PHP 8.1+, Composer, MySQL 8 (ou MariaDB compatible) en écoute sur `127.0.0.1:3306`
- Compte MySQL : `root` sans mot de passe (comme dans `.env` fourni) — adaptez `.env.local` si besoin

## Commandes à exécuter (ordre recommandé)

1. **Installer les dépendances**

   ```bash
   composer install
   ```

2. **Créer la base et importer le dump SQL** (fichier fourni en dehors du dépôt, ex. sur le Bureau)

   ```bash
   mysql -h 127.0.0.1 -u root -e "CREATE DATABASE IF NOT EXISTS \`integration-pi2\` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;"
   mysql -h 127.0.0.1 -u root integration-pi2 < /chemin/vers/integration-pi2.sql
   ```

3. **Vérifier la connexion Doctrine**

   ```bash
   php bin/console doctrine:query:sql "SELECT COUNT(*) FROM user"
   ```

4. **Migrations** (baseline sans ALTER — voir section ci-dessous)

   ```bash
   php bin/console doctrine:migrations:migrate --no-interaction
   ```

5. **(Optionnel) Données de démo en plus du SQL** — n’écrase pas les données existantes si l’email fixture est déjà présent

   ```bash
   php bin/console doctrine:fixtures:load --append --no-interaction
   ```

6. **Lancer le serveur**

   ```bash
   symfony server:start
   # ou
   php -S 127.0.0.1:8000 -t public
   ```

7. **Accès**

   - Tableau de bord : `http://127.0.0.1:8000/`
   - CRUD : liens dans la barre latérale (ex. `/user`, `/post`, `/courses`, …)

## Fichier `.env`

- `DATABASE_URL="mysql://root:@127.0.0.1:3306/integration-pi2?serverVersion=8.2.0&charset=utf8mb4"`
- Messenger en `sync://` pour éviter la table `messenger_messages` absente du dump SQL.

## Schéma de la base (tables)

| Table | Rôle principal |
|-------|----------------|
| `user` | Utilisateurs (profil, mot de passe, rôle ETUDIANT/ADMIN) |
| `etudiant` | Fiche étudiant (lien social / favoris côté métier) |
| `sessions` | Sessions applicatives (token, expiration) |
| `password_reset_codes` | Codes de réinitialisation |
| `notification` | Notifications (étudiant, post) |
| `categorie` | Catégories de posts |
| `post` | Publications |
| `commentaire` | Commentaires sur posts |
| `reaction` | Réactions (contrainte unique sur `id_post` dans le dump) |
| `favori` | Favoris (post + étudiant) |
| `calendrier` | Paramètre de vue calendrier |
| `evenement` | Événements (salle, approbation, calendrier) |
| `tache` | Tâches liées à un calendrier |
| `salle` | Salles |
| `seance` | Séances (salle, créneaux) |
| `aliment` | Référentiel aliments |
| `consommation` | Journal alimentaire |
| `exercice` | Référentiel exercices |
| `activite` | Activités réalisées |
| `sommeil` | Suivi sommeil |
| `journal_humeur` | Journal humeur |
| `session_meditation` | Séances méditation |
| `conseil` | Conseils liés à une ligne `sessions` |
| `subject` | Matières |
| `courses` | Cours publiés |
| `coursefile` | Fichiers binaires attachés à un cours |
| `saved_courses` | Cours enregistrés (MyISAM, IDs sans FK Doctrine) |
| `course_reports` | Signalements de cours (MyISAM, IDs sans FK Doctrine) |

Relations logiques : la plupart des clés sont des index dans le dump ; Doctrine ajoute des associations côté ORM (sauf `saved_courses` / `course_reports` : champs `user_id`, `course_id`, `reporter_id` en entiers pour respecter MyISAM).

## Architecture des dossiers

```
src/
  Controller/     # Un contrôleur CRUD par entité (+ HomeController)
  Entity/         # Mapping attributs Doctrine = colonnes SQL
  Form/           # FormType générés / ajustés (Bootstrap 4)
  Repository/     # Un repository par entité
  Service/Domain/ # Services métier : Account, Course, Fitness, Forum, Nutrition, Planning, Wellness
templates/
  base.html.twig  # Layout SB Admin 2 (sidebar, topbar, footer)
  */              # Vues CRUD (listes, formulaires, show)
public/sb-admin/  # CSS/JS/vendor/img du thème StartBootstrap SB Admin 2
migrations/       # Version baseline (sans modification de schéma — voir note)
```

## Migrations et synchronisation Doctrine

La commande `doctrine:migrations:diff` génère de nombreux `ALTER` + `RENAME INDEX` qui peuvent échouer selon la version MySQL/MariaDB alors que **votre schéma est déjà défini par le fichier SQL**.  
La migration `Version20260403230305` est une **baseline vide** : elle versionne l’état « après import SQL » sans exécuter d’ALTER.

Pour un contrôle manuel des écarts éventuels :

```bash
php bin/console doctrine:schema:validate
```

## Modifications signalées dans `composer.json`

- Ajout de **`doctrine/doctrine-fixtures-bundle` ^4.1** (compatible `doctrine/doctrine-bundle` ^3.x ; la contrainte ^3.6 des anciens tutoriels est incompatible).

## Références externes (analyse)

- Projet JavaFX : `Harmony copie` (modèles métier / écrans de référence).
- Template UI : `startbootstrap-sb-admin-2-gh-pages` (assets copiés sous `public/sb-admin/`).

## PSR-12

Formatage recommandé : PHP-CS-Fixer ou `composer require --dev friendsofphp/php-cs-fixer` selon vos consignes de rendu.
