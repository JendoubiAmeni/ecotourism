<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/index' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'app_admin_login', '_controller' => 'App\\Controller\\AdminController::login'], null, null, null, false, false, null]],
        '/admin/reset' => [[['_route' => 'app_admin_reset', '_controller' => 'App\\Controller\\AdminController::reset'], null, null, null, false, false, null]],
        '/admin/reservation' => [[['_route' => 'app_reservationManagement', '_controller' => 'App\\Controller\\AdminController::reservationManagement'], null, null, null, false, false, null]],
        '/admin/Addproduct' => [[['_route' => 'app_add_product', '_controller' => 'App\\Controller\\AdminController::addProduct'], null, null, null, false, false, null]],
        '/admin/listProduct' => [[['_route' => 'app_list_product', '_controller' => 'App\\Controller\\AdminController::listProduct'], null, null, null, false, false, null]],
        '/admin/AddCategorie' => [[['_route' => 'app_add_Categorie', '_controller' => 'App\\Controller\\AdminController::addCategorie'], null, null, null, false, false, null]],
        '/admin/partenariats' => [[['_route' => 'app_partenariatManagement', '_controller' => 'App\\Controller\\AdminController::partenariatManagement'], null, null, null, false, false, null]],
        '/admin/initiative' => [[['_route' => 'app_initiativeManagement', '_controller' => 'App\\Controller\\AdminController::initiativeManagement'], null, null, null, false, false, null]],
        '/admin/destination' => [[['_route' => 'app_destinationManagement', '_controller' => 'App\\Controller\\AdminController::destinationManagement'], null, null, null, false, false, null]],
        '/admin/destination/ajouter' => [[['_route' => 'app_add_destination', '_controller' => 'App\\Controller\\AdminController::AjouterDestination'], null, null, null, false, false, null]],
        '/admin/destination/liste' => [[['_route' => 'app_list_destination', '_controller' => 'App\\Controller\\AdminController::ListeDestination'], null, null, null, false, false, null]],
        '/admin/list' => [[['_route' => 'app_admin_list', '_controller' => 'App\\Controller\\AdminController::listUsers'], null, null, null, false, false, null]],
        '/admin/listAvis' => [[['_route' => 'app_admin_list_avis', '_controller' => 'App\\Controller\\AdminController::listAvis'], null, null, null, false, false, null]],
        '/admin/listSensibilisation' => [[['_route' => 'app_admin_education', '_controller' => 'App\\Controller\\AdminController::listEducation'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'search_users', '_controller' => 'App\\Controller\\AdminController::searchUsers'], null, null, null, false, false, null]],
        '/admin/sensibilisation/ajouter' => [[['_route' => 'app_add_sensibilisation', '_controller' => 'App\\Controller\\AdminController::AjouterSensibilisation'], null, null, null, false, false, null]],
        '/admin/sensibilisation/liste' => [[['_route' => 'app_list_sensibilisation', '_controller' => 'App\\Controller\\AdminController::ListeSensibilisation'], null, null, null, false, false, null]],
        '/admin/quiz/ajouter' => [[['_route' => 'app_add_quiz', '_controller' => 'App\\Controller\\AdminController::AjouterQuiz'], null, null, null, false, false, null]],
        '/admin/quiz/liste' => [[['_route' => 'app_list_quiz', '_controller' => 'App\\Controller\\AdminController::ListeQuiz'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/wishlist' => [[['_route' => 'app_wishlist', '_controller' => 'App\\Controller\\ClientController::wishlist'], null, null, null, false, false, null]],
        '/destinations' => [[['_route' => 'app_destinations', '_controller' => 'App\\Controller\\ClientController::all_destinations'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'app_shop', '_controller' => 'App\\Controller\\ClientController::shop'], null, null, null, false, false, null]],
        '/sensibilisation' => [[['_route' => 'app_sensibilisation', '_controller' => 'App\\Controller\\ClientController::sensibilisation'], null, null, null, false, false, null]],
        '/listAvis' => [[['_route' => 'app_avis', '_controller' => 'App\\Controller\\ClientController::avis'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_user_register', '_controller' => 'App\\Controller\\ClientController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\ClientController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\ClientController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ClientController::list'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement', '_controller' => 'App\\Controller\\EvenementController::index'], null, null, null, false, false, null]],
        '/admin/evenement/ajouter' => [[['_route' => 'app_add_evenement', '_controller' => 'App\\Controller\\EvenementController::Add'], null, null, null, false, false, null]],
        '/admin/evenement/liste' => [[['_route' => 'app_list_evenement', '_controller' => 'App\\Controller\\EvenementController::AfficheEvenement'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event', '_controller' => 'App\\Controller\\EvenementController::event'], null, null, null, false, false, null]],
        '/participant' => [[['_route' => 'app_participant', '_controller' => 'App\\Controller\\ParticipantController::index'], null, null, null, false, false, null]],
        '/participants/liste' => [[['_route' => 'afficher_participant', '_controller' => 'App\\Controller\\ParticipantController::AfficheParticipant'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|list/(?'
                        .'|block/([^/]++)(*:39)'
                        .'|delete/([^/]++)(*:61)'
                    .')'
                    .'|evenement/(?'
                        .'|delete/([^/]++)(*:97)'
                        .'|modifier/([^/]++)(*:121)'
                    .')'
                .')'
                .'|/participation/([^/]++)(*:154)'
                .'|/delete_adh/([^/]++)(*:182)'
                .'|/update_adh/([^/]++)(*:210)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:249)'
                    .'|wdt/([^/]++)(*:269)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:315)'
                            .'|router(*:329)'
                            .'|exception(?'
                                .'|(*:349)'
                                .'|\\.css(*:362)'
                            .')'
                        .')'
                        .'|(*:372)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'app_edit_block', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        61 => [[['_route' => 'app_delete_user', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], null, null, false, true, null]],
        97 => [[['_route' => 'admin_delete_evenement', '_controller' => 'App\\Controller\\EvenementController::Delete'], ['id'], null, null, false, true, null]],
        121 => [[['_route' => 'admin_update_evenement', '_controller' => 'App\\Controller\\EvenementController::update'], ['id'], null, null, false, true, null]],
        154 => [[['_route' => 'app_participants', '_controller' => 'App\\Controller\\ParticipantController::Add'], ['id'], null, null, false, true, null]],
        182 => [[['_route' => 'delete_adh', '_controller' => 'App\\Controller\\ParticipantController::Delete'], ['id'], null, null, false, true, null]],
        210 => [[['_route' => 'update_adh', '_controller' => 'App\\Controller\\ParticipantController::update'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        269 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        315 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        329 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        349 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        362 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        372 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
