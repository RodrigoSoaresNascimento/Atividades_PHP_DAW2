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
        <label> Formulario <br />
            <label> Nome (opcional)
                <input type="text" name="nome"> <br />
                <label> Idade 

                    <select name="idade">
                        <option value="">--- Escolha um intervalo ---</option>
                        <option value="18">16 a 18</option>
                        <option value="20">18 a 20</option>
                        <option value="22">20 a 22</option>
                        <option value="30">22 a 30</option>
                    </select><br>
                    <label> Naturatidade 
                        <input type="text" name="naturalidade"> <br />
                        <label> Nacionalidade 
                            <input type="text" name="nacionalidade"> <br />
                            <label> Votou na eleição anterior para prefeito <br />
                                <input type="radio" value="S" name="voto">Sim
                                <input type="radio" value="N" name="voto">Não <br>
                                <label> Marque os partidos que você mais se identifica <br />
                                    <input type="checkbox" name="onde_estuda[]" value="PT"> PT 
                                    <input type="checkbox" name="onde_estuda[]" value="PSBD"> PSDB 
                                    <input type="checkbox" name="onde_estuda[]" value="Democratas"> Democratas 
                                    <input type="checkbox" name="onde_estuda[]" value="PSTU"> PSTU 
                                    <input type="checkbox" name="onde_estuda[]" value="Pessima"> Pessima <br>
                                    <label> Como você classifica a gestão atual? <br />
                                    <input type="radio" value="Otima" name="classificacao">Otima 
                                    <input type="radio" value="Boa" name="classificacao">Boa 
                                    <input type="radio" value="Regular" name="classificacao">Regular 
                                    <input type="radio" value="Pessima" name="classificacao">Pessima <br>

                                    <label> Quais os principais problemas que você vê na cidade <br />
                                    <textarea name="comentario" rows="4" cols="50"><br />
                                    
                                    <input type="submit" value="Enviar"> <input type="submit" value="Limpar"><br />
    </form>
</body>

</html>