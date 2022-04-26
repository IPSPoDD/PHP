<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<head>
	<title>Sessioon 1</title>
	</head>
	<body>
		<ul>
			<li><a href="leht4.php">Jargmine leht</a></li>
		</ul>
		
		<?php
		$_SESSION["username"] = "kasutaja";
		
		if(isset($_SESSION["username"])){ // Kui on toole pandud
			echo "Oled sisse logitud " . $_SESSION["username"];
		}
		else{
			echo "Sa ei ole sisse logitud!";
		}
		?>
	</body>
</html>