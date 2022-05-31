<?php
  ///var_dump($_POST);
  //VALIDA isset que POST este definido y !empty que POST no tenga inidces vacios
  if( ( isset($_POST) ) && ( !empty($_POST) ) ){
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
												echo "Hubo un error al crear la tabla usuarios: " . $conn->error; // ->error me permite saber cual error MongoCursorException
                                                                                          // al realizar la query()
											}


    mysqli_close($conn); //mysqli_close o $conn->close(); cierran la conexxion a la BD
    // INSERTAR LOS DATOS EN LA tabla
    //CREA la consulta SQL para la insercion de datos
    $sql="INSERT INTO usuarios SET
    nombre = '$nombre',
    correo = '$correo',
    user = '$usuario',
    pass = '$contra'
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
}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Proyecto</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <p>Nombre <input type="text" name="nombre"></p>
      <p>Correo <input type="mail" name="correo"></p>
      <p>Nombre de usuario <input type="text" name="user"></p>
      <p>Contraseña <input type="text" name="pass"></p>
      <p> <input type="submit" value="REGISTRAR"></p>
    </form>
    <?php include'pie.php'; ?>
  </body>
</html>