<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('products', 'Product::index');
$routes->get('products/view/(:num)', 'Product::view/$1');
$routes->get('products/edit/(:num)', 'Product::edit/$1');
$routes->post('products/edit/(:num)', 'Product::update/$1');
$routes->get('products/create', 'Product::create');
$routes->post('products/store', 'Product::store');
$routes->post('products/search', 'Product::search');
$routes->delete('products/delete/(:num)', 'Product::delete/$1');