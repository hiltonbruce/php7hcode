<?php

  $filename = 'logo.png';

  $base64 = base64_encode(file_get_contents($filename));

  $fileinfo = new finfo(FILEINFO_MIME_TYPE);

  $mimetype = $fileinfo->file($filename);

  var_dump ($mimetype);

  $base64encode = 'data:'.$mimetype.';base64,' . $base64;

 ?>

<img src='<?PHP echo $base64encode; ?>'>

<a href='<?PHP echo $base64encode; ?>' target="=_blank">Link Para Imagem</a>
