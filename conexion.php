<?php
//CONEXION CON EL SERVIDOR
$servername="localhost";
$username="root";
$password="";
$dbname="curso";

 //crear conexxion a la BD
 $conn = new mysqli($servername, $username, $password, $dbname);
 //VERIFICAR que se realizó la conexion con la BD
 if ($conn->connect_error){
    die("Conexion fallo: ".$conn->connect_error);
 }

 //else { echo "CORRECTO"; }
 ?>
