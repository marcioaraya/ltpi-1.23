<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternário</title>
</head>

<body>
    <h1>Ternário</h1>

    <p> O operador ternário é basicamente outra forma de escrever a instrução if.</p>
    <p> Útil quando uma das ações que o if executa é uma atribuição </p>
    <pre>
        if ($media>=6){
            $situacao = "Aprovado";
        } else {
            $situacao = "Reprovado";
        }
    </pre>
    pode ser reescrito com operador ternário
    <pre>
        $situacao = ($media>=6)?"Aprovado":"Reprovado";
    </pre>


    <?php
        $media = 5;

        $situacao = ($media>=6)?"Aprovado":"Reprovado";

        echo "<p>A média é $media e a situação é $situacao</p>";

    ?>

</body>

</html>