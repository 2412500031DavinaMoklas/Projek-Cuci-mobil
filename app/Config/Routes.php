<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Auth::login');
$routes->get('/dashboard', 'Dashboard::index');

// Routes Pelanggan (lebih spesifik dulu)
