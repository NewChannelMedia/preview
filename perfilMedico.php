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
            <div id="search-section" class="navigator-inner-section col-lg-5 col-md-4 col-sm-1 col-xs-12 hidden-sm">
              <div class="input-group navbar-search navigator-inner-section-cell col-md-10 col-md-offset-1 h65-medium">
                <input type="text" class="form-control" id="" name="" placeholder="Search for people, places or things" required="">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </span>
              </div>
            </div>

            <div id="menu-section" class="navigator-inner-section col-lg-4 col-md-5 col-sm-8 col-xs-12">
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
                    <span class="hidden-xs">tus médicos </span>favoritos</a>
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
                  <img class="header-profile-photo-img" src="img/plataforma/dmmp.png" alt="perfil">
                </a>
              </div>
              <div class="header-profile-body-container col-lg-8 col-md-7 col-sm-7 col-xs-12">
                <div class="header-profile-body-content whiteF flama">
                  <h2 class="profile-name">Dr. Juan Carlos Medina Mtz.</h2>
                  <h4 class="profile-location">Zapopan, Jalisco. MX</h4>
                  <ul class="list-inline profile-esp">
                    <li>
                      Ingeniero en Sistemas
                    </li>
                    <li>
                      Programador Web
                    </li>
                  </ul>
                  <ul class="list-inline profile-subesp">
                    <li>
                      Subespecialidad:
                    </li>
                    <li>
                      Interfaces de usuario
                    </li>
                    <li>
                      Usabilidad
                    </li>
                  </ul>
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
          <div id="profileOptions" class="header-options-container col-lg-4 col-md-5 col-sm-2 col-xs-12 h67-medcond">
            <div class="header-options-row row">
              <div class="header-options-content">
                <a href="#" class="first-option option">
                  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-1 hidden-xs">
                    <span class="option-icon glyphicon h67-medcond s90 center-block text-center">+</span>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 hidden-sm">
                    <div class="option-label">
                      <span class="optn-lbl">Agenda una cita</span>
                      <span class="optn-sb hidden-xs">Haz click aquí para agendar con este médico.</span>
                    </div>
                  </div>
                </a>
                <a href="#" class="option">
                  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-1 visible-sm">
                    <span class="option-icon glyphicon glyphicon-user s30 center-block text-center"></span>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm">
                    <div class="option-label">
                      <span class="optn-lbl">
                        <span class="option-icon fa fa-male hidden-xs">
                        </span>&nbsp;Recomienda a un amigo
                      </span>
                    </div>
                  </div>
                </a>
                <a href="#" class="option">
                  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-1 visible-sm">
                    <span class="option-icon glyphicon glyphicon-check s30 center-block text-center"></span>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm">
                    <div class="option-label">
                      <span class="optn-lbl">
                        <span class="option-icon fa fa-check-square-o hidden-xs">
                        </span>&nbsp;Califica su servicio
                      </span>
                    </div>
                  </div>
                </a>
                <a href="#" class="option">
                  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-1 visible-sm">
                    <span class="option-icon glyphicon glyphicon-comment s30 center-block text-center"></span>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm">
                    <div class="option-label">
                      <span class="optn-lbl">
                        <span class="option-icon fa fa-comment hidden-xs">
                        </span>&nbsp;Envía un mensaje
                      </span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="ubicaciones">
      <div class="container-fluid ubicaciones-container">
        <div class="row ubicaciones-row">
          <div class="ubicaciones-inner-section col-lg-5 col-md-5 col-sm-7 col-xs-12">
            <div class="ubicaciones-direcciones ">
              <span class="direcciones-arrow"></span>
              <div class="col-md-12">
                <h2 class="h67-medium s25 uppercase whiteF">Ubicaciones y contacto</h2>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div id="slider1" class="csslider infinity">
                    <input type="radio" name="slides" checked="checked" id="slides_1"/>
                    <input type="radio" name="slides" id="slides_2"/>
                    <input type="radio" name="slides" id="slides_3"/>
                    <input type="radio" name="slides" id="slides_4"/>
                    <ul>
                      <li>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 direccion-pagination-bg">
                          <span class=90>1</span>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                          <address class="whiteF Flama-bold">
                            <strong><span>New Channel Media</span></strong><br>
                            <span>Santo Tomas de Aquino</span>&nbsp;<span>#5766</span><br>
                            Colonia <span>Arcos de Guadalupe</span><br>
                            <span>Zapopan</span>, <pan>Jalisco</pan>. CP: <span>45037</span><br>
                            <br><strong>Teléfonos</strong><br>
                            <abbr title="Phone">oficina:</abbr> (<span>33</span>) <span>31252200</span><br>
                            <abbr title="Phone">celular:</abbr> (<span>871</span>) <span>2602226</span><br>
                            <br><strong>E-mail</strong><br>
                            <span>jcmedina@newchannel.mx</span><br>
                          </address>
                        </div>
                      </li>
                      <li>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 direccion-pagination-bg">
                          <span class=90>2</span>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                          <address class="whiteF Flama-bold">
                            <strong><span>New Channel Media</span></strong><br>
                            <span>Santo Tomas de Aquino</span>&nbsp;<span>#5766</span><br>
                            Colonia <span>Arcos de Guadalupe</span><br>
                            <span>Zapopan</span>, <pan>Jalisco</pan>. CP: <span>45037</span><br>
                            <br><strong>Teléfonos</strong><br>
                            <abbr title="Phone">oficina:</abbr> (<span>33</span>) <span>31252200</span><br>
                            <abbr title="Phone">celular:</abbr> (<span>871</span>) <span>2602226</span><br>
                            <br><strong>E-mail</strong><br>
                            <span>jcmedina@newchannel.mx</span><br>
                          </address>
                        </div>
                      </li>
                      <li>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 direccion-pagination-bg">
                          <span class=90>3</span>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                          <address class="whiteF Flama-bold">
                            <strong><span>New Channel Media</span></strong><br>
                            <span>Santo Tomas de Aquino</span>&nbsp;<span>#5766</span><br>
                            Colonia <span>Arcos de Guadalupe</span><br>
                            <span>Zapopan</span>, <pan>Jalisco</pan>. CP: <span>45037</span><br>
                            <br><strong>Teléfonos</strong><br>
                            <abbr title="Phone">oficina:</abbr> (<span>33</span>) <span>31252200</span><br>
                            <abbr title="Phone">celular:</abbr> (<span>871</span>) <span>2602226</span><br>
                            <br><strong>E-mail</strong><br>
                            <span>jcmedina@newchannel.mx</span><br>
                          </address>
                        </div>
                      </li>
                      <li>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 direccion-pagination-bg">
                          <span class=90>4</span>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                          <address class="whiteF Flama-bold">
                            <strong><span>New Channel Media</span></strong><br>
                            <span>Santo Tomas de Aquino</span>&nbsp;<span>#5766</span><br>
                            Colonia <span>Arcos de Guadalupe</span><br>
                            <span>Zapopan</span>, <pan>Jalisco</pan>. CP: <span>45037</span><br>
                            <br><strong>Teléfonos</strong><br>
                            <abbr title="Phone">oficina:</abbr> (<span>33</span>) <span>31252200</span><br>
                            <abbr title="Phone">celular:</abbr> (<span>871</span>) <span>2602226</span><br>
                            <br><strong>E-mail</strong><br>
                            <span>jcmedina@newchannel.mx</span><br>
                          </address>
                        </div>
                      </li>
                    </ul>
                    <div class="arrows">
                      <label for="slides_1"></label>
                      <label for="slides_2"></label>
                      <label for="slides_3"></label>
                      <label for="slides_4"></label>
                      <label for="slides_1" class="goto-first"></label>
                      <label for="slides_4" class="goto-last"></label>
                    </div>
                    <div class="navigation">
                      <div class="row">
                        <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                          <label for="slides_1">1</label>
                          <label for="slides_2">2</label>
                          <label for="slides_3">3</label>
                          <label for="slides_4">4</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ubicaciones-inner-section col-lg-7 col-md-7 col-sm-5 col-xs-12">
            <div class="ubicaciones-mapa">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7466.123943725772!2d-103.43773729999997!3d20.667057600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1445909348743" width="100%" height="100%" frameborder="0" style="border:0"
              allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="info">
      <div class="info-container container-fluid">
        <div class="info-row row">
          <div id="info-experto_en" class="info-inner-section col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="container-fluid info-inner-container">
              <div class="row">
                <div class="col-md-12">
                  <div class="info-body-header h77-boldcond">
                    <div class="img-rounded info-left-icon">
                      <span class="glyphicon glyphicon-pencil icon"></span>
                    </div>
                    <span class="title">Experto en:</span>
                  </div>
                  <div class="info-body-content h67-medcond">
                    <ul>
                      <li>Garganta</li>
                      <li>Urgencias 24hrs.</li>
                      <li>Enfermedades Alérgicas
                        <ul>
                          <li>Animales</li>
                          <li>Insectos</li>
                          <li>Vias respiratorias</li>
                          <li>Ojos</li>
                        </ul>
                      </li>
                      <li>Transtornos Respiratorios</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="info-hospitales" class="info-inner-section col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="container-fluid info-inner-container">
              <div class="row">
                <div class="col-md-12">
                  <div class="info-body-header h77-boldcond">
                    <div class="img-rounded info-left-icon">
                      <span class="glyphicon glyphicon-pencil icon"></span>
                    </div>
                    <span class="title">Hospitales</span>
                    <span class="sub">y clínicas</span>
                  </div>
                  <div class="info-body-content h67-medcond">
                    <ul>
                      <li>Hospital San Javier</li>
                      <li>Clinica Chapalita</li>
                      <li>Hospital Puerta de Hierro</li>
                      <li>Clínica Terranova</li>
                      <li>Clínica Sta. Cecilia</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="info-aseguradoras" class="info-inner-section col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="container-fluid info-inner-container">
              <div class="row">
                <div class="col-md-12">
                  <div class="info-body-header h77-boldcond">
                    <div class="img-rounded info-left-icon">
                      <span class="glyphicon glyphicon-pencil icon"></span>
                    </div>
                    <span class="title">Aseguradoras</span>
                  </div>
                  <div class="info-body-content h67-medcond">
                    <ul>
                      <li>Ace</li>
                      <li>Alfa Uno</li>
                      <li>Allianz de México</li>
                      <li>Atlas</li>
                      <li>Azteca</li>
                      <li>Banobras</li>
                      <li>Bupa</li>
                      <li>Grupo Nacional Provicial</li>
                      <li>IXE Asistencia</li>
                      <li>Ace</li>
                      <li>Alfa Uno</li>
                      <li>Allianz de México</li>
                      <li>Atlas</li>
                      <li>Azteca</li>
                      <li>Banobras</li>
                      <li>Bupa</li>
                      <li>Grupo Nacional Provicial</li>
                      <li>IXE Asistencia</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="colegas">
      <div class="container-fluid">
        <div class="container cat-header">
          <div class="col-lg-9 col-md-10 col-lg-offset-3 col-md-offset-2">
            <div class="media">
              <div class="media-left">
                <img class="cat-icon" src="img/plataforma/icons/colegas.png">
              </div>
              <div class="media-body">
                <span class="cat-main-title h77-boldcond">Mis colegas favoritos</span><br>
                <span class="cat-sub-title h67-medcond">Ligas a los perfiles de mis colegas recomendados</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <ul class="list-inline text-center center-block">
              <li>
                <span class="glyphicon glyphicon-circle-arrow-right"></span> Ordenar por especialidad
              </li>
              <li>
                <span class="glyphicon glyphicon-circle-arrow-right"></span> Ordenar por apellido
              </li>
              <li>
                <span class="glyphicon glyphicon-search"></span> Buscar
              </li>
            </ul>
          </div>
        </div>
        <div class="container">
          <hr class="sep">
          <nav id="listaEspecialidades" class="side-especialidades" >
            <p>
              <span class="side-especialides-header h77-boldcond">Selecciona</span>
              <span class="side-especialides-subheader h67-medcond">una especialidad</span>
            </p>
            <hr class="sep">
            <ul class="nav nav-pills nav-stacked h67-medcond">
              <li>
                <a href="#alergologia">Alergología <span class="badge pull-right">2</span></a>
              </li>
              <li>
                <a href="#angiologia">Angiología <span class="badge pull-right">1</span></a>
              </li>
              <li>
                <a href="#cardiologia">Cardiología <span class="badge pull-right">4</span></a>
              </li>
              <li>
                <a href="#dermatologia">Dermatología <span class="badge pull-right">6</span></a>
              </li>
              <li>
                <a href="#endocrinologia">Endocrinología <span class="badge pull-right">2</span></a>
              </li>
              <li>
                <a href="#ginecologia">Ginecología <span class="badge pull-right">1</span></a>
              </li>
            </ul>
          </nav>
          <div id="listaColegas" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 pull-right main-colegas" data-spy="scroll" data-target="#listaEspecialidades" data-offset="180">
            <div id="alergologia" class="row" >
              <h1 class="h67-medcond">Alergología</h1>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div >
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp1.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div>
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp2.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="angiologia" class="row">
              <h1 class="h67-medcond">Angiología</h1>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp3.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="cardiologia" class="row">
              <h1 class="h67-medcond">Cardiología</h1>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp4.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp1.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp2.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp3.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="dermatologia" class="row">
              <h1 class="h67-medcond">Dermatología</h1>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp4.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp1.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp2.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp3.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp4.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp1.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="endocrinologia" class="row">
              <h1 class="h67-medcond">Endocrinología</h1>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp2.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp3.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp4.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp1.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp2.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp3.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="ginecologia" class="row">
              <h1 class="h67-medcond">Ginecología</h1>
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                <div class="thumbnail">
                  <div class="">
                    <a class="pPic" href="#"><img src="img/plataforma/temp/profile-pics/pp4.jpg" alt="..."></a>
                  </div>
                  <div class="caption">
                    <div class="nombre h77-boldcond">
                      Dr.&nbsp;<span>Fulano</span>&nbsp;<span>de Tal</span>
                    </div>
                    <div class="esp h67-medcond">
                      <span>Alergólogo</span>
                    </div>
                    <a class="h67-medcondobl" href="#">Ver Perfil</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <section id="curriculum">
      <div class="container-fluid">
        <div class="row cat-header cv">
          <div class="container">
            <div class="col-lg-9 col-md-10 col-lg-offset-3 col-md-offset-2">
              <div class="media">
                <div class="media-left">
                  <img class="cat-icon" src="img/plataforma/icons/curriculum.png">
                </div>
                <div class="media-body">
                  <span class="cat-sub-title h67-medcond">Perfil profesional / Dr. <span>Juan Carlos Medina Martinez</span></span>
                  <span class="cat-main-title h77-boldcond">Currículum y experiencia</span><br>
                </div>
              </div>
            </div>
          </div>
          <div class="cat-header-arrow cv">
          </div>
        </div>
        <div class="row cv-body">
        </div>
      </div>
    </section>
    <section id="comentariosv">
      <div class="container-fluid">
        <div class="row cat-header cv">
          <div class="container">
            <div class="col-lg-9 col-md-10 col-lg-offset-3 col-md-offset-2">
              <div class="media">
                <div class="media-left">
                  <img class="cat-icon" src="img/plataforma/icons/curriculum.png">
                </div>
                <div class="media-body">
                  <span class="cat-sub-title h67-medcond">Perfil profesional / Dr. <span>Juan Carlos Medina Martinez</span></span>
                  <span class="cat-main-title h77-boldcond">Currículum y experiencia</span><br>
                </div>
              </div>
            </div>
          </div>
          <div class="cat-header-arrow cv">
          </div>
        </div>
        <div class="row cv-body">
        </div>
      </div>
    </section>

  </body>

  <script src="js/jquery-2.1.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/application.js"></script>
  <script src="js/utils.js"></script>
</html>
