<?php
  require_once('bd.php');
  require_once('confereSQL.php');
  $telefoneContato = fromPost('Telefone');
  $emailContato = fromPost('Email');
  $enderecoContato = fromPost('Endereco');
  $aniversarioContato = fromPost('Aniversario');
  $contRecebInfo = fromPost('contatoRebendoInformacoes');

  $sql = "SELECT id FROM contatos WHERE nome = '$contRecebInfo'";
  $selectSQL = $conn->query($sql) or die($conn->error);
  $row = $selectSQL->fetch_assoc();
  $id_contato = $row['id'];
  $telefone = 'TELEFONE';
  $EMAIL = 'EMAIL';
  $Endereco = 'ENDERECO';
  $aniversario = 'ANIVERSARIO';
   $stmt = $conn->prepare("INSERT INTO informacoes (tipo, valor, contatos_id) VALUES (?, ?, ?)");
   $stmt->bind_param("sss", $telefone, $telefoneContato, $id_contato);
   if ($stmt->execute()){

   } else {
      session_start();
      $_SESSION['error'] = "erro no banco de dados. ".$conn->error;
      echo "falha";
   }
   $stmt = $conn->prepare("INSERT INTO informacoes (tipo, valor, contatos_id) VALUES (?, ?, ?)");
   $stmt->bind_param("sss", $EMAIL, $emailContato, $id_contato);
   if ($stmt->execute()){

   } else {
      session_start();
      $_SESSION['error'] = "erro no banco de dados. ".$conn->error;
      echo "falha";
   }
   $stmt = $conn->prepare("INSERT INTO informacoes (tipo, valor, contatos_id) VALUES (?, ?, ?)");
   $stmt->bind_param("sss", $Endereco, $enderecoContato, $id_contato);
   if ($stmt->execute()){

   } else {
      session_start();
      $_SESSION['error'] = "erro no banco de dados. ".$conn->error;
      echo "falha";
   }
   $stmt = $conn->prepare("INSERT INTO informacoes (tipo, valor, contatos_id) VALUES (?, ?, ?)");
   $stmt->bind_param("sss", $aniversario, $aniversarioContato, $id_contato);
   if ($stmt->execute()){
      echo "ok";
      header("Location: index.php");
   } else {
      session_start();
      $_SESSION['error'] = "erro no banco de dados. ".$conn->error;
      echo "falha";
   }
 ?>
