<?php
	require 'sections/header.php';
?>

<div class="main">
	<div class="container">
		<div class="main__wrapper">
			<div class="main__sidebar">
				<?php require 'sections/sidebar.php'; ?>
			</div>
			<div class="friends">
				<div class="friends_title">
					Ваши друзья
				</div>
				<div class="friends__box">
					<?php
						// выбираем данные из бд, по POST-запросу
						$id_user = $_SESSION['id_user'];
						$user_select = "SELECT * FROM friends WHERE user1 = '$id_user'";
						$user_select_query = mysqli_query($connect, $user_select);

						// возращаем объект базы данных в переменную
						$user_result = [];
						foreach ($user_select_query as $row) {
							array_push($user_result, $row);
						}
						// получаем массив для работы
						foreach ($user_result as $users){
							?>
							<div class="news-item">
								<div class="news-item__name">
									<?php echo $users['user2']; ?>
								</div>
							</div>
						<?php }
					?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
	require 'sections/footer.php';
?>