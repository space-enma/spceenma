<?php
use core\Router;

$router = new Router();

$router->get('/home', 'HomeController@home');

$router->get('/contato', 'HomeController@contato');
$router->post('/contato', 'HomeController@contatoAction');

