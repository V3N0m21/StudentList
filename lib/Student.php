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

	public function __construct()
	{

	}

	public function setAttributes($data)
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
			$this->pswrd
			);
		return $info;
	}

	public function generatePswrd()
	{
		$rand = substr(md5(microtime()),rand(0,26),20);
		$this->pswrd = $rand;
		return $rand;
	}

}