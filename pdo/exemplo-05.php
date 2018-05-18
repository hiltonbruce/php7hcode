<?php

  $conn = new PDO("mysql:dbname=dbphp7;host=localhost","bruce","x9735pla");

  $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

  $id = "1";

  $stmt ->bindParam(":ID", $id);

  $stmt->execute();

  echo "Apagado com sucesso!!";
  
 ?>
