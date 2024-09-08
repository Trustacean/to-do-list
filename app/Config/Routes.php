<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\TodoController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/todo', 'TodoController::index');
$routes->post('/todo', 'TodoController::index');
$routes->get('/delete/(:num)', 'TodoController::delete/$1');
$routes->get('/update/(:num)', 'TodoController::update/$1');
$routes->get('/', 'UserController::login');
$routes->post('/', 'UserController::login');
$routes->get('/register', 'UserController::register');
$routes->post('/register', 'UserController::register');
$routes->get('/logout', 'UserController::logout');