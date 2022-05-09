<?php
include_once 'header.php'
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Registreeri kasutajaks</h2>
		<form class="signup-form" action="includes/signup.php" method="POST">
			<input type="text" name="eesnimi" placeholder="Eesnimi"><br>
			<input type="text" name="perekonnanimi" placeholder="Perekonnanimi"><br>
			<input type="text" name="email" placeholder="E-mail"><br>
			<input type="text" name="kasutajanimi" placeholder="Kasutajanimi"><br>
			<input type="password" name="parool" placeholder="Parool"><br>
			<button type="submit" name="submit">Registreeri</button>
		</form>
	</div>
</section>



<?php
include_once 'footer.php'
?>