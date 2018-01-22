<?php
 class Cliente
 {
   public $nome; //atributo
   public $codigo; // atributo

 }
 $x = new Cliente(); //criando objeto
 $x ->nome = "Rafael Cosentino"; // atribuindo valor
 $x ->codigo = "Codigo 1"; // atribuindo valor

 echo "Nome: $x->nome" . PHP.EOL;
 echo "codigo: $x->codigo" . PHP.EOL;

 $y = new Cliente();
 $y ->nome = "Jonas Hirata";
 $y ->codigo = "Codigo 2";

 echo "Nome: $y->nome" . PHP.EOL;
 echo "codigo: $y->codigo" . PHP.EOL;
?>
