<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
      .card-login{
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
      
    </style>

  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Registro Chamados
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
              <form action="controller/valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha" autocomplete="off">
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
              </form>
            </div>
          </div>
        </div>
    </div>


             
    <!--bootstrap scripts-->
    <script src="/bootstrap/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>