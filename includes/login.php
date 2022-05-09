<?php
	session_start();
	if (isset($_POST['submit'])){ 
		include_once 'yhendus.php';
		
		$kasutajanimi = $_POST['kasutajanimi'];
		$parool = $_POST['parool'];
		
		if (empty($kasutajanimi) || empty($parool)) {
			header("Location:../index.php?login=empty");
			exit();
		}
		else{
			$sql="SELECT * FROM kasutajad WHERE kasutajanimi=?";
					
			$stmt = mysqli_stmt_init($conn);
			
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location:../index.php?login=error");
				exit();
			}
			else{
				mysqli_stmt_bind_param($stmt, "s", $kasutajanimi);
						
				mysqli_stmt_execute($stmt);
				
				$result = mysqli_stmt_get_result($stmt);
				
				if($row = mysqli_fetch_assoc($result)){
					
					$hashedparoolikontroll = password_verify($parool, $row['parool']);
					
					if($hashedparoolikontroll == false){
						header("Location:../index.php?password=error");
						exit();
					}
					elseif($hashedparoolikontroll == true){
						$_SESSION['u_id'] = $row['id'];
						$_SESSION['u_eesnimi'] = $row['eesnimi'];
						$_SESSION['u_perekonnanimi'] = $row['perekonnanimi'];
						$_SESSION['u_email'] = $row['email'];
						$_SESSION['u_kasutajanimi'] = $row['kasutajanimi'];	
						header("Location:../index.php?login=success");
						exit();						
					}
				}
				else{
					header("Location:../index.php?login=error");
					exit();						
					}
				}
		}	
		mysqli_stmt_close($stmt);
		}
		else{
		header("Location:../index.php?login=error");
		exit();	
		}