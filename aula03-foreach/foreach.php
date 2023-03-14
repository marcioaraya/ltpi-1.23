<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <h1>Foreach</h1>
    <?php
    $nota["Mateus"] = 10.0;
    $nota["Marcelo"] = 9.0;
    $nota["Leonardo"] = 9.5;

    foreach($nota as $n){
        echo $n . "<br>";
    }  

    echo '<hr>';

    foreach($nota as $p=>$n){
        echo "$p tirou nota $n . <br>";
    }
    ?>
</body>
</html>