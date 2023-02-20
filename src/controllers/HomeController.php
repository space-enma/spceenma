<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {
    public function home() {
        $this->render('home');
    }
    public function equipe() {
        $this->render('equipe');
    }
    public function servicos() {
        $this->render('servicos');
    }
    public function sobre() {
        $this->render('sobre');
    }

    public function contato() {
        $this->render('contato');
    }

    public function contatoAction() {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $telefone = filter_input(INPUT_POST, 'telefone');
        $text = filter_input(INPUT_POST, 'text');

        if($name && $email && $telefone && $text ){
            $data = Usuario::select()->where('email', $email)->execute();

            if(count($data)=== 0){
                //insere
                Usuario::insert([
                    'nome' => $name,
                    'email' => $email,
                    'telefone' => $telefone,
                    'text' => $text
                ])->execute();
                // redirect para /
                $this->redirect('/home');
            }
        } 
        $this->redirect('/home');
    }
} 