<?php
 class Conta
 {
   public $numero; //atributo
   public $saldo; // atributo

 }
 $x = new Conta();
 $x ->numero = 123;
 $x ->saldo = 1000;

 echo "Número: $x->numero" . PHP.EOL;
 echo "Saldo: $x->saldo" . PHP.EOL;
?>
