<?php
  echo "<i><b>Fernando Mac&iacuteas Ortiz</b></i>";

  echo "<br><br><b>MESES</b>";
    echo "<br><b>F:</b> Escribe el mes en ingl&eacutes. - <i>Ej:</i> ".date("d/F/Y");
    echo "<br><b>m:</b> Representa num&eacutericamente el mes con un cero inicial. - <i>Ej:</i> ".date("d/m/Y");
    echo "<br><b>M:</b> Escribe las primeras tres letras del mes en ingl&eacutes. - <i>Ej:</i> ".date("d/M/Y");
    echo "<br><b>n:</b> Representa num&eacutericamente el mes sin un cero inicial. - <i>Ej:</i> ".date("d/n/Y");
    echo "<br><b>t:</b> Indica el n&uacutemero de d&iacuteas que tiene el mes. - <i>Ej:</i> ".date("d/t/Y");

  echo "<br><br><b>AÑOS</b>";
    echo "<br><b>L:</b> Se muestra 1 si es año bisiesto y 0 si no lo es. - <i>Ej:</i> ".date("d/m/L");
    echo "<br><b>o:</b> Año seg&uacuten el n&uacutemero de la semana ISO-8601. - <i>Ej:</i> ".date("d/m/o");
    echo "<br><b>Y:</b> Presenta todos los d&iacutegitos del año. - <i>Ej:</i> ".date("d/m/Y");
    echo "<br><b>y:</b> Presenta los dos &uacuteltimos d&iacutegitos del año. - <i>Ej:</i> ".date("d/m/y");

  echo "<br><br><b>PROBLEMA</b>";
    if (date("N") == 1) {
      $diasem = "Lunes";}
    if (date("N") == 2) {
      $diasem = "Martes";}
    if (date("N") == 3) {
      $diasem = "Mi&eacutercoles";}
    if (date("N") == 4) {
      $diasem = "Jueves";}
    if (date("N") == 5) {
      $diasem = "Viernes";}
    if (date("N") == 6) {
      $diasem = "S&aacutebado";}
    if (date("N") == 7) {
      $diasem = "Domingo";}

	 // Otra forma seria anidar con else if y te ahorras la ultima comparacion,
	 //cuando anidas los if la ventaja que tienes es que el analisis se detiene en cuanto encuantra una coinicidencia
	 // si no los anidas, que no esta mal no hacerlo, se procesaran todas las condiciones, lo que puede volver lenta la carga de
     //tu archivo PHP


	/*if (date("N") == 1) {
							$diasem = "Lunes";
	} else if (date("N") == 2) {
								$diasem = "Martes";
	} else if (date("N") == 3) {
								$diasem = "Mi&eacutercoles";
	} else if (date("N") == 4) {
								$diasem = "Jueves";
	} else if (date("N") == 5) {
								$diasem = "Viernes";
	} else if (date("N") == 6) {
								$diasem = "S&aacutebado";
	} else  {
				$diasem = "Domingo";
			}*/

    if (date("m") == 1) {
      $mes = "Enero";}
    if (date("m") == 2) {
      $mes = "Febrero";}
    if (date("m") == 3) {
      $mes = "Marzo";}
    if (date("m") == 4) {
      $mes = "Abril";}
    if (date("m") == 5) {
      $mes = "Mayo";}
    if (date("m") == 6) {
      $mes = "Junio";}
    if (date("m") == 7) {
      $mes = "Julio";}
    if (date("m") == 8) {
      $mes = "Agosto";}
    if (date("m") == 9) {
      $mes = "Septiembre";}
    if (date("m") == 10) {
      $mes = "Octubre";}
    if (date("m") == 11) {
      $mes = "Noviembre";}
    if (date("m") == 12) {
      $mes = "Diciembre";}
  echo "<br>Hoy es ".$diasem." ".date("d")." de ".$mes." de ".date("Y");
