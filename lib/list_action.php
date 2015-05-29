<?php
include 'ini.php';
$db = new StudentMapper($conn);
$search = isset($_GET['search']) ? makeProtect($_GET['search']) : '';
$data = $db->searchStudents($search);
if (count($data) == 0)
{
   $text = ' <br> Нет совпадений в базе студентов.';
}
include './views/list.php';