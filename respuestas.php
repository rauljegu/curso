<html>
<body>
<?php
/* echo nl2br("hola \n adios");
echo nl2br("\n");
 print nl2br("adios \r\n");
 echo nl2br("Soy una línea.\n");
echo "Soy otra línea.\n","bye".PHP_EOL;*/
  /*la funcion especial de php ver_dump() sirve para mostrar la informacion contenida en una variable
  que guarda un arreglo de datos*/

 var_dump($_POST);
  if(isset($_POST)){
                      echo "vacio";
                    } else {
                            echo "Definido";

                            //Variables en php
                            $nombre = $_POST["nombre"];
                          }
  //$nombre = $_GET["nombre"];
//  echo $nombre;
  //$nombre = "Uriel";
//  echo $nombre;
//echo "<br>";
  /*$edad = $_POST["edad"];
  $paterno = $_POST["apellido_paterno"];
  $materno = $_POST["apellidoMaterno"];
  $mensaje="Este es mi nombre ".$nombre." ".$paterno." ".$materno." y esta es mi edad ".$edad;
  echo $mensaje;*/

//  TIPOS DE DATOS Y ESTRUCTURAS DE CONTROL con PHP (HTML)

  //CADENA DE TEXTO o STRINGS
/*  $espacio = " ";
  echo $cadena = "ABC";
  echo "<br>";
  echo $cadena1 = "123";
  echo "<br>";
  echo "a1b2c3";
  echo "<br>";
  echo "Hola mundo";
  echo "<p>Soy un parrafo</p>";
  echo $cadena.$espacio.$cadena1;*/
  // NUMEROS ENTEROS O NUMEROS DE PUNTO FLOTANTE (DECIMALES)
/*  echo 1;
  echo "<br>";
  echo 1.01;
  echo "<br>";
  echo 12 % 5; //sumas, restas, multiplicaciones, divisiones, modulo.
  echo "<br>";
  echo 1.1 + 1.2;
    echo "<br>";*/
// caso especial con PHP
/*
  $num = 10;
  $letra = "10";
  $suma = $num + $letra;
  echo $suma;*/
//ARRAY
//Alumnos
/*$alumno[0] = "Fernando";
$alumno[1] = "Elisa";
$alumno[2] = "Uriel";
$alumno[3] = "Mariel";*/
//$alumno = array("Fernando","Elisa","Uriel","Mariel");
//echo "<br>";
//var_dump($alumno);
//echo "Hola mundo soy ".$alumno[3];

//estructuras de control o BUCLES

//IF - foreach - CASE
 //operadores de compracion <, >, <=, >=, ==, ===
/*if($num === $letra){
                    echo "igual";
                  } else { echo "no es igual";
                          }

echo "<br>";*/


/*if($alumno[0] == "Uriel") { echo "Soy Uriel";
} else {
          echo "no soy Uriel soy ".$alumno[0];
       }

//if anidado
if($alumno[0] == "Uriel") { echo "Soy Uriel";
} else if ($alumno[1] == "Elisa") { echo "Soy Elisa"; }*/
/*$num = 100;
if ($num < 20 ){ echo " verdadero ";
                } else { echo "Falso";
                }*/
                        echo "<br>";
//foreach
/*foreach ($alumno as $key => $value) {
                                      //  echo $key;
                                      if ($key == 1) {
                                                        $texto = " y soy la corrdinadora.";
                                                     } else {
                                                        $texto = " y soy alumno.";
                                                     }
                                      echo " hola yo soy :".$value.$texto;
                                      echo "<br>";
}*/
echo "<br>";
/*echo $texto1 = "a"; echo"<br> ";
echo $$texto1 = "ahora soy la varible a"; echo "<br>"; //$hola = "ahora soy la varible hola";
echo $a;*/
//var_dump($_POST); echo "<br>";
/*$b = " ";
foreach ($_POST as $key => $value) {

//   $$key = $value;// echo "<br>";  $folio = 123456789;
  $b = $b." ".$value.", ";
}*/
//echo $b;
//echo $nombre;
/*$alumno = array("Fernando","Elisa","Uriel","Mariel");
echo "<br>";

switch ($alumno[0]) {
  case 'Elisa':
    echo "Cordinadora";
    break;
  default:
    echo "Soy alumno";
    break;

}

foreach ($alumno as $key => $value) {
  switch ($key) {
    case 1:
      echo "<br>Soy ".$value." y soy cordinadora<br>";
      break;

    default:
        echo "<br>Soy ".$value." y soy alumno<br>";
      break;
  }
}*/

?>
</body>
</html>
