<?php
  // подключаемся к БД	
	@require '../../connect.php';
	// Берём логины зарегистрированных пользователей
	$busy_logins = "SELECT name FROM user";
  $busy_logins_query = mysqli_query($connect, $busy_logins);
  $busy_logins_list = [];
  $busy_logins_true = true;
  // кладём в массив логины зарегистрированных пользователей
  foreach ($busy_logins_query as $row) {
  	array_push($busy_logins_list, $row['name']);
  }
  // берём данные с POST формы
	$name = $_POST['name'];
	$password = $_POST['password'];
  // проверяем есть логин с формы уже в базе данных
	foreach($busy_logins_list as $busy_logins_item){
   		if($name == $busy_logins_item){
   			$busy_logins_true = false;
   			break;
   		}
   	}
  // если логина нету в БД, то регистрируем нового пользователя
	if($busy_logins_true == true){
		$query = "INSERT INTO user (name, password) VALUES ('$name', '$password')";
    $query_connect = mysqli_query($connect, $query);
	}
?>