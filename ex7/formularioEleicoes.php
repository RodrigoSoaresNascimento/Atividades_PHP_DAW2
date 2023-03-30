<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="recebeFormulario.php" method="post">
        <label> Formulario <br /></label>
        <label> Nome (opcional) </label>
        <input type="text" name="nome"> <br />
        <p></p>
        <label> Idade </label>

        <select name="idade">
            <option value="">--- Escolha um intervalo ---</option>
            <option value="18">16 a 18</option>
            <option value="20">18 a 20</option>
            <option value="22">20 a 22</option>
            <option value="30">22 a 30</option>
        </select><br>
        <p></p>
        <label> Naturatidade </label>
        <input type="text" name="naturalidade"> <br />
        <p></p>
        <label> Nacionalidade </label>
        <input type="text" name="nacionalidade"> <br />
        <p></p>
        <label> Votou na eleição anterior para prefeito </label> <br />
        <p></p>
        <input type="radio" value="Sim" name="voto">Sim
        <input type="radio" value="Nao" name="voto">Não <br>
        <p></p>
        <label> Marque os partidos que você mais se identifica </label> <br />
        <input type="checkbox" name="partidos[]" value="PT"> PT
        <input type="checkbox" name="partidos[]" value="PSBD"> PSDB
        <input type="checkbox" name="partidos[]" value="Democratas"> Democratas
        <input type="checkbox" name="partidos[]" value="PSTU"> PSTU
        <input type="checkbox" name="partidos[]" value="Outros"> Outros <br>
        <p></p>
        <label> Como você classifica a gestão atual? </label> <br />
        <input type="radio" value="Otima" name="classificacao">Otima
        <input type="radio" value="Boa" name="classificacao">Boa
        <input type="radio" value="Regular" name="classificacao">Regular
        <input type="radio" value="Pessima" name="classificacao">Pessima <br>
        <p></p>
        <label> Quais os principais problemas que você vê na cidade </label> <br />
        <textarea name="comentario" rows="4" cols="50"> </textarea><br />
        <p></p>
        <input type="submit" value="Enviar"> <input type="submit" value="Limpar"><br />
    </form>
</body>

</html>