<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
// $routes->get('/login', 'Home::login');
// $routes->get('/logout', '/login');

//admin

$routes->get('/beranda_admin', 'BerandaController::index2',['filter' => 'role:admin']);
$routes->get('/jadwalrapat_admin', 'JadwalRapatController::index2',['filter' => 'role:admin']);
$routes->get('/jadwalrapat_admin/display', 'JadwalRapatController::display2',['filter' => 'role:admin']);
$routes->get('/cetakjadwalrapat_admin', 'JadwalRapatController::cetak2',['filter' => 'role:admin']);
$routes->get('/datadriver_admin', 'DataDriverController::index2',['filter' => 'role:admin']);
$routes->get('/datatamu_admin', 'DatatamuController::index',['filter' => 'role:admin']);
$routes->get('/datatamu_admin/create', 'DatatamuController::create',['filter' => 'role:admin']);
$routes->post('/datatamu_admin/store', 'DatatamuController::store',['filter' => 'role:admin']);
$routes->get('/datatamu_admin/edit/(:num)', 'DatatamuController::edit/$1',['filter' => 'role:admin']);
$routes->post('/datatamu_admin/update/(:num)', 'DatatamuController::update/$1',['filter' => 'role:admin']);
$routes->get('/datatamu_admin/delete/(:num)', 'DatatamuController::delete/$1',['filter' => 'role:admin']);
$routes->get('/cetakdatatamu_admin', 'DatatamuController::cetak',['filter' => 'role:admin']);

//superadmin
$routes->get('/beranda_superadmin', 'BerandaController::index1',['filter' => 'role:superadmin']);
$routes->get('/jadwalrapat_superadmin', 'JadwalRapatController::index',['filter' => 'role:superadmin']);
$routes->get('/jadwalrapat_superadmin/create', 'JadwalRapatController::create',['filter' => 'role:superadmin']);
$routes->post('/jadwalrapat_superadmin/store', 'JadwalRapatController::store',['filter' => 'role:superadmin']);
$routes->get('/jadwalrapat_superadmin/edit/(:num)', 'JadwalRapatController::edit/$1',['filter' => 'role:superadmin']);
$routes->post('/jadwalrapat_superadmin/update/(:num)', 'JadwalRapatController::update/$1',['filter' => 'role:superadmin']);
$routes->get('/jadwalrapat_superadmin/delete/(:num)', 'JadwalRapatController::delete/$1',['filter' => 'role:superadmin']);
$routes->get('/cetakjadwalrapat_superadmin', 'JadwalRapatController::cetak',['filter' => 'role:superadmin']);
$routes->get('/jadwalrapat_superadmin/display/(:num)', 'JadwalRapatController::display/$1',['filter' => 'role:superadmin']);

$routes->get('/datadriver_superadmin', 'DataDriverController::index',['filter' => 'role:superadmin']);
$routes->get('/datadriver_superadmin/create', 'DataDriverController::create',['filter' => 'role:superadmin']);
$routes->post('/datadriver_superadmin/store', 'DataDriverController::store',['filter' => 'role:superadmin']);
$routes->get('/datadriver_superadmin/edit/(:num)', 'DataDriverController::edit/$1',['filter' => 'role:superadmin']);
$routes->post('/datadriver_superadmin/update/(:num)', 'DataDriverController::update/$1',['filter' => 'role:superadmin']);
$routes->get('/datadriver_superadmin/delete/(:num)', 'DataDriverController::delete/$1',['filter' => 'role:superadmin']);
$routes->get('/datadriver_superadmin/cetak', 'DataDriverController::cetak',['filter' => 'role:superadmin']);

$routes->get('/datakendaraan_superadmin/create', 'DataKendaraanController::create',['filter' => 'role:superadmin']);
$routes->post('/datakendaraan_superadmin/store', 'DataKendaraanController::store',['filter' => 'role:superadmin']);
$routes->get('/datakendaraan_superadmin/edit/(:num)', 'DataKendaraanController::edit/$1',['filter' => 'role:superadmin']);
$routes->post('/datakendaraan_superadmin/update/(:num)', 'DataKendaraanController::update/$1',['filter' => 'role:superadmin']);
$routes->get('/datakendaraan_superadmin/delete/(:num)', 'DataKendaraanController::delete/$1',['filter' => 'role:superadmin']);

$routes->get('/daftarpemesanan_superadmin/create', 'DaftarPemesananController::create',['filter' => 'role:superadmin']);
$routes->post('/daftarpemesanan_superadmin/store', 'DaftarPemesananController::store',['filter' => 'role:superadmin']);
$routes->get('/daftarpemesanan_superadmin/edit/(:num)', 'DaftarPemesananController::edit/$1',['filter' => 'role:superadmin']);
$routes->post('/daftarpemesanan_superadmin/update/(:num)', 'DaftarPemesananController::update/$1',['filter' => 'role:superadmin']);
$routes->get('/daftarpemesanan_superadmin/delete/(:num)', 'DaftarPemesananController::delete/$1',['filter' => 'role:superadmin']);

$routes->get('/datatamu_superadmin', 'DatatamuController::index2',['filter' => 'role:superadmin']);
$routes->get('/cetakdatatamu_superadmin', 'DatatamuController::cetak2',['filter' => 'role:superadmin']);
$routes->get('/databerita_superadmin', 'DataBeritaController::index',['filter' => 'role:superadmin']);

//admin humas
$routes->get('/beranda_adminhumas', 'BerandaController::index3',['filter' => 'role:adminhumas']);
$routes->get('/jadwalrapat_adminhumas', 'JadwalRapatController::index3',['filter' => 'role:adminhumas']);
$routes->get('/jadwalrapat_adminhumas/display', 'JadwalRapatController::display3',['filter' => 'role:adminhumas']);

$routes->get('/datatamu_adminhumas', 'Home::datatamu_adminhumas',['filter' => 'role:adminhumas']);

$routes->get('/databerita_adminhumas', 'DataBeritaController::index3',['filter' => 'role:adminhumas']);
$routes->get('/databerita_adminhumas/create', 'DataBeritaController::create',['filter' => 'role:adminhumas']);
$routes->post('/databerita_adminhumas/store', 'DataBeritaController::store',['filter' => 'role:adminhumas']);
$routes->get('/databerita_adminhumas/edit/(:num)', 'DataBeritaController::edit/$1',['filter' => 'role:adminhumas']);
$routes->post('/databerita_adminhumas/update/(:num)', 'DataBeritaController::update/$1',['filter' => 'role:adminhumas']);
$routes->get('/databerita_adminhumas/delete/(:num)', 'DataBeritaController::delete/$1',['filter' => 'role:adminhumas']);
$routes->get('/databerita_adminhumas/cetak', 'DataBeritaController::cetak',['filter' => 'role:adminhumas']);

$routes->get('/datadriver_adminhumas', 'DataDriverController::indexhumas',['filter' => 'role:adminhumas']);






