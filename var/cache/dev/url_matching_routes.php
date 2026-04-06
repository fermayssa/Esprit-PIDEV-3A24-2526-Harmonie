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
        '/activites' => [[['_route' => 'activites', '_controller' => 'App\\Controller\\ActivitesController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/demandes' => [[['_route' => 'admin_demande_index', '_controller' => 'App\\Controller\\AdminDemandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenements' => [[['_route' => 'admin_evenement_index', '_controller' => 'App\\Controller\\AdminEvenementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenements/new' => [[['_route' => 'admin_evenement_new', '_controller' => 'App\\Controller\\AdminEvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/meditation' => [[['_route' => 'admin_meditation_index', '_controller' => 'App\\Controller\\AdminMeditationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/meditation/search' => [[['_route' => 'admin_meditation_search', '_controller' => 'App\\Controller\\AdminMeditationController::search'], null, ['GET' => 0], null, false, false, null]],
        '/admin/meditation/new' => [[['_route' => 'admin_meditation_new', '_controller' => 'App\\Controller\\AdminMeditationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/meditation/pdf' => [[['_route' => 'admin_meditation_pdf_list', '_controller' => 'App\\Controller\\AdminMeditationController::pdfList'], null, ['GET' => 0], null, false, false, null]],
        '/admin/salles' => [[['_route' => 'admin_salle_index', '_controller' => 'App\\Controller\\AdminSalleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/salles/new' => [[['_route' => 'admin_salle_new', '_controller' => 'App\\Controller\\AdminSalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/meditation' => [[['_route' => 'meditation', '_controller' => 'App\\Controller\\MeditationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/meditation/search' => [[['_route' => 'meditation_search', '_controller' => 'App\\Controller\\MeditationController::search'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition' => [[['_route' => 'nutrition', '_controller' => 'App\\Controller\\NutritionController::index'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|demandes/(?'
                        .'|(\\d+)/accepter(*:238)'
                        .'|(\\d+)/refuser(*:259)'
                    .')'
                    .'|evenements/(?'
                        .'|(\\d+)(*:287)'
                        .'|(\\d+)/edit(*:305)'
                        .'|(\\d+)(*:318)'
                    .')'
                    .'|meditation/(?'
                        .'|(\\d+)(*:346)'
                        .'|(\\d+)/edit(*:364)'
                        .'|(\\d+)/delete(*:384)'
                        .'|(\\d+)/conseil/new(*:409)'
                        .'|conseil/(?'
                            .'|(\\d+)/edit(*:438)'
                            .'|(\\d+)/delete(*:458)'
                        .')'
                        .'|(\\d+)/pdf(*:476)'
                    .')'
                    .'|salles/(?'
                        .'|(\\d+)/edit(*:505)'
                        .'|(\\d+)/toggle(*:525)'
                        .'|(\\d+)(*:538)'
                    .')'
                    .'|taches/(?'
                        .'|(\\d+)(*:562)'
                        .'|(\\d+)/edit(*:580)'
                        .'|(\\d+)(*:593)'
                    .')'
                    .'|users/(?'
                        .'|(\\d+)(*:616)'
                        .'|([^/]++)/(?'
                            .'|edit(*:640)'
                            .'|toggle(*:654)'
                        .')'
                        .'|(\\d+)/suspicion(*:678)'
                    .')'
                .')'
                .'|/back/(?'
                    .'|c(?'
                        .'|ategories/([^/]++)/delete(*:726)'
                        .'|ommentaires/([^/]++)/delete(*:761)'
                    .')'
                    .'|posts/([^/]++)/delete(*:791)'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|(*:822)'
                    .'|/edit(*:835)'
                    .'|(*:843)'
                .')'
                .'|/forum/(?'
                    .'|c(?'
                        .'|ategorie/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:894)'
                                .'|delete(*:908)'
                                .'|post/new(*:924)'
                            .')'
                            .'|(*:933)'
                        .')'
                        .'|omment/([^/]++)/(?'
                            .'|edit(*:965)'
                            .'|delete(*:979)'
                        .')'
                    .')'
                    .'|post/([^/]++)/(?'
                        .'|like(*:1010)'
                        .'|edit(*:1023)'
                        .'|delete(*:1038)'
                        .'|comment/new(*:1058)'
                    .')'
                .')'
                .'|/journal/(?'
                    .'|(\\d+)/edit(*:1091)'
                    .'|(\\d+)/delete(*:1112)'
                .')'
                .'|/meditation/(\\d+)(*:1139)'
                .'|/salle/([^/]++)(?'
                    .'|(*:1166)'
                    .'|/edit(*:1180)'
                    .'|(*:1189)'
                .')'
                .'|/tache/(?'
                    .'|(\\d+)/statut(*:1221)'
                    .'|([^/]++)(?'
                        .'|(*:1241)'
                        .'|/edit(*:1255)'
                        .'|(*:1264)'
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
        238 => [[['_route' => 'admin_demande_accepter', '_controller' => 'App\\Controller\\AdminDemandeController::accepter'], ['id'], ['POST' => 0], null, false, false, null]],
        259 => [[['_route' => 'admin_demande_refuser', '_controller' => 'App\\Controller\\AdminDemandeController::refuser'], ['id'], ['POST' => 0], null, false, false, null]],
        287 => [[['_route' => 'admin_evenement_show', '_controller' => 'App\\Controller\\AdminEvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        305 => [[['_route' => 'admin_evenement_edit', '_controller' => 'App\\Controller\\AdminEvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        318 => [[['_route' => 'admin_evenement_delete', '_controller' => 'App\\Controller\\AdminEvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        346 => [[['_route' => 'admin_meditation_show', '_controller' => 'App\\Controller\\AdminMeditationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        364 => [[['_route' => 'admin_meditation_edit', '_controller' => 'App\\Controller\\AdminMeditationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        384 => [[['_route' => 'admin_meditation_delete', '_controller' => 'App\\Controller\\AdminMeditationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        409 => [[['_route' => 'admin_conseil_new', '_controller' => 'App\\Controller\\AdminMeditationController::newConseil'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        438 => [[['_route' => 'admin_conseil_edit', '_controller' => 'App\\Controller\\AdminMeditationController::editConseil'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        458 => [[['_route' => 'admin_conseil_delete', '_controller' => 'App\\Controller\\AdminMeditationController::deleteConseil'], ['id'], ['POST' => 0], null, false, false, null]],
        476 => [[['_route' => 'admin_meditation_pdf_detail', '_controller' => 'App\\Controller\\AdminMeditationController::pdfDetail'], ['id'], ['GET' => 0], null, false, false, null]],
        505 => [[['_route' => 'admin_salle_edit', '_controller' => 'App\\Controller\\AdminSalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        525 => [[['_route' => 'admin_salle_toggle', '_controller' => 'App\\Controller\\AdminSalleController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        538 => [[['_route' => 'admin_salle_delete', '_controller' => 'App\\Controller\\AdminSalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        562 => [[['_route' => 'admin_tache_show', '_controller' => 'App\\Controller\\AdminTacheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        580 => [[['_route' => 'admin_tache_edit', '_controller' => 'App\\Controller\\AdminTacheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        593 => [[['_route' => 'admin_tache_delete', '_controller' => 'App\\Controller\\AdminTacheController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        616 => [[['_route' => 'admin_users_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        640 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        654 => [[['_route' => 'admin_users_toggle', '_controller' => 'App\\Controller\\AdminUserController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        678 => [[['_route' => 'admin_users_suspicion', '_controller' => 'App\\Controller\\AdminUserController::suspicionDetail'], ['id'], ['GET' => 0], null, false, false, null]],
        726 => [[['_route' => 'back_categorie_delete', '_controller' => 'App\\Controller\\BackController::deleteCategorie'], ['id'], ['POST' => 0], null, false, false, null]],
        761 => [[['_route' => 'back_commentaire_delete', '_controller' => 'App\\Controller\\BackController::deleteCommentaire'], ['id'], ['POST' => 0], null, false, false, null]],
        791 => [[['_route' => 'back_post_delete', '_controller' => 'App\\Controller\\BackController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        822 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        835 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        843 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        894 => [[['_route' => 'forum_categorie_edit', '_controller' => 'App\\Controller\\ForumController::editCategorie'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        908 => [[['_route' => 'forum_categorie_delete', '_controller' => 'App\\Controller\\ForumController::deleteCategorie'], ['id'], ['POST' => 0], null, false, false, null]],
        924 => [[['_route' => 'forum_post_new', '_controller' => 'App\\Controller\\ForumController::newPost'], ['idCat'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        933 => [[['_route' => 'forum_posts', '_controller' => 'App\\Controller\\ForumController::posts'], ['id'], null, null, false, true, null]],
        965 => [[['_route' => 'forum_comment_edit', '_controller' => 'App\\Controller\\ForumController::editComment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        979 => [[['_route' => 'forum_comment_delete', '_controller' => 'App\\Controller\\ForumController::deleteComment'], ['id'], ['POST' => 0], null, false, false, null]],
        1010 => [[['_route' => 'forum_post_like', '_controller' => 'App\\Controller\\ForumController::toggleLike'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        1023 => [[['_route' => 'forum_post_edit', '_controller' => 'App\\Controller\\ForumController::editPost'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1038 => [[['_route' => 'forum_post_delete', '_controller' => 'App\\Controller\\ForumController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1058 => [[['_route' => 'forum_comment_new', '_controller' => 'App\\Controller\\ForumController::newComment'], ['idPost'], ['POST' => 0], null, false, false, null]],
        1091 => [[['_route' => 'journal_edit', '_controller' => 'App\\Controller\\JournalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1112 => [[['_route' => 'journal_delete', '_controller' => 'App\\Controller\\JournalController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1139 => [[['_route' => 'meditation_show', '_controller' => 'App\\Controller\\MeditationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1166 => [[['_route' => 'app_salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1180 => [[['_route' => 'app_salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1189 => [[['_route' => 'app_salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1221 => [[['_route' => 'app_tache_update_statut', '_controller' => 'App\\Controller\\TachesController::updateStatut'], ['id'], ['POST' => 0], null, false, false, null]],
        1241 => [[['_route' => 'app_tache_show', '_controller' => 'App\\Controller\\TachesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1255 => [[['_route' => 'app_tache_edit', '_controller' => 'App\\Controller\\TachesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1264 => [
            [['_route' => 'app_tache_delete', '_controller' => 'App\\Controller\\TachesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
