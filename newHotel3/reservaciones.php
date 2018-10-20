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
<!------------------ fin of barra of navegacion --------------------->

</body>
        <!-- 
     <center>
 <div id="contacto" class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Reservaciones</h1>
    <p><h3> Informaciones :3923408</h3></p>
  <p><span class="w3-tag"><h3></h3></span>
        <p class="w3-xxlarge"><strong>Reservaciones </strong> Ingrese sus datos a la siguiente plantilla para mas información:</h4></p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nombre" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Personas" required name="People"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Dia y fecha " required name="date" value="2017-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Mensaje" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-block" type="submit">ENVIAR</button></p>
    </form>
  </div>
         </center></div>-->
        
        <title>Guardar</title>
            
         
      
        <center>
            <form action="opercion.php" method="POST">
                <input type="text" REQUIRED name="id" placeholder="Codigo....." value=""/><br></br>
            <input type="text" REQUIRED name="nombre" placeholder="Name....." value=""/><br></br>
            <input type="text" REQUIRED name="DNI" placeholder="#DNI....." value=""/><br></br>
            <input type="text" REQUIRED name="NuHabt" placeholder="#hbitaciones....." value=""/><br></br>
            <input type="text" REQUIRED name="telefono" placeholder="telefono....." value=""/><br></br>
            <input type="submit" value="aceptar"/><br></br>
            </form>
        </center>
          <script src="js/valida_registro.js"></script>  
    </body>
</html>
<!---HTIO ME GANO EL TIEMPO , ME QUDE JATO ,ESTE EN FORMUARIO , SOLO FALTA PARA QUE ALMACENE LAS RRSERVA , 
Y TAMBIEN STA PARA REVISAR EL ALMACENAMIENTO , , ESTO TRABAJANDO CON , OPERCION,PHP, Y PHP/CONEXCION,PHP,
-->
