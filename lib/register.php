<?php 
include $_SERVER['DOCUMENT_ROOT']. "/lib/ini.php";
include_once $_SERVER['DOCUMENT_ROOT']. "/views/main.php";  

#$errors = array();


if(isset($_POST['submit']) || isset($_POST['edit'])) 
	
{
	$name = isset($_POST['Name']) ? strval($_POST['Name']) : '';
	if (!preg_match("/^[А-Яа-яЁё]{2,}$/u", $name)) {$errors['name'] = "Имя введено неверно";}
	$surname = isset($_POST['Surname']) ? strval($_POST['Surname']) : '';
	if (!preg_match("/^[А-Яа-яЁё]{2,}$/u", $surname)) {$errors['surname'] = "Фамилия введена неверно";}
	$sex = isset($_POST['Sex']) ? strval($_POST['Sex']) : '';
	$groupNumber = isset($_POST['GroupNumber']) ? strval($_POST['GroupNumber']) : '';
	if (!preg_match("/^.{1,6}$/u", $groupNumber)) {$errors['groupNumber'] = "Номер группы введен неправильно";}
	$email = isset($_POST['Email']) ? strval($_POST['Email']) : '';
	if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $email)) {$errors['email'] = "Введен некорректный e-mail";}
	$mark = isset($_POST['Mark']) ? strval($_POST['Mark']) : '';
	if ($mark < 165) {$errors['mark'] = "Mark is too low";}
	$local = isset($_POST['Local']) ? strval($_POST['Local']) : '';
	$birthDate = isset($_POST['BirthDate']) ? strval($_POST['BirthDate']) : '';
	if (!preg_match("/^(19|20)[0-9]{2}$/u", $birthDate)) {$errors['birthDate'] = "Год рождения нужно вводить в формате 19xx\\20xx";}
				
		if (count($errors) == 0) {
			$data = array('Name' => $name,
        'Surname' =>$surname,
        'Sex'=> $sex,
        'GroupNumber' => $groupNumber,
        'Email' => $email,
        'Mark' => $mark,
        'Local' => $local,
        'BirthDate' => $birthDate,
        );

			if(isset($_POST['submit'])){

			$save = new StudentMapper($conn);
			$pass = $save->generatePswrd();
			$ret  =$save->checkEmail($data['Email']);
			if ($ret == 1) {
			$data['pswrd'] = $pass; 
			$student = new Student($data);
			setcookie('user', $pass, time()+ 60 *60 *60*24*365,'/');
			$save->saveStudent($student);
			header("Location: http://zend.tut/");
			$text = "Success!!";
		}
		else{
			$error = "email is already in database";
			echo $error;

		}} else {if (isset($_POST['edit'])){
			$save = new StudentMapper($conn);
			$pass  = $_COOKIE['user'];
			$data['pswrd'] = $pass;
			$student = new Student($data);
			$save->updateStudent($student);
			$text = "Student updated";
			header("Location: http://zend.tut/");
		}}
		}  else {
			foreach ($errors as $error => $value) {
				echo $value . "<br>";
			}
				}
		#header("Location: http://zend.tut/index.php?page=registration");
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
</form>/
_END; */
