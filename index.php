<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
    <script>
      function aviso(){alert('o cadastro feito por esse caminho cria apenas usuarios sem privilégios administrativos')}
    </script>

  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <?php if( isset($_GET['login']) && $_GET['login']=='erro'){ ?>
                  <div class='text-danger'>
                      usuario ou senha inválido(s)
                  </div>
                <?php } ?>

                <?php if( isset($_GET['login']) && $_GET['login']=='erro2'){ ?>
                  <div class='text-danger'>
                      Você deve fazer login primeiro.
                  </div>
                <?php } ?>
                  
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                <a href="" data-toggle="modal" data-target="#cadastroModal" onclick="aviso()">Cadastre-se</a>
              </form>
            </div>
          </div>
        </div>
    </div>

    <!-- Modal -->
    
    <div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastro de usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form action="cria_usuario_comum.php" method="post">
              <div class="form-group">
                <label for="">Email</label>
                <input name="emailCadastro" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <label for="">Senha</label>
                <input name="senhaCadastro" type="password" class="form-control" placeholder="Senha">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
           
          </div>
        </div>
      </div>
    </div>

    <!--bootstrap scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>                
  </body>
</html>