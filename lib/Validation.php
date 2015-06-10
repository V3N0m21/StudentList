<?php

class Validation
{
	public $errors;

	
	public function validate(Student $student, StudentMapper $data)
	{

	if (!preg_match("/^[А-Яа-яЁё\s']{1,}$/u", $student->name))
	 {$this->errors['name'] = "Имя введено неверно";}

	if (!preg_match("/^[А-Яа-яЁё\s']{1,}$/u", $student->surname))
	 {$this->errors['surname'] = "Фамилия введена неверно";}

	if (!preg_match("/^.{1,6}$/u", $student->groupNumber))
	 {$this->errors['groupNumber'] = "Номер группы введен неправильно";}

	if (!preg_match("/.+@.+\..+/i", $student->email))
	 {$this->errors['email'] = "Введен некорректный e-mail";}

	if ($student->mark < 165) {$this->errors['mark'] = "Оценка за ЕГЭ слишком низкая";}
	if (!preg_match("/^(19|20)[0-9]{2}$/u", $student->birthDate))
	 {$this->errors['birthDate'] = "Год рождения нужно вводить в формате 19xx\\20xx";}

		if ($data->checkEmail($student->email, $student->pswrd) !== 1) 
		{$this->errors['email'] = "Такая почта уже зарегистрирована";}
				
		if (count($errors) == 0) {
			return true;
	} else {
		return $errors;
	}
}

	public function hasErrors()
	{
		if (count($this->errors) !== 0) {
			return 1;
		} else { return 0;}
	}
}