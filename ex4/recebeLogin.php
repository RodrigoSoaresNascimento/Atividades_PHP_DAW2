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

    //explode the date to get month, day and year
    $peso =  $_POST["usuario"];
    $altura = $_POST["senha"];
    $imc = $peso / ($altura * $altura);

    if ($imc > 25) {
        echo 'Você está acima do peso!.';
    } else {
        echo 'Você está saudável!.';
    }

    ?>
</body>

</html>