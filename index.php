<?php
include './lib/ini.php';
include './views/main.php';
$page = $_GET['page'];
$action = $_GET['action'];
switch ($page) :
	case 'registration' : include ('./views/register.php'); break; 
	endswitch;








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

