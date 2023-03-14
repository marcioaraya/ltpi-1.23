<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <h1>For</h1>
    <?php

        $nome = ["Ramon", "Diniz", "Enzo"];
        /* outras formas de criar vetor
        $nome = array();

        ou 

        $nome[0] = "Ramon";
        $
        */

        echo $nome[0]."<br>";
        echo $nome[1]."<br>";
        echo $nome[2]."<br>";
echo '<hr>';
        for($i=0;$i<=2;$i++){
            echo $nome[$i] . '<br>';
        }
/* acrescentando dois nomes no vetor */
        $nome[] = "Letícia";
        $nome[] = "Ana";
        echo '<hr>';
        for($i=0;$i < count($nome);$i++){
            echo $nome[$i] . '<br>';
        }
/* acrescentando dois nomes no vetor */
$nome[] = "Brenda";
$nome[] = "Lucas";
$nome[] = "Ana Luiza";
echo '<hr>';
for($i=0;$i < count($nome);$i++){
    echo $nome[$i] . '<br>';
}


    ?>
</body>
</html>