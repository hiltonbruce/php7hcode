<?php

spl_autoload_register(function($nomeClass){

  var_dump($nomeClass);

  $nomeClass = str_replace('\\', DIRECTORY_SEPARATOR , $nomeClass);#Corrigi o endereço q é trazido
  $dirClass = 'class';
  $filename = $dirClass . DIRECTORY_SEPARATOR . $nomeClass . '.php';

  if (file_exists($filename)) {

    require_once ($filename);

  }
});

 ?>
