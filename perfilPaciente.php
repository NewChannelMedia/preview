<?php
session_start();
if (!isset($_SESSION['session_id']) || !isset($_SESSION['sesiones'][$_SESSION['session_id']]) || $_SESSION['sesiones'][$_SESSION['session_id']]['tipo'] != "P"){
  header('Location: /preview');
} else {
  $sesion = $_SESSION['sesiones'][$_SESSION['session_id']];
}
?><!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta name="google" content="notranslate">
    <meta http-equiv="Content-Language" content="es">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="googlebot" content="index,follow">
    <title>Intermed | Medicos</title>
    <!--<link href="css/application.css" rel="stylesheet">-->
    <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/intermed.css">
    <link rel="stylesheet" type="text/css" href="css/intermed_Plataforma.css">
    <link rel="stylesheet" type="text/css" href="fonts/fonts.css">
    <link href="css/font-awesome.css" rel="stylesheet">

    <link href="favicon.ico" rel="shortcut icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/modernizr-2.7.1.min.js"></script>
  </head>
  <body>
    <nav id="" class="navbar navigator navbar-static-top">
      <section class="navigator-container container-fluid">
        <div class="navigator-inner row">
          <div id="logo-section" class="navigator-inner-section col-lg-3 col-md-3 col-sm-4 col-xs-10">
            <div class="navbar-header navigator-inner-section-cell">
              <a href="./" class="navbar-brand nav-logo white no-transform">
                <img class="logoIntermed" src="img/intermed/logoWhite.png" />
              </a>
            </div>
          </div>
          <button type="button" class="navbar-toggle collapsed btn-menu col-xs-2" data-toggle="collapse" data-target="#collapse-menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="glyphicon glyphicon-menu-hamburger"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapse-menu">
            <div id="search-section" class="navigator-inner-section col-lg-4 col-md-3 col-sm-1 col-xs-12 hidden-sm">
              <div class="input-group navbar-search navigator-inner-section-cell col-md-10 col-md-offset-1 h65-medium">
                <input type="text" class="form-control" id="" name="" placeholder="Search for people, places or things" required="">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </span>
              </div>
            </div>

            <div id="menu-section" class="navigator-inner-section col-lg-5 col-md-6 col-sm-8 col-xs-12">
              <div class="navigator-inner-section-cell">
                <ul class="nav nav-pills nav-justified navigator-inner-section-menu h57-cond s20">
                  <li>
                    <a href="#">Perfil</a>
                  </li>
                  <li>
                    <a href="#">Oficina</a>
                  </li>
                  <li>
                    <a href="#">Agenda</a>
                  </li>
                  <li>
                    <a href="#">Mensajes</a>
                  </li>
                  <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="fa fa-chevron-down"></span></a>
                    <ul class="dropdown-menu pull-right menuDropdown"><!--
                      <li class="menuElemento"><a href="#">Action</a></li>
                      <li class="menuElemento"><a href="#">Another action</a></li>
                      <li class="menuElemento"><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>-->
                      <li class="menuElemento"><a onclick="cerrarSesion();">Cerrar sesión</a></li>
                    </ul>
                  </li>
                  <li class="visible-sm dropdown navigator-dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      Buscar
                    </a>
                    <div class="dropdown-menu dropdown-form panel navigator-dropdown-panel">
                      <div class="panel-body input-group navbar-search navigator-inner-section-cell h65-medium">
                        <input type="text" class="form-control input-lg" id="" name="" placeholder="Search for people, places or things">
                        <span class="input-group-btn">
                          <button class="btn btn-default btn-lg" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                          </button>
                        </span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </nav>

    <div id="sticky-anchor"></div>
    <nav class="nav-menu sticky h67-medcond">
      <div class="container-fluid nav-menu-container">
        <div id="menuMed" class="col-lg-8 col-md-7 col-sm-6 col-xs-12">
          <div class="row nav-menu-row">
            <div class="nav-menu-inner-section">
              <ul class="nav nav-pills nav-justified nav-menu-menu h67-medcond s20">
                <li>
                  <a href="#">Perfil</a>
                </li>
                <li>
                  <a href="#">Publicaciones</a>
                </li>
                <li>
                  <a href="#">Galería</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="addFavMed_up" class="col-lg-4 col-md-5 col-sm-6 col-xs-12 hidden-xs">
          <div class="row nav-menu-row">
            <div class="nav-menu-inner-section">
              <ul class="nav nav-pills nav-justified nav-menu-addButton h57-cond s20">
                <li>
                  <a href="#">
                    <span class="glyphicon h67-medcond s30">+</span> Agrega a
                    <span class="hidden-xs">tus </span>contactos</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <header class="header-section">
      <div class="container-fluid header-container">
        <div class="row header-row">
          <div id="profile" class="header-profile col-lg-8 col-md-7 col-sm-10 col-xs-12">
            <div class="header-profile-container">
              <div class="header-profile-photo-container col-lg-4 col-md-5 col-sm-5 col-xs-12">
                <a href="#" class="header-profile-photo-link center-block">
                  <img class="header-profile-photo-img" src="img/plataforma/dfpp.png" alt="perfil">
                </a>
              </div>
              <div class="header-profile-body-container col-lg-8 col-md-7 col-sm-7 col-xs-12">
                <div class="header-profile-body-content whiteF flama">
                  <h2 class="profile-name"><?php echo $sesion['nombre']?>.</h2>
                  <?php if ($sesion['especialidad'] != ""){?>
                  <ul class="list-inline profile-esp">
                    <li>
                      <?php echo $sesion['especialidad']; ?>
                    </li>
                  </ul>
                  <?php }?>
                  <?php if ($sesion['subespecialidad'] != ""){?>
                  <ul class="list-inline profile-subesp">
                    <li>
                      Subespecialidad:
                    </li>
                      <li>
                        <?php echo $sesion['subespecialidad']; ?>
                      </li>
                  </ul>
                  <?php }?>
                </div>
              </div>
              <div id="addFavMed_down" class="col-xs-6 col-xs-offset-3 visible-xs">
                <div class="row nav-menu-row">
                  <div class="nav-menu-inner-section">
                    <ul class="nav nav-pills nav-justified nav-menu-addButton h57-cond s20">
                      <li>
                        <a href="#">
                          <span class="glyphicon h67-medcond s30">+</span> Agrega a
                          <span class="hidden-xs">tus médicos </span>favoritos</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

  </body>

  <script src="js/jquery-2.1.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/application.js"></script>
  <script src="js/utils.js"></script>
</html>
