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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\AdminController::Categories'], null, null, null, false, false, null]],
        '/admin/couleurs' => [[['_route' => 'couleurs', '_controller' => 'App\\Controller\\AdminController::Couleurs'], null, null, null, false, false, null]],
        '/admin/oeuvres' => [[['_route' => 'oeuvres', '_controller' => 'App\\Controller\\AdminController::Oeuvres'], null, null, null, false, false, null]],
        '/admin/couleurs/ajout' => [[['_route' => 'ajoutCouleur', '_controller' => 'App\\Controller\\AdminController::AjoutCouleur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/oeuvres/ajout' => [[['_route' => 'ajoutOeuvre', '_controller' => 'App\\Controller\\AdminController::AjoutOeuvre'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/categories/ajout' => [[['_route' => 'ajoutCategorie', '_controller' => 'App\\Controller\\AdminController::AjoutCategorie'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/acceuil' => [[['_route' => 'acceuil', '_controller' => 'App\\Controller\\SecurityController::acceuil'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'site', '_controller' => 'App\\Controller\\SiteController::acceuil'], null, null, null, false, false, null]],
        '/puzzle' => [[['_route' => 'puzzle', '_controller' => 'App\\Controller\\SiteController::PuzzleAction'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|c(?'
                        .'|ategories/(?'
                            .'|suppression/([^/]++)(*:216)'
                            .'|modification/([^/]++)(*:245)'
                        .')'
                        .'|ouleurs/(?'
                            .'|suppression/([^/]++)(*:285)'
                            .'|modification/([^/]++)(*:314)'
                        .')'
                    .')'
                    .'|oeuvres/(?'
                        .'|suppression/([^/]++)(*:355)'
                        .'|modification/([^/]++)(*:384)'
                    .')'
                .')'
                .'|/collection/([^/]++)(*:414)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:476)'
                    .'|([A-z0-9_-]*)/(.+)(*:502)'
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
        216 => [[['_route' => 'categories_suppression', '_controller' => 'App\\Controller\\AdminController::SuppressionCategories'], ['id'], null, null, false, true, null]],
        245 => [[['_route' => 'modificationCategorie', '_controller' => 'App\\Controller\\AdminController::ModificationCategorie'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        285 => [[['_route' => 'couleurs_suppression', '_controller' => 'App\\Controller\\AdminController::SuppressionCouleurs'], ['id'], null, null, false, true, null]],
        314 => [[['_route' => 'modificationCouleur', '_controller' => 'App\\Controller\\AdminController::ModificationCouleur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        355 => [[['_route' => 'oeuvres_suppression', '_controller' => 'App\\Controller\\AdminController::SuppressionOeuvres'], ['id'], null, null, false, true, null]],
        384 => [[['_route' => 'modificationOeuvre', '_controller' => 'App\\Controller\\AdminController::ModificationOeuvre'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        414 => [[['_route' => 'collection', '_controller' => 'App\\Controller\\SiteController::collection'], ['id'], null, null, false, true, null]],
        476 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        502 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
