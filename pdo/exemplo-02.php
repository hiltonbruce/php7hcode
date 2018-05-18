<?php

  $conn = new PDO("sqlsvr:Database=dbphp7;server=localhost\SQLEXPRESS;ConectionsPooling=0","sa","senha");

  $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

  $stmt->execute();

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  echo json_encode($results);

 ?>
