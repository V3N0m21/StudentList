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
	public function updateStudent(Student $student)
	{
		$stmt = $this->db->prepare("UPDATE Students SET Name=?,Surname=?, Sex=?, GroupNumber=?,Email=?, Mark=?,Local=?,BirthDate=? WHERE pswrd= ?");
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
			$sql = "SELECT * FROM Students WHERE CONCAT(Name, Surname, GroupNumber, Mark, BirthDate) like ?"; 
		
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

	public function sortStudent($sort,$dir)
	{
		$sql = "SELECT * FROM Students";
		switch ($sort) :
		case 'name' : $sql .= " Order by Name";break;
		case 'surname' : $sql .= " Order by Surname";break;
		case 'groupNumber' : $sql .= " Order by GroupNumber";break;
		case 'mark' : $sql .= " Order by Mark";break;
		case 'local' : $sql .= " Order by Local";break;
		case 'sex' : $sql .= " Order by Sex";break;
		case 'dateBirth' : $sql .= " Order by BirthDate";break;
		endswitch;
		switch($dir)  : 
		case 'asc' : $sql .= " ASC";break;
		case 'desc' : $sql .= " DESC";break;
		endswitch;
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		$result = $stmt->get_result();
		$student = $result->fetch_all(MYSQLI_ASSOC);
		return $student;

	}
	public function getStudent($pswrd)
	{
		$query = "SELECT * FROM Students WHERE pswrd='$pswrd'";
		$result = $this->db->query($query);
		$student = $result->fetch_array(MYSQLI_ASSOC);
		return $student;
	}

	public function generatePswrd()
	{
		$rand = substr(md5(microtime()),rand(0,26),5);
		$this->pswrd = $rand;
		return $rand;
	}

	public function checkEmail($email)
	{
		$query = "SELECT * FROM Students WHERE Email= '$email'";
		$result = $this->db->query($query);
		if ($result->num_rows === 0)
			{return 1;} else {return 0;}

	}
}