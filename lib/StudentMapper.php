<?php
class StudentMapper
{
	private $db;
	public function __construct(mysqli $conn) {
		$this->db = $conn;
	}
	public function saveStudent(Student $student)
	{
		$stmt = $this->db->prepare("INSERT INTO Students (Name, Surname, Sex, GroupNumber, Email, Mark, Local, BirthDate, pswrd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");
		if ($this->db->error) die($this->db->error);
		$stmt->bind_param('sssssssss', $student->name, $student->surname, $student->sex, $student->groupNumber, $student->email, $student->mark, $student->local, $student->birthDate, $student->pswrd);
		$stmt->execute();
		if ($this->db->errno) {
		die('Update Error (' . $this->db->errno . ') ' . $this->db->error);
			}
		$stmt->store_result();
	}
	
	public function updateStudent(Student $student)
	{
		
		$stmt = $this->db->prepare("UPDATE Students SET Name=?,Surname=?, Sex=?, GroupNumber=?,Email=?, Mark=?,Local=?,BirthDate=? WHERE pswrd= ?");
		if ($this->db->error) die($this->db->error);
		$stmt->bind_param('sssssssss',
		 $student->name,
		 $student->surname,
		 $student->sex,
		 $student->groupNumber,
		 $student->email,
		 $student->mark,
		 $student->local,
		 $student->birthDate,
		 $student->pswrd);
		$stmt->execute();
		
		$stmt->store_result();
	}

	public function checkEmail($email, $pswrd)
	{	
		$mail = $this->db->real_escape_string($email);
		$pswrd= $this->db->real_escape_string($pswrd);
		$query = "SELECT * FROM Students WHERE Email='$mail'";
		$query .= "AND NOT pswrd='$pswrd'";
		$result = $this->db->query($query);
		if ($this->db->error) die($this->db->error);
		$result = $result->num_rows;
		if ($result == 0) {
			return 1;
		} else {return 0;}
	}

	public function getStudent($pswrd)
	{
		$query = "SELECT * FROM Students WHERE pswrd='$pswrd'";
		$result = $this->db->query($query);
		if ($this->db->error) die($this->db->error);
		$data = $result->fetch_array(MYSQLI_ASSOC);
		$student = new Student;
		$student->setAttributes($data);
		return $student;
	}

	public function listStudents()
	{
		$sql = "SELECT * FROM Students ORDER BY Mark";
			$sql = $this->db->real_escape_string($sql);
			$result = $this->db->query($sql);
			if ($this->db->error) die($this->db->error);
			$data = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($data as $value) {
				$student = new Student;
				$student->setAttributes($value);
				$obj[] = $student;
			}
			return $obj;
	}

	public function countStudents()
	{
		$sql = "SELECT count(*) from Students";
		$sql = $this->db->real_escape_string($sql);
			$result = $this->db->query($sql);
			if ($this->db->error) die($this->db->error);
			$data = $result->fetch_array();
			return $data[0];
	}

	public function sortStudent($sort,$dir,$current = 1)
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
		$start = ($current-1) *10;
		$sql .= " LIMIT $start, 10";
		$sql = $this->db->real_escape_string($sql);
			$result = $this->db->query($sql);
			if ($this->db->error) die($this->db->error);
			$data = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($data as $value) {
				$student = new Student;
				$student->setAttributes($value);
				$obj[] = $student;
			}
			return $obj;

	}

	public function searchStudents($string = '')
	{
		if ($string === '') {
			$obj =$this->listStudents();
			return $obj;
		} else {
			$sql = "SELECT * FROM Students WHERE CONCAT(Name, Surname, GroupNumber, Mark, BirthDate) like ?"; 
		
		$stmt = $this->db->prepare($sql);
		$reg = "%$string%";
		$stmt->bind_param('s', $reg);
		$stmt->execute();
		$result = $stmt->get_result();
		if ($this->db->error) die($this->db->error);
		$data = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($data as $value) {
				$student = new Student;
				$student->setAttributes($value);
				$obj[] = $student;
			}
			return $obj;
		}
	}
}