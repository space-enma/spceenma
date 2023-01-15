<?php
use core\Router;

$router = new Router();

$router->get('/home', 'HomeController@home');

