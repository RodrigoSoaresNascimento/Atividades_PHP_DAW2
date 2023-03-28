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
    $base =  $_POST["base"];
    $altura = $_POST["altura"];

    echo 'A area do retangulo é: '.($base * $altura).' é o perimentro é: '.($base + $altura) * 2;

    ?>
</body>

</html>