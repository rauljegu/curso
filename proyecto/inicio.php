<?php
    //var_dump($_POST);
    include'conexion.php';
    include'funciones.php';
    $u = limpiar($_POST["user"]);
    $p = limpiar($_POST["pass"]);
    echo "Esta es la contraseña del usuario: ".$p."<br>";
    $p = MD5($p);
    echo "Esta es la contraseña codificada que se envia a la consulta ". $p."<br>";
    $sql="SELECT * FROM usuarios WHERE user = '$u' AND pass = '$p' ";
    echo "<br>".$sql;
    $resultado = $conn->query($sql);
    if ($resultado->num_rows == 1) {
      echo "Inciaste sesion";
    } else {
             echo "Revisa tus credenciales!";
    }
?>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
      <p>Ingresa tu usuario: <input type="text" name="user"></p>
      <p>Contrase&ntilde;a: <input type="text" name="pass"></p>
      <p><input type="submit" value="INICIAR SESION"</p>
    </form>
  </body>
</html>
