<?php 
$link = mysqli_connect('db', 'root', '123');
if (!$link) {
	die('Error:' . mysqli_error());
}
echo 'GOOD!';
mysqli_close($link);
?>
