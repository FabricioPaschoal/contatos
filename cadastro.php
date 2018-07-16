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
        <form class="CamposCadastro" action="insereCadastroBD.php" method="post">
          </br>
          <input type="text" name="Nome" value="" placeholder="NOME"></br></br>
          <input type="text" name="Apelido" value="" placeholder="APELIDO"></br></br>
          <footer>
                <input type="submit" value="Enviar" class="button send"/>
                <input type="reset" value="Limpar" class="button"/>
          </footer>
          </br>
        </div>
      </div>
  </body>
</html>
