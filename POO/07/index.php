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
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            require_once 'Tecnico.php';
            require_once 'Professor.php';
            require_once 'Visitante.php';

            # $a0 = new Pessoa();   ERRO

            $a1 = new Aluno();
            $a1->setNome("Maria");
            $a1->setMatr(2806);
            $a1->setIdade(19);
            $a1->setSexo("F");
            $a1->setCurso("Biomedicina");
            $a1->pagarMensalidade();
            print_r($a1);
        
            $a2 = new Bolsista();
            $a2->setNome("Felipe");
            $a2->setMatr(2806);
            $a2->setIdade(21);
            $a2->setSexo("M");
            $a2->setCurso("Programação");
            $a2->setBolsa(12.5);
            $a2->pagarMensalidade();
            print_r($a2);

            $a3 = new Tecnico();
            $a3->setNome("Sofia");
            $a3->setMatr(2806);
            $a3->setIdade(5);
            $a3->setSexo("F");
            $a3->setCurso("Programação");
            $a3->setRegistroProfissional("Estudante");
            $a3->pagarMensalidade();
            $a3->praticar();
            print_r($a3);

            $a4 = new Professor();
            $a4->setNome("Antonella");
            $a4->setIdade(10);
            $a4->setSexo("F");
            $a4->setEspecialidade("Biomedica");
            $a4->setSalario(10000);
            print_r($a4);

            $a5 = new Visitante();
            $a5->setNome("Miguel");
            $a5->setIdade(1);
            $a5->setSexo("M");
            print_r($a5);
        ?>
    </pre>
</body>
</html>