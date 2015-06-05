<form action="profile.php" method="post">
Имя:<br> <input type="text" name="Name" value="<?=$student->name;?>"><br>
Фамилия:<br> <input type="text" name="Surname" value="<?=$student->surname;?>"><br>
Пол:<br>
<input type="radio" name="Sex" value="M" checked>Мужской<br> <input type="radio" name="Sex" value="F">Женский<br><br>
Номер группы:<br> <input type="text" name="GroupNumber" value="<?=$student->groupNumber;?>"><br>
e-mail:<br> <input type="email" name="Email" value="<?=$student->email;?>"><br>
Оценка за ЕГЭ:<br> <input type="text" name="Mark" value="<?=$student->mark;?>"><br>
Местный\Приезжий: <br><input type="radio" name="Local" value="L" checked>  Местный  <br>
					  <input type="radio" name="Local" value="N">  Приезжий 
<br>Год рождения:<br> <input type="text" name="BirthDate" value="<?=$student->birthDate;?>"><br>
<?php if (!isset($_COOKIE['user'])) : ?>
	<input type="submit" name="submit" value="Ввести данные">
<?php else : ?>
	<input type="submit" name="edit" value="Редактировать мои данные">
<?php endif; ?>
</form>