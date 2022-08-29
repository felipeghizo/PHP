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
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $p[0] = new Pessoa("Maria", 19, "F");
            $p[1] = new Pessoa("Felipe", 21, "M");

            $l[0] = new Livro("Biomedicina", "frenccesca", 500, $p[0]);
            $l[1] = new Livro("Programação", "Alan Turing", 500, $p[1]);

            print_r($l[0]);
            print_r($l[1]);

            $l[0]->abrir();
            $l[0]->folhear(28);
            $l[0]->detalhes();

            print_r($l[0]);
        
        ?>
    </pre>
</body>
</html>