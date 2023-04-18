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
        $alunos = [array("nome"=>"Pedro","media"=>"5","sexo"=>"M"),
        array("nome"=>"Jadir","media"=>"7","sexo"=>"ND"),
        array("nome"=>"Maria","media"=>"8","sexo"=>"F")];

        echo '<table border="1">';
        echo '<tr><th>Nome</th><th>Média</th><th>Gênero</th><th>Situação</th>';
        foreach($alunos as $al){
            echo '<tr>';

            echo '<td>'.$al["nome"].'</td>';
            echo '<td>'.$al["media"].'</td>';
            echo '<td>'.$al["sexo"].'</td>';
            if ($al["media"]>=6){
                $situacao = "aprovado";
            } else {
                $situacao = "reprovado";
            }
            echo '<td>'.$situacao.'</td>';
            
            echo '</tr>';
        }
        echo '</table>';
    ?>
</body>
</html>