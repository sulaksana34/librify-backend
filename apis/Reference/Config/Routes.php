<?php

$routes->group('api/reference', ['filter' => 'cors'], function ($routes) {
  $routes->get('product', '\APIs\Reference\Controllers\Product::index');
  $routes->get('product/(:any)', '\APIs\Reference\Controllers\Product::show/$1');
  $routes->post('product', '\APIs\Reference\Controllers\Product::create');
  $routes->patch('product/(:any)', '\APIs\Reference\Controllers\Product::update/$1');
  $routes->put('product/(:any)', '\APIs\Reference\Controllers\Product::update/$1');
  $routes->delete('product/(:any)', '\APIs\Reference\Controllers\Product::delete/$1');
});