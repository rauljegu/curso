<?php // EN todo DOCUMENTO CONTRALADO POR SESSION DE SERVER SE DEBE INCLUIR UN INICIO DE SESION CON LA
// FUNCION  session_start();  A) INICIAR Y CREAR VARIABLES DE ENTORNO
													//	B) RESCATAR LA INFORMACION DE UNA SESION PREVIA
 session_start(); // funcion primordial 	RESCATR la inofrmacion de la sesion creada en el formulario login (Si no existe entonces creara una session con variables vacias)
// Verificamos que exitan variables de entorno, si no existen destruimos la sesion que se crea en este documento y redirigimos al usuario al form de login
 /*if($_SESSION["tipo"] != 1){
		 session_destroy();
			 header('Location: inicio.php'); // redirigir y en caso de que se entre por url al documento php sin inicar sesion se le niegue el acceso al contenido
 }*/

 //--------LLEVAR LA COMPROBACION A UNA FUNCION login1();
include'funciones.php';
login1(); //
?>
<html>
	<head>
		<title>Mi perfil</title>
	</head>
	<body>
		<h1>Bienvenido <?php echo $_SESSION["nombre"];?> </h1>
		<p>Tu correo es: <?php echo $_SESSION["correo"]; ?></p>
		<p>Tu Usuario es: <?php echo $_SESSION["user"]; ?></p>
		<a href="cerrar.php"><input type="submit" value="cerrar sesion"></a> <!--redireccion a un documento php que controla el cierre de sesion (cerar) -->
	</body>
</html>
