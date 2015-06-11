<?php
include './lib/init.php';
if (!isset($_COOKIE['token']))
{
	$token = $student->generatePswrd(5);
	$student->setToken($token);
} else {
	$token = $_COOKIE['token'];
	$student->setToken($token);
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
		$student->generatePswrd();
		$student->authStudent($student->pswrd);
		$data->saveStudent($student);
		header("Location: /?notify=saved");
	} 

	} else {if (isset($_POST['edit']) && isset($student->pswrd) && $token == $_COOKIE['token']) {
		if (!$validation->hasErrors()) {
			$data->updateStudent($student);
		
		header("Location: /?notify=updated");
		} 
	}

	}


}


require_once './views/reg.php';