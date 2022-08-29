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

        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';

        $v[0] = new Video("Aula 1");
        $v[1] = new Video("Aula 2");
        $v[2] = new Video("Aula 3");

        $g[0] = new Gafanhoto("Maria", 19, "F", "Boa");
        $g[1] = new Gafanhoto("Felipe", 21, "M", "Boa");

        $vis[0] = new Visualizacao($g[0], $v[1]);
        $vis[0]->avaliarNota(10);
        $vis[1] = new Visualizacao($g[1], $v[1]);
        $vis[1]->avaliarNota(30);

        print_r($vis[0]);

        ?>
    </pre>
</body>
</html>