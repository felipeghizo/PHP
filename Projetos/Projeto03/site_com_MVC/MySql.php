<?php

    class MySql{

        private $pdo;

        public static function connect(){
            if(!isset($pdo)){
                $pdo = new PDO("mysql:host=localhost; dbname=mvc", "root", "");
            }

            return $pdo;
        }

    }

?>