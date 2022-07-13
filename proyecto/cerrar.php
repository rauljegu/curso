<?php
  session_start(); // SESSIN START para rewcuperar la sesion y sus variables
  session_destroy(); // la funcion ..._destroy(); destruye la sseion y sus variables de entorno
  header('Location: inicio.php'); // redireccion obligatoria al formulario de login 
?>
