<?php
    namespace models;
    class LoginModel extends Model{

        public $login = "admin";
        public $senha = "123";

        public function validarLoging($login, $senha){
            if($login == $this->login && $senha == $this->senha){
                return true;
            } else {
                return false;
            }
        }
    }
?>