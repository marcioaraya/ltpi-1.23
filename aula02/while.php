<!DOCTYPE html>
<html>

<head>
    <h1>Exemplo While</h1>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    echo "<h1> exemplo de while </h1>";
    echo "<p>Enquanto (while) a condição for verdadeira, repetirá as instruções do laço </p>";
    echo "<p> No PHP as condições sempre são usadas dentro de parentêses</p>";
    $cont = 1;
    while ($cont < 4) {
        echo "o valor atual de número é $cont <br>";
        $cont++; 
    }

    echo "<h1> contagem decrescente de 10 a 1  </h1>";
    $cont = 10;
    while ($cont > 0) {
        echo "o valor atual de número é $cont <br>";
        $cont--; 
    }

    echo "<h1> while - dimininuir de 2 em 2 </h1>";
    $cont = 10;
    while ($cont > 0) {
        echo "o valor atual de número é $cont <br>";
        $cont -= 2; # $cont = $cont - 2
    }

    ?>
</body>
</html>