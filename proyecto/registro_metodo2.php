<?php
  var_dump($_POST);
  //VALIDA isset que POST este definido y !empty que POST no tenga inidces vacios//valida que no exista el indice editar
  if( ( isset($_POST) ) && ( !empty($_POST) && (!isset($_GET["editar"])) ) ){
    //Recuperar los campos del formulario a traves de su indice en el array POST
      $nombre = $_POST["nombre"];
      $correo = $_POST["correo"];
      $usuario = $_POST["user"];
      $contra = $_POST["pass"];
     // CREO una CONSULTA SQL para crear por primera vez mi tabla y la guardo en la variable $sql
     $sql="CREATE TABLE IF NOT EXISTS usuarios (
       id_usuario INT(255) NOT NULL AUTO_INCREMENT,
       nombre varchar(255) NOT NULL,
       correo LONGTEXT NOT NULL,
       user varchar(255) NOT NULL,
       pass LONGTEXT,
       PRIMARY KEY (id_usuario)
     );";
	//   echo "<br>".$sql;
	//INCLUYO el archivo que tiene las isntrucciones para conectar a la BD
     include'conexion.php';
     //Verificar si existe la tabla donde guardare los datos y si no existe la creo.
     //la vartiable $conn guarda el resultado de la conexxion con la BD
     // Con -> puedo enviar o recibir informacion de la conexion a la BD
     // la funcion query() envia una consulta, por ello en los parentesis inidco la consulta con la variable $sql
     if ($conn->query($sql) === TRUE) { // valido el resultado de la consulta , si se realizó será TRUE
												echo "la tabla  ha sido creada";
											} else {
												echo "Hubo un error al crear la tabla usuarios: " . $conn->error; // ->error me permite saber cual error
                                                                                          // al realizar la query()
											}

    mysqli_close($conn); //mysqli_close o $conn->close(); cierran la conexxion a la BD
    // INSERTAR LOS DATOS EN LA tabla
    //CREA la consulta SQL para la insercion de datos
    $sql="INSERT INTO usuarios SET
    nombre = '$nombre',
    correo = '$correo',
    user = '$usuario',
    pass = '$contra',
    activo = 1
    ;";
     echo "<br>".$sql;
     // abro una conexxion con bd
     include'conexion.php';
     //Envio la consulta sql
     $resultado = $conn->query($sql); // si hay conexion TRUE // si no hay conexion // FALSE
     // ! negando el resultado !TRUE =  FALSO ;; !FALSO = TRUE
     //COMPRUEBO mi consulta
     if(!$resultado){ //SI: NO TRUE (FALSE)
                      $error = $conn->error; echo "EXISTE UN ERROR EN: ".$error;
                      } else {
                              // SI: NO FALSE (TRUE)
                              echo 'Registrado exitosamente';
                              }
      //mysqli_close($conn);
      $conn->close();
} //////////////TERMINA EL IF DE REGISTRO///////////////



