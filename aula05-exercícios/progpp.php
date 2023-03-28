<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ping Pong</title>
</head>

<body>
    <h1>Ping Pong </h1>
    <?php

    #tratar dados do formulário
    $inicio = $_GET["inicio"];
    $fim = $_GET["fim"];
    if ($inicio > $fim) {
        echo "<p>O valor de <b>início</b> deve ser menor que <b>fim</b></p>";
    } else {
        for ($i = $inicio; $i <= $fim; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "<p>PingPong</p>";
            } else if ($i % 3 == 0) {
                echo "<p>Ping</p>";
            } else if ($i % 5 == 0) {
                echo "<p>Pong</p>";
            } else {
                echo "<p>$i</p>";
            }
        }
    }
    echo "<a href=\"formpp.html\">Voltar para formulário</a>";
    ?>

</body>

</html>




