<?php
	function consulta1($tabla){
		$sql="SELECT * FROM $tabla";
		include'conexion.php';
		//$html= "";
		$result = $conn->query($sql);
		if(!$result){ 
                      $error = $conn->error; echo "EXISTE UN ERROR EN: ".$error;
        } else {
					//echo '&iexcl;CONECTADO!';
					//$html="";
					if ($result->num_rows > 0) {
						while($row1= $result->fetch_assoc()) {
							$row[] = $row1;	 
						}
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
						echo $cab;
						$numarray = count($row);
						for($i=0; $i<$numarray; $i++){
							// var_dump($row[$i]);
							?> <tr> <?php
									foreach($row[$i] as $key => $value){
										echo "<td>".$row[$i][$key]."</td>";
									}
							?> </tr> <?php
						}
										
					} else {
						echo "No hay registros";
					}
				}		
		$conn->close();			
	}	
	
	
	
	function insert($tabla,$post){
		$campos="";
		foreach($post as $key =>$value){
			$key = htmlspecialchars(addslashes($key));
			$value = htmlspecialchars(addslashes($value));
			$campos .= "$key = '$value',";

		}
		$campos = rtrim($campos,",");
		$sql="INSERT INTO $tabla SET $campos ";
		//echo "<br>".$sql;
		include'conexion.php';
		$resultado = $conn->query($sql); 
		//COMPRUEBO mi consulta
		if(!$resultado){ 
			$error = $conn->error; echo "EXISTE UN ERROR EN: ".$error;
		} else {
				echo 'Registrado exitosamente';
		}
		//mysqli_close($conn);
		$conn->close();	
	}
		function consulta($tabla,&$where,&$row){
		$sql="SELECT * FROM $tabla $where";
	//	echo $sql;
		include'conexion.php';
		//$html= "";
		$result = $conn->query($sql);
		if(!$result){ 
                      $error = $conn->error; echo "EXISTE UN ERROR EN: ".$error;
        } else {
					//echo '&iexcl;CONECTADO!';
					//$html="";
					if ($result->num_rows > 0) {
						while($row1= $result->fetch_assoc()) {
							$row[] = $row1;	 
						}
						/*$cabecera="";
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
						echo $cab;
						$numarray = count($row);
						for($i=0; $i<$numarray; $i++){
							// var_dump($row[$i]);
							?> <tr> <?php
									foreach($row[$i] as $key => $value){
										echo "<td>".$row[$i][$key]."</td>";
									}
							?> </tr> <?php
						}*/
										
					} else {
						echo "No hay registros";
					}
				}		
		$conn->close();			
	}
?>