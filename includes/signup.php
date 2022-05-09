<?php
	// Kas vajutati nuppu peale
	if (isset($_POST['submit'])){ 
		
		include_once 'yhendus.php';
		
		$eesnimi = $_POST['eesnimi'];
		$perekonnanimi = $_POST['perekonnanimi'];
		$email = $_POST['email'];
		$kasutajanimi = $_POST['kasutajanimi'];
		$parool = $_POST['parool'];
		
		// Error handlerid
		
		if (empty($eesnimi) || empty($perekonnanimi) || empty($email) || empty($kasutajanimi) || empty($parool)) {
			header("Location:../signupform.php?signup=empty");
			exit();
		}
		else{
			// Kas nimi ja perekonnanimi on korrektne - kasutusel ainult tahed
			if(!preg_match("/^[a-zA-Z]*$/", $eesnimi) || !preg_match("/^[a-zA-Z]*$/", $perekonnanimi)){
				header("Location:../signupform.php?signup=invalid_name");
				exit();
			}
			else{
				// E-mail korrektne
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					header("Location:../signupform.php?signup=invalid_email");
					exit();
				}
				else{
					// Kontoll kas on juba registreeritud
					$sql="SELECT * FROM kasutajad WHERE kasutajanimi=?";
					
					$stmt = mysqli_stmt_init($conn);
					
					if(!mysqli_stmt_prepare($stmt, $sql)){
						header("Location:../index.php?login=error");
						exit();
					}
					else{
						mysqli_stmt_bind_param($stmt, "s", $kasutajanimi);
						
						mysqli_stmt_execute($stmt);
						
						mysqli_stmt_store_result($stmt);
						$result_check = mysqli_stmt_num_rows($stmt);
						if($result_check > 0){
							header("Location:../signup.php?signup=user_taken");
							exit();
						}
						else{
							// Parooli hashimine
							$hashedparool = password_hash($parool, PASSWORD_DEFAULT);
							
							$sql = "INSERT INTO kasutajad (eesnimi, perekonnanimi, email, kasutajanimi, parool) VALUES (?, ?, ?, ?, ?);";
							
							$stmt2 =  mysqli_stmt_init($conn);
							
							if(!mysqli_stmt_prepare($stmt2, $sql)){
								header("Location:../index.php?login=error");
								exit();
							}
							else{
								mysqli_stmt_bind_param($stmt2, "sssss", $eesnimi, $perekonnanimi, $email, $kasutajanimi, $hashedparool);
								
								mysqli_stmt_execute($stmt2);
								
								header("Location:../signupform.php?signup=success");
							}
						}
					}
				}
			}
		}
		
		mysqli_stmt_close($stmt);
		
		mysqli_stmt_close($stmt2);
		
	}
	else{
			header("Location:../signupform.php");
			exit();
		}