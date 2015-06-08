<?php
include_once './views/main.php';
$sql = "SELECT * FROM Students2 ORDER BY Mark";
			$sql = $conn->real_escape_string($sql);
			$result = $conn->query($sql);
			if ($conn->error) die($conn->error);
			$data = $result->fetch_all(MYSQLI_ASSOC);
			var_dump($data);
			