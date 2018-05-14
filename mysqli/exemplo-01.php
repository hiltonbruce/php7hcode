<?php

  $conn = new mysqli("localhost", "bruce", "x9735pla", "dbphp7");

  if ($conn->connect_error) {
    echo 'Error: ' . $conn->connect_error;
  }
  echo '<br />';
  var_dump ($conn);

  $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUE (?,?)");

  $stmt->bind_param("ss",$login,$pass);

  $login = "user";
  $pass = "12345";

  $stmt->execute();

  $login = "root";
  $pass = "!@#$%";
  
  $stmt->execute();

?>
