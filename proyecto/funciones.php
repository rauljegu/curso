<?php
function limpiar($datos){
  $datos = trim($datos);
  $datos = stripslashes($datos);
  $datos = htmlspecialchars($datos);
  return $datos;
}
//////////ALTERNATIVA 1
/*function login(){
  if($_SESSION["tipo"] == 1){
    header("Location:  perfil.php");
    echo "exito";
  } else {
      session_destroy();
        header('Location: inicio.php');
  }
}*/
 //******ALTERNATIVA 2 
function login($a,$b,$c){
  session_start();
  $_SESSION["nombre"]=$a;
  $_SESSION["correo"]=$b;
  $_SESSION["user"]=$c;
  $_SESSION["tipo"]= 1;


  if($_SESSION["tipo"] == 1){
    header("Location:  perfil.php");
    echo "exito";
  } else {
      session_destroy();
        header('Location: inicio.php');
  }
}

  function login1(){
    if($_SESSION["tipo"] != 1){
        session_destroy();
          header('Location: inicio.php');
    }
}
 ?>
