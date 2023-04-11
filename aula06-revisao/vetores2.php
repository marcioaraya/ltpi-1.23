<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cores = ["amarelo", "verde", "amarelo", "amarelo", "verde"];

    // contar quantas vezes aparece a palavra "verde"
    $quantidade = 0;
    foreach($cores as $cor){
        if($cor == "verde"){
            $quantidade++;
        }
    }
    echo "<p>A cor \"verde\" aparece $quantidade vezes.</p>";

    // substituir a palavra "amarelo" por "azul"
// & = referencia endereço da memória
    foreach($cores as &$cor){
        if ($cor == "amarelo"){
            $cor = "azul";
        }
    }
    print_r($cores);


?>
</body>
</html>