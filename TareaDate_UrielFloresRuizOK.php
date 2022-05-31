<?php
echo "<b>Uriel Flores Ruiz</b>";
echo"<br>";
echo"<br>";
echo"<b>D&iacutea</b>";
echo"<br>";
  echo date ("d/m/y");
  echo "d: Día del mes, 2 dígitos con ceros iniciales<br>";
  echo date ("D/m/y");
  echo "D: Una representación textual de un día, tres letras<br>";
  echo date ("z/m/y"); //que dia del año es
  echo "z: El día del año (comenzando por 0)<br>";
  echo date ("j/m/y");
  echo "j: Día del mes sin ceros iniciales<br>";
  echo date ("l/m/y");
  echo "l: Una representación textual completa del día de la semana en ingl&eacute;s<br>";
  echo date ("N/m/y");
  echo "N: Representación numérica ISO-8601 del día de la semana (Lunes es 1 --7 Domingo)<br>";
  echo date ("jS/m/y");
  echo "j<b>S</b> Sufijo ordinal inglés para el día del mes, 2 caracteres<br>";
  echo date ("w/m/y");
  echo "w: Representación numérica del día de la semana (0 domingo -- 6 S&aacute;bado)<br>";
  echo "<br>";
  echo"<b>Mes</b>";
  echo"<br>";
  echo date ("d/m/y");
  echo "m: Representación numérica de un mes, con ceros iniciales<br>";
  echo date ("d/M/y");
  echo "M: Una representación textual corta de un mes, tres letras<br>";
  echo date ("d/F/y");
  echo "F: Una representación textual completa de un mes, como January o March<br>";
  echo date ("d/n/y");
  echo "d: Representación numérica de un mes, sin ceros iniciales<br>";
  echo date ("d/t/y");
  echo "Número de días del mes dado <br>";
  echo "<br>";
  echo"<b>Año</b>";
  echo"<br>";
  echo date ("d/m/y");
  echo "y Una representación de dos dígitos de un año<br>";
  echo date ("d/m/Y");
  echo "Y: Una representación numérica completa de un año, 4 dígitos<br>";
  echo date ("d/m/L");
  echo "L: Si es un año bisiesto (1 true 0 false)<br>";
  echo date ("d/m/o");
  echo "<br>";
  echo "<br>";

  echo date("e H:i");
  echo "<br>";
    echo "<br>";
    echo "<br><b>RETO</b>";
      if (date("N") == 1) {
        $dia = "Lunes";}
      if (date("N") == 2) {
        $dia = "Martes";}
      if (date("N") == 3) {
        $dia = "Mi&eacutercoles";}
      if (date("N") == 4) {
        $dia = "Jueves";}
      if (date("N") == 5) {
        $dia = "Viernes";}
      if (date("N") == 6) {
        $dia = "S&aacutebado";}
      if (date("N") == 7) {
        $dia = "Domingo";}
		
		// Otra forma seria anidar con else if y te ahorras la ultima comparacion,
	 //cuando anidas los if la ventaja que tienes es que el analisis se detiene en cuanto encuantre una coinicidencia
	 // si no los anidas, que no esta mal no hacerlo, se procesaran todas las condiciones, lo que puede volver lenta la carga de 
     //tu archivo PHP	 
	
	
	/*if (date("N") == 1) {
							$dia = "Lunes"; 
	} else if (date("N") == 2) {
								$dia = "Martes";
	} else if (date("N") == 3) { 
								$dia = "Mi&eacutercoles";
	} else if (date("N") == 4) {
								$dia = "Jueves";
	} else if (date("N") == 5) {
								$dia = "Viernes";
	} else if (date("N") == 6) {
								$dia = "S&aacutebado";
	} else  { 
				$dia = "Domingo";
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
  echo"<br>";
  //Bien solo ten en cuenta que "m" representa simpre el mes en dos digitos, por lo que en los if lo correcto 
//para evitar algun error seria habr utilizado 01, 02, 03... etc, o en su defecto utilizar "n" para evitar el 0 inicial
    /* if (date("m") == 01) {
        $mes = "Enero";}
      if (date("m") == 02) {
        $mes = "Febrero";}
      if (date("m") == 03) {
        $mes = "Marzo";}
      if (date("m") == 04) {
        $mes = "Abril";}
      if (date("m") == 05) {
        $mes = "Mayo";}
      if (date("m") == 06) {
        $mes = "Junio";}
      if (date("m") == 07) {
        $mes = "Julio";}
      if (date("m") == 08) {
        $mes = "Agosto";}
      if (date("m") == 09) {
        $mes = "Septiembre";}
      if (date("m") == 10) {
        $mes = "Octubre";}
      if (date("m") == 11) {
        $mes = "Noviembre";}
      if (date("m") == 12) {
        $mes = "Diciembre";}*/
