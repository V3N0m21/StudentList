<?php
class Student
{
    
    const GENDER_FEMALE = 'F';
    const GENDER_MALE = 'M';
    const RESIDENCE_LOCAL = 'L';
    const RESIDENCE_NOT_LOCAL = 'N';
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
        $this->name        = $data['Name'];
        $this->surname     = $data['Surname'];
        $this->sex         = $data['Sex'];
        $this->groupNumber = $data['GroupNumber'];
        $this->email       = $data['Email'];
        $this->mark        = $data['Mark'];
        $this->local       = $data['Local'];
        $this->birthDate   = $data['BirthDate'];
        $this->password    = $data['password'];
    }
    
    public function displaySex()
    {
        if ($this->sex == Student::GENDER_MALE) {
            return "Мужской";
        } else {
            return "Женский";
        }
    }
    
    public function displayLocal()
    {
        if ($this->local == Student::RESIDENCE_LOCAL) {
            return "Местный";
        } else {
            return "Приезжий";
        }
    }
}