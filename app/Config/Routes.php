<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/','Main::index');
$routes->get('index','Main::index');
$routes->get('karty','Main::karty');
$routes->get('tabulka','Main::tabulka');
$routes->get('carousel','Main::carousel');
$routes->get('polaci','Main::polaci');
$routes->get("polaci2", "Main::polaci2");
 // musíš udělat
