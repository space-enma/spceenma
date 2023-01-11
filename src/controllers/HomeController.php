<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    public function form() {
        $this->render('form');
    }

    public function formAction() {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email){
            $data = Usuario::select()->where('email', $email)->execute();

            if(count($data)=== 0){
                //insere
                Usuario::insert([
                    'nome' => $name,
                    'email' => $email
                ])->execute();
                // redirect para /
                $this->redirect('/form');
            }
        } 

        //redirect para \form
        $this->redirect('/form');
    }
} 