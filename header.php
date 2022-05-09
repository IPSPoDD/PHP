<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login system</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<header>
			<nav class="navbar">
				<a class="navbar-brand" href="index.php">Sisse logimine</a>
				<?php
				
				if(isset($_SESSION['u_id'])){
					echo '<form action="includes/logout.php" method = "POST">
					<button type="submit" name = "submit">Logi valja</button> 
					</form>';
				}
				else{
					
					echo '<form action="includes/login.php" method="POST">
					<input type="text" name="kasutajanimi" placeholder="Kasutajanimi">
					<input type="password" name="parool" placeholder="Parool">
					<button type="submit" name="submit"> Logi sisse </button>
				</form>
				<a href="signupform.php">Registreeri </a>';
				}
				?>
			</nav>
		</header>