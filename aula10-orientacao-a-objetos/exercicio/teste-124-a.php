<?php

include "ex124-a.php";

$pessoa1 = new Adulto();

// echo '<hr>';
// var_dump($pessoa1);
// echo '<hr>';

$pessoa1->engordar(70);

// echo '<hr>';
// var_dump($pessoa1);
// echo '<hr>';


echo "<p>A pessoa está com ".$pessoa1->getPeso()." quilos</p>";

$pessoa1->emagrecer(10);

echo "<p>A pessoa está com ".$pessoa1->getPeso()." quilos</p>";

?>