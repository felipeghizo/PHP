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
        require_once 'POO01.php';

        $c1 = new Caneta("aqua");
        $c2 = new Caneta("BIC", "vermelha");
        print_r($c2);
        print_r($c2->getCor());
        print_r($c1->abrir());
        print_r($c1);
    ?>
    </pre>
</body>
</html>