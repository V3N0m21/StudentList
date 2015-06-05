<?php

include_once './views/main.php';

#$validation->validate($student);
#var_dump($validation);

if(isset($_POST['submit']) || isset($_POST['edit']))
{
	$student->name = isset($_POST['Name']) ? strval($_POST['Name']) : '';
	$student->surname = isset($_POST['Surname']) ? strval($_POST['Surname']) : '';
	$student->sex = isset($_POST['Sex']) ? strval($_POST['Sex']) : '';
	$student->groupNumber = isset($_POST['GroupNumber']) ? strval($_POST['GroupNumber']) : '';
	$student->email = isset($_POST['Email']) ? strval($_POST['Email']) : '';
	$student->mark = isset($_POST['Mark']) ? strval($_POST['Mark']) : '';
	$student->local = isset($_POST['Local']) ? strval($_POST['Local']) : '';
	$student->birthDate = isset($_POST['BirthDate']) ? strval($_POST['BirthDate']) : '';
	$validation->validate($student);
	$email = $data->checkEmail($student->email);
	if (isset($_POST['submit'])) {

	if (count($validation->errors) == 0 && $email == 1) {
		$student->pswrd = $student->generatePswrd();
		setcookie('user', $student->pswrd, time()+ 60*60*60*24*365, '/');
		$data->saveStudent($student);
		echo "Success!!";
		header("Location: http://zend.tut/");
	} else {
		echo $email;
		foreach ($validation->errors as $error) {
			echo $error . "<br>";
		}
	}
	} else {if (isset($_POST['edit'])) {
		if (count($validation->errors) == 0) {
			$data->updateStudent($student);
		echo "Success!!";
		header("Location: http://zend.tut/");
		} else {
			foreach ($validation->errors as $error) {
			echo $error . "<br>";
		}
	}

	}

}
}


require_once './views/reg.php';