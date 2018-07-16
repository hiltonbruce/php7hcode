<?php

  if (!is_dir('images')) {
    mkdir('images');
  }

  foreach (scandir('images') as $item) {

    if (!in_array($item, array('.','..'))) {

      if (unlink('images/'.$item)) {

        echo $item. ' - Apagado!<br />';

      } else {

        echo $item . 'Não foi apagado!<br />';

      }

      sleep (2);

    }

  }

echo 'Ok!';
 ?>
