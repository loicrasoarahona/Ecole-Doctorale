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
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:147)'
                        .'|e(?'
                            .'|cole_doctorales(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:203)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:229)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:267)'
                                .')'
                            .')'
                            .'|quipe_accueils(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:320)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:346)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:384)'
                                .')'
                            .')'
                        .')'
                        .'|institutions(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:436)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:462)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:500)'
                            .')'
                        .')'
                        .'|representants(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:552)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:578)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:616)'
                            .')'
                        .')'
                        .'|unite_transversales(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:674)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:700)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:738)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:781)'
                    .'|wdt/([^/]++)(*:801)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:847)'
                            .'|router(*:861)'
                            .'|exception(?'
                                .'|(*:881)'
                                .'|\\.css(*:894)'
                            .')'
                        .')'
                        .'|(*:904)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        147 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        203 => [[['_route' => '_api_/ecole_doctorales/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\EcoleDoctorale', '_api_operation_name' => '_api_/ecole_doctorales/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        229 => [
            [['_route' => '_api_/ecole_doctorales.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\EcoleDoctorale', '_api_operation_name' => '_api_/ecole_doctorales.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/ecole_doctorales.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\EcoleDoctorale', '_api_operation_name' => '_api_/ecole_doctorales.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        267 => [
            [['_route' => '_api_/ecole_doctorales/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\EcoleDoctorale', '_api_operation_name' => '_api_/ecole_doctorales/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/ecole_doctorales/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\EcoleDoctorale', '_api_operation_name' => '_api_/ecole_doctorales/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/ecole_doctorales/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\EcoleDoctorale', '_api_operation_name' => '_api_/ecole_doctorales/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        320 => [[['_route' => '_api_/equipe_accueils/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\EquipeAccueil', '_api_operation_name' => '_api_/equipe_accueils/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        346 => [
            [['_route' => '_api_/equipe_accueils.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\EquipeAccueil', '_api_operation_name' => '_api_/equipe_accueils.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/equipe_accueils.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\EquipeAccueil', '_api_operation_name' => '_api_/equipe_accueils.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        384 => [
            [['_route' => '_api_/equipe_accueils/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\EquipeAccueil', '_api_operation_name' => '_api_/equipe_accueils/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/equipe_accueils/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\EquipeAccueil', '_api_operation_name' => '_api_/equipe_accueils/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/equipe_accueils/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\EquipeAccueil', '_api_operation_name' => '_api_/equipe_accueils/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        436 => [[['_route' => '_api_/institutions/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Institution', '_api_operation_name' => '_api_/institutions/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        462 => [
            [['_route' => '_api_/institutions.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Institution', '_api_operation_name' => '_api_/institutions.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/institutions.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Institution', '_api_operation_name' => '_api_/institutions.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        500 => [
            [['_route' => '_api_/institutions/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Institution', '_api_operation_name' => '_api_/institutions/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/institutions/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Institution', '_api_operation_name' => '_api_/institutions/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/institutions/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Institution', '_api_operation_name' => '_api_/institutions/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        552 => [[['_route' => '_api_/representants/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Representant', '_api_operation_name' => '_api_/representants/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        578 => [
            [['_route' => '_api_/representants.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Representant', '_api_operation_name' => '_api_/representants.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/representants.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Representant', '_api_operation_name' => '_api_/representants.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        616 => [
            [['_route' => '_api_/representants/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Representant', '_api_operation_name' => '_api_/representants/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/representants/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Representant', '_api_operation_name' => '_api_/representants/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/representants/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Representant', '_api_operation_name' => '_api_/representants/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        674 => [[['_route' => '_api_/unite_transversales/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\UniteTransversale', '_api_operation_name' => '_api_/unite_transversales/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        700 => [
            [['_route' => '_api_/unite_transversales.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\UniteTransversale', '_api_operation_name' => '_api_/unite_transversales.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/unite_transversales.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\UniteTransversale', '_api_operation_name' => '_api_/unite_transversales.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        738 => [
            [['_route' => '_api_/unite_transversales/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\UniteTransversale', '_api_operation_name' => '_api_/unite_transversales/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/unite_transversales/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\UniteTransversale', '_api_operation_name' => '_api_/unite_transversales/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/unite_transversales/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\UniteTransversale', '_api_operation_name' => '_api_/unite_transversales/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        781 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        801 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        847 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        861 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        881 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        894 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        904 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
