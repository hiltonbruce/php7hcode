<?php

  $file = fopen('teste.txt', 'w+');

  fclose($file);

  sleep(5);

  unlink('teste.txt');

  echo 'Arquivo removido com sucesso!';

 ?>
