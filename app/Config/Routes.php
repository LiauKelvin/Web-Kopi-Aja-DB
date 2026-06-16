<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/Mahasiswa', 'Mahasiswa::index');
// $routes->get('/latihan1', 'latihan1::index');
// $routes->get('/Perpus', 'Perpus::index');
// $routes->get('/datamahasiswa', 'DBmahasiswa::index');
// $routes->post('/proses_add_data', 'TambahData::proses_add_data');
// $routes->get('/Tambah_data', 'TambahData::index');
// $routes->delete('/proses_delete_data/(:num)', 'Perpus::proses_delete_data/$1');
// $routes->get('/Edit_data/(:segment)', 'Perpus::edit/$1');
// $routes->post('/Edit_data/proses_update/(:any)', 'Perpus::proses_update/$1');

//Routes untuk web kopi jadi (Kelompok 5)
$routes->get('/', 'DBKopi::Utama');
$routes->get('/Menu', 'DBKopi::Menu');
$routes->get('/Contact', 'DBKopi::contact');
$routes->get('/Produk', 'DBKopi::produk');
$routes->get('/DBKopi', 'DBKopi::index');
$routes->post('/DBKopi', 'DBKopi::add'); // For adding items to the cart
$routes->get('/DBKopi/remove', 'DBKopi::remove');
$routes->get('/DBKopi/empty', 'DBKopi::empty');


