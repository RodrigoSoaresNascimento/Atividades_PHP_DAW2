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
    $dateOfBirth = $_POST["idade"];
    $today = date("2014-01-01");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    echo 'Sua idade em 2014 é:  ' . $diff->format('%y');
    ?>
</body>

</html>