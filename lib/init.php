<?php

spl_autoload_register(function ($class) {
	#if (file_exists($class. '.php')) {
	require $class . '.php';
#	}
});
require_once('config.php');
require_once('functions.php');
$conn = new mysqli($hostname, $username, $password, $database);
$conn->set_charset("utf8");
if ($conn->connect_error) die ($conn->connect_error);
$path = dirname(__DIR__);
$data = new StudentMapper($conn);
$student = new Student;
#$student = $data->getStudent("c31eb"); 
$validation = new Validation;
if(isset($_COOKIE['user'])){
	$user = $_COOKIE['user'];
	$student = $data->getStudent($user);
}
