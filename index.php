<?php
include './lib/init.php';
$data = new StudentMapper($conn);
$sort = 'mark';
$dir = 'desc';
$message = '';
$page = "index";
$search = '';
$current = 1;
$columns = array('name', 'surname', 'sex', 'groupNumber', 'mark', 'local', 'dateBirth');

if (isset($_GET['notify'])) {
	if ($_GET['notify'] == 'saved') {$message = "Ваша информация была сохранена";}
		elseif ($_GET['notify'] == 'updated') {$message = "Ваша информация изменена";}
}
if (isset($_GET['dir']) && in_array($_GET['dir'], array('asc', 'desc'))) {
	$dir = $_GET['dir'];
}
if (isset($_GET['sort']) && in_array($_GET['sort'], $columns)) {
	$sort = $_GET['sort'];
}
if(isset($_GET['current'])){
	$current = intval($_GET['current']);
}

if (isset($_GET['search'])) {
	$search = $_GET['search'];
	$students = $data->searchStudents($search, $sort, $dir, $current);
	$rows = $data->countSearchStudents($search);
} else {
$students = $data->sortStudent($sort, $dir, $current);
$rows = $data->countStudents();
}

$paginator = new Paginator($rows, $current);
$pages = $paginator->countPages();
include_once './views/list.php';
