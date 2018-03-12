<?php

function ola($texto,$periodo) {
  return "Olá $texto! $periodo<br >";
}

echo ola(NULL, "Bom Dia");
echo ola("","Boa Noite");
echo ola("Glaucio","Boa tarde");
echo ola("João","");
 ?>
