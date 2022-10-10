<?php
    namespace controllers;
    class LoginController extends Controller{
        
        public function __construct($view, $model){
            parent::__construct($view, $model);
        }

        public function index(){
            if(isset($_POST["acao"])){
                if($this->model->validarLoging($_POST["login"], $_POST["password"])){
                    die("Logado!");
                } else {
                    die("Acesso negado!");
                }
            }
            $this->view->render("login.php");
        }
    }
?>