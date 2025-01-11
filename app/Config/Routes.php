<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Explore', 'Home::explore');
$routes->get('/List', 'Home::mylist');
$routes->get('/Download', 'Home::download');
$routes->get('/Settings', 'Home::settings');
