<form method="post" enctype="multipart/form-data">

  <input type="file" name="fileUpload">

  <button type="submit">Send</button>

</form>

<?php

  // var_dump($_SERVER);

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $file = $_FILES['fileUpload'];

    if ($file['error']) {

      throw new Exception("Error: ".$file['error']);

    }

    $dirUploads = 'uploads';

    if (!is_dir($dirUploads)) {

      mkdir($dirUploads);

    }

    var_dump($file);

    if (move_uploaded_file($file['tmp_name'], $dirUploads . DIRECTORY_SEPARATOR . $file['name'])) {

      echo 'Upload realizado com sucesso!';

    } else {

      throw new Exception("Não foi possível realizar o upload.");

    }
  }

 ?>
