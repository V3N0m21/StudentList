<form action="1.php" method="post">
<textarea rows="10" cols="45" name="text"></textarea>
<input type="submit" name="submit" value="submit">
</form>
<?php
$text = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$text = isset($_POST['text']) ? strval($_POST['text']) : '';
	$text = htmlentities($text);
}  
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$text = isset($_GET['text']) ? strval($_GET['text']) : '';
}

echo "<pre>$text</pre>";
#$text = urldecode($text);
$text = urlencode($text);
?>
<a href="1.php?text=<?= $text ?>">Go</a>
