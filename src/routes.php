<?php
use core\Router;

$router = new Router();

$router->get('/home', 'HomeController@home');

$router->get('/equipe', 'HomeController@equipe');

$router->get('/servicos', 'HomeController@servicos');

$router->get('/sobre', 'HomeController@sobre');

$router->get('/contato', 'HomeController@contato');
$router->post('/contato', 'HomeController@contatoAction');

