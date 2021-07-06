<?php
require_once('Controller.php');
require_once(ROOT_PATH.'/core/Models/MainModel.php');

class Home extends Controller {
    public function index() {
        $data = [
            'title' => 'Página inicial'
        ];
        Controller::view([
            'layouts/html_header',
            // 'layouts/navbar',
            'pagina_inicial',
            'layouts/html_footer',
        ], $data);
    }

    public function signup() {
        
        $data = [
            'title' => 'Criar conta'
        ];
        Controller::view([
            'layouts/html_header',
            'layouts/navbar',
            'signup',
            'layouts/html_footer'
        ], $data);
        
        if(isset($_POST['txt_name'])) {
            $main = new MainModel(); 
            $main->signup($_POST);
        }

        //fazer validação ao lado do servidor
    }

    public function login() {
        $data = [
            'title' => 'Login'
        ];
        Controller::view([
            'layouts/html_header',
            'layouts/navbar',
            'signin',
            'layouts/html_footer'
        ], $data);
    }
}