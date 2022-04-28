<?php
	if(isset($_POST['submit'])){
		// include baas.php - DBga uhendamiseks
		
		$first = $_POST['first'];
		$last = $_POST['last'];
		$email = $_POST['email'];
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];
		
		//Error handlerid
		// || - or 
		
		if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){ //unustati sisestada
			header("Location: ../Errorhandler/index.php?signup=empty");
		}else{
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //Kontrollime emaili
				header("Location: ../Errorhandler/index.php?signup=invalid_email");
			}
		else{
			echo "Logi kasutaja sisse!";
		}
		}	
	}
?>