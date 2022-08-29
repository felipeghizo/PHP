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
        
            require_once 'Mamifero.php';
            require_once 'Peixe.php';
            require_once 'Reptil.php';
            require_once 'Ave.php';
            require_once 'Cachorro.php';
            require_once 'Canguru.php';
            require_once 'Tartaruga.php';

            $m = new Mamifero();
            $p = new Peixe();
            $r = new Reptil();
            $a = new Ave();
            $c = new Cachorro();
            $k = new Canguru();
            $t = new Tartaruga();

            $m->locomover();
            $p->locomover();
            $r->locomover();
            $a->locomover();
            $t->locomover();
            $k->locomover();

            $m->alimentar();
            $p->alimentar();
            $r->alimentar();
            $a->alimentar();

            $m->emitirSom();
            $p->emitirSom();
            $r->emitirSom();
            $a->emitirSom();
            $c->emitirSom();

            $p->soltarBolha();
            $a->fazerNinho();
            $k->usarBolsa();
            $c->enterrarOsso();

        
        ?>
    </pre>
</body>
</html>