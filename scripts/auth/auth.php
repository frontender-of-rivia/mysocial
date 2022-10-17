<?php
	session_start();
	@require '../../connect.php';
?>

<?php
	// берём данные с POST формы авторизации
	$login = $_POST['login'];
	$password = $_POST['password'];
	// выбираем данные из бд, по POST-запросу
	$user_select = "SELECT login, password FROM user where (login, password) in (('$login','$password'))";
	$user_select_query = mysqli_query($connect, $user_select);
	// возращаем объект базы данных в переменную
	$query_result = [];
	foreach ($user_select_query as $row) {
		array_push($query_result, $row);
	}
	// получаем массив для работы
	foreach ($query_result as $authdata){}



	// проверка на наличие запроса
	if(isset($authdata)){
		// установка статуса авторизованный
		$_SESSION['isauth'] = true;
		// Инициализация пользователя
		$user_init = "SELECT * FROM user where login = '$login'";
		$user_init_query = mysqli_query($connect, $user_init);
		$user_result = [];
		foreach ($user_init_query as $user_row){
			array_push($user_result, $user_row);
		}
		foreach ($user_result as $userdata){};
		// заполнение переменных данными
		$_SESSION['login'] = $login;
		$_SESSION['id_user'] = $userdata['id'];
		$_SESSION['name'] = $userdata['name'];
		$_SESSION['secondname'] = $userdata['Secondname'];
		

		header('location: ../../');
	} else {
		echo 'Не правильный логин или пароль';
	}
?>