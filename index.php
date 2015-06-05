<?php
include_once './views/main.php';
$data = new StudentMapper($conn);
$sort = 'mark';
$dir = 'desc';
$columns = array('name', 'surname', 'sex', 'groupNumber', 'mark', 'local', 'dateBirth');
/*if (isset($_GET['search'])) {
	$search = $_GET['search'];
	$students = $data->searchStudents($search);
} else {
$students = $data->listStudents();
}*/
if (isset($_GET['dir']) && in_array($_GET['dir'], array('asc', 'desc'))) {
	$dir = $_GET['dir'];
}
if (isset($_GET['sort']) && in_array($_GET['sort'], $columns)) {
	$sort = $_GET['sort'];
}

if (isset($_GET['search'])) {
	$search = $_GET['search'];
	$students = $data->searchStudents($search);
} else {
$students = $data->sortStudent($sort, $dir);
}
$current = 1;

$rows = count($students);
#echo $rows;
$check = new Validation;
$paginator = new Paginator;
$pages = $paginator->countPages($rows);

if(isset($_GET['current'])){
	$current = $_GET['current'];
}

$currentItem = $paginator->setPages($current,$rows);
#var_dump($students);
#echo $students[2]->name;exit;
#var_dump($pages);
#$valid = $check->validate($student);
include_once './views/list.php';
