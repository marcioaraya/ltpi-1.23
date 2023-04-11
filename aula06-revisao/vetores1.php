<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vetores</h1>

    <?php
    $cores[0] = "Amarelo";
    $cores[1] = "Vermelho";
    $cores[2] = "Verde";
echo '<hr>';
/* print_r e var_dump são funções para examinar o conteúdo de variáveis
   e são úteis para o desenvolvedor
   NÃO DEVEM ser usadas para apresentar dados para o usuário
   */
    print_r($cores);
    echo '<hr>';
    var_dump($cores);
    echo '<hr>';

    foreach($cores as $p=>$v){
        echo "<p> posição $p - valor $v </p>";
    }

    echo '<hr>';
    $aluno["Nome"] = "Leo";
    $aluno["Curso"] = "ADS";
    $aluno["Semestre"] = "2º";

    foreach($aluno as $p=>$v){
        echo "<p> posição $p - valor $v </p>";
    }

    echo '<hr>';

    $alunos[0] = ["Nome" => "Leo","Curso" => "ADS","Semestre" => "2º"];
    $alunos[1] = ["Nome" => "Mateus","Curso" => "CD","Semestre" => "3º"];
    $alunos[2] = ["Nome" => "Enzo","Curso" => "GTI","Semestre" => "1º"];

    foreach($alunos as $v){
       // var_dump($v);
        echo $v["Nome"] . " - ".$v["Curso"] . " - " . $v["Semestre"]. "<br>";
    }

    echo '<hr>';


    foreach($alunos as $al) {
        foreach($al as $detalhe) {
            echo "$detalhe ";
        }
        echo "<br>";
    }






    ?>


    
</body>
</html>