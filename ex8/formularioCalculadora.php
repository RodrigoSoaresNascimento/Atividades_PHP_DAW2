<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="calculadoraCompleta.php" method="post">
        <label> Calculadora <br /></label>
        <label> Número 1 </label>
        <input type="text" name="numero1"> <br />
        <label> Número 2 </label>
        <input type="text" name="numero2"> <br />
       
        <label> Operação </label>
        <select name="operacao">
            <option value="somar">somar</option>
            <option value="subtrair">subtrair</option>
            <option value="multiplicar">multiplicar</option>
            <option value="dividir">dividir</option>
        </select><br>
        
        <input type="submit" value="Calcular"> <br />
    </form>
</body>

</html>