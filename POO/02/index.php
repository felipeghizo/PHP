<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php

        require_once "POO02.php";
        $joao = new ContaBanco();
        $julia = new ContaBanco();
        $joao->abrirConta("CC");
        $joao->setDono("Joao");
        $julia->abrirConta("CP");
        $julia->setDono("Julia");

        print_r($julia);
        print_r($joao);

    ?>
    </pre>
</body>
</html>