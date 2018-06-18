<?php

  $images = scandir('images');

  // var_dump($images);
  $data = array();

  foreach ($images as $img) {

    if(!in_array($img, array('.','..'))) {

      $filenema = 'images' . DIRECTORY_SEPARATOR . $img;

      $info = pathinfo($filenema);

      $info['size'] = filesize($filenema);

      $info ['group'] = filegroup($filenema);

      // $info ['stat'] = stat($filenema);

      $info ['type'] = filetype($filenema);

      $info ['perm'] = fileperms($filenema);

      $info ['modofield'] = date('d/m/Y H:i:s', filemtime($filenema));
      $info ['acessado'] = date('d/m/Y H:i:s', fileatime($filenema));
      $info ['url'] = 'http://localhost/Udemy/'.$filenema;

      // var_dump ($info);
      array_push($data, $info);
    }
  }

echo json_encode($data);
 ?>
