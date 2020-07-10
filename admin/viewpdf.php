<?php


	
	
	define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'cms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// get the .pdf

$gotten = mysql_query("SELECT `file` FROM `req_isp` WHERE id = 1");
$row = mysql_fetch_assoc($con,$gotten);
$bytes = $row[imgdata];
header("Content-type: application/pdf");
header('Content-disposition: attachment; filename="thing.pdf"');
print $bytes;
?>