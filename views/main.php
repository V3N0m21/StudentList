<?php include 'header.php';
	   ?>
<nav class="navbar navbar-default">
	
<ul class="list-inline nav navbar-nav">
	<li class="<?=$page == 'index' ? "active" : "";?>">
		<a href='index.php'>Главная</a></li>
	<?php if (loggedIn() !== 1) : ?>
	<li class="<?=$page == 'profile' ? "active" : "";?>">
		<a href='profile.php'>Регистрация</a></li>
	<?php else : ?>
	<li class="<?=$page == 'profile' ? "active" : "";?>">
		<a href="profile.php">Мои данные</a></li>
	<?php endif ?>
</ul>
</nav>
<?php if (!empty($message)) : ?>
	<div class="alert alert-success" role="alert">
		<p class="text-info"><?= $message ?></p>
	</div> 
<?php endif ?>