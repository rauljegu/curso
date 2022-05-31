<?php
include'funciones.php';
//$html=consulta1("contactos",$array);
if($_SERVER["REQUEST_METHOD"]=== "POST"){
		//echo "HOLA";
		//$array= [];
		$string="";
		//$html1 =consulta1("contactos",$array);
	//	echo $html;
		//insert("contactos",$_POST);
		var_dump($_POST);
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
				
				consulta("contactos",$where,$row);
				$cabecera="";
						//var_dump($row);
						$cabecera= [];
						foreach($row[0] as $key =>$value){
															array_push($cabecera,$key);
						}						
						// var_dump($cabecera);
						$cab="";
						foreach($cabecera as $key =>$value){
																$cab.="<th>".$value."</th>";
						}
						echo $cab."<th>accion</th>";
						$numarray = count($row);
						for($i=0; $i<$numarray; $i++){
							// var_dump($row[$i]);
							?> <tr> <?php
									foreach($row[$i] as $key => $value){
										echo "<td>".$row[$i][$key]."</td>";
									}
							?><td><a href="<?=$_SERVER["PHP_SELF"];?>?id=<?= $row[$i]["id"];?>">Actualizar</a></td> </tr> <?php
						}
				//consulta1("usuarios",$array2);
				
			?>
		</table>
		<table>
			<?php //consulta1("niveles");?>
		</table>
		<form method="POST" action="slect.php">
		<?php 
			if($_SERVER["REQUEST_METHOD"]=== "GET"){
				$where = $_GET["id"];
				echo $where = "WHERE id="."'".$_GET["id"]."'" ;
				consulta("contactos",$where,$row1);
				var_dump($row1);
													foreach($row1[0] as $key => $value){
										echo "<p>".$key." :<input type='text' name='".$key."' value='".$row1[0][$key]."'></p>";
									}
		?>
	
		
			<p><input type="submit" value="Actualizar"></p>
		</form>
		<?php } ?>
	</body>
</html>