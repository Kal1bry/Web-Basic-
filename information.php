<?php 
$link = mysqli_connect('127.0.0.1', 'root', '123');
if (!$link) {
	die('Error:' . mysqli_error());
}
echo 'GOOD!';
mysqli_close($link);
?>
