<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Admin\Beranda::index');
$routes->get('/admin/informasi', 'Admin\DataInformasi::index');
$routes->get('/admin/informasi/tambah', 'Admin\DataInformasi::tambah');
$routes->add('/admin/informasi/simpan', 'Admin\DataInformasi::simpan');
$routes->get('/admin/informasi/ubah/(:segment)', 'Admin\DataInformasi::ubah/$1');
$routes->get('/admin/informasi/(:any)', 'Admin\DataInformasi::detail/$1');
$routes->add('/admin/informasi/update', 'Admin\DataInformasi::update');
$routes->delete('/admin/informasi/hapus/(:num)', 'Admin\DataInformasi::hapus/$1');

$routes->get('/admin/student', 'Admin\DataStudent::index');
$routes->get('/admin/student/tambah', 'Admin\DataStudent::tambah');
$routes->add('/admin/student/simpan', 'Admin\DataStudent::simpan');
$routes->get('/admin/student/(:num)', 'Admin\DataStudent::detail/$1');
$routes->get('/admin/student/ubah/(:segment)', 'Admin\DataStudent::ubah/$1');
$routes->add('/admin/student/update', 'Admin\DataStudent::update');
$routes->delete('/admin/student/hapus/(:num)', 'Admin\DataStudent::hapus/$1');
$routes->get('/', 'Guru\Beranda::index');


// $routes->group('admin', function ($routes) {
// 	$routes->add('users', 'Admin\Users::index');
// 	$routes->add('blog', 'Admin\Blog::index');
// });

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
