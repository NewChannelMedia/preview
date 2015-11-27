<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="googlebot" content="index,follow">
    <title>Intermed | LogIn</title>
    <link href="css/application.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="favicon.ico" rel="shortcut icon">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="js/modernizr-2.7.1.min.js"></script>
  </head>
  <body class="sign-in-up" id="to-top">
    <div class="bg-cover"></div>
    <section class="sign-in-up-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-1 col-xs-offset-1">
            <figure class="text-center">
              <a href="./index.php">
                <img class="img-logo" src="img/intermed/logoWhite.png" alt="">
              </a>
            </figure>
          </div>
        </div>
        <section class="sign-in-up-content">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-1 col-xs-offset-1">
              <form class="sign-in-up-form" role="form" method="post" onsubmit="return false;" autocomplete="off">
                <input type="hidden" id="tipoUsuario" value="P">
                <div class="form-group">
                  <input class="form-control input-lg" id="usuario" name="usuario" type="email" placeholder="Usuario">
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" id="contraseña" name="contrasena" type="password" placeholder="Contraseña">
                </div>
                <button class="btn btn-success bordered btn-lg btn-block" type="submit" onclick="iniciarSesion()">Entrar</button>
              </form>
            </div>
          </div>
        </section>
        <hr>
        <section class="sign-in-up-content">
          <div class="row">
            <form class="sign-in-up-form" action="./loginPacientes.php" role="form" method="post" onsubmit="return false;">
              <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                <div class="row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control input-lg" id="nombre" type="text" placeholder="Nombre" autocomplete="off">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control input-lg" id="apellidos" type="text" placeholder="Apellidos" autocomplete="off">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control input-lg" id="correoReg" type="email" placeholder="Correo" autocomplete="off">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control input-lg" id="passReg" type="password" placeholder="Contraseña" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-1 col-xs-offset-1">
                <div class="checkbox">
                  <label class="text-muted text-center">
                    <input type="checkbox" id="terminos">
                    He leído los terminos y la politica de privacidad
                  </label>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-1 col-xs-offset-1">
                <button class="btn btn-success bordered btn-lg btn-block" type="submit" onclick="registrarUsuario()">Registrarse</button>
              </div>
            </form>
          </div>
        </section>
      </div>
    </section>
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/application.js"></script>
    <script src="js/utils.js"></script>
  </body>
</html>
