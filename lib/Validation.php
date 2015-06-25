<?php

class Validation
{
	public $errors;
	public $data;

	public function __construct(StudentMapper $data)
	{
		$this->data = $data;
	}
	
	public function validate(Student $student)
	{

	if (!preg_match("/^[А-Яа-яЁё\s'-]{1,}$/u", $student->name))
	 {$this->errors['name'] = "Имя введено неверно";}

	if (!preg_match("/^[А-Яа-яЁё\s'-]{1,}$/u", $student->surname))
	 {$this->errors['surname'] = "Фамилия введена неверно";}

	if (!preg_match("/^.{1,6}$/u", $student->groupNumber))
	 {$this->errors['groupNumber'] = "Номер группы введен неправильно";}

	if (!preg_match("/.+@.+\..+/i", $student->email))
	 {$this->errors['email'] = "Введен некорректный e-mail";}

	if (!in_array($student->sex, array('F','M'))) {
		$this->errors['sex'] = "Укажите пол";
	}

	if (!in_array($student->local, array('L','N'))) {
		$this->errors['local'] = "Укажите резидентность";
	}

	if ($student->mark < 165 || !preg_match("/^[0-9]{3}$/u", $student->mark))
	 {$this->errors['mark'] = "Оценка за ЕГЭ слишком низкая или некорректная";}
	if (!preg_match("/^(19|20)[0-9]{2}$/u", $student->birthDate))
	 {$this->errors['birthDate'] = "Год рождения нужно вводить в формате 19xx\\20xx";}
	$password = isset($student->password) ? $student->password : "";
		if ($this->data->checkEmail($student->email, $password) !== 1) 
		{$this->errors['email'] = "Такая почта уже зарегистрирована";}
		
}

	public function hasErrors()
	{
		if (count($this->errors) !== 0) {
			return 1;
		} else {
		 return 0;
		}
	}
}