<?php
	require 'sections/header.php';
?>

<section class="posts">
	<div class="container">
		<div class="posts__body">
			<a href="user_posts-add.php" class="posts__add btn">
				Добавить новость
			</a>
			<div class="posts__myposts">
				<div class="posts__myposts-title">
					Мои новости:
				</div>
				<div class="posts__myposts-box">
					<?php
						$user_id = $_SESSION['id_user'];

						// выбираем данные из бд, по POST-запросу
						$posts_select = "SELECT * FROM posts WHERE id_author = '$user_id'";
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
</section>

<?php
	require 'sections/footer.php'
?>