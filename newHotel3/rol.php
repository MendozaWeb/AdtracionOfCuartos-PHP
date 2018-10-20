<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Rol</title>
        <link href="Lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
        </div>
            <center><img src="imagenes/aten.png" height="150" width="150"/></center>
     <h2>Listado de clientes registrados</h2>
        <hr>
        <h3>Clientes:</h3><a href='index.php'> <input type='button' class='btn btn-primary' value='MENU PRINCIPAL' name='xb'/></a>
        <br><br>
        <table>
         
            <?php
           $sql="select * from rol";
            $filas=mysqli_query($link,$sql);
            while ($fil = mysqli_fetch_row($filas)) {
                echo '<tr>';
                echo "<td>".$fil[0]."</td>";
                echo "<td>".$fil[1]."</td>";
                echo "<td><a href='ModRol.php?xas=".$fil[0]."'</a> <input type='button' class='btn btn-primary' value='Editar' name='xb'></td>";
                echo "<td><a href='ABCRol.php?tipo=3&xas=".$fil[0]."'</a> <input type='button' class='btn btn-primary' value='Eliminar' name='xb'></td>";
                
                echo '</tr>';
            }
            ?>
       
       
            <?php
            include("php/conexion.php");
            ?>
            <div>
         <table border="2px"  class="table table-striped"
                cellpadding="1" cellspacing="2" 
               width="350">
             <thead bgcolor="lightblue">
             <th>id</th>
             <th>Username</th>
             <th>Fullname</th>
             <th>Email</th>
             <th>PASSWORD</th>
             <th>Hora</th>
             </thead>
             <tbody>
                 <?php while($user = mysqli_fetch_array($datos)){?>
                 <tr>
                     <td><?php echo $user['id']; ?></td>
                     <td><?php echo $user['username']; ?></td>
                     <td><?php echo $user['fullname']; ?></td>
                     <td><?php echo $user['email']; ?></td>
                     <td><?php echo $user['password']; ?></td>
                     <td><?php echo $user['created_at']; ?></td>
                 </tr>
                 <?php } ?>
             </tbody>
         </table>
            </div>
             </div>
             
        
    </body>
</html>
