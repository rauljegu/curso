<?php
   include'conexion.php';
   $sql="SELECT COUNT(*) AS numero from Information_Schema.Tables 
         where table_schema = 'curso' AND `TABLE_NAME` LIKE 'usuarios%'";
	$result = $conn->query($sql);
		if(!$result){ 
                      $error = $conn->error; echo "EXISTE UN ERROR EN: ".$error;
        } else {
				
					if ($result->num_rows > 0) {
						while($row1= $result->fetch_assoc()) {
							echo $numero = $row1["numero"] ;	 
						}
					}
		}	
		
		echo $tablanueva = "usuarios".$numero;
		$sql = "CREATE TABLE $tablanueva LIKE usuarios";
		$result = $conn->query($sql);
		if(!$result){ 
                      $error = $conn->error; echo "EXISTE UN ERROR EN: ".$error;
        } else {
				$sql1="INSERT INTO $tablanueva
						SELECT * FROM usuarios";	
				$result = $conn->query($sql1);
				if(!$result){ 
						$error = $conn->error; echo "EXISTE UN ERROR EN: ".$error;
				} else { 
							echo "EXITO";
						}
				}
		
?>
