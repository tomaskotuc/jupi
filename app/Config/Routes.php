<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/','Main::index');
$routes->get('karty','Main::karty');
$routes->get('tabulka','Main::tabulka');
$routes->get('carousel','Main::carousel');
    