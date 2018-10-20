<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <!--++++++++++++++++++++++++++++++ bara de navegacion +++++++++++++++++++++++++++ -->
      <head>
          <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

        <title>Bienvenido a mi Pagina Web PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="Lib/css/bootstrap.min.Scss">
        <link rel="stylesheet" type="text/css" href="Lib/css/carga1.css">
        <link rel="stylesheet" type="text/css" href="Lib/css/boton1.css">
        <link rel="stylesheet" type="text/css" href="Lib/css/bootstrap-dialog.min.css">

        <script src="Lib/js/jquery-1.10.1.min.js"></script>
        <script src="Lib/js/jquery-3.2.1.min.js"></script>
        <script src="Lib/js/jquery.min.js"></script>
        <script src="Lib/js/bootstrap.min.js"></script>
        <script src="Lib/js/bootstrap-dialog.min.js"></script>        
        <script src="Lib/pjs/ajax_index.js"></script>
    </head>
    <style>
        /**/
        
    </style>
    <body>
  
     <center>
         <img src="imagenes/logo.png" width="350" height="250" alt=""/>
     </center>
    <center>
<br><br>
<body background="imagenes/fondo.jpg">
<br><br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        
        <!----     -*----                  ATENTION.¡¡¡¡¡¡¡¿¡¡¡¡¡------->
        <!----------------------------- HITO AQUI LO CAMBIAS LOS PUERTOS PARA QUE CONECTES---------------------------------->
      <a class="navbar-brand" href="http://localhost/newHotel3/index.php">Hostal Inka</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost/newHotel3/index.php">Inicio</a></li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Empresa<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="nosotros.php">Nosotros</a></li>
         
          </ul>
        </li> 
      
         
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Servicios<span class="caret"></span></a>
          <ul class="dropdown-menu">
              
              <li><a href="servicios.php">Servicios</a></li>
              
          </ul>
        </li> 
        </li> 
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reservaciones<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="pagos.php">Pago y Reservaciones</a></li>
           
          </ul>
        </li> 
        <li><a href="reservaciones.php">Reservasiones</a></li>
        <li><a href="login.php">Login</a></li>
        
    </div>
  </div>
</nav>


<!--++++++++++++++++++++++++++++++ fin de  barra of navegacion +++++++++++++++++++++++++++ -->
      
      
        
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- -------------------------------------------Indicators -------------------------------------->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!--------------------------------- Wrapper for slides pe supel pe-------------------- -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
          <center><img src="imagenes/ima1.jpg" alt="Amplios" width="800" height="345"></center>
      </div>

      <div class="item">
          <center><img src="imagenes/ima2.jpg." alt="Perzonalizados" width="800" height="345"></center>
      </div>
    
      <div class="item">
          <center><img src="imagenes/ima3.jpg" alt="Matrimoniales" width="800" height="345"></center>
      </div>

      <div class="item">
          <center><img src="imagenes/ima4.jpg" alt="Turisticas" width="800" height="345"></center>
      </div
      
    </div>

    <!-- ---------------------------------------Left and right controls ------------------------------>
   
  </div>
</div>
    <h1>  <center> Contamos con Nuestros servicios de  </h1> </center>
    
    <center> <img src="imagenes/servicios.png" alt=""/></center>
       
    <h4> <center>"Dispuestos a atenderlo"</h4></center>
    <br><br><br><br><br><br><br>
    
    
    <!--++++++++++++++++ pie de pagina++++++++++++++++++++++++++++ -->
    <center>
    <footer class="container-fluid bg-4 text-center">
         <marquee width=200 direction=right hspace=200 aling="centerS">
         AUTORES: Hitoshi Flores Egashira Y  Rossmel Mendoza Medina
</marquee>
    <p>Para más Informacion visitanos en: <a href="http://www.senati.edu.pe/web/">www.senati.edu.pe</a></p> 
</footer>
</center>
<!--+++++++++++++++++++++++++ fin de pie de pagina+++++++++++++++++++++++ -->
        <?php     
        ?>
    </body>
</html>
