
<form action="register.php" method="post">
Имя:<br> <input type="text" name="name" value="<?=$name;?>"><br>
Фамилия:<br> <input type="text" name="surname" value="<?=$surname;?>"><br>
Пол:<br>
<input type="radio" name="sex" value="M" checked>Мужской<br> <input type="radio" name="sex" value="F">Женский<br><br>
Номер группы:<br> <input type="text" name="groupNumber" value="<?=$groupNumber;?>"><br>
e-mail:<br> <input type="email" name="email" value="<?=$email;?>"><br>
Оценка за ЕГЭ:<br> <input type="text" name="mark" value="<?=$mark;?>"><br><br>
Местный\Приезжий: <br>Местный<input type="radio" name="local" value="L" checked>
					  Приезжий<input type="radio" name="local" value="N">
Год рождения:<br> <input type="text" name="birthDate" value="<?=$birthDate;?>"><br>
<input type="submit" name="submit" value="Ввести данные">
</form>