<?php
if(isset($_POST['submit']))
{
	include('includes/config.php');
$rno=$_POST['reqno'];
$fd=$_POST['fdate'];
$ld=$_POST['tdate'];
$ft=$_POST['ftime'];
$lt=$_POST['ttime'];
$odesc=$_POST['odesc'];

$query=mysqli_query($con,"INSERT INTO `req_isp`(`req_num`, `from_date`, `to_date`, `from_time`, `to_time`, `o_desc`) VALUES ('$rno','$fd','$ld','$ft','lt','$odesc')");
echo $query;
}
?>