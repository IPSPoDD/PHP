<?php 
	include 'baas.php';

	$kasutaja_eesn = mysqli_real_escape_string($conn, $_POST['kasutaja_eesn']);  // Muudab jutt tahemarkideks
	$kasutaja_peren = mysqli_real_escape_string($conn, $_POST['kasutaja_peren']);
	$kasutaja_email = mysqli_real_escape_string($conn, $_POST['kasutaja_email']);
	$kasutaja_kasutajan = mysqli_real_escape_string($conn, $_POST['kasutaja_kasutajan']);
	$kasutaja_pwd = mysqli_real_escape_string($conn, $_POST['kasutaja_pwd']);
	
	$sql = "INSERT INTO kasutajad (kasutaja_eesn, kasutaja_peren, kasutaja_email, kasutaja_kasutajan, kasutaja_pwd) VALUES (?,?,?,?,?);";
	
	$stmt = mysqli_stmt_init($conn);
	
	if(!mysqli_stmt_prepare($stmt, $sql)){
		echo "SQL ERROR";
	}else{
		mysqli_stmt_bind_param($stmt, "sssss", $kasutaja_eesn, $kasutaja_peren, $kasutaja_email,  $kasutaja_kasutajan, $kasutaja_pwd); // VALUES number
		
		mysqli_stmt_execute($stmt);
	}
	
	header('Location: ../sisestaandmed3.php?signup=success');
?>
