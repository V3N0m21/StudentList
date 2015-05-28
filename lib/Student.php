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
		$this->name = $data['name'];
		$this->surname = $data['surname'];
		$this->sex = $data['sex'];
		$this->groupNumber = $data['groupNumber'];
		$this->email = $data['email'];
		$this->mark = $data['mark'];
		$this->local = $data['local'];
		$this->birthDate = $data['birthDate'];
		$this->pswrd = $this->generatePswrd();
	}

	public function getStudentInfo()
	{
		$info = array(
			$this->name,
			$this->surname,
			$this->sex,
			$this->groupNumber,
			$this->mark,
			$this->local,
			$this->birthDate
			);
		return $info;
	}
	public function generatePswrd()
	{
		$rand = substr(md5(microtime()),rand(0,26),5);
		$this->pswrd = $rand;
		return $rand;
	}
}
