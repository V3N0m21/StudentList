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

	public function searchStudents($string = '')
	{
		if ($string === '') {
			$sql = "SELECT * FROM Students ORDER BY ID";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			$result = $stmt->get_result();
			$student = $result->fetch_all(MYSQLI_ASSOC);
			return $student;
		} else {
			$sql = "SELECT * FROM Students WHERE CONCAT(Name, Surname, GroupNumber, Email) like ?"; 
		
		$stmt = $this->db->prepare($sql);
		$reg = "%$string%";
		$stmt->bind_param('s', $reg);
		$stmt->execute();
		$result = $stmt->get_result();
		#$data = $stmt->store_result();
		$student = $result->fetch_all(MYSQLI_ASSOC);
		return $student;
		}
	}
}