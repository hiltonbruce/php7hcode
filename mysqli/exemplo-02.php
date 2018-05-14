<?php

  $conn = new mysqli("localhost", "bruce", "x9735pla", "dbphp7");

  if ($conn->connect_error) {
    echo 'Error: ' . $conn->connect_error;
  }
//  echo '<br />';
  //var_dump ($conn);
//  echo '<br />';

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) {
  array_push($data, $row);
}

echo json_encode($data);
?>
