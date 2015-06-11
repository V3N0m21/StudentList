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

	public function authStudent($password)
	{
		setcookie('user', $password, time()+ 60*60*60*24*365, '/');
	}
	public function setToken($token)
	{
		setcookie('token', $token, time()+ 60*60*60, '/');
	}
	public function generatePassword($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    $this->password =  $randomString;
}

}