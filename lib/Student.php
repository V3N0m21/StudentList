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
	public $pswrd;

	public function __construct($data)
	{
		$this->name = $data['Name'];
		$this->surname = $data['Surname'];
		$this->sex = $data['Sex'];
		$this->groupNumber = $data['GroupNumber'];
		$this->email = $data['Email'];
		$this->mark = $data['Mark'];
		$this->local = $data['Local'];
		$this->birthDate = $data['BirthDate'];
		$this->pswrd = $data['pswrd'];
	}

	public function getStudentInfo()
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
			$this->pswrd
			);
		return $info;
	}
	


}
