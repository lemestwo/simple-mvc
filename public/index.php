<?php

require __DIR__ . '/../vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->setNamespace('\App\Controllers');
$router->get('/', 'UserController@index');
$router->get('/user', 'UserController@index');
$router->get('/user/create', 'UserController@create');
$router->post('/user', 'UserController@store');
$router->get('/user/{id}/delete', 'UserController@delete');
$router->get('/user/{id}/edit', 'UserController@edit');
$router->post('/user/{id}', 'UserController@patch');

$router->run();
