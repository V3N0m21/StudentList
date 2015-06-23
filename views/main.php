<?php include 'header.php';
	   ?>
<nav class="navbar navbar-default">
	<p class="text-info"><?php if (isset($message)) {echo $message;} ?></p>
<ul class="list-inline nav navbar-nav">
	<li class="<?=$page == 'index' ? "active" : "";?>">
		<a href='index.php'>Главная</a></li>
	<?php if (!isset($_COOKIE['user'])) : ?>
	<li class="<?=$page == 'profile' ? "active" : "";?>">
		<a href='profile.php'>Регистрация</a></li>
	<?php else : ?>
	<li class="<?=$page == 'profile' ? "active" : "";?>">
		<a href="profile.php">Мои данные</a></li>
	<?php endif ?>
</ul>
</nav>