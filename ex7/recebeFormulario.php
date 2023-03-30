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

    
    $nome =  $_POST["nome"];
    $idade = $_POST['idade'];
    
    $naturalidade = $_POST['naturalidade'];
    $nacionalidade = $_POST['nacionalidade'];
    $voto = $_POST['voto'];
    $partidos = $_POST['partidos'];
    
    $classificao = $_POST['classificacao'];
    $comentario = $_POST['comentario'];

    echo "o nome é ".$nome."<br/> tem uma idade aproximada de".$idade."<br/> anos 
    sua nacionalidade é: ".$nacionalidade."<br/> é natural da cidade de ".$naturalidade.
    "<br/> votou na ultima eleição para prefeito? ".$voto."<br/> abaixo os partidos que
    se identifica ";
    foreach($partidos as $partidosEscolhidos){
        echo "<br/> ".$partidosEscolhidos;
    }
    echo "<br/> classifica a gestão atual como :".$classificao.
    "<br/>comentarios ".$comentario;


    ?>
</body>

</html>