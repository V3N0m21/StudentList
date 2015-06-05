<?php include 'header.php';
	  include './lib/init.php';
	   ?>
<div>
<ul>
	<li><a href='index.php'>Главная</a></li>
	<?php if (!isset($_COOKIE['user'])) : ?>
	<li><a href='profile.php'>Регистрация</a></li>
	<?php else : ?>
	<li><a href="profile.php">Мои данные</a></li>
	<?php endif ?>
</ul>
</div>