////////////////////////////////////////////////////////////////////////////////////////////////EDITAR REGISTROS (IF de EDICION)/////////////////////////////////////////
	if(isset($_GET["editar"])){ //Se valida que el indice "editar" de la funcion GET no este definido, para evitar mensajes de warning
								$editar = $_GET["editar"]; //Si esta definido se guarda en la variable $editar e inidca que entraremos en el bloque if de edicion
	} else {
			$editar = ""; // si no esta definido el inidce se declara la variable $editar como vacia para evitar la parte TRUE del IF de edicion 
	}
	
	if($editar == 1){// se valida que el inidce GET valga 1 (valor predeterminado por nosotros en la url)
        $id = $_GET["id"]; // Rescatamos el id del registro objetivo a editar que nos hemos enviado por enlace (<a>) en la url
        echo "Actualizando el registro. El valor es 1 y su id es ".$id."<br>";
        
		include'conexion.php';// iniciamos una conexion a BD
        $sql="SELECT * FROM usuarios WHERE id_usuario = $id";//Preparamos la consulta para obtener solo los datos de este registro
        $result = $conn->query($sql); //guardamos la consulta y conexxion en una variable
        
		if ($result->num_rows > 0) { // validamos que la consulta nos haya devuelto al menos un registro
          
		  while($row= $result->fetch_assoc()) { // obtenemos en forma de array el registro y lo guardamos en el el array row
		  // Mostramos un formulario con los datos guardados en la BD para poder elegir que datos se actulizaran
		  ?>
              <form action="registro_metodo2.php?editar=1&id=<?php echo $row["id_usuario"]; ?>" method="POST"> <!-- El action es identico a la url que nos ha traido hasta aqui-->
                <p><input type="text" name="nombre" value="<?php echo $row["nombre"]; ?>"></p> <!--En un formulario los inputs generalmente no tiene un value definido, aqui imprimimos el valor guardado en la BD -->
                <p><input type="text" name="correo" value="<?php echo $row["correo"]; ?>"></p>
                <p><input type="text" name="user" value="<?php echo $row["user"]; ?>"></p>
                <p><input type="text" name="pass" value="<?php echo $row["pass"]; ?>"></p>
                <p><input type="submit" value="actualizar" name="actualizar"></p><!--Generalmente el boton de un formulario no lleva un Name, en este caso lo agregamos con el objetivo de Entrar al IF de Actualizacion -->
            </form>
          <?php
          } //fin del WHILE 
        }// fin del if
		$conn->close(); // Cerramos la conexxion a la BD
      
		//////////////////////HACER EFECTIVO EL CAMBIO IF DE ACTUALIZACION
		if(isset($_POST["actualizar"])){ //Se valida que el indice "actualizar" de la funcion POST no este definido,  para evitar mensajes de warning.
										$actualizar = $_POST["actualizar"];//Si esta definido se guarda en la variable $actualizar e inidca que entraremos en el bloque if de actualizacion
		} else {
				$actualizar = "";// si no esta definido el inidce se declara la variable $actualizar como vacia para evitar la parte TRUE del IF de actualizacion 
		}
      
		if($actualizar == 'actualizar'){// se valida que el inidce "actualizar" de la variable  POST exista  (valor enviado en el boton submit del form)
										$nombre = $_POST["nombre"]; //Recuperamos los datos del array POST uno a uno
										$correo = $_POST["correo"];
										$user = $_POST["user"];
										$pass = $_POST["pass"];
										include'conexion.php';
										//Preparo mi CONSULTA
										$sql="UPDATE usuarios SET
										nombre = '$nombre',
										correo = '$correo',
										user = '$user',
										pass ='$pass'
										WHERE id_usuario = $id ";

										$resultado = $conn->query($sql); // si hay conexion TRUE // si no hay conexion // FALSE
										// ! negando el resultado !TRUE =  FALSO ;; !FALSO = TRUE
										//COMPRUEBO mi consulta
										if(!$resultado){ //SI: NO TRUE (FALSE)
															$error = $conn->error; echo "EXISTE UN ERROR EN: ".$error;
										} else {
												// SI: NO FALSE (TRUE)
												echo 'Registro Actualizado exitosamente'; // Enviamos un mensaje para inidcar que se realizó el cambio
												header("refresh: 1; url = registro_metodo2.php");// Como se queda el formulario de actualizacion abierto y este no se actualiza 
												//usamos la funcion header(), este cambia la url que estamos consultando, el valor "refresh" inidca el tiempo en segundos que tarda en ejecutarse la fucion
												// el valor "url" nos inidca la direccion a la que se redirigira nuestro sitio, en este caso se renvia al archivo php limpiando la url de GET y POST previos
										}
      } //FIN del IF ACTUALIZAR
} //FIN DEL IF DE EDICION
////////////////////////////////////////////////////////////////////////////////////////////FINALIZA LA FUNCIONALIDAD Editar////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////FUNCIONALIDAD ELIMINAR -ELIMINANDO DIRECTAMENTE EN BD-//////////////////////////////////////
	if(isset($_GET["editar"])){  //Se valida que el indice "editar" de la funcion GET no este definido, para evitar mensajes de warning
								$editar = $_GET["editar"];
	} else {
			$editar = "";
	}
	
	if($editar == 2){ // se valida que el inidce GET valga 2 (valor predeterminado por nosotros en la url) inidcamos con este valor que la edicion será de eliminacion en la BD
						$id = $_GET["id"];
						echo "Eliminando el registro. El valor es 2 y su id es ".$id."<br>";
						include'conexion.php';
						$sql="DELETE FROM usuarios WHERE id_usuario = $id";
						$resultado = $conn->query($sql);
						if(!$resultado){ //SI: NO TRUE (FALSE)
										$error = $conn->error; echo "EXISTE UN ERROR EN: ".$error;
						} else {
									// SI: NO FALSE (TRUE)
									echo 'Registro Eliminado Exitosamente';
						}
	} //fin del IF Editar = 2
