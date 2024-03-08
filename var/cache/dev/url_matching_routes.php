<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => '', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/profilefront' => [
            [['_route' => 'app_profilefront', '_controller' => 'App\\Controller\\UserController::profilefront'], null, null, null, false, false, null],
            [['_route' => 'app_profilefont', '_controller' => 'App\\Controller\\UserController::profilefront'], null, null, null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/home1' => [[['_route' => 'app_home1', '_controller' => 'App\\Controller\\HomeController::index1'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\HomeController::dashboard'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/AfficherListeUsers' => [[['_route' => 'app_afficherlisteusers', '_controller' => 'App\\Controller\\UserController::ShowUsers'], null, null, null, false, false, null]],
        '/home/Adduser' => [[['_route' => 'app_AddUser', '_controller' => 'App\\Controller\\UserController::Add'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null]],
        '/verifyemail' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyEmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/edit(?'
                    .'|/([^/]++)(*:186)'
                    .'|front/([^/]++)(*:208)'
                .')'
                .'|/delete(?'
                    .'|/([^/]++)(*:236)'
                    .'|front/([^/]++)(*:258)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [[['_route' => 'app_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, true, null]],
        208 => [[['_route' => 'app_editfront', '_controller' => 'App\\Controller\\UserController::editfront'], ['id'], null, null, false, true, null]],
        236 => [[['_route' => 'app_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null]],
        258 => [
            [['_route' => 'app_deletefront', '_controller' => 'App\\Controller\\UserController::deletefront'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
