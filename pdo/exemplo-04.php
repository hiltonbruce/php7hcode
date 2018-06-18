<?php

  $conn = new PDO("mysql:dbname=dbphp7;host=localhost","bruce","x9735pla");

  $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE  idusuario = :ID");

  $login = "joao";
  $password = "qwerty";
  $id = "2";

  $stmt ->bindParam(":LOGIN", $login);
  $stmt ->bindParam(":PASSWORD", $password);
  $stmt ->bindParam(":ID", $id);

  $stmt->execute();

echo "Alterado com sucesso!!";
 ?>
