<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
        
        <body>
            <!--    hito para darle  mas detalles  al login  esta relacionado con navbar.php ahi
                    esta para que puedas agragar mas botones     -->
            
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
 <img src="imagenes/inka.jpg" width="1110" height="450" alt=""/>
		<h2>Login</h2>

                <form  role="form" name="login" action="php/login.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario o email</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-default">Acceder</button>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
         <center>
             
             <br><br>
    <footer class="container-fluid bg-4 text-center">
         <marquee width=200 direction=right hspace=200 aling="centerS">
            AUTORES: Hitoshi Flores Egashira Y  Rossmel Mendoza Medina
</marquee>
    <p>Para más Informacion visitanos en: <a href="http://www.senati.edu.pe/web/">www.senati.edu.pe</a></p> 
</footer>
</center>
</html>