<?php
class Student
{
	public $name;
	public $surname;
	public $sex;
	public $groupNumber;
	public $email;
	public $mark;
	public $local;
	public $birthDate;
	public $password;

	public function __construct()
	{

	}

	public function setAttributes(array $data)
	{
		$this->name = $data['Name'];
		$this->surname = $data['Surname'];
		$this->sex = $data['Sex'];
		$this->groupNumber = $data['GroupNumber'];
		$this->email = $data['Email'];
		$this->mark = $data['Mark'];
		$this->local = $data['Local'];
		$this->birthDate = $data['BirthDate'];
		$this->password = $data['password'];
	}

	public function getAttributes()
	{
		$info = array(
			$this->name,
			$this->surname,
			$this->sex,
			$this->groupNumber,
			$this->email,
			$this->mark,
			$this->local,
			$this->birthDate,
			$this->password
			);
		return $info;
	}

	

}