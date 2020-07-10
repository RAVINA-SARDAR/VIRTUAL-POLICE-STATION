<?php
include('config.php');
error_reporting(0);
if(isset($_POST['submit1']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=($_POST['message']);

	
$query=mysqli_query($con,"INSERT INTO `tblcontact_us`(`name`, `email`, `message`) VALUES  ('$name','$email','$message')");
// code for show complaint number
if (mysqli_query($query)) {
 echo '<script> alert("Your complain has been successfully filled")</script>';
} else {
  
echo '<script> alert("Your QUERY  has been requested :)")</script>';
}
}
?>

