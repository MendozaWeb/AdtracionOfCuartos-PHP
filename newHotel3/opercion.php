    <?php
      include ("php/conexion.php");
      
      $ID_RESER = $_POS['id'];
      $NOMBRE = $_POS['nombre'];
      $DNI = $_POS['DNI'];
      $NuHabt = $_POS['NuHabt'];
      $telefono = $_POS['telefono'];
      
      $query="INSERT INTO RESERVA(id,nombre,DNI,NuHabt,telefono)"
              . "VALUES ($ID_RESER,$NOMBRE,$DNI,$NuHabt,$telefono)";
    ?>

