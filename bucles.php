<?php
  //BUCLE WHILE
  $num = 0;
  while ($num <= 5) {
  //  echo $num = $num +1 ;
   echo $num++;
    echo " :es menor a 5 <br>";
    echo "<br>";
  }

  //BUCLE FOR
  for ($i=0; $i <10 ; $i++) {
    echo $i." es menor a 10 <br>";
  }
  //Do While
  $i = 0;
    do {
        echo $i;
        echo "<br>";
        //$i++;
        } while ($i > 0);
// Funcion de evaluacion de variable definida o indefinida
 //isset()
  $a=123546;
  //echo $b = isset($a);
  if(isset($a)){
                echo "definida ";
              } else {
                echo "No definida";
              }
                  //VACIO != DEFINIDO
                  $b = null;
                  // isset($b);
                   if(isset($b)){
                                 echo "definida ";
                               } else {
                                 echo "No definida";
                               }
  //FUNCION PARA VARIABLE VACIA;
 if  (empty($b)) {
                    echo $b = 1;
                  } else {
                    echo "error";
                  }
//FECHA y HORA
    //funcion date() - d (day) m(month) Y(year)    h (hour)  i(minutos)
    //  / - : .
    echo "<br>";
    //fecha en formato dd/mm/yy
    echo date("d/m/y"); // la fecha calendario la pone con 2 digitos 01,02...10
    echo "<br>";
    // Formato para el dia d D
    echo date("D/m/y"); // D abrevia el dia de la semana en ingles
    echo "<br>";
    echo date("j/m/y"); // j es poner el numero de la fecha calendario en un solo digito 1,2...10
    echo "<br>";
    echo date("l /m/y"); //l dia de la semana completo
    echo "<br>";
    echo date("N /m/y");// el dia de la semana en formato numerico 1 = Domingo, 2 = lunes,
    echo "<br>";
    echo date("z /m/y"); echo " z devuelve el dia numerico del año (tener en cuenta que inicia en 0)";
    echo "<br>";
    echo date("e H:i");
    echo "<br> Hoy es Viernes 29 de Abril de 2022";
 ?>
