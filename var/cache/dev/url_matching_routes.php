<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/activites' => [[['_route' => 'activites', '_controller' => 'App\\Controller\\ActivitesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/activites/api/list' => [[['_route' => 'activites_api_list', '_controller' => 'App\\Controller\\ActivitesController::apiList'], null, ['GET' => 0], null, false, false, null]],
        '/activites/api/add' => [[['_route' => 'activites_api_add', '_controller' => 'App\\Controller\\ActivitesController::apiAdd'], null, ['POST' => 0], null, false, false, null]],
        '/activites/bilan/pdf' => [[['_route' => 'activites_bilan_pdf', '_controller' => 'App\\Controller\\ActivitesController::bilanPdf'], null, ['GET' => 0], null, false, false, null]],
        '/admin/course-reports' => [[['_route' => 'admin_course_reports_index', '_controller' => 'App\\Controller\\AdminCourseReportsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/courses' => [[['_route' => 'admin_courses_index', '_controller' => 'App\\Controller\\AdminCoursesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/demandes' => [[['_route' => 'admin_demande_index', '_controller' => 'App\\Controller\\AdminDemandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenements' => [[['_route' => 'admin_evenement_index', '_controller' => 'App\\Controller\\AdminEvenementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenements/new' => [[['_route' => 'admin_evenement_new', '_controller' => 'App\\Controller\\AdminEvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/journal' => [[['_route' => 'admin_journal_index', '_controller' => 'App\\Controller\\AdminJournalController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/journal/mark-read' => [[['_route' => 'admin_journal_mark_read', '_controller' => 'App\\Controller\\AdminJournalController::markRead'], null, ['POST' => 0], null, false, false, null]],
        '/admin/journal/students' => [[['_route' => 'admin_journal_students', '_controller' => 'App\\Controller\\AdminJournalController::students'], null, ['GET' => 0], null, false, false, null]],
        '/admin/meditation' => [[['_route' => 'admin_meditation_index', '_controller' => 'App\\Controller\\AdminMeditationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/meditation/search' => [[['_route' => 'admin_meditation_search', '_controller' => 'App\\Controller\\AdminMeditationController::search'], null, ['GET' => 0], null, false, false, null]],
        '/admin/meditation/new' => [[['_route' => 'admin_meditation_new', '_controller' => 'App\\Controller\\AdminMeditationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/meditation/generate' => [[['_route' => 'admin_meditation_generate', '_controller' => 'App\\Controller\\AdminMeditationController::generate'], null, ['POST' => 0], null, false, false, null]],
        '/admin/meditation/pdf' => [[['_route' => 'admin_meditation_pdf_list', '_controller' => 'App\\Controller\\AdminMeditationController::pdfList'], null, ['GET' => 0], null, false, false, null]],
        '/admin/nutrition' => [[['_route' => 'admin_nutrition_index', '_controller' => 'App\\Controller\\AdminNutritionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/nutrition/export' => [[['_route' => 'admin_nutrition_export', '_controller' => 'App\\Controller\\AdminNutritionController::export'], null, ['GET' => 0], null, false, false, null]],
        '/admin/nutrition/api/list' => [[['_route' => 'admin_nutrition_list', '_controller' => 'App\\Controller\\AdminNutritionController::list'], null, ['GET' => 0], null, false, false, null]],
        '/admin/nutrition/api/create' => [[['_route' => 'admin_nutrition_create', '_controller' => 'App\\Controller\\AdminNutritionController::create'], null, ['POST' => 0], null, false, false, null]],
        '/admin/salles' => [[['_route' => 'admin_salle_index', '_controller' => 'App\\Controller\\AdminSalleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/salles/new' => [[['_route' => 'admin_salle_new', '_controller' => 'App\\Controller\\AdminSalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/sport' => [[['_route' => 'admin_sport_index', '_controller' => 'App\\Controller\\AdminSportController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/sport/api/list' => [[['_route' => 'admin_sport_list', '_controller' => 'App\\Controller\\AdminSportController::list'], null, ['GET' => 0], null, false, false, null]],
        '/admin/sport/api/types' => [[['_route' => 'admin_sport_types', '_controller' => 'App\\Controller\\AdminSportController::types'], null, ['GET' => 0], null, false, false, null]],
        '/admin/sport/api/stats' => [[['_route' => 'admin_sport_stats', '_controller' => 'App\\Controller\\AdminSportController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/admin/sport/api/create' => [[['_route' => 'admin_sport_create', '_controller' => 'App\\Controller\\AdminSportController::create'], null, ['POST' => 0], null, false, false, null]],
        '/admin/sport/api/youtube-search' => [[['_route' => 'admin_sport_youtube_search', '_controller' => 'App\\Controller\\AdminSportYouTubeController::search'], null, ['GET' => 0], null, false, false, null]],
        '/admin/taches' => [[['_route' => 'admin_tache_index', '_controller' => 'App\\Controller\\AdminTacheController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/taches/new' => [[['_route' => 'admin_tache_new', '_controller' => 'App\\Controller\\AdminTacheController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/search' => [[['_route' => 'admin_users_search', '_controller' => 'App\\Controller\\AdminUserController::search'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/suspended' => [[['_route' => 'admin_users_suspended', '_controller' => 'App\\Controller\\AdminUserController::suspended'], null, ['GET' => 0], null, false, false, null]],
        '/api/chat' => [[['_route' => 'api_chat', '_controller' => 'App\\Controller\\Api\\ChatApiController'], null, ['POST' => 0], null, false, false, null]],
        '/api/events' => [
            [['_route' => 'api_events_list', '_controller' => 'App\\Controller\\Api\\EventApiController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_events_create', '_controller' => 'App\\Controller\\Api\\EventApiController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/github/settings' => [
            [['_route' => 'api_github_settings_get', '_controller' => 'App\\Controller\\Api\\GithubSettingsController::getSettings'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_github_settings_put', '_controller' => 'App\\Controller\\Api\\GithubSettingsController::saveSettings'], null, ['PUT' => 0], null, false, false, null],
        ],
        '/api/github/settings/sync-doing' => [[['_route' => 'api_github_settings_sync_doing', '_controller' => 'App\\Controller\\Api\\GithubSettingsController::syncDoing'], null, ['POST' => 0], null, false, false, null]],
        '/api/webhooks/github' => [[['_route' => 'api_webhooks_github', '_controller' => 'App\\Controller\\Api\\GithubWebhookController'], null, ['POST' => 0], null, false, false, null]],
        '/api/kanban/stream' => [[['_route' => 'api_kanban_stream', '_controller' => 'App\\Controller\\Api\\KanbanStreamController::events'], null, ['GET' => 0], null, false, false, null]],
        '/api/tasks' => [
            [['_route' => 'api_tasks_list', '_controller' => 'App\\Controller\\Api\\TaskApiController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_tasks_create', '_controller' => 'App\\Controller\\Api\\TaskApiController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/back' => [[['_route' => 'back_dashboard', '_controller' => 'App\\Controller\\BackController::dashboard'], null, null, null, false, false, null]],
        '/back/categories' => [[['_route' => 'back_categories', '_controller' => 'App\\Controller\\BackController::categories'], null, null, null, false, false, null]],
        '/back/posts' => [[['_route' => 'back_posts', '_controller' => 'App\\Controller\\BackController::posts'], null, null, null, false, false, null]],
        '/back/commentaires' => [[['_route' => 'back_commentaires', '_controller' => 'App\\Controller\\BackController::commentaires'], null, null, null, false, false, null]],
        '/chatbot' => [[['_route' => 'chatbot', '_controller' => 'App\\Controller\\ChatbotController::index'], null, null, null, false, false, null]],
        '/evenement/salles-api' => [[['_route' => 'app_evenement_salles_api', '_controller' => 'App\\Controller\\EvenementsController::sallesApi'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/export/pdf' => [[['_route' => 'app_evenement_export_pdf', '_controller' => 'App\\Controller\\EvenementsController::exportPdf'], null, ['POST' => 0], null, false, false, null]],
        '/evenement/export/excel' => [[['_route' => 'app_evenement_export_excel', '_controller' => 'App\\Controller\\EvenementsController::exportExcel'], null, ['POST' => 0], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/index' => [[['_route' => 'evenements', '_controller' => 'App\\Controller\\EvenementsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/export/csv' => [[['_route' => 'app_evenement_export_csv', '_controller' => 'App\\Controller\\EvenementsController::exportCsv'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/face-verify' => [[['_route' => 'face_verify', '_controller' => 'App\\Controller\\FaceAuthController::verify'], null, null, null, false, false, null]],
        '/face-verify/check' => [[['_route' => 'face_verify_check', '_controller' => 'App\\Controller\\FaceAuthController::check'], null, ['POST' => 0], null, false, false, null]],
        '/face-verify/success' => [[['_route' => 'face_verify_success', '_controller' => 'App\\Controller\\FaceAuthController::faceSuccess'], null, ['POST' => 0], null, false, false, null]],
        '/profile/toggle-faceid' => [[['_route' => 'app_toggle_faceid', '_controller' => 'App\\Controller\\FaceAuthController::toggleFaceId'], null, ['POST' => 0], null, false, false, null]],
        '/profile/update-face' => [[['_route' => 'app_update_face', '_controller' => 'App\\Controller\\FaceAuthController::updateFace'], null, ['POST' => 0], null, false, false, null]],
        '/forum/generate-image' => [[['_route' => 'forum_generate_image', '_controller' => 'App\\Controller\\ForumController::generateImage'], null, ['POST' => 0], null, false, false, null]],
        '/forum/spellcheck' => [[['_route' => 'forum_spellcheck', '_controller' => 'App\\Controller\\ForumController::spellcheck'], null, ['POST' => 0], null, false, false, null]],
        '/forum' => [[['_route' => 'forum', '_controller' => 'App\\Controller\\ForumController::index'], null, null, null, false, false, null]],
        '/forum/categorie/new' => [[['_route' => 'forum_categorie_new', '_controller' => 'App\\Controller\\ForumController::newCategorie'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/oauth/google/connect' => [[['_route' => 'app_google_calendar_connect', '_controller' => 'App\\Controller\\GoogleCalendarController::connect'], null, null, null, false, false, null]],
        '/oauth/google/callback' => [[['_route' => 'app_google_calendar_callback', '_controller' => 'App\\Controller\\GoogleCalendarController::callback'], null, null, null, false, false, null]],
        '/oauth/google/disconnect' => [[['_route' => 'app_google_calendar_disconnect', '_controller' => 'App\\Controller\\GoogleCalendarController::disconnect'], null, null, null, false, false, null]],
        '/oauth/google/pull' => [[['_route' => 'app_google_calendar_pull', '_controller' => 'App\\Controller\\GoogleCalendarController::pull'], null, null, null, false, false, null]],
        '/webhook/google-calendar' => [[['_route' => 'app_google_calendar_webhook', '_controller' => 'App\\Controller\\GoogleCalendarController::webhook'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomepageController::index'], null, null, null, false, false, null]],
        '/journal' => [[['_route' => 'journal', '_controller' => 'App\\Controller\\JournalController::index'], null, ['GET' => 0], null, false, false, null]],
        '/journal/search' => [[['_route' => 'journal_search', '_controller' => 'App\\Controller\\JournalController::search'], null, ['GET' => 0], null, false, false, null]],
        '/journal/stats' => [[['_route' => 'journal_stats', '_controller' => 'App\\Controller\\JournalController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/journal/transcribe' => [[['_route' => 'journal_transcribe', '_controller' => 'App\\Controller\\JournalController::transcribe'], null, ['POST' => 0], null, false, false, null]],
        '/journal/new' => [[['_route' => 'journal_new', '_controller' => 'App\\Controller\\JournalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/courses' => [[['_route' => 'app_courses', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/courses/create' => [[['_route' => 'app_courses_create', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/library' => [[['_route' => 'library', '_controller' => 'App\\Controller\\LibraryController::index'], null, null, null, false, false, null]],
        '/meditation' => [[['_route' => 'meditation', '_controller' => 'App\\Controller\\MeditationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/meditation/search' => [[['_route' => 'meditation_search', '_controller' => 'App\\Controller\\MeditationController::search'], null, ['GET' => 0], null, false, false, null]],
        '/api/messaging/conversations' => [[['_route' => 'api_messaging_conversations', '_controller' => 'App\\Controller\\MessagingController::conversations'], null, ['GET' => 0], null, false, false, null]],
        '/api/messaging/send' => [[['_route' => 'api_messaging_send', '_controller' => 'App\\Controller\\MessagingController::send'], null, ['POST' => 0], null, false, false, null]],
        '/api/messaging/test-send' => [[['_route' => 'api_messaging_test', '_controller' => 'App\\Controller\\MessagingController::testSend'], null, ['GET' => 0], null, false, false, null]],
        '/api/messaging/debug-send' => [[['_route' => 'api_messaging_debug', '_controller' => 'App\\Controller\\MessagingController::debugSend'], null, ['POST' => 0], null, false, false, null]],
        '/api/messaging/search-users' => [[['_route' => 'api_messaging_search_users', '_controller' => 'App\\Controller\\MessagingController::searchUsers'], null, ['GET' => 0], null, false, false, null]],
        '/api/messaging/unread-count' => [[['_route' => 'api_messaging_unread_count', '_controller' => 'App\\Controller\\MessagingController::unreadCount'], null, ['GET' => 0], null, false, false, null]],
        '/api/messaging/mercure-token' => [[['_route' => 'api_messaging_mercure_token', '_controller' => 'App\\Controller\\MessagingController::mercureToken'], null, ['GET' => 0], null, false, false, null]],
        '/dev/mock-user/list' => [[['_route' => 'dev_mock_user_list', '_controller' => 'App\\Controller\\MockUserController::list'], null, ['GET' => 0], null, false, false, null]],
        '/dev/mock-user/set' => [[['_route' => 'dev_mock_user_set', '_controller' => 'App\\Controller\\MockUserController::set'], null, ['POST' => 0], null, false, false, null]],
        '/dev/mock-user/current' => [[['_route' => 'dev_mock_user_current', '_controller' => 'App\\Controller\\MockUserController::current'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition' => [[['_route' => 'nutrition', '_controller' => 'App\\Controller\\NutritionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/ajouter' => [[['_route' => 'nutrition_ajouter', '_controller' => 'App\\Controller\\NutritionController::ajouter'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/recettes' => [[['_route' => 'nutrition_recettes', '_controller' => 'App\\Controller\\NutritionController::recettes'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/api/objectif' => [[['_route' => 'nutrition_api_objectif', '_controller' => 'App\\Controller\\NutritionController::apiObjectif'], null, ['POST' => 0], null, false, false, null]],
        '/nutrition/api/bmr-profil' => [
            [['_route' => 'nutrition_api_bmr_save', '_controller' => 'App\\Controller\\NutritionController::apiBmrSave'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'nutrition_api_bmr_get', '_controller' => 'App\\Controller\\NutritionController::apiBmrGet'], null, ['GET' => 0], null, false, false, null],
        ],
        '/nutrition/api/analyze-photo' => [[['_route' => 'nutrition_api_analyze_photo', '_controller' => 'App\\Controller\\NutritionController::apiAnalyzePhoto'], null, ['POST' => 0], null, false, false, null]],
        '/nutrition/api/recettes' => [[['_route' => 'nutrition_api_recettes', '_controller' => 'App\\Controller\\NutritionController::apiRecettes'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/api/ajouter-recette' => [[['_route' => 'nutrition_api_ajouter_recette', '_controller' => 'App\\Controller\\NutritionController::apiAjouterRecette'], null, ['POST' => 0], null, false, false, null]],
        '/nutrition/api/journal' => [[['_route' => 'nutrition_api_journal', '_controller' => 'App\\Controller\\NutritionController::apiJournal'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/api/aliments' => [[['_route' => 'nutrition_api_aliments', '_controller' => 'App\\Controller\\NutritionController::apiAliments'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/api/ajouter' => [[['_route' => 'nutrition_api_ajouter', '_controller' => 'App\\Controller\\NutritionController::apiAjouter'], null, ['POST' => 0], null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google', '_controller' => 'App\\Controller\\OAuthController::connectGoogle'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\OAuthController::connectGoogleCheck'], null, null, null, false, false, null]],
        '/connect/facebook' => [[['_route' => 'connect_facebook', '_controller' => 'App\\Controller\\OAuthController::connectFacebook'], null, null, null, false, false, null]],
        '/connect/facebook/check' => [[['_route' => 'connect_facebook_check', '_controller' => 'App\\Controller\\OAuthController::connectFacebookCheck'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\PasswordResetController::step1'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forgot-password/verify' => [[['_route' => 'app_forgot_password_verify', '_controller' => 'App\\Controller\\PasswordResetController::step2'], null, ['POST' => 0], null, false, false, null]],
        '/forgot-password/reset' => [[['_route' => 'app_forgot_password_reset', '_controller' => 'App\\Controller\\PasswordResetController::step3'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/profile/settings' => [[['_route' => 'app_profile_settings', '_controller' => 'App\\Controller\\ProfileController::settings'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/security' => [[['_route' => 'app_profile_security', '_controller' => 'App\\Controller\\ProfileController::security'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/2fa' => [[['_route' => 'app_profile_2fa', '_controller' => 'App\\Controller\\ProfileController::twofa'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register/step2' => [[['_route' => 'app_register_step2', '_controller' => 'App\\Controller\\RegistrationController::registerStep2'], null, null, null, false, false, null]],
        '/register/step3' => [[['_route' => 'app_register_step3', '_controller' => 'App\\Controller\\RegistrationController::registerStep3'], null, null, null, false, false, null]],
        '/register/save-face' => [[['_route' => 'app_register_save_face', '_controller' => 'App\\Controller\\RegistrationController::saveFace'], null, ['POST' => 0], null, false, false, null]],
        '/register/skip-face' => [[['_route' => 'app_register_skip_face', '_controller' => 'App\\Controller\\RegistrationController::skipFace'], null, ['POST' => 0], null, false, false, null]],
        '/salle' => [[['_route' => 'app_salle_index', '_controller' => 'App\\Controller\\SalleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/salle/new' => [[['_route' => 'app_salle_new', '_controller' => 'App\\Controller\\SalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tache' => [[['_route' => 'app_tache_index', '_controller' => 'App\\Controller\\TachesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/tache/index' => [[['_route' => 'taches', '_controller' => 'App\\Controller\\TachesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/tache/export/csv' => [[['_route' => 'app_tache_export_csv', '_controller' => 'App\\Controller\\TachesController::exportCsv'], null, ['GET' => 0], null, false, false, null]],
        '/tache/export/pdf' => [[['_route' => 'app_tache_export_pdf', '_controller' => 'App\\Controller\\TachesController::exportPdf'], null, ['POST' => 0], null, false, false, null]],
        '/tache/export/excel' => [[['_route' => 'app_tache_export_excel', '_controller' => 'App\\Controller\\TachesController::exportExcel'], null, ['POST' => 0], null, false, false, null]],
        '/tache/new' => [[['_route' => 'app_tache_new', '_controller' => 'App\\Controller\\TachesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|ctivites/(?'
                        .'|api/(?'
                            .'|update/([^/]++)(*:241)'
                            .'|delete/([^/]++)(*:264)'
                        .')'
                        .'|qr/(\\d{4}-\\d{2}-\\d{2})(*:295)'
                    .')'
                    .'|dmin/(?'
                        .'|course(?'
                            .'|\\-reports/(?'
                                .'|unpublish/(\\d+)(*:349)'
                                .'|dismiss/(\\d+)(*:370)'
                                .'|restore/(\\d+)(*:391)'
                            .')'
                            .'|s/(?'
                                .'|unpublish/(\\d+)(*:420)'
                                .'|view/(\\d+)(*:438)'
                            .')'
                        .')'
                        .'|demandes/(?'
                            .'|(\\d+)/accepter(*:474)'
                            .'|(\\d+)/refuser(*:495)'
                        .')'
                        .'|evenements/(?'
                            .'|(\\d+)(*:523)'
                            .'|(\\d+)/edit(*:541)'
                            .'|(\\d+)(*:554)'
                        .')'
                        .'|journal/user/(?'
                            .'|(\\d+)(*:584)'
                            .'|(\\d+)/rapport(*:605)'
                        .')'
                        .'|meditation/(?'
                            .'|(\\d+)(*:633)'
                            .'|(\\d+)/edit(*:651)'
                            .'|(\\d+)/delete(*:671)'
                            .'|(\\d+)/regenerate\\-conseils(*:705)'
                            .'|(\\d+)/regenerate\\-session(*:738)'
                            .'|(\\d+)/conseil/new(*:763)'
                            .'|conseil/(?'
                                .'|(\\d+)/edit(*:792)'
                                .'|(\\d+)/delete(*:812)'
                            .')'
                            .'|(\\d+)/pdf(*:830)'
                        .')'
                        .'|nutrition/api/(?'
                            .'|update/(\\d+)(*:868)'
                            .'|delete/(\\d+)(*:888)'
                        .')'
                        .'|s(?'
                            .'|alles/(?'
                                .'|(\\d+)/edit(*:920)'
                                .'|(\\d+)/toggle(*:940)'
                                .'|(\\d+)(*:953)'
                            .')'
                            .'|port/api/(?'
                                .'|update/(\\d+)(*:986)'
                                .'|delete/(\\d+)(*:1006)'
                            .')'
                        .')'
                        .'|taches/(?'
                            .'|(\\d+)(*:1032)'
                            .'|(\\d+)/edit(*:1051)'
                            .'|(\\d+)(*:1065)'
                        .')'
                        .'|users/(?'
                            .'|(\\d+)(*:1089)'
                            .'|([^/]++)/(?'
                                .'|edit(*:1114)'
                                .'|toggle(*:1129)'
                            .')'
                            .'|(\\d+)/suspicion(*:1154)'
                        .')'
                    .')'
                    .'|pi/(?'
                        .'|events/([^/]++)(?'
                            .'|(*:1189)'
                        .')'
                        .'|tasks/([^/]++)(?'
                            .'|(*:1216)'
                        .')'
                        .'|messaging/conversations/([^/]++)/messages(*:1267)'
                    .')'
                .')'
                .'|/back/(?'
                    .'|c(?'
                        .'|ategories/([^/]++)/delete(*:1316)'
                        .'|ommentaires/([^/]++)/delete(*:1352)'
                    .')'
                    .'|posts/([^/]++)/delete(*:1383)'
                .')'
                .'|/co(?'
                    .'|vers/(.+)(*:1408)'
                    .'|urses/(?'
                        .'|(\\d+)(*:1431)'
                        .'|(\\d+)/rename(*:1452)'
                        .'|(\\d+)/subject(*:1474)'
                        .'|(\\d+)/publish(*:1496)'
                        .'|(\\d+)/upload(*:1517)'
                        .'|(\\d+)/note(*:1536)'
                        .'|(\\d+)/note/(\\d+)/content(*:1569)'
                        .'|(\\d+)/note/(\\d+)/save(*:1599)'
                        .'|(\\d+)/note/(\\d+)/export\\-pdf(*:1636)'
                        .'|(\\d+)/file/(\\d+)/preview(*:1669)'
                        .'|(\\d+)/file/(\\d+)/download(*:1703)'
                        .'|(\\d+)/file/(\\d+)/rename(*:1735)'
                        .'|(\\d+)/file/(\\d+)/delete(*:1767)'
                        .'|(\\d+)/save\\-to\\-library(*:1799)'
                        .'|(\\d+)/report(*:1820)'
                        .'|(\\d+)/suggestions(*:1846)'
                        .'|(\\d+)/update(*:1867)'
                        .'|(\\d+)/cover(*:1887)'
                        .'|(\\d+)/publish(*:1909)'
                        .'|(\\d+)/delete(*:1930)'
                    .')'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|(*:1963)'
                    .'|/edit(*:1977)'
                    .'|(*:1986)'
                .')'
                .'|/forum/(?'
                    .'|post/([^/]++)/(?'
                        .'|translate(*:2032)'
                        .'|like(*:2045)'
                        .'|edit(*:2058)'
                        .'|delete(*:2073)'
                        .'|comment/new(*:2093)'
                    .')'
                    .'|c(?'
                        .'|ategorie/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:2135)'
                                .'|delete(*:2150)'
                                .'|post/new(*:2167)'
                            .')'
                            .'|(*:2177)'
                        .')'
                        .'|omment/([^/]++)/(?'
                            .'|edit(*:2210)'
                            .'|delete(*:2225)'
                        .')'
                    .')'
                .')'
                .'|/journal/(?'
                    .'|(\\d+)/edit(*:2259)'
                    .'|(\\d+)/delete(*:2280)'
                .')'
                .'|/meditation/(\\d+)(*:2307)'
                .'|/nutrition/api/(?'
                    .'|recette/([^/]++)(*:2350)'
                    .'|modifier/([^/]++)(*:2376)'
                    .'|supprimer/([^/]++)(*:2403)'
                .')'
                .'|/salle/([^/]++)(?'
                    .'|(*:2431)'
                    .'|/edit(*:2445)'
                    .'|(*:2454)'
                .')'
                .'|/tache/(?'
                    .'|(\\d+)/statut(*:2486)'
                    .'|([^/]++)(?'
                        .'|(*:2506)'
                        .'|/edit(*:2520)'
                        .'|(*:2529)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        241 => [[['_route' => 'activites_api_update', '_controller' => 'App\\Controller\\ActivitesController::apiUpdate'], ['id'], ['PUT' => 0, 'POST' => 1], null, false, true, null]],
        264 => [[['_route' => 'activites_api_delete', '_controller' => 'App\\Controller\\ActivitesController::apiDelete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        295 => [[['_route' => 'activites_qr_session', '_controller' => 'App\\Controller\\ActivitesController::qrSession'], ['date'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'admin_course_reports_unpublish', '_controller' => 'App\\Controller\\AdminCourseReportsController::unpublish'], ['courseId'], ['POST' => 0], null, false, true, null]],
        370 => [[['_route' => 'admin_course_reports_dismiss', '_controller' => 'App\\Controller\\AdminCourseReportsController::dismiss'], ['reportId'], ['POST' => 0], null, false, true, null]],
        391 => [[['_route' => 'admin_course_reports_restore', '_controller' => 'App\\Controller\\AdminCourseReportsController::restore'], ['courseId'], ['POST' => 0], null, false, true, null]],
        420 => [[['_route' => 'admin_courses_unpublish', '_controller' => 'App\\Controller\\AdminCoursesController::unpublish'], ['courseId'], ['POST' => 0], null, false, true, null]],
        438 => [[['_route' => 'admin_courses_view', '_controller' => 'App\\Controller\\AdminCoursesController::view'], ['courseId'], ['GET' => 0], null, false, true, null]],
        474 => [[['_route' => 'admin_demande_accepter', '_controller' => 'App\\Controller\\AdminDemandeController::accepter'], ['id'], ['POST' => 0], null, false, false, null]],
        495 => [[['_route' => 'admin_demande_refuser', '_controller' => 'App\\Controller\\AdminDemandeController::refuser'], ['id'], ['POST' => 0], null, false, false, null]],
        523 => [[['_route' => 'admin_evenement_show', '_controller' => 'App\\Controller\\AdminEvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        541 => [[['_route' => 'admin_evenement_edit', '_controller' => 'App\\Controller\\AdminEvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        554 => [[['_route' => 'admin_evenement_delete', '_controller' => 'App\\Controller\\AdminEvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        584 => [[['_route' => 'admin_journal_user', '_controller' => 'App\\Controller\\AdminJournalController::userJournal'], ['id'], ['GET' => 0], null, false, true, null]],
        605 => [[['_route' => 'admin_journal_rapport', '_controller' => 'App\\Controller\\AdminJournalController::rapport'], ['id'], ['GET' => 0], null, false, false, null]],
        633 => [[['_route' => 'admin_meditation_show', '_controller' => 'App\\Controller\\AdminMeditationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        651 => [[['_route' => 'admin_meditation_edit', '_controller' => 'App\\Controller\\AdminMeditationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        671 => [[['_route' => 'admin_meditation_delete', '_controller' => 'App\\Controller\\AdminMeditationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        705 => [[['_route' => 'admin_meditation_regenerate_conseils', '_controller' => 'App\\Controller\\AdminMeditationController::regenerateConseils'], ['id'], ['POST' => 0], null, false, false, null]],
        738 => [[['_route' => 'admin_meditation_regenerate_session', '_controller' => 'App\\Controller\\AdminMeditationController::regenerateSession'], ['id'], ['POST' => 0], null, false, false, null]],
        763 => [[['_route' => 'admin_conseil_new', '_controller' => 'App\\Controller\\AdminMeditationController::newConseil'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        792 => [[['_route' => 'admin_conseil_edit', '_controller' => 'App\\Controller\\AdminMeditationController::editConseil'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        812 => [[['_route' => 'admin_conseil_delete', '_controller' => 'App\\Controller\\AdminMeditationController::deleteConseil'], ['id'], ['POST' => 0], null, false, false, null]],
        830 => [[['_route' => 'admin_meditation_pdf_detail', '_controller' => 'App\\Controller\\AdminMeditationController::pdfDetail'], ['id'], ['GET' => 0], null, false, false, null]],
        868 => [[['_route' => 'admin_nutrition_update', '_controller' => 'App\\Controller\\AdminNutritionController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        888 => [[['_route' => 'admin_nutrition_delete', '_controller' => 'App\\Controller\\AdminNutritionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        920 => [[['_route' => 'admin_salle_edit', '_controller' => 'App\\Controller\\AdminSalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        940 => [[['_route' => 'admin_salle_toggle', '_controller' => 'App\\Controller\\AdminSalleController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        953 => [[['_route' => 'admin_salle_delete', '_controller' => 'App\\Controller\\AdminSalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        986 => [[['_route' => 'admin_sport_update', '_controller' => 'App\\Controller\\AdminSportController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1006 => [[['_route' => 'admin_sport_delete', '_controller' => 'App\\Controller\\AdminSportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1032 => [[['_route' => 'admin_tache_show', '_controller' => 'App\\Controller\\AdminTacheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1051 => [[['_route' => 'admin_tache_edit', '_controller' => 'App\\Controller\\AdminTacheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1065 => [[['_route' => 'admin_tache_delete', '_controller' => 'App\\Controller\\AdminTacheController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1089 => [[['_route' => 'admin_users_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1114 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1129 => [[['_route' => 'admin_users_toggle', '_controller' => 'App\\Controller\\AdminUserController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        1154 => [[['_route' => 'admin_users_suspicion', '_controller' => 'App\\Controller\\AdminUserController::suspicionDetail'], ['id'], ['GET' => 0], null, false, false, null]],
        1189 => [
            [['_route' => 'api_events_update', '_controller' => 'App\\Controller\\Api\\EventApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_events_delete', '_controller' => 'App\\Controller\\Api\\EventApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1216 => [
            [['_route' => 'api_tasks_update', '_controller' => 'App\\Controller\\Api\\TaskApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tasks_delete', '_controller' => 'App\\Controller\\Api\\TaskApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1267 => [[['_route' => 'api_messaging_messages', '_controller' => 'App\\Controller\\MessagingController::messages'], ['id'], ['GET' => 0], null, false, false, null]],
        1316 => [[['_route' => 'back_categorie_delete', '_controller' => 'App\\Controller\\BackController::deleteCategorie'], ['id'], ['POST' => 0], null, false, false, null]],
        1352 => [[['_route' => 'back_commentaire_delete', '_controller' => 'App\\Controller\\BackController::deleteCommentaire'], ['id'], ['POST' => 0], null, false, false, null]],
        1383 => [[['_route' => 'back_post_delete', '_controller' => 'App\\Controller\\BackController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1408 => [[['_route' => 'app_cover_image', '_controller' => 'App\\Controller\\CoversController::serve'], ['filename'], null, null, false, true, null]],
        1431 => [[['_route' => 'app_courses_detail', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1452 => [[['_route' => 'app_courses_detail_rename', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::rename'], ['id'], ['POST' => 0], null, false, false, null]],
        1474 => [[['_route' => 'app_courses_detail_subject', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::changeSubject'], ['id'], ['POST' => 0], null, false, false, null]],
        1496 => [[['_route' => 'app_courses_detail_publish', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::publish'], ['id'], ['POST' => 0], null, false, false, null]],
        1517 => [[['_route' => 'app_courses_detail_upload', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::upload'], ['id'], ['POST' => 0], null, false, false, null]],
        1536 => [[['_route' => 'app_courses_detail_note', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::createNote'], ['id'], ['POST' => 0], null, false, false, null]],
        1569 => [[['_route' => 'app_courses_detail_note_content', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::noteContent'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1599 => [[['_route' => 'app_courses_detail_note_save', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::saveNote'], ['id', 'fileId'], ['POST' => 0], null, false, false, null]],
        1636 => [[['_route' => 'app_courses_detail_note_export_pdf', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::exportNotePdf'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1669 => [[['_route' => 'app_courses_detail_file_preview', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::previewFile'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1703 => [[['_route' => 'app_courses_detail_file_download', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::downloadFile'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1735 => [[['_route' => 'app_courses_detail_file_rename', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::renameFile'], ['id', 'fileId'], ['POST' => 0], null, false, false, null]],
        1767 => [[['_route' => 'app_courses_detail_file_delete', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::deleteFile'], ['id', 'fileId'], ['POST' => 0], null, false, false, null]],
        1799 => [[['_route' => 'app_courses_detail_save_library', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::saveToLibrary'], ['id'], ['POST' => 0], null, false, false, null]],
        1820 => [[['_route' => 'app_courses_detail_report', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::reportCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1846 => [[['_route' => 'app_courses_detail_suggestions', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::suggestions'], ['id'], ['GET' => 0], null, false, false, null]],
        1867 => [[['_route' => 'app_courses_update', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::update'], ['id'], ['POST' => 0], null, false, false, null]],
        1887 => [[['_route' => 'app_courses_cover', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::cover'], ['id'], ['POST' => 0], null, false, false, null]],
        1909 => [[['_route' => 'app_courses_publish', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::publish'], ['id'], ['POST' => 0], null, false, false, null]],
        1930 => [[['_route' => 'app_courses_delete', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1963 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1977 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1986 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2032 => [[['_route' => 'forum_post_translate', '_controller' => 'App\\Controller\\ForumController::translatePost'], ['id'], ['POST' => 0], null, false, false, null]],
        2045 => [[['_route' => 'forum_post_like', '_controller' => 'App\\Controller\\ForumController::toggleLike'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        2058 => [[['_route' => 'forum_post_edit', '_controller' => 'App\\Controller\\ForumController::editPost'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2073 => [[['_route' => 'forum_post_delete', '_controller' => 'App\\Controller\\ForumController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        2093 => [[['_route' => 'forum_comment_new', '_controller' => 'App\\Controller\\ForumController::newComment'], ['idPost'], ['POST' => 0], null, false, false, null]],
        2135 => [[['_route' => 'forum_categorie_edit', '_controller' => 'App\\Controller\\ForumController::editCategorie'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2150 => [[['_route' => 'forum_categorie_delete', '_controller' => 'App\\Controller\\ForumController::deleteCategorie'], ['id'], ['POST' => 0], null, false, false, null]],
        2167 => [[['_route' => 'forum_post_new', '_controller' => 'App\\Controller\\ForumController::newPost'], ['idCat'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2177 => [[['_route' => 'forum_posts', '_controller' => 'App\\Controller\\ForumController::posts'], ['id'], null, null, false, true, null]],
        2210 => [[['_route' => 'forum_comment_edit', '_controller' => 'App\\Controller\\ForumController::editComment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2225 => [[['_route' => 'forum_comment_delete', '_controller' => 'App\\Controller\\ForumController::deleteComment'], ['id'], ['POST' => 0], null, false, false, null]],
        2259 => [[['_route' => 'journal_edit', '_controller' => 'App\\Controller\\JournalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2280 => [[['_route' => 'journal_delete', '_controller' => 'App\\Controller\\JournalController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        2307 => [[['_route' => 'meditation_show', '_controller' => 'App\\Controller\\MeditationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2350 => [[['_route' => 'nutrition_api_recette_detail', '_controller' => 'App\\Controller\\NutritionController::apiRecetteDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        2376 => [[['_route' => 'nutrition_api_modifier', '_controller' => 'App\\Controller\\NutritionController::apiModifier'], ['id'], ['POST' => 0, 'PUT' => 1], null, false, true, null]],
        2403 => [[['_route' => 'nutrition_api_supprimer', '_controller' => 'App\\Controller\\NutritionController::apiSupprimer'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        2431 => [[['_route' => 'app_salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2445 => [[['_route' => 'app_salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2454 => [[['_route' => 'app_salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2486 => [[['_route' => 'app_tache_update_statut', '_controller' => 'App\\Controller\\TachesController::updateStatut'], ['id'], ['POST' => 0], null, false, false, null]],
        2506 => [[['_route' => 'app_tache_show', '_controller' => 'App\\Controller\\TachesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2520 => [[['_route' => 'app_tache_edit', '_controller' => 'App\\Controller\\TachesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2529 => [
            [['_route' => 'app_tache_delete', '_controller' => 'App\\Controller\\TachesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
