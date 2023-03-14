<!DOCTYPE html>
<html>
<head> <h1>Soma</h1> <meta charset="UTF-8">  </head>
<?php
$num1 = $_GET["n1"];
$num2 = $_GET["n2"];
$soma = ($num1+$num2);
$dif = $num1 - $num2;
echo "<p>$num1 + $num2 = $soma.</p>";
echo "<p>$num1 - $num2 = $dif .</p>";
?>
</html>
