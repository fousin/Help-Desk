<?php 
  require_once("../controller/validador_acesso.php");

  $chamados = [];

  $arquivo = fopen('../data/arquivo.hd', 'r');

  //enquanto houver registros
  while(!feof($arquivo)){//testa o fim de um arquivo end of file//retorna true se chegar ao final do arquivo
    $registro = fgets($arquivo);//recuperar tudo na linha ou ate a quebra de linha especificada
    
    $chamado_dados = explode('#', $registro);

    if($_SESSION['perfil_id'] == 2) {

      //se usuário autenticado não for o usuário de abertura do chamado então não faz nada
      if($_SESSION['id'] != $chamado_dados[0]) {
        continue; //não faz nada

      } else {
        $chamados[] = $registro; //adiciona o registro do arquivo ao array $chamados
      }

    } else {
      $chamados[] = $registro; //adiciona o registro do arquivo ao array $chamados
    }

  }
  fclose($arquivo);
  
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
      
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Registro Chamados
      </a>
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="../controller/logoff.php">Sair</a></li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">
        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              <?php foreach($chamados as $chamado){ ?>

                <?php
                  $chamado_dados = explode('#', $chamado);
					        //não existe detalhes do chamado se ele não estiver completo
                  if(count($chamado_dados) < 3) {
                    continue;
                  }
                ?>
                <div class="card mb-3 bg-light">
                  <div class="card-body row">
                    <div class="col-10">
                      <h5 class="card-title"><?= $chamado_dados[1]; ?></h5>
                      <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2]; ?></h6>
                      <p class="card-text"><?= $chamado_dados[3]; ?></p>
                    </div>
                    <div class="col-2">
                      <button class="btn btn-success"><i class="fas fa-chevron-down"></i></button>
                      <button class="btn btn-danger"><i class="fas fa-times"></i></button>
                    </div>
                  </div>
                </div>

              <?php } ?>
              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--bootstrap scripts-->
    <script src="../bootstrap/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>