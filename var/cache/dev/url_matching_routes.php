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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/bug' => [[['_route' => 'report_index', '_controller' => 'App\\Controller\\BugController::index'], null, null, null, false, false, null]],
        '/car' => [[['_route' => 'cars_index', '_controller' => 'App\\Controller\\CarController::index'], null, null, null, false, false, null]],
        '/car/create' => [[['_route' => 'car_create', '_controller' => 'App\\Controller\\CarController::create'], null, null, null, false, false, null]],
        '/city' => [[['_route' => 'cities_index', '_controller' => 'App\\Controller\\CityController::index'], null, null, null, false, false, null]],
        '/city/create' => [[['_route' => 'create_city', '_controller' => 'App\\Controller\\CityController::create'], null, null, null, false, false, null]],
        '/clients' => [[['_route' => 'clients_index', '_controller' => 'App\\Controller\\ClientsController::index'], null, null, null, false, false, null]],
        '/clients/create' => [[['_route' => 'client_create', '_controller' => 'App\\Controller\\ClientsController::create'], null, null, null, false, false, null]],
        '/color' => [[['_route' => 'colors_index', '_controller' => 'App\\Controller\\ColorController::index'], null, null, null, false, false, null]],
        '/color/create' => [[['_route' => 'color_create', '_controller' => 'App\\Controller\\ColorController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
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
                .'|/c(?'
                    .'|ar/(?'
                        .'|edit/([^/]++)(*:193)'
                        .'|delete/([^/]++)(*:216)'
                        .'|client/([^/]++)(*:239)'
                        .'|owner/([^/]++)(*:261)'
                    .')'
                    .'|ity/(?'
                        .'|edit/([^/]++)(*:290)'
                        .'|delete/([^/]++)(*:313)'
                    .')'
                    .'|lients/(?'
                        .'|view/([^/]++)(*:345)'
                        .'|edit/([^/]++)(*:366)'
                        .'|delete/([^/]++)(*:389)'
                    .')'
                    .'|olor/(?'
                        .'|edit/([^/]++)(*:419)'
                        .'|delete/([^/]++)(*:442)'
                    .')'
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
        193 => [[['_route' => 'car_edit', '_controller' => 'App\\Controller\\CarController::edit'], ['id'], null, null, false, true, null]],
        216 => [[['_route' => 'car_delete', '_controller' => 'App\\Controller\\CarController::delete'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'car_client', '_controller' => 'App\\Controller\\CarController::carClient'], ['id'], null, null, false, true, null]],
        261 => [[['_route' => 'car_owner', '_controller' => 'App\\Controller\\CarController::editOwner'], ['id'], null, null, false, true, null]],
        290 => [[['_route' => 'edit_city', '_controller' => 'App\\Controller\\CityController::edit'], ['id'], null, null, false, true, null]],
        313 => [[['_route' => 'delete_city', '_controller' => 'App\\Controller\\CityController::delete'], ['id'], null, null, false, true, null]],
        345 => [[['_route' => 'view_client', '_controller' => 'App\\Controller\\ClientsController::view'], ['id'], null, null, false, true, null]],
        366 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientsController::edit'], ['id'], null, null, false, true, null]],
        389 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientsController::delete'], ['id'], null, null, false, true, null]],
        419 => [[['_route' => 'color_edit', '_controller' => 'App\\Controller\\ColorController::edit'], ['id'], null, null, false, true, null]],
        442 => [
            [['_route' => 'color_delete', '_controller' => 'App\\Controller\\ColorController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
