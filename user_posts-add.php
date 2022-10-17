<?php
	require 'sections/header.php';
?>

<section class="posts">
	<div class="container">
		<div class="posts__body">
			<form method="POST" class="postsadd" action="scripts/add-post/post-add.php">
				<div class="postadd__title">
					Добавьте запись
				</div>
				<div class="postadd_name">
					<input type="text" placeholder="Название статьи" name="post_name">
					<input type="text" placeholder="Контент статьи" name="post_content">
					<input type="submit">
				</div>
			</form>
			
			<div class="posts__myposts">
				
			</div>
		</div>
	</div>
</section>

<?php
	require 'sections/footer.php'
?>