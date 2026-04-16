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
        '/dev/mock-user/list' => [[['_route' => 'dev_mock_user_list', '_controller' => 'App\\Controller\\MockUserController::list'], null, ['GET' => 0], null, false, false, null]],
        '/dev/mock-user/set' => [[['_route' => 'dev_mock_user_set', '_controller' => 'App\\Controller\\MockUserController::set'], null, ['POST' => 0], null, false, false, null]],
        '/dev/mock-user/current' => [[['_route' => 'dev_mock_user_current', '_controller' => 'App\\Controller\\MockUserController::current'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition' => [[['_route' => 'nutrition', '_controller' => 'App\\Controller\\NutritionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/ajouter' => [[['_route' => 'nutrition_ajouter', '_controller' => 'App\\Controller\\NutritionController::ajouter'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/recettes' => [[['_route' => 'nutrition_recettes', '_controller' => 'App\\Controller\\NutritionController::recettes'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/api/objectif' => [[['_route' => 'nutrition_api_objectif', '_controller' => 'App\\Controller\\NutritionController::apiObjectif'], null, ['POST' => 0], null, false, false, null]],
        '/nutrition/api/recettes' => [[['_route' => 'nutrition_api_recettes', '_controller' => 'App\\Controller\\NutritionController::apiRecettes'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/api/ajouter-recette' => [[['_route' => 'nutrition_api_ajouter_recette', '_controller' => 'App\\Controller\\NutritionController::apiAjouterRecette'], null, ['POST' => 0], null, false, false, null]],
        '/nutrition/api/journal' => [[['_route' => 'nutrition_api_journal', '_controller' => 'App\\Controller\\NutritionController::apiJournal'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/api/aliments' => [[['_route' => 'nutrition_api_aliments', '_controller' => 'App\\Controller\\NutritionController::apiAliments'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/api/ajouter' => [[['_route' => 'nutrition_api_ajouter', '_controller' => 'App\\Controller\\NutritionController::apiAjouter'], null, ['POST' => 0], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register/step2' => [[['_route' => 'app_register_step2', '_controller' => 'App\\Controller\\RegistrationController::registerStep2'], null, null, null, false, false, null]],
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
                .')'
                .'|/back/(?'
                    .'|c(?'
                        .'|ategories/([^/]++)/delete(*:942)'
                        .'|ommentaires/([^/]++)/delete(*:977)'
                    .')'
                    .'|posts/([^/]++)/delete(*:1007)'
                .')'
                .'|/co(?'
                    .'|vers/(.+)(*:1032)'
                    .'|urses/(?'
                        .'|(\\d+)(*:1055)'
                        .'|(\\d+)/rename(*:1076)'
                        .'|(\\d+)/subject(*:1098)'
                        .'|(\\d+)/publish(*:1120)'
                        .'|(\\d+)/upload(*:1141)'
                        .'|(\\d+)/note(*:1160)'
                        .'|(\\d+)/note/(\\d+)/content(*:1193)'
                        .'|(\\d+)/note/(\\d+)/save(*:1223)'
                        .'|(\\d+)/note/(\\d+)/export\\-pdf(*:1260)'
                        .'|(\\d+)/file/(\\d+)/rename(*:1292)'
                        .'|(\\d+)/file/(\\d+)/delete(*:1324)'
                        .'|(\\d+)/file/(\\d+)/download(*:1358)'
                        .'|(\\d+)/file/(\\d+)/preview(*:1391)'
                        .'|(\\d+)/save\\-to\\-library(*:1423)'
                        .'|(\\d+)/update(*:1444)'
                        .'|(\\d+)/cover(*:1464)'
                        .'|(\\d+)/publish(*:1486)'
                        .'|(\\d+)/delete(*:1507)'
                    .')'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|(*:1540)'
                    .'|/edit(*:1554)'
                    .'|(*:1563)'
                .')'
                .'|/forum/(?'
                    .'|post/([^/]++)/(?'
                        .'|translate(*:1609)'
                        .'|like(*:1622)'
                        .'|edit(*:1635)'
                        .'|delete(*:1650)'
                        .'|comment/new(*:1670)'
                    .')'
                    .'|c(?'
                        .'|ategorie/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:1712)'
                                .'|delete(*:1727)'
                                .'|post/new(*:1744)'
                            .')'
                            .'|(*:1754)'
                        .')'
                        .'|omment/([^/]++)/(?'
                            .'|edit(*:1787)'
                            .'|delete(*:1802)'
                        .')'
                    .')'
                .')'
                .'|/journal/(?'
                    .'|(\\d+)/edit(*:1836)'
                    .'|(\\d+)/delete(*:1857)'
                .')'
                .'|/meditation/(\\d+)(*:1884)'
                .'|/nutrition/api/(?'
                    .'|recette/([^/]++)(*:1927)'
                    .'|modifier/([^/]++)(*:1953)'
                    .'|supprimer/([^/]++)(*:1980)'
                .')'
                .'|/salle/([^/]++)(?'
                    .'|(*:2008)'
                    .'|/edit(*:2022)'
                    .'|(*:2031)'
                .')'
                .'|/tache/(?'
                    .'|(\\d+)/statut(*:2063)'
                    .'|([^/]++)(?'
                        .'|(*:2083)'
                        .'|/edit(*:2097)'
                        .'|(*:2106)'
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
        942 => [[['_route' => 'back_categorie_delete', '_controller' => 'App\\Controller\\BackController::deleteCategorie'], ['id'], ['POST' => 0], null, false, false, null]],
        977 => [[['_route' => 'back_commentaire_delete', '_controller' => 'App\\Controller\\BackController::deleteCommentaire'], ['id'], ['POST' => 0], null, false, false, null]],
        1007 => [[['_route' => 'back_post_delete', '_controller' => 'App\\Controller\\BackController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1032 => [[['_route' => 'app_cover_image', '_controller' => 'App\\Controller\\CoversController::serve'], ['filename'], null, null, false, true, null]],
        1055 => [[['_route' => 'app_courses_detail', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1076 => [[['_route' => 'app_courses_detail_rename', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::rename'], ['id'], ['POST' => 0], null, false, false, null]],
        1098 => [[['_route' => 'app_courses_detail_subject', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::changeSubject'], ['id'], ['POST' => 0], null, false, false, null]],
        1120 => [[['_route' => 'app_courses_detail_publish', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::publish'], ['id'], ['POST' => 0], null, false, false, null]],
        1141 => [[['_route' => 'app_courses_detail_upload', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::upload'], ['id'], ['POST' => 0], null, false, false, null]],
        1160 => [[['_route' => 'app_courses_detail_note', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::createNote'], ['id'], ['POST' => 0], null, false, false, null]],
        1193 => [[['_route' => 'app_courses_detail_note_content', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::noteContent'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1223 => [[['_route' => 'app_courses_detail_note_save', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::saveNote'], ['id', 'fileId'], ['POST' => 0], null, false, false, null]],
        1260 => [[['_route' => 'app_courses_detail_note_export_pdf', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::exportNotePdf'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1292 => [[['_route' => 'app_courses_detail_file_rename', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::renameFile'], ['id', 'fileId'], ['POST' => 0], null, false, false, null]],
        1324 => [[['_route' => 'app_courses_detail_file_delete', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::deleteFile'], ['id', 'fileId'], ['POST' => 0], null, false, false, null]],
        1358 => [[['_route' => 'app_courses_detail_file_download', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::downloadFile'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1391 => [[['_route' => 'app_courses_detail_file_preview', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::previewFile'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1423 => [[['_route' => 'app_courses_detail_save_library', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::saveToLibrary'], ['id'], ['POST' => 0], null, false, false, null]],
        1444 => [[['_route' => 'app_courses_update', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::update'], ['id'], ['POST' => 0], null, false, false, null]],
        1464 => [[['_route' => 'app_courses_cover', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::cover'], ['id'], ['POST' => 0], null, false, false, null]],
        1486 => [[['_route' => 'app_courses_publish', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::publish'], ['id'], ['POST' => 0], null, false, false, null]],
        1507 => [[['_route' => 'app_courses_delete', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1540 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1554 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1563 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1609 => [[['_route' => 'forum_post_translate', '_controller' => 'App\\Controller\\ForumController::translatePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1622 => [[['_route' => 'forum_post_like', '_controller' => 'App\\Controller\\ForumController::toggleLike'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        1635 => [[['_route' => 'forum_post_edit', '_controller' => 'App\\Controller\\ForumController::editPost'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1650 => [[['_route' => 'forum_post_delete', '_controller' => 'App\\Controller\\ForumController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1670 => [[['_route' => 'forum_comment_new', '_controller' => 'App\\Controller\\ForumController::newComment'], ['idPost'], ['POST' => 0], null, false, false, null]],
        1712 => [[['_route' => 'forum_categorie_edit', '_controller' => 'App\\Controller\\ForumController::editCategorie'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1727 => [[['_route' => 'forum_categorie_delete', '_controller' => 'App\\Controller\\ForumController::deleteCategorie'], ['id'], ['POST' => 0], null, false, false, null]],
        1744 => [[['_route' => 'forum_post_new', '_controller' => 'App\\Controller\\ForumController::newPost'], ['idCat'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1754 => [[['_route' => 'forum_posts', '_controller' => 'App\\Controller\\ForumController::posts'], ['id'], null, null, false, true, null]],
        1787 => [[['_route' => 'forum_comment_edit', '_controller' => 'App\\Controller\\ForumController::editComment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1802 => [[['_route' => 'forum_comment_delete', '_controller' => 'App\\Controller\\ForumController::deleteComment'], ['id'], ['POST' => 0], null, false, false, null]],
        1836 => [[['_route' => 'journal_edit', '_controller' => 'App\\Controller\\JournalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1857 => [[['_route' => 'journal_delete', '_controller' => 'App\\Controller\\JournalController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1884 => [[['_route' => 'meditation_show', '_controller' => 'App\\Controller\\MeditationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1927 => [[['_route' => 'nutrition_api_recette_detail', '_controller' => 'App\\Controller\\NutritionController::apiRecetteDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        1953 => [[['_route' => 'nutrition_api_modifier', '_controller' => 'App\\Controller\\NutritionController::apiModifier'], ['id'], ['POST' => 0, 'PUT' => 1], null, false, true, null]],
        1980 => [[['_route' => 'nutrition_api_supprimer', '_controller' => 'App\\Controller\\NutritionController::apiSupprimer'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        2008 => [[['_route' => 'app_salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2022 => [[['_route' => 'app_salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2031 => [[['_route' => 'app_salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2063 => [[['_route' => 'app_tache_update_statut', '_controller' => 'App\\Controller\\TachesController::updateStatut'], ['id'], ['POST' => 0], null, false, false, null]],
        2083 => [[['_route' => 'app_tache_show', '_controller' => 'App\\Controller\\TachesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2097 => [[['_route' => 'app_tache_edit', '_controller' => 'App\\Controller\\TachesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2106 => [
            [['_route' => 'app_tache_delete', '_controller' => 'App\\Controller\\TachesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
