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


    $operacao = $_POST['operacao'];
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];


    try {

        switch ($operacao) {
            
            case 'somar':
                echo "A soma é: " . ($numero1 + $numero2);
                break;
            case 'subtrair':
                echo "A soma é: " . ($numero1 - $numero2);
                break;
            case 'multiplicar':
                echo "A soma é: " . ($numero1 * $numero2);
                break;
            case 'dividir':
                echo "A soma é: " . ($numero1 / $numero2);
                break;

        }

    } catch (Exception $e) {
        echo 'Exceção capturada: ', $e->getMessage(), "\n";
    }




    ?>
</body>

</html>