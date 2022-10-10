<?php

    if(isset($_POST["acao"])){
        $cep = $_POST["cep"];
        $verifica = preg_match("/[0-9]{5}-[0-9]{3}$/", $cep);
    }


?>
<form method="post">
    <input type="text" name="cep" placeholder="Insira seu CEP" />
    <input type="submit" name="acao" value="ENVIAR!" />
</form>