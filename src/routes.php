<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');


$router->get('/form', 'HomeController@form');
$router->post('/form', 'HomeController@formAction');