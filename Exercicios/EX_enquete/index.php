<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
    ?>

    <h2>Enquetes ativas: </h2>
    <?php 
        if(isset($_POST["acao"])){

            if(!isset($_COOKIE['voto'])){
                if(!isset($_POST["resposta_id"])){
                    header("Location:index.php");
                    die();
                }
                setcookie('voto', "true", time()+60*60*24, "/");
                $resposta_id = $_POST["resposta_id"];

                $countRespostas = $pdo->prepare("SELECT votos FROM enquete WHERE id =?");
                $countRespostas->execute(array($resposta_id));

                $contagemAtual = $countRespostas->fetch()["votos"] + 1;

                $pdo->exec("UPDATE enquete SET votos = $contagemAtual WHERE id = $resposta_id");

                echo"RONALDO";
            } else {
                echo "<h2 style='color: red;'> VOCÊ JÁ VOTOU!!! </h2>"; 
            }
        }

        $sql = $pdo->prepare("SELECT * FROM enquete_pergunta");
        $sql->execute();
        $perguntas = $sql->fetchAll();
        foreach($perguntas as $key => $value){
            echo "<form method='post'>";
            echo $value["pergunta"];
            $sql2 = $pdo->prepare("SELECT * FROM enquete WHERE enquete_id = $value[id]");
            $sql2->execute();
            $resposta = $sql2->fetchAll();
            echo "<br>";
            foreach($resposta as $key2 => $respostas){
                echo $respostas['resposta']. "<input type='radio' name='resposta_id' value='".$respostas['id']."'/>";
                echo "<br>";
            }
            echo "<input type='submit' name='acao' value='ENVIAR!'/ >";
            echo "</form>";
            echo "<hr>";

        }
    ?>
</body>
</html>