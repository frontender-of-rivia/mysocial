<?php
	require 'sections/header.php';
?>

<div class="main">
	<div class="container">
		<div class="main__wrapper">
			<?php
				if ($_SESSION['isauth'] == false){
					header('location: welcome.php');
				}
			?>
			<?php
				if ($_SESSION['isauth'] == true){
					header('location: user_feed.php');	
				}
			?>
		</div>
	</div>
</div>

<?php
	require 'sections/footer.php';
?>