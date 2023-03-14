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
        $n1=$_GET["n1"];
        $n2=$_GET["n2"];

        for($i=$n1 ; $i <= $n2  ; $i++ ){
            echo $i . "<br>";
        }
    ?>
</body>
</html>