<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/search', 'ClientesController::search', ['as' => 'cliente.search']);
$routes->get('/', 'ClientesController::index', ['as' => 'home']); 
$routes->get('/create', 'ClientesController::create', ['as' => 'cliente.create']); 
$routes->post('/cliente', 'ClientesController::insert', ['as' => 'cliente.store']); 
$routes->get('/cliente/(:num)/edit', 'ClientesController::edit/$1', ['as' => 'cliente.edit']); 
$routes->put('/cliente/(:num)', 'ClientesController::update/$1', ['as' => 'cliente.update']); 
$routes->delete('/cliente/(:num)', 'ClientesController::delete/$1', ['as' => 'cliente.delete']);
$routes->get('/cliente/(:num)', 'ClientesController::details/$1', ['as' => 'cliente.details']);

$routes->get('/login', 'LoginController::Viewlogin', ['as' => 'login']);
$routes->post('/logar', 'LoginController::login', ['as' => 'logar']); 
$routes->get('/logout', 'LoginController::logout', ['as' => 'logout']);







