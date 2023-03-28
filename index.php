<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php echo '<h1>Hello World</h1>'; ?>
    <?php echo '<p> Bora jobson <p>'; ?>
    <a href="recebedados.php?nome=Rodrigo&sobrenome=Lopes">
        Teste de envio no php
    </a>

    <form action="recebedados.php" method="post">
        <label> Usuario: <br />
            <input type="text" name="usuario"><br />
            <label> Senha: <br />
                <input type="password
        " name="senha"> <br />
                
                <label> Genero: </label> <br />
                <input type="radio" value="M" name="genero">Masculino <br/>
                <input type="radio" value="F" name="genero">Feminino <br />
                <input type="checkbox" name="onde_estuda[]" value="IFRN"> IFRN <br>
                <input type="checkbox" name="onde_estuda[]" value="IFPB"> IFPB <br>
                <input type="checkbox" name="onde_estuda[]" value="UFCG"> UFCG <br>
                <input type="checkbox" name="onde_estuda[]" value="Outro"> Outro <br>
                <input type="submit" value="Enviar"> <br />
    </form>

</body>

</html>