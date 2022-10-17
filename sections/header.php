<?php
	session_start();
	require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Social</title>
	<link rel="stylesheet" href="libs/slick-slider/slick.css">
	<!-- Базовые стили CSS -->
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body>
	<header>
		<div class="container">
			<div class="header__wrapper">
				<a href="../.." class="logo">
					Logo
				</a>
				<div class="header__right">
					<?php
						if ($_SESSION['isauth'] == false){
							?>
							<a href="auth-page.php" class="enter">
								Войти
							</a>
							<a href="register-page.php" class="register">
								Регистрация
							</a>
						<?php }
					?>
					<?php
						if ($_SESSION['isauth'] == true){
							?>
							<!-- Получение данных пользователя -->
							<?php
								$user_login = $_SESSION['login'];
								$user_info_select = "SELECT * FROM user WHERE login = '$user_login'";
								$user_info_query = mysqli_query($connect, $user_info_select);
								// возращаем объект базы данных в переменную
								$query_result = [];
								foreach ($user_info_query as $row) {
									array_push($query_result, $row);
								}
								// получаем массив для работы
								foreach ($query_result as $userdata){}

								// запихиваем данные из бд в переменные
								if(isset($userdata)){
									$user_name = $userdata['name'];
									$user_secondname = $userdata['Secondname'];
								}
							?>
							<div class="person">
								<a href="#" class="person_login">
									<?php echo $user_name; ?>
									<span class="person_login-ungle">
										>
									</span>
								</a>
								<div class="person_drop">
									<a href="profile.php" class="person_profile">
										👨 Мой профиль
									</a>
									<a href="scripts/auth/exit.php" class="person_exit">
										🚪 Выйти
									</a>
									<a href="settings-page.php" class="person_settings">
										⚙️ Настройки
									</a>
								</div>
							</div>
						<?php }
					?>
				</div>	
			</div>
		</div>
	</header>
