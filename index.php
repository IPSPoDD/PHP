<?php
include_once 'header.php'
?>

	<section class="main-container">
		<div class="main-wrapper">
			<h2>Sisse logimise teade</h2>
			<?php
				if(isset($_SESSION['u_id'])){
					echo 'Sisse logitud!';
				}
			?>
		</div>
	</section>

<?php
include_once 'footer.php'
?>