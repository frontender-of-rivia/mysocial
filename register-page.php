<?php
	if ($_SESSION['isauth'] == false){
		?>
		<h1>Зарегистрируй себе аккаунт</h1>
		<form method="post" action="scripts/register/register.php">
	        <input type="text" name="name" placeholder="Введите ваше имя">
	        <input type="text" name="password" placeholder="Введите ваш пароль">
	        <input type="submit">
	   </form>
	<?php }
	else {
		header('location: user_feed.php');
	}
?>

<?php
	require 'sections/footer.php'
?>