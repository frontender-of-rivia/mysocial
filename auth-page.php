	<?php
		if ($_SESSION['isauth'] == false){
			?>
				<h1>Войти в аккаунт</h1>
				<form method="post" action="scripts/auth/auth.php">
			        <input type="text" name="login" placeholder="Введите ваш логин">
			        <input type="text" name="password" placeholder="Введите ваш пароль">
			        <input type="submit">
			   </form>
		<?php }
	?>
	<?php
		if ($_SESSION['isauth'] == true){
			header('location: ../../index.php');
		}
	?>

 
	<?php echo $_SESSION['usauth']; ?>

<?php
	require 'sections/footer.php'
?>