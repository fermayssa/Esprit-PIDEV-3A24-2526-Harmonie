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
        '/admin/course-reports' => [[['_route' => 'admin_course_reports_index', '_controller' => 'App\\Controller\\AdminCourseReportsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/demandes' => [[['_route' => 'admin_demande_index', '_controller' => 'App\\Controller\\AdminDemandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenements' => [[['_route' => 'admin_evenement_index', '_controller' => 'App\\Controller\\AdminEvenementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenements/new' => [[['_route' => 'admin_evenement_new', '_controller' => 'App\\Controller\\AdminEvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/meditation' => [[['_route' => 'admin_meditation_index', '_controller' => 'App\\Controller\\AdminMeditationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/meditation/search' => [[['_route' => 'admin_meditation_search', '_controller' => 'App\\Controller\\AdminMeditationController::search'], null, ['GET' => 0], null, false, false, null]],
        '/admin/meditation/new' => [[['_route' => 'admin_meditation_new', '_controller' => 'App\\Controller\\AdminMeditationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/meditation/pdf' => [[['_route' => 'admin_meditation_pdf_list', '_controller' => 'App\\Controller\\AdminMeditationController::pdfList'], null, ['GET' => 0], null, false, false, null]],
        '/admin/nutrition' => [[['_route' => 'admin_nutrition_index', '_controller' => 'App\\Controller\\AdminNutritionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/nutrition/api/list' => [[['_route' => 'admin_nutrition_list', '_controller' => 'App\\Controller\\AdminNutritionController::list'], null, ['GET' => 0], null, false, false, null]],
        '/admin/nutrition/api/create' => [[['_route' => 'admin_nutrition_create', '_controller' => 'App\\Controller\\AdminNutritionController::create'], null, ['POST' => 0], null, false, false, null]],
        '/admin/salles' => [[['_route' => 'admin_salle_index', '_controller' => 'App\\Controller\\AdminSalleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/salles/new' => [[['_route' => 'admin_salle_new', '_controller' => 'App\\Controller\\AdminSalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/sport' => [[['_route' => 'admin_sport_index', '_controller' => 'App\\Controller\\AdminSportController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/sport/api/list' => [[['_route' => 'admin_sport_list', '_controller' => 'App\\Controller\\AdminSportController::list'], null, ['GET' => 0], null, false, false, null]],
        '/admin/sport/api/create' => [[['_route' => 'admin_sport_create', '_controller' => 'App\\Controller\\AdminSportController::create'], null, ['POST' => 0], null, false, false, null]],
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
        '/forum' => [[['_route' => 'forum', '_controller' => 'App\\Controller\\ForumController::index'], null, null, null, false, false, null]],
        '/forum/categorie/new' => [[['_route' => 'forum_categorie_new', '_controller' => 'App\\Controller\\ForumController::newCategorie'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomepageController::index'], null, null, null, false, false, null]],
        '/journal' => [[['_route' => 'journal', '_controller' => 'App\\Controller\\JournalController::index'], null, ['GET' => 0], null, false, false, null]],
        '/journal/search' => [[['_route' => 'journal_search', '_controller' => 'App\\Controller\\JournalController::search'], null, ['GET' => 0], null, false, false, null]],
        '/journal/new' => [[['_route' => 'journal_new', '_controller' => 'App\\Controller\\JournalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/library' => [[['_route' => 'library', '_controller' => 'App\\Controller\\LibraryController::index'], null, null, null, false, false, null]],
        '/courses' => [[['_route' => 'app_courses', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/courses/create' => [[['_route' => 'app_courses_create', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/meditation' => [[['_route' => 'meditation', '_controller' => 'App\\Controller\\MeditationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/meditation/search' => [[['_route' => 'meditation_search', '_controller' => 'App\\Controller\\MeditationController::search'], null, ['GET' => 0], null, false, false, null]],
        '/dev/mock-user/list' => [[['_route' => 'dev_mock_user_list', '_controller' => 'App\\Controller\\MockUserController::list'], null, ['GET' => 0], null, false, false, null]],
        '/dev/mock-user/set' => [[['_route' => 'dev_mock_user_set', '_controller' => 'App\\Controller\\MockUserController::set'], null, ['POST' => 0], null, false, false, null]],
        '/dev/mock-user/current' => [[['_route' => 'dev_mock_user_current', '_controller' => 'App\\Controller\\MockUserController::current'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition' => [[['_route' => 'nutrition', '_controller' => 'App\\Controller\\NutritionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/ajouter' => [[['_route' => 'nutrition_ajouter', '_controller' => 'App\\Controller\\NutritionController::ajouter'], null, ['GET' => 0], null, false, false, null]],
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
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:65)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:101)'
                                .'|router(*:115)'
                                .'|exception(?'
                                    .'|(*:135)'
                                    .'|\\.css(*:148)'
                                .')'
                            .')'
                            .'|(*:158)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|ctivites/api/(?'
                        .'|update/([^/]++)(*:205)'
                        .'|delete/([^/]++)(*:228)'
                    .')'
                    .'|dmin/(?'
                        .'|course\\-reports/(?'
                            .'|unpublish/(\\d+)(*:279)'
                            .'|dismiss/(\\d+)(*:300)'
                            .'|restore/(\\d+)(*:321)'
                        .')'
                        .'|demandes/(?'
                            .'|(\\d+)/accepter(*:356)'
                            .'|(\\d+)/refuser(*:377)'
                        .')'
                        .'|evenements/(?'
                            .'|(\\d+)(*:405)'
                            .'|(\\d+)/edit(*:423)'
                            .'|(\\d+)(*:436)'
                        .')'
                        .'|meditation/(?'
                            .'|(\\d+)(*:464)'
                            .'|(\\d+)/edit(*:482)'
                            .'|(\\d+)/delete(*:502)'
                            .'|(\\d+)/conseil/new(*:527)'
                            .'|conseil/(?'
                                .'|(\\d+)/edit(*:556)'
                                .'|(\\d+)/delete(*:576)'
                            .')'
                            .'|(\\d+)/pdf(*:594)'
                        .')'
                        .'|nutrition/api/(?'
                            .'|update/(\\d+)(*:632)'
                            .'|delete/(\\d+)(*:652)'
                        .')'
                        .'|s(?'
                            .'|alles/(?'
                                .'|(\\d+)/edit(*:684)'
                                .'|(\\d+)/toggle(*:704)'
                                .'|(\\d+)(*:717)'
                            .')'
                            .'|port/api/(?'
                                .'|update/(\\d+)(*:750)'
                                .'|delete/(\\d+)(*:770)'
                            .')'
                        .')'
                        .'|taches/(?'
                            .'|(\\d+)(*:795)'
                            .'|(\\d+)/edit(*:813)'
                            .'|(\\d+)(*:826)'
                        .')'
                        .'|users/(?'
                            .'|(\\d+)(*:849)'
                            .'|([^/]++)/(?'
                                .'|edit(*:873)'
                                .'|toggle(*:887)'
                            .')'
                            .'|(\\d+)/suspicion(*:911)'
                        .')'
                    .')'
                .')'
                .'|/back/(?'
                    .'|c(?'
                        .'|ategories/([^/]++)/delete(*:960)'
                        .'|ommentaires/([^/]++)/delete(*:995)'
                    .')'
                    .'|posts/([^/]++)/delete(*:1025)'
                .')'
                .'|/co(?'
                    .'|vers/(.+)(*:1050)'
                    .'|urses/(?'
                        .'|(\\d+)(*:1073)'
                        .'|(\\d+)/rename(*:1094)'
                        .'|(\\d+)/subject(*:1116)'
                        .'|(\\d+)/publish(*:1138)'
                        .'|(\\d+)/upload(*:1159)'
                        .'|(\\d+)/note(*:1178)'
                        .'|(\\d+)/note/(\\d+)/content(*:1211)'
                        .'|(\\d+)/note/(\\d+)/save(*:1241)'
                        .'|(\\d+)/note/(\\d+)/export\\-pdf(*:1278)'
                        .'|(\\d+)/file/(\\d+)/rename(*:1310)'
                        .'|(\\d+)/file/(\\d+)/delete(*:1342)'
                        .'|(\\d+)/file/(\\d+)/download(*:1376)'
                        .'|(\\d+)/file/(\\d+)/preview(*:1409)'
                        .'|(\\d+)/save\\-to\\-library(*:1441)'
                        .'|(\\d+)/report(*:1462)'
                        .'|(\\d+)/suggestions(*:1488)'
                        .'|(\\d+)/update(*:1509)'
                        .'|(\\d+)/cover(*:1529)'
                        .'|(\\d+)/publish(*:1551)'
                        .'|(\\d+)/delete(*:1572)'
                    .')'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|(*:1605)'
                    .'|/edit(*:1619)'
                    .'|(*:1628)'
                .')'
                .'|/forum/(?'
                    .'|c(?'
                        .'|ategorie/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:1680)'
                                .'|delete(*:1695)'
                                .'|post/new(*:1712)'
                            .')'
                            .'|(*:1722)'
                        .')'
                        .'|omment/([^/]++)/(?'
                            .'|edit(*:1755)'
                            .'|delete(*:1770)'
                        .')'
                    .')'
                    .'|post/([^/]++)/(?'
                        .'|like(*:1802)'
                        .'|edit(*:1815)'
                        .'|delete(*:1830)'
                        .'|comment/new(*:1850)'
                    .')'
                .')'
                .'|/journal/(?'
                    .'|(\\d+)/edit(*:1883)'
                    .'|(\\d+)/delete(*:1904)'
                .')'
                .'|/meditation/(\\d+)(*:1931)'
                .'|/nutrition/api/(?'
                    .'|modifier/([^/]++)(*:1975)'
                    .'|supprimer/([^/]++)(*:2002)'
                .')'
                .'|/salle/([^/]++)(?'
                    .'|(*:2030)'
                    .'|/edit(*:2044)'
                    .'|(*:2053)'
                .')'
                .'|/tache/(?'
                    .'|(\\d+)/statut(*:2085)'
                    .'|([^/]++)(?'
                        .'|(*:2105)'
                        .'|/edit(*:2119)'
                        .'|(*:2128)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        65 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        115 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        135 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        158 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        205 => [[['_route' => 'activites_api_update', '_controller' => 'App\\Controller\\ActivitesController::apiUpdate'], ['id'], ['PUT' => 0, 'POST' => 1], null, false, true, null]],
        228 => [[['_route' => 'activites_api_delete', '_controller' => 'App\\Controller\\ActivitesController::apiDelete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        279 => [[['_route' => 'admin_course_reports_unpublish', '_controller' => 'App\\Controller\\AdminCourseReportsController::unpublish'], ['courseId'], ['POST' => 0], null, false, true, null]],
        300 => [[['_route' => 'admin_course_reports_dismiss', '_controller' => 'App\\Controller\\AdminCourseReportsController::dismiss'], ['reportId'], ['POST' => 0], null, false, true, null]],
        321 => [[['_route' => 'admin_course_reports_restore', '_controller' => 'App\\Controller\\AdminCourseReportsController::restore'], ['courseId'], ['POST' => 0], null, false, true, null]],
        356 => [[['_route' => 'admin_demande_accepter', '_controller' => 'App\\Controller\\AdminDemandeController::accepter'], ['id'], ['POST' => 0], null, false, false, null]],
        377 => [[['_route' => 'admin_demande_refuser', '_controller' => 'App\\Controller\\AdminDemandeController::refuser'], ['id'], ['POST' => 0], null, false, false, null]],
        405 => [[['_route' => 'admin_evenement_show', '_controller' => 'App\\Controller\\AdminEvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        423 => [[['_route' => 'admin_evenement_edit', '_controller' => 'App\\Controller\\AdminEvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        436 => [[['_route' => 'admin_evenement_delete', '_controller' => 'App\\Controller\\AdminEvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        464 => [[['_route' => 'admin_meditation_show', '_controller' => 'App\\Controller\\AdminMeditationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        482 => [[['_route' => 'admin_meditation_edit', '_controller' => 'App\\Controller\\AdminMeditationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        502 => [[['_route' => 'admin_meditation_delete', '_controller' => 'App\\Controller\\AdminMeditationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        527 => [[['_route' => 'admin_conseil_new', '_controller' => 'App\\Controller\\AdminMeditationController::newConseil'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        556 => [[['_route' => 'admin_conseil_edit', '_controller' => 'App\\Controller\\AdminMeditationController::editConseil'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        576 => [[['_route' => 'admin_conseil_delete', '_controller' => 'App\\Controller\\AdminMeditationController::deleteConseil'], ['id'], ['POST' => 0], null, false, false, null]],
        594 => [[['_route' => 'admin_meditation_pdf_detail', '_controller' => 'App\\Controller\\AdminMeditationController::pdfDetail'], ['id'], ['GET' => 0], null, false, false, null]],
        632 => [[['_route' => 'admin_nutrition_update', '_controller' => 'App\\Controller\\AdminNutritionController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        652 => [[['_route' => 'admin_nutrition_delete', '_controller' => 'App\\Controller\\AdminNutritionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        684 => [[['_route' => 'admin_salle_edit', '_controller' => 'App\\Controller\\AdminSalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        704 => [[['_route' => 'admin_salle_toggle', '_controller' => 'App\\Controller\\AdminSalleController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        717 => [[['_route' => 'admin_salle_delete', '_controller' => 'App\\Controller\\AdminSalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        750 => [[['_route' => 'admin_sport_update', '_controller' => 'App\\Controller\\AdminSportController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        770 => [[['_route' => 'admin_sport_delete', '_controller' => 'App\\Controller\\AdminSportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        795 => [[['_route' => 'admin_tache_show', '_controller' => 'App\\Controller\\AdminTacheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        813 => [[['_route' => 'admin_tache_edit', '_controller' => 'App\\Controller\\AdminTacheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        826 => [[['_route' => 'admin_tache_delete', '_controller' => 'App\\Controller\\AdminTacheController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        849 => [[['_route' => 'admin_users_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        873 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        887 => [[['_route' => 'admin_users_toggle', '_controller' => 'App\\Controller\\AdminUserController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        911 => [[['_route' => 'admin_users_suspicion', '_controller' => 'App\\Controller\\AdminUserController::suspicionDetail'], ['id'], ['GET' => 0], null, false, false, null]],
        960 => [[['_route' => 'back_categorie_delete', '_controller' => 'App\\Controller\\BackController::deleteCategorie'], ['id'], ['POST' => 0], null, false, false, null]],
        995 => [[['_route' => 'back_commentaire_delete', '_controller' => 'App\\Controller\\BackController::deleteCommentaire'], ['id'], ['POST' => 0], null, false, false, null]],
        1025 => [[['_route' => 'back_post_delete', '_controller' => 'App\\Controller\\BackController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1050 => [[['_route' => 'app_cover_image', '_controller' => 'App\\Controller\\CoversController::serve'], ['filename'], null, null, false, true, null]],
        1073 => [[['_route' => 'app_courses_detail', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1094 => [[['_route' => 'app_courses_detail_rename', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::rename'], ['id'], ['POST' => 0], null, false, false, null]],
        1116 => [[['_route' => 'app_courses_detail_subject', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::changeSubject'], ['id'], ['POST' => 0], null, false, false, null]],
        1138 => [[['_route' => 'app_courses_detail_publish', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::publish'], ['id'], ['POST' => 0], null, false, false, null]],
        1159 => [[['_route' => 'app_courses_detail_upload', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::upload'], ['id'], ['POST' => 0], null, false, false, null]],
        1178 => [[['_route' => 'app_courses_detail_note', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::createNote'], ['id'], ['POST' => 0], null, false, false, null]],
        1211 => [[['_route' => 'app_courses_detail_note_content', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::noteContent'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1241 => [[['_route' => 'app_courses_detail_note_save', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::saveNote'], ['id', 'fileId'], ['POST' => 0], null, false, false, null]],
        1278 => [[['_route' => 'app_courses_detail_note_export_pdf', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::exportNotePdf'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1310 => [[['_route' => 'app_courses_detail_file_rename', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::renameFile'], ['id', 'fileId'], ['POST' => 0], null, false, false, null]],
        1342 => [[['_route' => 'app_courses_detail_file_delete', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::deleteFile'], ['id', 'fileId'], ['POST' => 0], null, false, false, null]],
        1376 => [[['_route' => 'app_courses_detail_file_download', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::downloadFile'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1409 => [[['_route' => 'app_courses_detail_file_preview', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::previewFile'], ['id', 'fileId'], ['GET' => 0], null, false, false, null]],
        1441 => [[['_route' => 'app_courses_detail_save_library', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::saveToLibrary'], ['id'], ['POST' => 0], null, false, false, null]],
        1462 => [[['_route' => 'app_courses_detail_report', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::reportCourse'], ['id'], ['POST' => 0], null, false, false, null]],
        1488 => [[['_route' => 'app_courses_detail_suggestions', '_controller' => 'App\\Controller\\LibraryControllers\\CourseDetailsController::suggestions'], ['id'], ['GET' => 0], null, false, false, null]],
        1509 => [[['_route' => 'app_courses_update', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::update'], ['id'], ['POST' => 0], null, false, false, null]],
        1529 => [[['_route' => 'app_courses_cover', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::cover'], ['id'], ['POST' => 0], null, false, false, null]],
        1551 => [[['_route' => 'app_courses_publish', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::publish'], ['id'], ['POST' => 0], null, false, false, null]],
        1572 => [[['_route' => 'app_courses_delete', '_controller' => 'App\\Controller\\LibraryControllers\\CoursesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1605 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1619 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1628 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1680 => [[['_route' => 'forum_categorie_edit', '_controller' => 'App\\Controller\\ForumController::editCategorie'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1695 => [[['_route' => 'forum_categorie_delete', '_controller' => 'App\\Controller\\ForumController::deleteCategorie'], ['id'], ['POST' => 0], null, false, false, null]],
        1712 => [[['_route' => 'forum_post_new', '_controller' => 'App\\Controller\\ForumController::newPost'], ['idCat'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1722 => [[['_route' => 'forum_posts', '_controller' => 'App\\Controller\\ForumController::posts'], ['id'], null, null, false, true, null]],
        1755 => [[['_route' => 'forum_comment_edit', '_controller' => 'App\\Controller\\ForumController::editComment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1770 => [[['_route' => 'forum_comment_delete', '_controller' => 'App\\Controller\\ForumController::deleteComment'], ['id'], ['POST' => 0], null, false, false, null]],
        1802 => [[['_route' => 'forum_post_like', '_controller' => 'App\\Controller\\ForumController::toggleLike'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        1815 => [[['_route' => 'forum_post_edit', '_controller' => 'App\\Controller\\ForumController::editPost'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1830 => [[['_route' => 'forum_post_delete', '_controller' => 'App\\Controller\\ForumController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1850 => [[['_route' => 'forum_comment_new', '_controller' => 'App\\Controller\\ForumController::newComment'], ['idPost'], ['POST' => 0], null, false, false, null]],
        1883 => [[['_route' => 'journal_edit', '_controller' => 'App\\Controller\\JournalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1904 => [[['_route' => 'journal_delete', '_controller' => 'App\\Controller\\JournalController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1931 => [[['_route' => 'meditation_show', '_controller' => 'App\\Controller\\MeditationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1975 => [[['_route' => 'nutrition_api_modifier', '_controller' => 'App\\Controller\\NutritionController::apiModifier'], ['id'], ['POST' => 0, 'PUT' => 1], null, false, true, null]],
        2002 => [[['_route' => 'nutrition_api_supprimer', '_controller' => 'App\\Controller\\NutritionController::apiSupprimer'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        2030 => [[['_route' => 'app_salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2044 => [[['_route' => 'app_salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2053 => [[['_route' => 'app_salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2085 => [[['_route' => 'app_tache_update_statut', '_controller' => 'App\\Controller\\TachesController::updateStatut'], ['id'], ['POST' => 0], null, false, false, null]],
        2105 => [[['_route' => 'app_tache_show', '_controller' => 'App\\Controller\\TachesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2119 => [[['_route' => 'app_tache_edit', '_controller' => 'App\\Controller\\TachesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2128 => [
            [['_route' => 'app_tache_delete', '_controller' => 'App\\Controller\\TachesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
