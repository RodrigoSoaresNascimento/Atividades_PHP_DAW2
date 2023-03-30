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
    $nome1 =  $_POST["nome1"];
    $nome2 = $_POST["nome2"];
    $nome3 = $_POST["nome3"];
    $nome4 = $_POST["nome4"];
    $nome5 = $_POST["nome5"];

    $nomesList = [
        $nome1,
        $nome2,
        $nome3,
        $nome4,
        $nome5
    ];

    foreach ($nomesList as $nomes) {
        echo $nomes."<br/>";
    }


    ?>
</body>

</html>