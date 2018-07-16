<?php
  require_once('bd.php');
  require_once('confereSQL.php');
  $nomeContato = fromPost("Nome");
  $apelidoContato = fromPost("Apelido");

   $stmt = $conn->prepare("INSERT INTO contatos (nome, apelido ) VALUES (?, ?)");
   $stmt->bind_param("ss", $nomeContato, $apelidoContato);
   if ($stmt->execute()){
      echo "ok";
      header("Location: index.php");
   } else {
      session_start();
      $_SESSION['error'] = "erro no banco de dados. ".$conn->error;
      echo "falha";
      echo $conn->error;
   }

 ?>
