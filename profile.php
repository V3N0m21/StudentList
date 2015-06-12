<?php
include './lib/init.php';
if (!isset($_COOKIE['token']))
{
	$token = generatePassword(16);
	setToken($token);
} else {
	$token = $_COOKIE['token'];
	setToken($token);
}

# include_once './views/main.php';

#$validation->validate($student);
#var_dump($validation);

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$student->name = isset($_POST['Name']) ? strval($_POST['Name']) : '';
	$student->surname = isset($_POST['Surname']) ? strval($_POST['Surname']) : '';
	$student->sex = isset($_POST['Sex']) ? strval($_POST['Sex']) : '';
	$student->groupNumber = isset($_POST['GroupNumber']) ? strval($_POST['GroupNumber']) : '';
	$student->email = isset($_POST['Email']) ? strval($_POST['Email']) : '';
	$student->mark = isset($_POST['Mark']) ? strval($_POST['Mark']) : '';
	$student->local = isset($_POST['Local']) ? strval($_POST['Local']) : '';
	$student->birthDate = isset($_POST['BirthDate']) ? strval($_POST['BirthDate']) : '';
	$validation->validate($student, $data);
	#$email = $data->checkEmail($student->email);
	if (isset($_POST['submit'])) {

	if (!$validation->hasErrors() && $token == $_COOKIE['token']) {
		$password = generatePassword();
		$student->password = $password;
		authStudent($student->password);
		$data->saveStudent($student);
		header("Location: /?notify=saved");die();
	} 

	} else {if (isset($_POST['edit']) && isset($student->password) && $token == $_COOKIE['token']) {
		if (!$validation->hasErrors()) {
			$data->updateStudent($student);
		
		header("Location: /?notify=updated");die();
		} 
	}

	}


}


require_once './views/reg.php';