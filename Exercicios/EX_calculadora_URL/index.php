<?php

    $valor = $_GET["valor"];
    $sinal = $_GET["sinal"];

    $resultado = 0;

    if($sinal == "mais"){
        foreach($valor as $key => $value){
            $resultado += $value;
        }

    } else if($sinal == "menos"){
        foreach($variabel as $key => $value){
            $resultado -= $value;
        }
    }
    echo $resultado;
?>