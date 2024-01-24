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

// $routes->get('/datatamu_admin', 'Home::datatamu_admin');

$routes->get('/datatamu_admin', 'DatatamuController::index');
$routes->get('/datatamu_admin/create', 'DatatamuController::create');
$routes->post('/datatamu_admin/store', 'DatatamuController::store');
$routes->get('/datatamu_admin/edit/(:num)', 'DatatamuController::edit/$1');
$routes->post('/datatamu_admin/update/(:num)', 'DatatamuController::update/$1');
$routes->get('/datatamu_admin/delete/(:num)', 'DatatamuController::delete/$1');
$routes->get('/cetakdatatamu_admin', 'DatatamuController::cetak');


//superadmin
$routes->get('/beranda_superadmin', 'Home::beranda_superadmin');
// $routes->get('/jadwalrapat_superadmin', 'Home::jadwalrapat_superadmin');

$routes->get('/jadwalrapat_superadmin', 'JadwalRapatController::index');
$routes->get('/jadwalrapat_superadmin/create', 'JadwalRapatController::create');
$routes->post('/jadwalrapat_superadmin/store', 'JadwalRapatController::store');
$routes->get('/jadwalrapat_superadmin/edit/(:num)', 'JadwalRapatController::edit/$1');
$routes->post('/jadwalrapat_superadmin/update/(:num)', 'JadwalRapatController::update/$1');
$routes->get('/jadwalrapat_superadmin/delete/(:num)', 'JadwalRapatController::delete/$1');
$routes->get('/cetakjadwalrapat_superadmin', 'JadwalRapatController::cetak');

$routes->get('/datadriver_superadmin', 'Home::datadriver_superadmin');
$routes->get('/datatamu_superadmin', 'Home::datatamu_superadmin');


//admin humas
$routes->get('/beranda_adminhumas', 'Home::beranda_adminhumas');
$routes->get('/jadwalrapat_adminhumas', 'Home::jadwalrapat_adminhumas');
$routes->get('/datadriver_adminhumas', 'Home::datadriver_adminhumas');
$routes->get('/datatamu_adminhumas', 'Home::datatamu_adminhumas');
$routes->get('/databerita_adminhumas', 'Home::databerita_adminhumas');



