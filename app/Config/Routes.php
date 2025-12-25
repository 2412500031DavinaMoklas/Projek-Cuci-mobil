<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/transaksi', 'Transaksi::kasir');
$routes->get('/transaksi/nota', 'Transaksi::nota');
$routes->get('/laporan/transaksi', 'Laporan::transaksi');
$routes->get('/laporan/petugas', 'Laporan::petugas');


// Routes Pelanggan (lebih spesifik dulu)
