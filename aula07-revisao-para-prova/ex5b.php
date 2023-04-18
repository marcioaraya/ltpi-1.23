<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <h1>Solução do Mateus Noleto</h1>
    <?php
        $alunos = [array("nome"=>"Pedro","media"=>"5","sexo"=>"M"),
        array("nome"=>"Jadir","media"=>"7","sexo"=>"ND"),
        array("nome"=>"Maria","media"=>"8","sexo"=>"F")];

        echo '<table border="1">';
        echo '<tr><th>Nome</th><th>Média</th><th>Gênero</th><th>Situação</th>';
        foreach($alunos as $linha){
            
            $media = $linha["media"];
            if ($media > 6) {
                $linha["situacao"] = "aprovado";
            } else {
                $linha["situacao"] = "reprovado";
            }

            echo '<tr>';

            foreach($linha as $v){
                echo "<td> $v </td>";
            }
            
            echo '</tr>';
        }
        echo '</table>';
    ?>
</body>
</html>