//Bien solo ten en cuenta que "m" representa simpre el mes en dos digitos, por lo que en los if lo correcto
//para evitar algun error seria habr utilizado 01, 02, 03... etc, o en su defecto utilizar "n" para evitar el 0 inicial
//TIP: Cuando utilices funciones de PHP procura gurdarlas en una variable,  por ejemplo: $hoy = date("d"); asi es mas sencillo
// y evitas que el navegador consulte el dato con serverdidor en repetidas ocasiones, tu app o web cargara más rápido.

 //OTRA FORMA DE RESOLVERLO con switch
  $hoy = date("N");
  switch($hoy){
				case 1: $diasem= "Lunes";
				break;
				case 2: $diasem= "Martes";
				break;
				case 3: $diasem= "Mi&eacutercoles";
				break;
				case 4: $diasem= "Jueves";
				break;
				case 5: $diasem= "Viernes";
				break;
				case 6: $diasem= "S&aacute;bado";
				break;
				case 7: $diasem= "Domingo";
				break;
			  }
	$month = date("n"); //para los meses utilizo "n" en lugar de "m" para evitar el 0 inicial, ya que los arrays no incluyyen el 0 inicial
	switch($month){
					case 1: $mes= "Enero";
					break;
					case 2: $mes= "Febrero";
					break;
					case 3: $mes= "Marzo";
					break;
					case 4: $mes= "Abril";
					break;
					case 5: $mes= "Mayo";
					break;
					case 6: $mes= "Junio";
					break;
					case 7: $mes= "Julio";
					break;
					case 8: $mes= "Agosto";
					break;
					case 9: $mes= "Septiembre";
					break;
					case 10: $mes= "Octubre";
					break;
					case 11: $mes= "Noviembre";
					break;
					case 12: $mes= "Diciembre";
					break;
				}

	echo "<p><br>Hoy es ".$diasem." ".date("d")." de ".$mes." de ".date("Y")." Utilizando Switch</p>" ;

	//OTRA FORMA CON ARRAYS
	//1) Se crea un arreglo que contenga los dias , de la semana, en el indice 0 tambien podria dejarse  sin asignar
	$diasemArray=array("","Lunes","Martes","Mi&eacute;rcoles","Jueves","Viernes","S&aacute;bado","Domingo");
	$diasem = $diasemArray[$hoy]; //se accede al indice mediante la variable $hoy

	//2) Se crea un arreglo que contenga los  meses , de la semana, en el indice 0 tambien podria dejarse  sin asignar
	$mesArray=array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto", "Septiembre","Octubre","Noviembre","Diciembre");
	$mes = $mesArray[$month];
	echo "<p><br>Hoy es ".$diasem." ".date("d")." de ".$mes." de ".date("Y")." Utilizando Arrays dejando el &iacute;ndice 0  vacio</p>";

	/*PARA EVITAR ERRORES SE RECOMIENDA NO DEJAR EL INIDCE 0 VACIO POR LO QUE SE TENDRÁ QUE HACER UNA OPERACION DE CORRECCION*/
	$diasemArray=array("Lunes","Martes","Mi&eacute;rcoles","Jueves","Viernes","S&aacute;bado","Domingo");
	$i = $hoy-1; //Como los array empiezan por 0 le resto 1 a la variable $hoy para obtener la posicion correcta y se guarda el valor en $i
	$diasem = $diasemArray[$i]; // se utiliza el valor de $i para acceder al indice correcto;

	$mesArray=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto", "Septiembre","Octubre","Noviembre","Diciembre");
	$ii = $month-1; // Se hace lo mismo de restar 1 a la variable $month para obteer la posicion correcta
	$mes = $mesArray[$ii]; // se utiliza el valor de $i para acceder al indice correcto;
	echo "<br>Hoy es ".$diasem." ".date("d")." de ".$mes." de ".date("Y")." Utilizando Arrays sin dejar inidces vacios";

?>
