<!DOCTYPE html>
<html>

<head>
    <h1>Exemplo While</h1>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    echo "<h1> while </h1>";

    
    echo "<p> No PHP as condições sempre são usadas dentro de parentêses</p>";
    $i = 1;
    while ($i < 10) {
        echo "$i <br>";
        $i++; 
    }

    echo "<h1> exemplo de for </h1>";
    echo "<p>for tem três partes:</p>";
    echo "<ol>";
    echo "<li>antes de iniciar o laço</li>";
    echo "<li>condição - testada antes de cada iteração</li>";
    echo "<li>após instruções do laço</li>";
    echo "</ol>";

    for($i=0; $i<10; $i++){
        echo "$i <br>";
    }

    
    echo "<p>Contagem decrescente</p>";
    for($i=10; $i>0; $i--){
        echo "$i <br>";
    }

    echo "<p>Contagem decrescente</p>";
    for($i=10; $i>0; $i-=3){
        echo "$i <br>";
    }
    ?>

</body>
</html>