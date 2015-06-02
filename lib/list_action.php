<?php
include 'ini.php';
$db = new StudentMapper($conn);
$search = "";
$search = isset($_GET['search']) ? makeProtect($_GET['search']) : '';

$data = $db->searchStudents($search);
if(isset($_GET['sort'])) {$sort = $_GET['sort']; $data = $db->sortStudent($sort);}
$text = $_GET['sort'];
if (count($data) == 0)
{
   $text = ' <br> Нет совпадений в базе студентов.';
}
include $_SERVER['DOCUMENT_ROOT']. '/views/list.php';