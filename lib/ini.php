<?php
spl_autoload_register(function ($class) {
	include $class . '.php';
});
require_once('login.php');
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);