<?php 
  require_once("../controller/validador_acesso.php");
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Registro Chamados
      </a>
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="../controller/logoff.php">Sair</a></li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">

              <?php if($_SESSION['perfil_id']== 1 ) {?>
                <div class="row">
                  <div class="col-4 d-flex justify-content-center">
                    <a href="cria_usuario.php">
                      <img src="../img/new-user.png" width="70" height="70" alt="Criar Usuario">
                    </a>
                  </div>

                  <div class="col-4 d-flex justify-content-center">
                    <a href="abrir_chamado.php">
                      <img src="../img/formulario_abrir_chamado.png" width="70" height="70" alt="Registrar chamado">
                      
                    </a>
                  </div>
                  <div class="col-4 d-flex justify-content-center">
                    <a href="consultar_chamado.php">
                      <img src="../img/formulario_consultar_chamado.png" width="70" height="70" alt="Consultar chamados">
                    </a>
                  </div>
                </div>
              <?php } else {?>
                <div class="row">
                  <div class="col-6 d-flex justify-content-center">
                    <a href="abrir_chamado.php">
                      <img src="../img/formulario_abrir_chamado.png" width="70" height="70" alt="Registrar chamado">
                      
                    </a>
                  </div>
                  <div class="col-6 d-flex justify-content-center">
                    <a href="consultar_chamado.php">
                      <img src="../img/formulario_consultar_chamado.png" width="70" height="70" alt="Consultar chamados">
                    </a>
                  </div>
                </div>
              <?php }?>

            </div>
          </div>
        </div>
    </div>

    <!--bootstrap scripts-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>