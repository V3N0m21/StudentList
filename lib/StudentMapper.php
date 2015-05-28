<?php
class StudentMapper
{
	private $db;
	public function __construct(mysqli $conn){
		$this->db = $conn;
	}

	public function saveStudent(Student $student)
	{
		$stmt = $this->db->prepare("INSERT INTO Students (Name, Surname, Sex, GroupNumber, Email, Mark, Local, BirthDate, pswrd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");
		$stmt->bind_param('sssssssss', $student->name, $student->surname, $student->sex, $student->groupNumber, $student->email, $student->mark, $student->local, $student->birthDate, $student->pswrd);
		$stmt->execute();
		$stmt->store_result();
	}
}