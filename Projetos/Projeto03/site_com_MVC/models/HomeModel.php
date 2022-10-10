<?php

    namespace Models;

    class HomeModel extends Model{

        public static function pegarClientes(){
            $clientes = \MySql::connect()->prepare("SELECT * FROM clientes");
            $clientes->execute();

            return $clientes->fetchAll();
        }

    }

    ?>