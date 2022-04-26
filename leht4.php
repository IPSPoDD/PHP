<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<head>
	<title>Sessioon 2</title>
	</head>
	<body>
	
		<ul>
			<li><a href="leht3.php">Tagasi</a></li>
		</ul>
		<?php
		if(isset($_SESSION["username"])){ // Kui on toole pandud
			echo "Oled sisse logitud " . $_SESSION["username"];
		}
		else{
			echo "Sa ei ole sisse logitud!";
		}
		?>
	</body>
</html>