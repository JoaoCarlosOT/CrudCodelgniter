<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/search', 'PostsController::search', ['as' => 'post.search']);
$routes->get('/', 'PostsController::index', ['as' => 'home']); 
$routes->get('/create', 'PostsController::create', ['as' => 'post.create']); 
$routes->post('/posts', 'PostsController::insert', ['as' => 'post.store']); 
$routes->get('/posts/(:num)/edit', 'PostsController::edit/$1', ['as' => 'post.edit']); 
$routes->put('/posts/(:num)', 'PostsController::update/$1', ['as' => 'post.update']); 
$routes->delete('/posts/(:num)', 'PostsController::delete/$1', ['as' => 'post.delete']);
$routes->get('/posts/(:num)', 'PostsController::details/$1', ['as' => 'post.details']);







