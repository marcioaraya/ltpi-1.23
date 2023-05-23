<?php
// salvar como teste-conta.php
include_once "conta.class.php";

$conta1 = new Conta(0, 123);

echo '<hr>';
var_dump($conta1);
echo '<hr>';

echo "O saldo eh:".$conta1->ObterSaldo()."<br>";
$conta1->Depositar(500);

//////echo '<hr>';
// experimente
// 1. retirar o comentário da linha abaixo: deve ocorrer erro porque
//    a propriedade Saldo é protegida
// 2. altere na classe conta a visibilidade de protected para public
//    a instrução será aceita. 
//    
//$conta1->Saldo = -2000;
//echo '<hr>';

echo "O saldo eh:".$conta1->ObterSaldo()."<br>";
$conta1->Sacar(500);
echo "O saldo eh:".$conta1->ObterSaldo()."<br>";

?>