<?php
include 'ini.php';
$db = new StudentMapper($conn);
$search = "";
$sort = 'mark';
$dir = 'desc';
$columns = array('name', 'surname', 'sex', 'groupNumber', 'mark', 'local', 'dateBirth');
$search = isset($_GET['search']) ? makeProtect($_GET['search']) : '';

if (isset($_GET['dir']) && in_array($_GET['dir'], array('asc', 'desc'))) {
	$dir = $_GET['dir'];
}
if (isset($_GET['sort']) && in_array($_GET['sort'], $columns)) {
	$sort = $_GET['sort'];
}

if (isset($_GET['search'])) {
	$data = $db->searchStudents($search);
} else {
$data = $db->sortStudent($sort,$dir);
}
$text = $_GET['sort'];
if (count($data) == 0)
{
   $text = ' <br> Нет совпадений в базе студентов.';
}
include $_SERVER['DOCUMENT_ROOT']. '/views/list.php';