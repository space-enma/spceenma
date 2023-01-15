<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {
    public function home() {
        $this->render('home');
    }

} 