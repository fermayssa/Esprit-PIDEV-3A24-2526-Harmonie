<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
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
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/demandes' => [[['_route' => 'admin_demande_index', '_controller' => 'App\\Controller\\AdminDemandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenements' => [[['_route' => 'admin_evenement_index', '_controller' => 'App\\Controller\\AdminEvenementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenements/new' => [[['_route' => 'admin_evenement_new', '_controller' => 'App\\Controller\\AdminEvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/meditation' => [[['_route' => 'admin_meditation_index', '_controller' => 'App\\Controller\\AdminMeditationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/meditation/search' => [[['_route' => 'admin_meditation_search', '_controller' => 'App\\Controller\\AdminMeditationController::search'], null, ['GET' => 0], null, false, false, null]],
        '/admin/meditation/new' => [[['_route' => 'admin_meditation_new', '_controller' => 'App\\Controller\\AdminMeditationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/back' => [[['_route' => 'back_dashboard', '_controller' => 'App\\Controller\\BackController::dashboard'], null, null, null, false, false, null]],
        '/back/categories' => [[['_route' => 'back_categories', '_controller' => 'App\\Controller\\BackController::categories'], null, null, null, false, false, null]],
        '/back/posts' => [[['_route' => 'back_posts', '_controller' => 'App\\Controller\\BackController::posts'], null, null, null, false, false, null]],
        '/back/commentaires' => [[['_route' => 'back_commentaires', '_controller' => 'App\\Controller\\BackController::commentaires'], null, null, null, false, false, null]],
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
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomepageController::index'], null, null, null, false, false, null]],
        '/journal' => [[['_route' => 'journal', '_controller' => 'App\\Controller\\JournalController::index'], null, ['GET' => 0], null, false, false, null]],
        '/journal/search' => [[['_route' => 'journal_search', '_controller' => 'App\\Controller\\JournalController::search'], null, ['GET' => 0], null, false, false, null]],
        '/journal/new' => [[['_route' => 'journal_new', '_controller' => 'App\\Controller\\JournalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/courses' => [[['_route' => 'app_courses', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/courses/create' => [[['_route' => 'app_courses_create', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/library' => [[['_route' => 'library', '_controller' => 'App\\Controller\\LibraryControllers\\LibraryController::index'], null, ['GET' => 0], null, false, false, null]],
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
                        .'|demandes/(?'
                            .'|(\\d+)/accepter(*:338)'
                            .'|(\\d+)/refuser(*:359)'
                        .')'
                        .'|evenements/(?'
                            .'|(\\d+)(*:387)'
                            .'|(\\d+)/edit(*:405)'
                            .'|(\\d+)(*:418)'
                        .')'
                        .'|meditation/(?'
                            .'|(\\d+)(*:446)'
                            .'|(\\d+)/edit(*:464)'
                            .'|(\\d+)/delete(*:484)'
                            .'|(\\d+)/conseil/new(*:509)'
                            .'|conseil/(?'
                                .'|(\\d+)/edit(*:538)'
                                .'|(\\d+)/delete(*:558)'
                            .')'
                            .'|(\\d+)/pdf(*:576)'
                        .')'
                        .'|nutrition/api/(?'
                            .'|update/(\\d+)(*:614)'
                            .'|delete/(\\d+)(*:634)'
                        .')'
                        .'|s(?'
                            .'|alles/(?'
                                .'|(\\d+)/edit(*:666)'
                                .'|(\\d+)/toggle(*:686)'
                                .'|(\\d+)(*:699)'
                            .')'
                            .'|port/api/(?'
                                .'|update/(\\d+)(*:732)'
                                .'|delete/(\\d+)(*:752)'
                            .')'
                        .')'
                        .'|taches/(?'
                            .'|(\\d+)(*:777)'
                            .'|(\\d+)/edit(*:795)'
                            .'|(\\d+)(*:808)'
                        .')'
                        .'|users/(?'
                            .'|(\\d+)(*:831)'
                            .'|([^/]++)/(?'
                                .'|edit(*:855)'
                                .'|toggle(*:869)'
                            .')'
                            .'|(\\d+)/suspicion(*:893)'
                        .')'
                    .')'
                    .'|pi/messaging/conversations/([^/]++)/messages(*:947)'
                .')'
                .'|/back/(?'
                    .'|c(?'
                        .'|ategories/([^/]++)/delete(*:994)'
                        .'|ommentaires/([^/]++)/delete(*:1029)'
                    .')'
                    .'|posts/([^/]++)/delete(*:1060)'
                .')'
                .'|/co(?'
                    .'|vers/(.+)(*:1085)'
                    .'|urses/(?'
                        .'|(\\d+)(*:1108)'
                        .'|(\\d+)/rename(*:1129)'
                        .'|(\\d+)/subject(*:1151)'
                        .'|(\\d+)/publish(*:1173)'
                        .'|(\\d+)/upload(*:1194)'
                        .'|(\\d+)/note(*:1213)'
                        .'|(\\d+)/note/(\\d+)/content(*:1246)'
                        .'|(\\d+)/note/(\\d+)/save(*:1276)'
                        .'|(\\d+)/note/(\\d+)/export\\-pdf(*:1313)'
                        .'|(\\d+)/file/(\\d+)/rename(*:1345)'
                        .'|(\\d+)/file/(\\d+)/delete(*:1377)'
                        .'|(\\d+)/file/(\\d+)/download(*:1411)'
                        .'|(\\d+)/file/(\\d+)/preview(*:1444)'
                        .'|(\\d+)/save\\-to\\-library(*:1476)'
                        .'|(\\d+)/update(*:1497)'
                        .'|(\\d+)/cover(*:1517)'
                        .'|(\\d+)/publish(*:1539)'
                        .'|(\\d+)/delete(*:1560)'
                    .')'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|(*:1593)'
                    .'|/edit(*:1607)'
                    .'|(*:1616)'
                .')'
                .'|/forum/(?'
                    .'|post/([^/]++)/(?'
                        .'|translate(*:1662)'
                        .'|like(*:1675)'
                        .'|edit(*:1688)'
                        .'|delete(*:1703)'
                        .'|comment/new(*:1723)'
                    .')'
                    .'|c(?'
                        .'|ategorie/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:1765)'
                                .'|delete(*:1780)'
                                .'|post/new(*:1797)'
                            .')'
                            .'|(*:1807)'
                        .')'
                        .'|omment/([^/]++)/(?'
                            .'|edit(*:1840)'
                            .'|delete(*:1855)'
                        .')'
                    .')'
                .')'
                .'|/journal/(?'
                    .'|(\\d+)/edit(*:1889)'
                    .'|(\\d+)/delete(*:1910)'
                .')'
                .'|/meditation/(\\d+)(*:1937)'
                .'|/nutrition/api/(?'
                    .'|recette/([^/]++)(*:1980)'
                    .'|modifier/([^/]++)(*:2006)'
                    .'|supprimer/([^/]++)(*:2033)'
                .')'
                .'|/salle/([^/]++)(?'
                    .'|(*:2061)'
                    .'|/edit(*:2075)'
                    .'|(*:2084)'
                .')'
                .'|/tache/(?'
                    .'|(\\d+)/statut(*:2116)'
                    .'|([^/]++)(?'
                        .'|(*:2136)'
                        .'|/edit(*:2150)'
                        .'|(*:2159)'
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
        338 => [[['_route' => 'admin_demande_accepter', '_controller' => 'App\\Controller\\AdminDemandeController::accepter'], ['id'], ['POST' => 0], null, false, false, null]],
        359 => [[['_route' => 'admin_demande_refuser', '_controller' => 'App\\Controller\\AdminDemandeController::refuser'], ['id'], ['POST' => 0], null, false, false, null]],
        387 => [[['_route' => 'admin_evenement_show', '_controller' => 'App\\Controller\\AdminEvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        405 => [[['_route' => 'admin_evenement_edit', '_controller' => 'App\\Controller\\AdminEvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        418 => [[['_route' => 'admin_evenement_delete', '_controller' => 'App\\Controller\\AdminEvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        446 => [[['_route' => 'admin_meditation_show', '_controller' => 'App\\Controller\\AdminMeditationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        464 => [[['_route' => 'admin_meditation_edit', '_controller' => 'App\\Controller\\AdminMeditationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        484 => [[['_route' => 'admin_meditation_delete', '_controller' => 'App\\Controller\\AdminMeditationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        509 => [[['_route' => 'admin_conseil_new', '_controller' => 'App\\Controller\\AdminMeditationController::newConseil'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        538 => [[['_route' => 'admin_conseil_edit', '_controller' => 'App\\Controller\\AdminMeditationController::editConseil'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        558 => [[['_route' => 'admin_conseil_delete', '_controller' => 'App\\Controller\\AdminMeditationController::deleteConseil'], ['id'], ['POST' => 0], null, false, false, null]],
        576 => [[['_route' => 'admin_meditation_pdf_detail', '_controller' => 'App\\Controller\\AdminMeditationController::pdfDetail'], ['id'], ['GET' => 0], null, false, false, null]],
        614 => [[['_route' => 'admin_nutrition_update', '_controller' => 'App\\Controller\\AdminNutritionController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        634 => [[['_route' => 'admin_nutrition_delete', '_controller' => 'App\\Controller\\AdminNutritionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        666 => [[['_route' => 'admin_salle_edit', '_controller' => 'App\\Controller\\AdminSalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        686 => [[['_route' => 'admin_salle_toggle', '_controller' => 'App\\Controller\\AdminSalleController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        699 => [[['_route' => 'admin_salle_delete', '_controller' => 'App\\Controller\\AdminSalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        732 => [[['_route' => 'admin_sport_update', '_controller' => 'App\\Controller\\AdminSportController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        752 => [[['_route' => 'admin_sport_delete', '_controller' => 'App\\Controller\\AdminSportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        777 => [[['_route' => 'admin_tache_show', '_controller' => 'App\\Controller\\AdminTacheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        795 => [[['_route' => 'admin_tache_edit', '_controller' => 'App\\Controller\\AdminTacheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        808 => [[['_route' => 'admin_tache_delete', '_controller' => 'App\\Controller\\AdminTacheController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        831 => [[['_route' => 'admin_users_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        855 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        869 => [[['_route' => 'admin_users_toggle', '_controller' => 'App\\Controller\\AdminUserController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        893 => [[['_route' => 'admin_users_suspicion', '_controller' => 'App\\Controller\\AdminUserController::suspicionDetail'], ['id'], ['GET' => 0], null, false, false, null]],
        947 => [[['_route' => 'api_messaging_messages', '_controller' => 'App\\Controller\\MessagingController::messages'], ['id'], ['GET' => 0], null, false, false, null]],
        994 => [[['_route' => 'back_categorie_delete', '_controller' => 'App\\Controller\\BackController::deleteCategorie'], ['id'], ['POST' => 0], null, false, false, null]],
        1029 => [[['_route' => 'back_commentaire_delete', '_controller' => 'App\\Controller\\BackController::deleteCommentaire'], ['id'], ['POST' => 0], null, false, false, null]],
        1060 => [[['_route' => 'back_post_delete', '_controller' => 'App\\Controller\\BackController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1085 => [[['_route' => 'app_cover_image', '_controller' => 'App\\Controller\\CoversController::serve'], ['filename'], null, null, false, true, null]],
        1108 => [[['_route' => 'app_courses_detail', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1129 => [[['_route' => 'app_courses_detail_rename', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::rename'], ['id'], ['POST' => 0], null, false, false, null]],
        1151 => [[['_route' => 'app_courses_detail_subject', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::changeSubject'], ['id'], ['POST' => 0], null, false, false, null]],
        1173 => [[['_route' => 'app_courses_detail_publish', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::publish'], ['id'], ['POST' => 0], null, false, false, null]],
        1194 => [[['_route' => 'app_courses_detail_upload', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::upload'], ['id'], ['POST' => 0], null, false, false, null]],
        1213 => [[['_route' => 'app_courses_detail_note', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::createNote'], ['id'], ['POST' => 0], null, false, false, null]],
        1246 => [[['_route' => 'app_courses_detail_note_content', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::noteContent'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1276 => [[['_route' => 'app_courses_detail_note_save', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::saveNote'], ['id', 'fileId'], ['POST' => 0], null, false, false, null]],
        1313 => [[['_route' => 'app_courses_detail_note_export_pdf', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::exportNotePdf'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1345 => [[['_route' => 'app_courses_detail_file_rename', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::renameFile'], ['id', 'fileId'], ['POST' => 0], null, false, false, null]],
        1377 => [[['_route' => 'app_courses_detail_file_delete', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::deleteFile'], ['id', 'fileId'], ['POST' => 0], null, false, false, null]],
        1411 => [[['_route' => 'app_courses_detail_file_download', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::downloadFile'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1444 => [[['_route' => 'app_courses_detail_file_preview', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::previewFile'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1476 => [[['_route' => 'app_courses_detail_save_library', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::saveToLibrary'], ['id'], ['POST' => 0], null, false, false, null]],
        1497 => [[['_route' => 'app_courses_update', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::update'], ['id'], ['POST' => 0], null, false, false, null]],
        1517 => [[['_route' => 'app_courses_cover', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::cover'], ['id'], ['POST' => 0], null, false, false, null]],
        1539 => [[['_route' => 'app_courses_publish', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::publish'], ['id'], ['POST' => 0], null, false, false, null]],
        1560 => [[['_route' => 'app_courses_delete', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1593 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1607 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1616 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1662 => [[['_route' => 'forum_post_translate', '_controller' => 'App\\Controller\\ForumController::translatePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1675 => [[['_route' => 'forum_post_like', '_controller' => 'App\\Controller\\ForumController::toggleLike'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        1688 => [[['_route' => 'forum_post_edit', '_controller' => 'App\\Controller\\ForumController::editPost'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1703 => [[['_route' => 'forum_post_delete', '_controller' => 'App\\Controller\\ForumController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1723 => [[['_route' => 'forum_comment_new', '_controller' => 'App\\Controller\\ForumController::newComment'], ['idPost'], ['POST' => 0], null, false, false, null]],
        1765 => [[['_route' => 'forum_categorie_edit', '_controller' => 'App\\Controller\\ForumController::editCategorie'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1780 => [[['_route' => 'forum_categorie_delete', '_controller' => 'App\\Controller\\ForumController::deleteCategorie'], ['id'], ['POST' => 0], null, false, false, null]],
        1797 => [[['_route' => 'forum_post_new', '_controller' => 'App\\Controller\\ForumController::newPost'], ['idCat'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1807 => [[['_route' => 'forum_posts', '_controller' => 'App\\Controller\\ForumController::posts'], ['id'], null, null, false, true, null]],
        1840 => [[['_route' => 'forum_comment_edit', '_controller' => 'App\\Controller\\ForumController::editComment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1855 => [[['_route' => 'forum_comment_delete', '_controller' => 'App\\Controller\\ForumController::deleteComment'], ['id'], ['POST' => 0], null, false, false, null]],
        1889 => [[['_route' => 'journal_edit', '_controller' => 'App\\Controller\\JournalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1910 => [[['_route' => 'journal_delete', '_controller' => 'App\\Controller\\JournalController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1937 => [[['_route' => 'meditation_show', '_controller' => 'App\\Controller\\MeditationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1980 => [[['_route' => 'nutrition_api_recette_detail', '_controller' => 'App\\Controller\\NutritionController::apiRecetteDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        2006 => [[['_route' => 'nutrition_api_modifier', '_controller' => 'App\\Controller\\NutritionController::apiModifier'], ['id'], ['POST' => 0, 'PUT' => 1], null, false, true, null]],
        2033 => [[['_route' => 'nutrition_api_supprimer', '_controller' => 'App\\Controller\\NutritionController::apiSupprimer'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        2061 => [[['_route' => 'app_salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2075 => [[['_route' => 'app_salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2084 => [[['_route' => 'app_salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2116 => [[['_route' => 'app_tache_update_statut', '_controller' => 'App\\Controller\\TachesController::updateStatut'], ['id'], ['POST' => 0], null, false, false, null]],
        2136 => [[['_route' => 'app_tache_show', '_controller' => 'App\\Controller\\TachesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2150 => [[['_route' => 'app_tache_edit', '_controller' => 'App\\Controller\\TachesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2159 => [
            [['_route' => 'app_tache_delete', '_controller' => 'App\\Controller\\TachesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
