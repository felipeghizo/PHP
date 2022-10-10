<?php

    $autoload = function ($class){
        if(file_exists($class.".php")){
            include($class.".php");
        }else{
            die($class." deu problema!");
        }
    };

    spl_autoload_register($autoload);

    $aplication = new Aplication();
    $aplication->run();

?>