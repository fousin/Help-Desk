<?php require_once("../controller/validador_acesso.php"); ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
      <a class="navbar-brand" href="home.php">
        <img src="../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Registro Chamado
      </a>
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="../controller/logoff.php">Sair</a></li>
      </ul>
    </nav>

    <div class="container col-6">    
      <div class="row">
        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Criação de Usuario
            </div>
            <div class="card-body">
              <div class="row  justify-content-center align-items-center">
                <form action="../controller/cria_usuario_comum.php" method="post">
                  <div class="row">
                    <div class="form-group col-4">
                      <label for="">Email</label>
                      <input name="emailCadastro" type="email" class="form-control" placeholder="E-mail">
                    </div>
                    
                    <div class="form-group  col-4">
                      <label for="">Senha</label>
                      <input name="senhaCadastro" type="password" class="form-control" placeholder="Senha" >
                    </div>
                    
                    <div class="form-group col-4">
                      <br>
                      <input id="adm" name="adm" type="radio" value="adm" autocomplete="off">
                      <label  for="adm">Administrador</label>
                      <br>
                      <input id="commum" name="adm" type="radio" value="commum" autocomplete="off">
                      <label  for="adm">Comum</label>
                        
                    </div>

                      
                  </div>

                  <?php if( isset($_GET['cod']) && $_GET['cod']=='campovazio'){ ?>
                    <div class='text-danger'>
                      Por favor, preencha todos os campos
                    </div>
                  <?php } ?>
                  
                  <?php if( isset($_GET['cod']) && $_GET['cod']=='emailUser'){ ?>
                    <div class='text-danger'>
                      Email Já cadastrado
                    </div>
                  <?php } ?>

                  <?php if( isset($_GET['cod']) && $_GET['cod']=='success'){ ?>
                    <div class='text-success'>
                      Cadastro realizado com sucesso
                    </div>
                  <?php } ?>

                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>