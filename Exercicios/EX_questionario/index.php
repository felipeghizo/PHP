<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionário</title>
</head>
<body>

    <?php

        if(isset($_POST["acao"])){
            $respostas = ["Dom_Joao_VI", "1991", "Antartica"];
            $pontuacao = 0;
            $index = 0;
            foreach($_POST as $key => $value){
                if($key != "acao"){
                    if($respostas[$index] == $value){
                        $pontuacao++;
                }
                $index++;
            }
        }
        echo "Você acertou: ".$pontuacao."/".$index." das perguntas.";
    }

    ?>
    <form method="post">
        <p>Quem é o pai de Dom Pedro I?</p>
        <label><span>Dom Pedro</span> <input type="radio" name="pergunta_1" value="Dom_Pedro"/></label>
        </br>
        <label><span>Dom João VI</span> <input type="radio" name="pergunta_1" value="Dom_Joao_VI"/></label>
        </br>
        <label><span>Rasputin</span> <input type="radio" name="pergunta_1" value="Rasputin"/></label>
        <hr>
        <p>Em que ano terminou a gurra fria?</p>
        <label><span>1991</span> <input type="radio" name="pergunta_2" value="1991"/></label>
        </br>
        <label><span>1981</span> <input type="radio" name="pergunta_2" value="1981"/></label>
        </br>
        <label><span>1971</span> <input type="radio" name="pergunta_2" value="1971"/></label>
        <hr>
        <p>Qual o maior deserto do mundo?</p>
        <label><span>Deserto da Arábia</span> <input type="radio" name="pergunta_3" value="Arabia"/></label>
        </br>
        <label><span>Antártica</span> <input type="radio" name="pergunta_3" value="Antartica"/></label>
        </br>
        <label><span>Saara</span> <input type="radio" name="pergunta_3" value="Saara"/></label>
        <hr>
        <input type="submit" name="acao" value="Enviar!"/>
    </form>
</body>
</html>