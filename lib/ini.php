<?php
require_once(__DIR__ . '/functions.php');
spl_autoload_register(function ($class) {
	include $class . '.php';
});
require_once('login.php');
$conn = new mysqli($hn, $un, $pw, $dbc);
$conn->set_charset("utf8");
if ($conn->connect_error) die($conn->connect_error);