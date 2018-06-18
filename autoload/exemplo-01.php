<?php

function __autoload($nomeClasse){

  //var_dump($nomeClasse);

  require_once "$nomeClasse.php";
  //var_dump("$nomeClasse.php");
}

$carro = new DelRey();

$carro->acelerar(80);
?>
