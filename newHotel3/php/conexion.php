<?php
$host="localhost";
$user="root";
$password="1234";
$db="NewHotel";
$con = new mysqli($host,$user,$password,$db);
$datos = $con->query("SELECT * FROM user");

$concnexion =new mysqli("localhost,root,1234,NewHotel");
if ($concnexion){
    echo "conocexion extiosa";
}
 else {
    echo "conexion fallida";
}
?>
