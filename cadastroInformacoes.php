<?php
#chama o arquivo de configuração com o banco
require 'bd.php';
$query = $conn->prepare("SELECT nome FROM contatos");

?>
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
        <form class="CamposCadastro" action="insereInformacoesBD.php" method="post">
          </br>

          <input type="text" name="contatoRebendoInformacoes" value="" placeholder="QUAL O CONTATO RECEBERÁ ESSAS INFORMAÇÕES ?"></br></br>
          <input type="text" name="Telefone" value="" placeholder="TELEFONE"></br></br>
          <input type="email" name="Email" value="" placeholder="E-MAIL"></br></br>
          <input type="text" name="Endereco" value="" placeholder="ENDERECO"></br></br>
          <input type="date" name="Aniversario" value="" placeholder="DATA ANIVERSARIO"></br></br>
          <footer>
                <input type="submit" value="Enviar" class="button send"/>
                <input type="reset" value="Limpar" class="button"/>
          </footer>
          </br>
        </div>
      </div>
  </body>
</html>
