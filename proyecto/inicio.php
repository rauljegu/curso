<?php
    //var_dump($_POST);
    include'conexion.php';
    include'funciones.php';
    if(!empty($_POST)){
      $u = limpiar($_POST["user"]);
      $p = limpiar($_POST["pass"]);
     // echo "Esta es la contraseña del usuario: ".$p."<br>";
      $p = MD5($p);
      //echo "Esta es la contraseña codificada que se envia a la consulta ". $p."<br>";
      $sql="SELECT * FROM usuarios WHERE user = '$u' AND pass = '$p' ";
     // echo "<br>".$sql;
      $resultado = $conn->query($sql);
      if ($resultado->num_rows == 1) {
        $row= $resultado->fetch_assoc();

        //-*********************I N I C I O   D E    S E S I O N  E N  S E R V E R************//
        //session_start(); //Crea un sesion de servidor, guarda un archivo con una clave en la PC
        ////////////////////////////LAS VARIABLES SUPER GLOBALES SESSION variables de entorno
        /*$_SESSION["nombre"]=$row["nombre"];
        $_SESSION["correo"]=$row["correo"];
        $_SESSION["user"]=$row["user"];
        $_SESSION["tipo"]= 1; */ // usuario tipo 1 es un usuario sin priveligio
        //UNA VEZ CREADAS LAS VARIABLES ENTORNO DE SESSION
          //-*********************F I N   D E    S E S I O N  E N  S E R V E R************//

        //REDIRIGIMOS AL USUARIO A la pagina principal de nuestra web o aplicacion
      //  if($_SESSION["tipo"] == 1){  // verificar el tipo de usuario para saber a donde enviarlo ! IF DE VERIFICACION
      //    header("Location:  perfil.php");
      //  } else {
        //    session_destroy(); // detruye una sesion previa (destruye las variables de entorno)
        //      header('Location: inicio.php'); /// redirja al usuario al formulario de inicio
      //  }



                      /*** ALTERNATIVAS PARA LIMPIAR EL DOCUMENTO ***/
                          ///-----ALTERNATIVA 1
                          // creamos una funcion login(); para englobar el IF de verificacion
                          /*function login(){
                            if($_SESSION["tipo"] == 1){
                              header("Location:  perfil.php");
                              echo "exito";
                            } else {
                                session_destroy();
                                  header('Location: inicio.php');
                            }
                          }
                          //invocamos a la funcion
                          login(); // mandamos la funcion al doumento funciones
                          */

                                                //-*-*-*-*- ALTERNATIVA 2
                                                // creamos una funcion login(); PARA CREAR LA SESION  SERVER CON SUS VARIABLES Y EN UN SOLO PASO
                                                // englobar el IF de verificacion

                                                // 1) guardar los valores de lqa BD en variables para que podamos pasarlos a una funcion
                                              /*  $n = $row["nombre"];
                                                $c = $row["correo"];
                                                $u= $row["user"];*/
                                                //creamos la funcion login(arguementos);  *arguementos se le deben indicar a la funcion
                                                //ya que no puede acceder a datos que estan fuera de sus limites {}
                                            /*  function login($a,$b,$c){
                                                                          session_start(); // CREO SASION DE servidor
                                                                          //DEFINIR LAS VARIABLES DE ENTORNO DE SESIOM
                                                                          $_SESSION["nombre"]=$a; //  asigno el argumento $a (primer)
                                                                          $_SESSION["correo"]=$b;
                                                                          $_SESSION["user"]=$c;
                                                                          $_SESSION["tipo"]= 1;

                                                                         // DEFINIO EL IF DE VERIFICACION
                                                                          if($_SESSION["tipo"] == 1){
                                                                            header("Location:  perfil.php");
                                                                            echo "exito";
                                                                          } else {
                                                                              session_destroy();
                                                                                header('Location: inicio.php');
                                                                          }
                                                }*/ // ESTA FUNCION se guarda en el documento funciones
                                                login($n,$c,$u); // invoco la funcion pasandole los argumetnos
                                              //  echo "Inciaste sesion ".$_SESSION["nombre"]; //Mensaje de prueba
      } else {
               echo "Revisa tus credenciales!";
      }
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
