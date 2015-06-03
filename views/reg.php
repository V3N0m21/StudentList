
<form action="../lib/register.php" method="post">
Имя:<br> <input type="text" name="Name" value="<?=$name;?>"><br>
Фамилия:<br> <input type="text" name="Surname" value="<?=$surname;?>"><br>
Пол:<br>
<input type="radio" name="Sex" value="M" checked>Мужской<br> <input type="radio" name="Sex" value="F">Женский<br><br>
Номер группы:<br> <input type="text" name="GroupNumber" value="<?=$groupNumber;?>"><br>
e-mail:<br> <input type="email" name="Email" value="<?=$email;?>"><br>
Оценка за ЕГЭ:<br> <input type="text" name="Mark" value="<?=$mark;?>"><br><br>
Местный\Приезжий: <br>Местный<input type="radio" name="Local" value="L" checked>
					  Приезжий<input type="radio" name="Local" value="N">
Год рождения:<br> <input type="text" name="BirthDate" value="<?=$birthDate;?>"><br>
<?php if (!isset($_COOKIE['user'])) : ?>
	<input type="submit" name="submit" value="Ввести данные">
<?php else : ?>
	<input type="submit" name="edit" value="Редактировать мои данные">
<?php endif; ?>
</form>