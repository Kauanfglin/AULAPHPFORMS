<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tempo viagem</h1>
    <form id="forms" action="kauan2.php" method="post">
        <div id="n1">
            <label for="velocidade">Velocidade média: </label>
            <input type="number" name="velocidade" id="velocidade">
        </div>
        <div id="n1">
            <label for="distancia">Distância da viagem (km): </label>
            <input type="number" name="distancia" id="distancia">
        </div>
        <div id="n1">
            <label for="consumo">Consumo médio: </label>
            <input type="number" name="consumo" id="consumo">
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $distancia = $_POST["distancia"];
        $velocidade = $_POST["velocidade"];
        $consumo = $_POST["consumo"];

        $thoras = $distancia / $velocidade;
        $thoras_formatado = number_format($thoras, 3);

        $tcombustivel = $distancia / $consumo;
        $tcombustivel_formatado = number_format($tcombustivel, 3);

        echo "<h2>Resultados:</h2>";
        echo "<p>Total horas: " . $thoras_formatado . "</p>";
        echo "<p>Total combustível: " . $tcombustivel_formatado . "</p>";
    }
    ?>
</body>
</html>
