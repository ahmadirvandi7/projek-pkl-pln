<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::login');

$routes->get('/register', 'Home::register');


//admin
$routes->get('/beranda_admin', 'Home::beranda_admin');
$routes->get('/jadwalrapat_admin', 'Home::jadwalrapat_admin');
$routes->get('/datadriver_admin', 'Home::datadriver_admin');
$routes->get('/datatamu_admin', 'Home::datatamu_admin');


//superadmin
$routes->get('/beranda_superadmin', 'Home::beranda_superadmin');
$routes->get('/jadwalrapat_superadmin', 'Home::jadwalrapat_superadmin');
$routes->get('/datadriver_superadmin', 'Home::datadriver_superadmin');
$routes->get('/datatamu_superadmin', 'Home::datatamu_superadmin');


//admin humas
$routes->get('/beranda_adminhumas', 'Home::beranda_adminhumas');
$routes->get('/jadwalrapat_adminhumas', 'Home::jadwalrapat_adminhumas');
$routes->get('/datadriver_adminhumas', 'Home::datadriver_adminhumas');
$routes->get('/datatamu_adminhumas', 'Home::datatamu_adminhumas');



