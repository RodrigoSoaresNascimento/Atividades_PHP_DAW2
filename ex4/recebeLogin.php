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
    $usuario =  $_POST["usuario"];
    $senha = $_POST["senha"];
  

    if ($usuario == "maria" & $senha == "12345") {
        echo 'Autenticação realizada com sucesso';
    } else {
        echo 'Você não tem
        permissão de visualizar essa página.';
    }

    ?>
</body>

</html>