/////////////////////////////////////////////////////////FUNCIONALIDAD ELIMINAR -ELIMINANDO DIRECTAMENTE EN BD-//////////////////////////////////////	  
     

////////////////////////////////////////////////////// ////FUNCIONALIDAD ELIMINAR -INACTIVANDO DIRECTAMENTE EN BD SIN ELIMINAR EL REGISTRO-///////////////////////////////
      if(isset($_GET["editar"])){
									$editar = $_GET["editar"];
      } else {
				$editar = "";
      }
      if($editar == 3){
						$id = $_GET["id"];
						echo "Eliminando (inactivando) el registro. El valor es 3 y su id es ".$id."<br>";
						include'conexion.php';
						$sql="UPDATE  usuarios SET activo = 0 WHERE id_usuario = $id";
						$resultado = $conn->query($sql);
						if(!$resultado){ //SI: NO TRUE (FALSE)
										$error = $conn->error; echo "EXISTE UN ERROR EN: ".$error;
						} else {
									// SI: NO FALSE (TRUE)
									echo 'Registro Eliminado(inactivado) Exitosamente';
						}
		}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Proyecto</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <p id="name" class="formulario registro">Nombre <input type="text" name="nombre"></p>
      <p>Correo <input type="mail" name="correo"></p>
      <p>Nombre de usuario <input type="text" name="user"></p>
      <p>Contraseña <input type="text" name="pass"></p>
      <p> <input type="submit" value="REGISTRAR"></p>
    </form>
    <?php //READ:  LECTURA DE DATOS DE UNA BD CON PHP ?>
    <table style="border: 1px solid";>
        <thead>
          <tr style="border: 1px solid";>
            <th>Nombre</th>
            <th>Correo</th>
            <th>User</th>
            <th>Password</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
              <?php
            //OTRA OPCION: OBTENCION DE DATOS EN VARIOS BLOQUES PHP
            include'conexion.php'; // abro una conexion con BD
            $sql="SELECT * FROM usuarios WHERE activo = 1";// Ejecuto la consulta y la guardo en una variable
            $result = $conn->query($sql);// Ejecuto la consulta y la guardo en una variable
            if ($result->num_rows > 0) {//Con ->num_rows consulto el numero de registros si es mayor a 0 abro un bucle while para mostrarlos
                while($row= $result->fetch_assoc()) {//Con fetch_assoc() convierto los registros uno a uno de la tabla SQL en un array y lo guardo en la variable $row
                  // cuando el while termina su primer vuelta, el array ($row) se reescribe con los datos del siguiente registro y asi sucesivamente
           ?>
           <!--En lugar de crear un string se cierra el bloque php -interrumpiendo la sintaxis del if y el while monentaneamete- y se ejecuta HTML-->
           <tr>
               <td><?php echo $row["nombre"]; ?></td> <!--para cada dato se abre un nuevo bloque php-->
               <td><?php echo $row["correo"]; ?></td> <!--para cada dato se abre un nuevo bloque php-->
               <td><?php echo $row["user"]; ?></td><!--para cada dato se abre un nuevo bloque php-->
               <td><?php echo $row["pass"]; ?></td><!--para cada dato se abre un nuevo bloque php-->
               <td><a href="registro_metodo2.php?editar=1&id=<?php echo $row["id_usuario"]; ?>">Editar</a></td><!--Enviamos una inidcacion con un par clave valor a un nuevo documento php (en este caso al mismo)-->
																												<!-- utilizamos el signo "?" para inidcar el primer par clave valor (Que podemos rescatar con la SUPERGLOBAL $_GET[] )-->
																												<!--  utilizamos el signo "&" para agregar un nuevo par, y enviamos el ID del registro -->
																												<!--  la accion a realizar con el valor 1 sera editar -->
               <td><a href="registro_metodo2.php?editar=2&id=<?php echo $row["id_usuario"]; ?>">ELIMINAR DEF</a></td><!--  la accion a realizar con el valor 2 sera eliminar directamente en la DB -->
                <td><a href="registro_metodo2.php?editar=3&id=<?php echo $row["id_usuario"]; ?>">ELIMINAR OK</a></td><!--  la accion a realizar con el valor 3 sera eliminar (inactivar) el registro en la DB -->
          </tr>
          <?php // se recupera la sintaxis del while y el if y se cierra la conxxion con la db
        }
      }
      $conn->close();
      ?>
        </tbody>
    </table>
    <?php include'pie.php'; ?>
  </body>
</html>
