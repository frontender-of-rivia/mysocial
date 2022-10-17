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
				<div class="hello">
					Привет, <?= $user_name; ?>
				</div>
				<div class="news">
					<?php
						// выбираем данные из бд, по POST-запросу
						$posts_select = "SELECT * FROM posts";
						$posts_select_query = mysqli_query($connect, $posts_select);
						// возращаем объект базы данных в переменную
						$query_result = [];
						foreach ($posts_select_query as $row) {
							array_push($query_result, $row);
						}
						// получаем массив для работы
						foreach ($query_result as $posts){
							?>
							<div class="news-item">
								<div class="news-item__name">
									<?php echo $posts['name']; ?>
								</div>
								<div class="news-item__text">
									<?php echo $posts['content']; ?>
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