<?php
	require 'sections/header.php';
?>

<div class="main">
	<div class="container">
		<div class="main__wrapper">
			<div class="main__sidebar">
				<?php require 'sections/sidebar.php'; ?>
			</div>
			<div class="main__content">
				<?php
					// выбираем данные из бд, по POST-запросу
					$user_select = "SELECT * FROM user";
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
								<?php echo $users['name']; ?>
							</div>
							<div class="news-item__text">
								<?php echo $users['Secondname']; ?>
							</div>
						</div>
					<?php }
				?>
			</div>
		</div>
	</div>
</div>


<?php
	require 'sections/footer.php';
?>