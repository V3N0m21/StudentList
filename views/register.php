
<form action="register.php" method="post">
Имя:<br> <input type="text" name="name" value=""><br>
Фамилия:<br> <input type="text" name="surname" value=""><br>
Пол:<br>
<input type="radio" name="sex" value="M" checked>Мужской<br> <input type="radio" name="sex" value="F">Женский<br><br>
Номер группы:<br> <input type="text" name="groupNumber" value=""><br>
e-mail:<br> <input type="email" name="email" value=""><br>
Оценка за ЕГЭ:<br> <input type="text" name="mark" value=""><br><br>
Местный\Приезжий: <br>Местный<input type="radio" name="local" value="L" checked> Приезжий<input type="radio" name="local" value="N"><br><br>
Год рождения:<br> <input type="text" name="birthDate" value=""><br>
<input type="submit" value="Ввести данные">
</form>

<?php
if(isset($_POST['submit']))
{
	$name = isset($_POST['name']) ? strval($_POST['name']) : '';
	$surname = isset($_POST['surname']) ? strval($_POST['surname']) : '';
	$sex = isset($_POST['sex']) ? strval($_POST['sex']) : '';
	$groupNumber = isset($_POST['groupNumber']) ? strval($_POST['groupNumber']) : '';
	$email = isset($_POST['email']) ? strval($_POST['email']) : '';
	$mark = isset($_POST['mark']) ? strval($_POST['mark']) : '';
	$local = isset($_POST['local']) ? strval($_POST['local']) : '';
	$birthDate = isset($_POST['birthDate']) ? strval($_POST['birthDate']) : '';
}