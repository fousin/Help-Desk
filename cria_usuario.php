<?php 
  require_once("validador_acesso.php");
?>

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
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="logoff.php">Sair</a></li>
      </ul>
    </nav>

    <div class="container">    
        <div class="row">
            <div class="card-home">
                <div class="card">
                    <div class="card-header">
                        Criação de Usuario
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form action="cria_usuario_comum.php" method="post">
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
                                        <label  for="#adm">Administrador</label>
                                        <input id="adm" type="radio">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>