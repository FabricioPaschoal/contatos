<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .cad{
        width: 100vw;
        height: 100vh;
         background: #6C7A89;
         display: flex;
         flex-direction: row;
         justify-content: center;
         align-items: center

      }
      .box {
        text-align: center;
         width: 300px;
         height: 300px;
         background: #ffffff;
     }
     body {
        margin: 0px;
      }
    </style>
  </head>
  <body>

    <div class="cad">
      <div class="box">
        <section id="contatos">
       <header><h1>Contatos cadastrados</h1></header>

       <?php
          require_once('bd.php');
          $sql = "SELECT nome, apelido FROM contatos";
          $result = $conn->query($sql) or die($conn->error);
          while($row = $result->fetch_assoc()) {
            echo "<article class='one-twitt'>\n";
            echo "<header><span class='listaContatos'>".'NOME: '.$row["nome"]."</span> . ".'APELIDO: ' .$row["apelido"]."</header>\n";
            echo "</article>\n";
          }
          $conn->close();
       ?>
      </div>
    </div>



</section>
  </body>
</html>
