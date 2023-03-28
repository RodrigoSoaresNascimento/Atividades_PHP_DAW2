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

        echo $_POST["usuario"];
        echo $_POST["senha"];
        echo $_POST['genero'];
        $ondeestuda = $_POST['onde_estuda'];

        //print_r($ondeestuda);

        foreach($ondeestuda as $escola){
            echo "<br/>".$escola;
        }

    ?>
</body>
</html>