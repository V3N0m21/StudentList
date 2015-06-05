<?php
class Validation
{
	public $errors;

	public function __construct()
	{

	}

	public function validate(Student $student)
	{

	if (!preg_match("/^[А-Яа-яЁё]{2,}$/u", $student->name)) {$this->errors['name'] = "Имя введено неверно";}

	if (!preg_match("/^[А-Яа-яЁё]{2,}$/u", $student->surname)) {$this->errors['surname'] = "Фамилия введена неверно";}

	if (!preg_match("/^.{1,6}$/u", $student->groupNumber)) {$this->errors['groupNumber'] = "Номер группы введен неправильно";}
	if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $student->email)) {$this->errors['email'] = "Введен некорректный e-mail";}
	if ($student->mark < 165) {$errors['mark'] = "Mark is too low";}
	if (!preg_match("/^(19|20)[0-9]{2}$/u", $student->birthDate)) {$this->errors['birthDate'] = "Год рождения нужно вводить в формате 19xx\\20xx";}
				
		if (count($errors) == 0) {
			return true;
	} else {
		return $errors;
	}
}
}