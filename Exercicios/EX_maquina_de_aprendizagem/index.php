<?php

    session_start();
    $_SESSION["perguntas"][] = "Quanto custa o curso?";
    $_SESSION["perguntas"][] = "Posso parcelar?";

    $_SESSION["respostas"][] = "R$ 200,00.";
    $_SESSION["respostas"][] = "Sim.";

    if(isset($_POST["acao"])){
        $pergunta = $_POST["pergunta"];
        foreach($_SESSION["perguntas"] as $key => $value){
            $pergunta = str_replace("?", "", $pergunta);
            $testar = preg_match("/".$pergunta."/i", $value);
            if($testar){
                $resposta = $_SESSION["respostas"][$key];
                break;
            }
        }
    } else if(isset($_POST["cadastrar_resposta"])){
        $_SESSION["perguntas"][] = $_POST["pergunta"];
        $_SESSION["respostas"][] = $_POST["resposta"];
        echo "<script>alert('Valeu brother!!! ;)')</script>";
    }

?>

<form method="post">
    <h2>Realize sua pergunta: </h2>
    <input type="text" name="pergunta" />
    <input type="submit" name="acao" value="ENVIAR!" />
    <br>
    <?php
        if(isset($resposta)){
            echo "A resposta para sua pergunta provavelmente é ".$resposta;
        } else if(isset($_POST["acao"])){
            echo "Ééééé......";
            $criarResposta = true;
        }
    ?>
</form>

<?php

        if ($criarResposta && isset($_POST["acao"])){
?>
<form method="post">
    <h2> Ajude nosso bot dando a sua possivel resposta: </h2>
    <input type="text" name="resposta"/>
    <input type="submit" name="cadastrar_resposta"/>
    <input type="hidden" name="pergunta" value="<?php echo $_POST['pergunta'] ?>"/>
</form>
<?php
        }
?>