<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::login');

$routes->get('/register', 'Home::register');

$routes->get('/beranda_admin', 'Home::beranda_admin');
$routes->get('/jadwalrapat_admin', 'Home::jadwalrapat_admin');
$routes->get('/datadriver_admin', 'Home::datadriver_admin');
$routes->get('/datatamu_admin', 'Home::datatamu_admin');

