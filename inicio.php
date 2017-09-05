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
</head>
<body>
	<!-- WAI-ARIA: Comportamientos de la página, barra de navegación -->
	<!--Navegacion-->
	 <div class="navbar-fixed">
	    <nav id="nav_f" class="#1a237e indigo darken-3" role="navigation">
	        <div class="container">
	            <div class="nav-wrapper">
	            <a href="#" id="logo-container" tabindex="1" class="brand-logo">Diario de Clase</a>
	                <ul class="right hide-on-med-and-down">
	                    <li><a href="#" tabindex="2">TuDiario</a></li>
	                    <li><a href="#intro" tabindex="3">Información</a></li>
	                    <li><a href="#" tabindex="4">UyA</a></li>
	                    <li><a href="#" tabindex="5">Contacto</a></li>
	                </ul>
	                <ul id="nav-mobile" class="side-nav">
	                    <li><a href="#" tabindex="2">TuDiario</a></li>
	                    <li><a href="#intro" tabindex="3">Información</a></li>
	                    <li><a href="#" tabindex="4">UyA</a></li>
	                    <li><a href="#" tabindex="5">Contacto</a></li>
	                </ul>
	            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
	            </div>
	        </div>
	    </nav>
	</div>

	<div class="section no-pad-bot">
	    <div class="container">
	        <h1 class="text_h center header cd-headline letters type blue-text" tabindex="6">¡TuDiario!</h1>
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
	  <!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
	  <div class="container">
        <div class="row">
          <form class="col s12" method="post" action="diario.php">
            <div class="row">
              <div class="input-field col s6">
              <h2 class="grey-text"><i class="material-icons">person_pin</i></h2>
                <input id="first_name" type="text" class="validate" name="nombre" aria-required="true">
                <label for="first_name" tabindex="7" aria-live="polite">Nombre de Usuario</label>
              </div>
              <div class="input-field col s6">
              <h2 class="grey-text"><i class="material-icons">vpn_key</i></h2>
                <input id="password" type="password" class="validate" name="clave" aria-required="true">
                <label for="password" tabindex="8" aria-live="polite">Clave</label>
              </div>
            </div>
            <br><br>
            <div class="row center">
	    		<button class="btn waves-effect waves-light red darken-1" type="submit"><a class="white-text" tabindex="9">Iniciar Sesión</a><i class="mdi-content-send right white-text"></i></button>
			</div>
          </form>
        </div>
      </div>
    <!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
    <!-- Imagen de Escritorio -->
	<div class="parallax-container">
    	<div class="parallax"><img src="fondo2.jpg"></div>
	</div>
	<!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
	<!--Footer-->
	<footer id="contact" class="page-footer default_color scrollspy">
	    <div class="container">  
	        <div class="row">
	            <div class="col l3 s12">
	                <h5 class="white-text" tabindex="10">Página Oficial</h5>
	                <ul>
	                	<!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
	                    <li><a class="white-text" href="https://www.ull.es/">Universidad de La Laguna</a></li>
	                    <li><a class="white-text" href="https://www.ull.es/">Campus Virtual</a></li>
	                    <li><a class="white-text" href="https://www.ull.es/view/centros/etsii/Inicio/es">ETSII</a></li>
	                </ul>
	            </div>
	            <div class="col l3 s12">
	                <h5 class="white-text" tabindex="11">Redes Sociales</h5>
	                <ul>
	                    <li>
	                    	<!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
	                        <a class="white-text" href="https://www.facebook.com">
	                            <i class="small fa fa-facebook-square white-text"></i> Facebook
	                        </a>
	                    </li>
	                    <li>
	                    	<!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
	                        <a class="white-text" href="https://github.com">
	                            <i class="small fa fa-github-square white-text"></i> Github
	                        </a>
	                    </li>
	                    <li>
	                    	<!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
	                        <a class="white-text" href="https://www.twitter.com">
	                            <i class="small fa fa-twitter-square white-text"></i> Twitter
	                        </a>
	                    </li>
	                </ul>
	            </div>
	            <div class="col l3 s12">
	                <h5 class="white-text" tabindex="12">Equipo</h5>
	                <h6 class="white-text" tabindex="13">Sara Pérez Rodríguez</h6>
	                <ul>
	                    <li>
	                    	<!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
	                        <a class="white-text" href="https://www.facebook.com">
	                            <i class="small fa fa-facebook-square white-text"></i> Facebook
	                        </a>
	                    </li>
	                    <li>
	                    	<!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
	                        <a class="white-text" href="https://github.com">
	                            <i class="small fa fa-github-square white-text"></i> Github
	                        </a>
	                    </li>
	                    <li>
	                    	<!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
	                        <a class="white-text" href="https://www.twitter.com">
	                            <i class="small fa fa-twitter-square white-text"></i> Twitter
	                        </a>
	                    </li>
	                </ul>
	            </div>
	            <div class="col l3 s12">
					<br><br>
	                <h6 class="white-text" tabindex="14">Ayrton Crespo García</h6>
	                <ul>
	                    <li>
	                    	<!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
	                        <a class="white-text" href="https://www.facebook.com">
	                            <i class="small fa fa-facebook-square white-text"></i> Facebook
	                        </a>
	                    </li>
	                    <li>
	                    	<!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
	                        <a class="white-text" href="https://github.com">
	                            <i class="small fa fa-github-square white-text"></i> Github
	                        </a>
	                    </li>
	                    <li>
	                    	<!-- WAI-ARIA: Contenido que se actualiza dinámicamente -->
	                        <a class="white-text" href="https://www.twitter.com">
	                            <i class="small fa fa-twitter-square white-text"></i> Twitter
	                        </a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	    <div class="footer-copyright indigo darken-3">
	        <div class="container">
	            Hecho por <a class="white-text">Ayrton Crespo García</a> y <a class="white-text">Sara Pérez Rodríguez</a>
	        <div class=" row right"> ©2017 Copyright</div>
	        </div>
	    </div>
	</footer>
	<!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
    
</body>