<?php

include './lib/ini.php';
if(isset($_COOKIE['user']))
{$user = $_COOKIE['user'];
$data = new StudentMapper($conn);
$stud = $data->getStudent($user);
$student = new Student($stud);
$info = $student->getStudentInfo();

echo "Здравствуйте " . $info[0];

        $name = $info[0];
        $surname = $info[1];
        $sex = $local = "";
        $groupNumber = $info[3];
        $email = $info[4];
        $mark = $info[5];
        $birthDate = $info[7];
        $pass = $info[8];
} else {
$name = $surname = $sex = $groupNumber = $email = $mark = $local = $birthDate = "";
}

include './views/main.php';
#include $_SERVER['DOCUMENT_ROOT']."/lib/list_action.php";
if(isset($_GET['page'])){
$page = $_GET['page'];
switch ($page) :
	case 'registration' : include $_SERVER['DOCUMENT_ROOT']."/views/reg.php"; break;
	case 'list' : include $_SERVER['DOCUMENT_ROOT']."/lib/list_action.php";break; 
        case 'dashboard' : include $_SERVER['DOCUMENT_ROOT']."/views/reg.php"; break;
	endswitch;
}
if (isset($_GET['search'])) {
	include('./lib/list_action.php');
}







/*$stud = array('name' => 'venom',
        'surname' =>'lolov',
        'sex'=> 'M',
        'groupNumber' => 999,
        'email' => 'lolov@lolka',
        'mark' => 999,
        'local' => 'L',
        'birthDate' => 1989);
$student = new Student($stud);
$pass = $student->generatePswrd();
$save = new StudentMapper($conn);
echo $student->pswrd;
#$save->saveStudent($student);
*/

