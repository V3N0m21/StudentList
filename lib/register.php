<?php 
include $_SERVER['DOCUMENT_ROOT']. "/lib/ini.php";
include $_SERVER['DOCUMENT_ROOT']. "/views/main.php";  

?>
<?php
$name = $surname = $sex = $groupNumber = $email = $mark = $local = $birthDate = "";
#$errors = array();
if(isset($_POST['submit'])) 
	
{
	$name = isset($_POST['name']) ? strval($_POST['name']) : '';
	if (!preg_match("/^[А-Яа-яЁё]{2,}$/u", $name)) {$errors['name'] = "Имя введено неверно";}
	$surname = isset($_POST['surname']) ? strval($_POST['surname']) : '';
	if (!preg_match("/^[А-Яа-яЁё]{2,}$/u", $surname)) {$errors['surname'] = "Фамилия введена неверно";}
	$sex = isset($_POST['sex']) ? strval($_POST['sex']) : '';
	$groupNumber = isset($_POST['groupNumber']) ? strval($_POST['groupNumber']) : '';
	if (!preg_match("/^.{1,6}$/u", $groupNumber)) {$errors['groupNumber'] = "Номер группы введен неправильно";}
	$email = isset($_POST['email']) ? strval($_POST['email']) : '';
	if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $email)) {$errors['email'] = "Введен некорректный e-mail";}
	$mark = isset($_POST['mark']) ? strval($_POST['mark']) : '';
	if ($mark < 165) {$errors['mark'] = "Mark is too low";}
	$local = isset($_POST['local']) ? strval($_POST['local']) : '';
	$birthDate = isset($_POST['birthDate']) ? strval($_POST['birthDate']) : '';
	if (!preg_match("/^(19|20)[0-9]{2}$/u", $birthDate)) {$errors['birthDate'] = "Год рождения нужно вводить в формате 19xx\\20xx";}
				
		if (count($errors) == 0) {
			$data = array('name' => $name,
        'surname' =>$surname,
        'sex'=> $sex,
        'groupNumber' => $groupNumber,
        'email' => $email,
        'mark' => $mark,
        'local' => $local,
        'birthDate' => $birthDate);

			$student = new Student($data);
			$save = new StudentMapper($conn);
			$save->saveStudent($student);
			echo "Success!!";
		} else {
			foreach ($errors as $error => $value) {
				echo $error;
				echo $value;
			}
		}
}

include $_SERVER['DOCUMENT_ROOT']. "/views/reg.php";
/*echo <<<_END
<form action="register.php" method="post">
Имя:<br> <input type="text" name="name" value="$name"><br>
Фамилия:<br> <input type="text" name="surname" value="$surname"><br>
Пол:<br>
<input type="radio" name="sex" value="M" checked>Мужской<br> <input type="radio" name="sex" value="F">Женский<br><br>
Номер группы:<br> <input type="text" name="groupNumber" value="$groupNumber"><br>
e-mail:<br> <input type="email" name="email" value="$email"><br>
Оценка за ЕГЭ:<br> <input type="text" name="mark" value="$mark"><br><br>
Местный\Приезжий: <br>Местный<input type="radio" name="local" value="L" checked> Приезжий<input type="radio" name="local" value="N"><br><br>
Год рождения:<br> <input type="text" name="birthDate" value="$birthDate"><br>
<input type="submit" name="submit" value="Ввести данные">
</form>
_END; */