//TIP: Cuando utilices funciones de PHP procura gurdarlas en una variable,  por ejemplo: $hoy = date("d"); asi es mas sencillo 
// y evitas que el navegador consulte el dato con serverdidor en repetidas ocasiones, tu app o web cargara más rápido.



  echo "Hoy es ".$dia." ".date("d")." de ".$mes." de ".date("Y");
  
  
 //OTRA FORMA DE RESOLVERLO con switch
  $hoy = date("N");
  $anio =date("Y");
  $Hoy = date("d");
  switch($hoy){  
				case 1: $dia= "Lunes"; 
				break;
				case 2: $dia= "Martes"; 
				break;
				case 3: $dia= "Mi&eacutercoles"; 
				break;
				case 4: $dia= "Jueves"; 
				break; 
				case 5: $dia= "Viernes"; 
				break;
				case 6: $dia= "S&aacute;bado"; 
				break;
				case 7: $dia= "Domingo"; 
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
				     
	echo "<p><br>Hoy es ".$dia." ".$Hoy." de ".$mes." de ".$anio." Utilizando Switch</p>" ;
	
	//OTRA FORMA CON ARRAYS
	//1) Se crea un arreglo que contenga los dias , de la semana, en el indice 0 tambien podria dejarse  sin asignar
	$diaArray=array("","Lunes","Martes","Mi&eacute;rcoles","Jueves","Viernes","S&aacute;bado","Domingo");
	$dia = $diaArray[$hoy]; //se accede al indice mediante la variable $hoy
	
	//2) Se crea un arreglo que contenga los  meses , de la semana, en el indice 0 tambien podria dejarse  sin asignar
	$mesArray=array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto", "Septiembre","Octubre","Noviembre","Diciembre");
	$mes = $mesArray[$month];
	echo "<p><br>Hoy es ".$dia." ".$Hoy." de ".$mes." de ".$anio." Utilizando Arrays dejando el &iacute;ndice 0  vacio</p>";
	
	/*PARA EVITAR ERRORES SE RECOMIENDA NO DEJAR EL INIDCE 0 VACIO POR LO QUE SE TENDRÁ QUE HACER UNA OPERACION DE CORRECCION*/
	$diaArray=array("Lunes","Martes","Mi&eacute;rcoles","Jueves","Viernes","S&aacute;bado","Domingo");
	$i = $hoy-1; //Como los array empiezan por 0 le resto 1 a la variable $hoy para obtener la posicion correcta y se guarda el valor en $i
	$dia = $diaArray[$i]; // se utiliza el valor de $i para acceder al indice correcto;
	
	$mesArray=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto", "Septiembre","Octubre","Noviembre","Diciembre");
	$ii = $month-1; // Se hace lo mismo de restar 1 a la variable $month para obteer la posicion correcta
	$mes = $mesArray[$ii]; // se utiliza el valor de $i para acceder al indice correcto;
	echo "<br>Hoy es ".$dia." ".$Hoy." de ".$mes." de ".$anio." Utilizando Arrays sin dejar inidces vacios"; 
?>
