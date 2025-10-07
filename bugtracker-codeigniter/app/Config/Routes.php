<?php

$routes->get('/', 'Tickets::index');

// Auth
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::attempt');
$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::store');
$routes->post('logout', 'Auth::logout');

// Tickets CRUD
$routes->get('tickets', 'Tickets::index');
$routes->get('tickets/create', 'Tickets::create');
$routes->post('tickets', 'Tickets::store');
$routes->get('tickets/(:num)', 'Tickets::show/$1');
$routes->get('tickets/(:num)/edit', 'Tickets::edit/$1');
$routes->post('tickets/(:num)/update', 'Tickets::update/$1');
$routes->post('tickets/(:num)/delete', 'Tickets::delete/$1');
