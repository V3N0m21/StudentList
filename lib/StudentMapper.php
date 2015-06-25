<?php
class StudentMapper
{
    private $db;
    public function __construct(mysqli $conn)
    {
        $this->db = $conn;
    }
    public function saveStudent(Student $student)
    {
        $stmt = $this->db->prepare("INSERT INTO Students (Name, Surname, Sex, GroupNumber, Email, Mark, Local, BirthDate, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");
        if ($this->db->error)
            throw new Exception($this->db->error);
        $stmt->bind_param('sssssssss', $student->name, $student->surname, $student->sex, $student->groupNumber, $student->email, $student->mark, $student->local, $student->birthDate, $student->password);
        $stmt->execute();
        if ($this->db->errno) {
            throw new Exception('Update Error (' . $this->db->errno . ') ' . $this->db->error);
        }
        $stmt->store_result();
    }
    
    public function updateStudent(Student $student)
    {
        
        $stmt = $this->db->prepare("UPDATE Students SET Name=?,Surname=?, Sex=?, GroupNumber=?,Email=?, Mark=?,Local=?,BirthDate=? WHERE password= ?");
        if ($this->db->error)
            throw new Exception($this->db->error);
        $stmt->bind_param('sssssssss', $student->name, $student->surname, $student->sex, $student->groupNumber, $student->email, $student->mark, $student->local, $student->birthDate, $student->password);
        $stmt->execute();
        if ($this->db->error)
            throw new Exception($this->db->error);
        
        $stmt->store_result();
    }
    
    public function checkEmail($email, $password = "")
    {
        $stmt = $this->db->prepare("SELECT count(*) FROM Students WHERE Email=? AND password<>?");
        if ($this->db->error)
            throw new Exception($this->db->error);
        $stmt->bind_param('ss', $email, $password);
        
        $stmt->execute();
        if ($this->db->error)
            throw new Exception($this->db->error);
        $result = $stmt->get_result();
        $result = $result->fetch_array();
        $result = intval($result[0]);
        if ($result !== 0) {
            return 0;
        } else {
            return 1;
        }
    }
    
    public function getStudent($password)
    {
        $stmt = $this->db->prepare("SELECT * FROM Students WHERE password=?");
        if ($this->db->error)
            throw new Exception($this->db->error);
        $stmt->bind_param('s', $password);
        $stmt->execute();
        if ($this->db->error)
            throw new Exception($this->db->error);
        $result = $stmt->get_result();
        $data   = $result->fetch_array(MYSQLI_ASSOC);
        if (!$data) {
            return null;
        } else {
            $student = new Student;
            $student->setAttributes($data);
            return $student;
        }
    }
    
    public function listStudents()
    {
        $sql    = "SELECT * FROM Students ORDER BY Mark";
        $result = $this->db->query($sql);
        if ($this->db->error)
            throw new Exception($this->db->error);
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
        $sql    = "SELECT count(*) from Students";
        $result = $this->db->query($sql);
        if ($this->db->error)
            throw new Exception($this->db->error);
        $data = $result->fetch_array();
        return $data[0];
    }
    
    public function sortStudent($sort, $dir, $current = 1)
    {
        $sql = "SELECT * FROM Students";
        switch ($sort) {
            case 'name':
                $sql .= " Order by Name";
                break;
            case 'surname':
                $sql .= " Order by Surname";
                break;
            case 'groupNumber':
                $sql .= " Order by GroupNumber";
                break;
            case 'mark':
                $sql .= " Order by Mark";
                break;
            case 'local':
                $sql .= " Order by Local";
                break;
            case 'sex':
                $sql .= " Order by Sex";
                break;
            case 'dateBirth':
                $sql .= " Order by BirthDate";
                break;
        }
        switch ($dir) {
            case 'asc':
                $sql .= " ASC";
                break;
            case 'desc':
                $sql .= " DESC";
                break;
        }
        $start = ($current - 1) * 10;
        $sql .= " LIMIT $start, 10";
        $result = $this->db->query($sql);
        if ($this->db->error)
            throw new Exception($this->db->error);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($data as $value) {
            $student = new Student;
            $student->setAttributes($value);
            $obj[] = $student;
        }
        return $obj;
        
    }
    
    public function searchStudents($string = '', $sort, $dir, $current = 1)
    {
        if ($string === '') {
            $obj = $this->sortStudent($sort, $dir, $current);
            return $obj;
        } else {
            $sql = "SELECT * FROM Students WHERE CONCAT(Name, Surname, GroupNumber, Mark, BirthDate) COLLATE utf8_general_ci like ?";
            switch ($sort) {
                case 'name':
                    $sql .= " Order by Name";
                    break;
                case 'surname':
                    $sql .= " Order by Surname";
                    break;
                case 'groupNumber':
                    $sql .= " Order by GroupNumber";
                    break;
                case 'mark':
                    $sql .= " Order by Mark";
                    break;
                case 'local':
                    $sql .= " Order by Local";
                    break;
                case 'sex':
                    $sql .= " Order by Sex";
                    break;
                case 'dateBirth':
                    $sql .= " Order by BirthDate";
                    break;
            }
            switch ($dir) {
                case 'asc':
                    $sql .= " ASC";
                    break;
                case 'desc':
                    $sql .= " DESC";
                    break;
            }
            $start = ($current - 1) * 10;
            $sql .= " LIMIT $start, 10";
            
            $stmt = $this->db->prepare($sql);
            if ($this->db->error)
                throw new Exception($this->db->error);
            $reg = "%$string%";
            $stmt->bind_param('s', $reg);
            $stmt->execute();
            if ($this->db->error)
                throw new Exception($this->db->error);
            $result = $stmt->get_result();
            if ($this->db->error)
                throw new Exception($this->db->error);
            $data = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $value) {
                $student = new Student;
                $student->setAttributes($value);
                $obj[] = $student;
            }
            if (!empty($obj)) {
                return $obj;
            } else {
                return null;
            }
        }
    }
    
    public function countSearchStudents($string = '')
    {
        $sql  = "SELECT count(*) FROM Students WHERE CONCAT(Name, Surname, GroupNumber, Mark, BirthDate) like ?";
        $stmt = $this->db->prepare($sql);
        if ($this->db->error)
            throw new Exception($this->db->error);
        $reg = "%$string%";
        $stmt->bind_param('s', $reg);
        $stmt->execute();
        if ($this->db->error)
            throw new Exception($this->db->error);
        $result = $stmt->get_result();
        if ($this->db->error)
            throw new Exception($this->db->error);
        $data = $result->fetch_array();
        #$count = $data[0];
        return $data[0];
    }
}