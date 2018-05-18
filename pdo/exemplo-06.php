<?php

  $conn = new PDO("mysql:dbname=dbphp7;host=localhost","bruce","x9735pla");

  $conn->beginTransaction();

  $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

  $id = 2;

  $stmt->execute(array($id));

  //$conn->rollback(); // Não executa o DELETE
  $conn->commit();

  echo "Apagado com sucesso!!";

 ?>
