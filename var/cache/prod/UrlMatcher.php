<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\WeatherController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/([^/]++)(*:16)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        16 => [
            [['_route' => 'show_weather', '_controller' => 'App\\Controller\\WeatherController::showWeather'], ['city'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
