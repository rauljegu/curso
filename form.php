<?php
include'funciones.php';
//$html=consulta1("contactos",$array);
	if($_SERVER["REQUEST_METHOD"]=== "POST"){
		//echo "HOLA";
		//$array= [];
		$string="";
		//$html1 =consulta1("contactos",$array);
	//	echo $html;
		insert("contactos",$_POST);
	}
?>
<html>
	<head>
		<style>
			table, td, th {
			  border: 1px solid;
			}

			table {
			  width: 80%;
			 /* border-collapse: collapse;*/
			}
	</style>
	</head>
	<body>
		<table >
			<?php 
				consulta1("contactos");
				
				//consulta1("usuarios",$array2);
			?>
		</table>
		<table>
			<?php consulta1("niveles");?>
		</table>
		<form method="POST" action="form.php">
			<p>Nombre: <input type="text" name="nombre"></p>
			<p>Telefono: <input type="text" name="numero"></p>
			<p>mail: <input type="text" name="mail"></p>
			<p><input type="submit" value="Registrar"></p>
		</form>
	</body>
</html>