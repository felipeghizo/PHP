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
        require_once 'ControleRemoto.php';

        $c1 = new ControleRemoto();
        $c1->ligar();
        $c1->abrirMenu();
        $c1->play();
        $c1->abrirMenu();
        $c1->menosVolume();
        $c1->abrirMenu();
        $c1->ligarMudo();
        $c1->abrirMenu();
        
    ?>
    </pre>
</body>
</html>