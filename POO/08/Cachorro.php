<?php
    require_once 'Mamifero.php';
    class Cachorro extends Mamifero{

        public function emitirSom(){
            echo "<p> Au!Au! </p>";
        }

        public function enterrarOsso(){
            echo "<p> Osso enterrado </p>";
        }

    }

?>