<?php
include './lib/ini.php';
include './views/main.php';
if(isset($_GET['page'])){
$page = $_GET['page'];
switch ($page) :
	case 'registration' : include ('./lib/register.php'); break; 
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

