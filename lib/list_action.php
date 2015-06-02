<?php
include 'ini.php';
$db = new StudentMapper($conn);
$search = "";
$search = isset($_GET['search']) ? makeProtect($_GET['search']) : '';
echo $search;
$data = $db->searchStudents($search);
if (count($data) == 0)
{
   $text = ' <br> Нет совпадений в базе студентов.';
}
include $_SERVER['DOCUMENT_ROOT']. '/views/list.php';