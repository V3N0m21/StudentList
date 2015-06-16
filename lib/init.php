<?php
$path = dirname(__DIR__);
spl_autoload_register(function ($class) {
	#$file = $path."/".$class.".php";
	#if (file_exists($file)) {
	require $class . '.php';
	#echo $file.'<br>';
	#echo "/var/www/StudentList/" . $class. '.php'."<br>";
	#}
});
require_once('config.php');
require_once('functions.php');
$conn = new mysqli($hostname, $username, $password, $database);
$conn->set_charset("utf8");
$conn->query("SET sql_mode='STRICT_ALL_TABLES'");
if ($conn->error) throw new Exception($conn->error);
$path = dirname(__DIR__);
$data = new StudentMapper($conn);
$student = new Student;
#$student = $data->getStudent("c31eb"); 
$validation = new Validation($data);
if(isset($_COOKIE['user'])){
	$user = $_COOKIE['user'];
	$student = $data->getStudent($user);
}
