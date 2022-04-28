<?php 
	include 'includes/baas.php';
?>

<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<head>
	<title>Andmebaas 1</title>
	</head>
	<body>
	
	<?php
		$sql = 'SELECT * FROM kasutajad;'; // Kask andmebaasile
		$tulemus = mysqli_query($conn, $sql); // Kust ja mida kuvada
		$kontroll = mysqli_num_rows($tulemus);
		
		if($kontroll > 0){
			while($row = mysqli_fetch_assoc($tulemus)){
				echo $row['kasutaja_eesn'] . '<br>';
			}
			
		}else{
			
		}
	?>

	</body>
</html>
