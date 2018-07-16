<?php
  $db_host = "localhost";
  $db_login = "contatos";
  $db_password = "123456789q";
  $db_db = "contatos";
  $conn = new mysqli($db_host, $db_login, $db_password, $db_db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "falhou a conexão";
  }

 ?>
