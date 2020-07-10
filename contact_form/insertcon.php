<?php
include('config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=($_POST['message']);
	
	echo $name;
	
}
?>
