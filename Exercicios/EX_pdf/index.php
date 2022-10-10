<?php

    include('vendor/autoload.php');

    $mpdf = new \Mpdf\Mpdf();
    $valor = "";
    for($i = 0; $i < 10; $i++){
        $valor.="<h3>Valor ".$i."</h3>";
        $valor.="<hr>";
    }
    $mpdf->WriteHTML($valor);
    $mpdf->Output();

?>