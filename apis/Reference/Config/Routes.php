<?php

$routes->group('api/reference', ['filter' => 'cors'], function ($routes) {
  // Category
  $routes->get('category', '\APIs\Reference\Controllers\Category::index');
  $routes->get('category/(:any)', '\APIs\Reference\Controllers\Category::show/$1');
  $routes->post('category', '\APIs\Reference\Controllers\Category::create');
  $routes->patch('category/(:any)', '\APIs\Reference\Controllers\Category::update/$1');
  $routes->put('category/(:any)', '\APIs\Reference\Controllers\Category::update/$1');
  $routes->delete('category/(:any)', '\APIs\Reference\Controllers\Category::delete/$1');

  // Sub Category
  $routes->get('sub_category', '\APIs\Reference\Controllers\SubCategory::index');
  $routes->get('sub_category/(:any)', '\APIs\Reference\Controllers\SubCategory::show/$1');
  $routes->post('sub_category', '\APIs\Reference\Controllers\SubCategory::create');
  $routes->patch('sub_category/(:any)', '\APIs\Reference\Controllers\SubCategory::update/$1');
  $routes->put('sub_category/(:any)', '\APIs\Reference\Controllers\SubCategory::update/$1');
  $routes->delete('sub_category/(:any)', '\APIs\Reference\Controllers\SubCategory::delete/$1');
});