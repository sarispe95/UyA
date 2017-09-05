<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <!-- Dimensiones -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">

    <!-- Iconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

    <!-- Titulo -->
    <title>Diario de Clase</title>

    <!-- CSS  -->
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >

    <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
    <?php
      include_once 'cnn/constantes.php'; 
      // Incluimos todas las constantes para realizar la conexión 
      $conexion = mysqli_connect(sitio,usuario,clave,basededatos)
          or die ("Error: No he podido conectarme al Servidor MySQL" );
        // Conectamos con el gestor de base de datos
      $nombre=$_REQUEST['nombre']; // Recogemos el nombre de usuario
      $sql="select * from usuarios where nombre = '$nombre'";
      // Generamos la consulta filtrando por el nombre de usuario
      $consulta=mysqli_query($conexion,$sql) 
                or die ("Error a la hora de ejecutar la consulta");
            // Ejecutamos la consulta
          $numfilas=mysqli_num_rows($consulta); //Para saber cuántos registros tenemos
          if ($numfilas>0)
        for ($i=0;$i<$numfilas;$i++)
              {           
                  $registro=mysqli_fetch_array($consulta);
                  //El usuario está registrado
                  ?> 

    
    <!-- Barra de Navegación lateral -->
    <!-- WAI-ARIA: Comportamientos de la página, barra de navegación -->              
    <ul id="slide-out" class="side-nav fixed z-depth-4">
      <li>
        <div class="userView">
          <div class="background">
            <img src="fondo3.jpg" alt="Fondo de Usuario">
          </div>
          <a href="#!user"><img class="circle" src="user.png" alt="Imagen del usuario"></a>
          <a href="#!name"><span class="white-text name">¡Bienvenido, </span></a>
          <a href="#!email"><span class="white-text email">
                <!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
                <?php 
                   echo $_REQUEST['nombre']."!";
                ?>            
                </span></a>
        </div>
      </li>
      <!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
      <li>
        <form class="sidebar-form">
          <div class="input-group">
            <input id="accounts" type="text" name="username" class="form-control" placeholder="Búsqueda" autocomplete="off" />
          </div>
        </form>
      </li>

      <li><a class="active" href="index.html"><i class="material-icons pink-item" tabindex="1">dashboard</i>Inicio</a></li>
      <li><div class="divider"></div></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header" tabindex="2">Eventos<i class="material-icons pink-item">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="addannoun.html" tabindex="3">Nuevo</a></li>
                <li><a href="addannoun.html" tabindex="4">Finalizados</a></li>
                <li><a href="allannoun.html" tabindex="5">Todos</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li><a href="comments.html"><i class="material-icons pink-item" tabindex="6">assignment</i>Tareas</a></li>
      <li><a href="comments.html"><i class="material-icons pink-item" tabindex="7">access_time</i>Horario</a></li>
      <li><a href="comments.html"><i class="material-icons pink-item" tabindex="8">view_module</i>Exámenes</a></li>
      <li><a href="comments.html"><i class="material-icons pink-item" tabindex="9">today</i>Prácticas</a></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header" tabindex="10">Asignaturas<i class="material-icons pink-item">subject</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="userdetails.html" tabindex="11">UyA</a></li>
                <li><a href="recentusers.html" tabindex="12">Bases de Datos</a></li>
                <li><a href="reports.html" tabindex="13">Laboratorio Redes</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li><a href="comments.html" tabindex="14"><i class="material-icons pink-item">forum</i>Foro</a></li>
    </ul>
    <main>
    <section class="content">
      <h2 class="center header text_h2 letters type blue-text" tabindex="15">MiDiario</h2>
      <!--Cajas-->
      <div class="row">
        <div class="col l3 s6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>+ 4</h3>
              <p tabindex="16">Eventos</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer" class="animsition-link">Ir a Eventos <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div><!-- ./col -->
          <div class="col l3 s6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>+ 6</h3>
                <p tabindex="17">Mensajes</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer" class="animsition-link">Ir a Foro <i class="fa fa-arrow-circle-right"></i></a>
            </div>
            </div><!-- ./col -->
            <div class="col l3 s6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>+ 2</h3>
                  <p tabindex="18">Solicitudes de Amistad</p>
                </div>
                <div class="icon">
                  <i class="ion ion-email"></i>
                </div>
                <a href="#" class="small-box-footer" class="animsition-link">Ir a Social <i class="fa fa-arrow-circle-right"></i></a>
              </div>
              </div><!-- ./col -->
              <div class="col l3 s6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>+ 1</h3>
                    <p tabindex="19">Práctica</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer" class="animsition-link">Ir a Prácticas <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
        <!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
        <div class="center"><
            <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=sarispe95%40gmail.com&amp;color=%2329527A&amp;ctz=America%2FLos_Angeles" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
        <div class="row">
        <!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="fondo1.jpeg" alt="Fondo de Escritorio">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">UyA<i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Acceso a UyA</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Usabilidad y Accesibilidad<i class="mdi-navigation-close right"></i></span>
                        <p>Nuevas tareas se han agregado a la asignatura.</p><p>Nueva fecha de entrega Práctica 5.</p><p>Ayrton Crespo ha respondido tu mensaje.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="fondo4.jpg" alt="Fondo de Escritorio">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Bases de Datos<i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Acceso a BBDD</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Bases de Datos<i class="mdi-navigation-close right"></i></span>
                        <p>Nota del seguimiento 2.</p><p>Corrección de Práctica 4.</p><p>Enunciado Práctica 5.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="fondo10.jpg" alt="Fondo de Escritorio">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Laboratorio Redes<i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Acceso a LabRedes</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Laboratorio Redes<i class="mdi-navigation-close right"></i></span>
                        <p>Nota del seguimiento 2.</p><p>Corrección de Práctica 4.</p><p>Enunciado Práctica 5.</p><p>Múltiples mensajes en el Foro LabRedes.</p>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="center-align">Lista de Tareas</h3>
                <div class="custom-responsive">
                  <table class="striped hover centered">
                    <thead><tr>
                      <th>Asignatura</th>
                      <th>Tarea</th>
                      <th>Fecha de Entrega</th>
                      <th>Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Bases de Datos</td>
                      <td>Práctica 4</td>
                      <td>2017-03-31</td>
                      <td><i class="text-green material-icons">check</i></td>
                    </tr>
                    <tr>
                      <td>Laboratorio Redes</td>
                      <td>Práctica 5</td>
                      <td>2017-04-06</td>
                      <td><i class="text-green material-icons">close</i></td>
                    </tr>
                    <tr>
                      <td>UyA</td>
                      <td>Práctica 5</td>
                      <td>2017-03-31</td>
                      <td><i class="text-red material-icons">close</i></td>
                    </tr>
                    <tr>
                      <td>Bases de Datos</td>
                      <td>Práctica 5</td>
                      <td>2017-04-08</td>
                      <td><i class="text-green material-icons">close</i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </section>
    </main>
   <!--Footer-->
    <footer id="contact" class="page-footer default_color scrollspy">
        <div class="footer-copyright red lighten-2">
            <div class="container">
                Hecho por <a class="white-text">Ayrton Crespo García</a> y <a class="white-text">Sara Pérez Rodríguez</a>
            <div class=" row right"> ©2017 Copyright</div>
            </div>
        </div>
    </footer>
  <!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
   <?php
            //      if ($registro['clave']<>$_REQUEST['clave'])
            //        echo "La clave es incorrecta, por favor,vuelva a intentarlo";
              }
          else
          {
    ?>
    <!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
  <!--Navegacion-->
   <div class="navbar-fixed">
      <nav id="nav_f" class="#1a237e indigo darken-3" role="navigation">
          <div class="container">
              <div class="nav-wrapper">
              <a href="#" id="logo-container" class="brand-logo">Diario de Clase</a>
                  <ul class="right hide-on-med-and-down">
                      <li><a href="#">TuDiario</a></li>
                      <li><a href="#intro">Información</a></li>
                      <li><a href="#">UyA</a></li>
                      <li><a href="#">Contacto</a></li>
                  </ul>
                  <ul id="nav-mobile" class="side-nav">
                      <li><a href="#">TuDiario</a></li>
                      <li><a href="#intro">Información</a></li>
                      <li><a href="#">UyA</a></li>
                      <li><a href="#">Contacto</a></li>
                  </ul>
              <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
              </div>
          </div>
      </nav>
  </div>

  <div class="section no-pad-bot">
      <div class="container">
          <h1 class="text_h center header cd-headline letters type blue-text">¡TuDiario!</h1>
          <h3 class="center letters type grey-text">El usuario no está registrado</h3>
      </div>
  </div>
    
  <!-- <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Nombre de Usuario</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">lock</i>
            <input id="icon_lock" type="text" class="validate">
            <label for="icon_lock">Contraseña</label>
          </div>
        </div>
      </form>
    </div> -->

    <!-- Formulario -->

    <div class="container">
        <div class="row">
          <form class="col s12" method="post" action="diario.php">
            <div class="row">
              <div class="input-field col s6">
              <h2 class="grey-text"><i class="material-icons">person_pin</i></h2>
                <input id="first_name" type="text" class="validate" name="nombre">
                <label for="first_name">Nombre de Usuario</label>
              </div>
              <div class="input-field col s6">
              <h2 class="grey-text"><i class="material-icons">vpn_key</i></h2>
                <input id="password" type="password" class="validate" name="clave">
                <label for="password">Clave</label>
              </div>
            </div>
            <br><br>
            <div class="row center">
          <button class="btn waves-effect waves-light red darken-1" type="submit"><a class="white-text">Iniciar Sesión</a><i class="mdi-content-send right white-text"></i></button>
      </div>
          </form>
        </div>
      </div>

    <!-- Imagen de Escritorio -->
  <div class="parallax-container">
      <div class="parallax"><img src="fondo2.jpg"></div>
  </div>
   





    <?php
       }
      mysqli_close($conexion);  // Cerramos la conexión con la base de datos
    ?>



    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
    
</body>