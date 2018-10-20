     <?php
      include ("conexion.php");
      
      $ID_RESER = $_POS['ID_RESER'];
      $NOMBRE = $_POS['NOMBRE'];
      $DNI = $_POS['DNI'];
      $NuHabt = $_POS['NuHabt'];
      $telefono = $_POS['telefono'];
      
      $query="INSERT INTO RESERVA(ID,NOMBRE,DNI,NuHabt,telefono)"
              . "VALUES ($ID_RESER,$NOMBRE,$DNI,$NuHabt,$telefono)";
         
      ?>