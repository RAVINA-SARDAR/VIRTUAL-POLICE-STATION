<?php
include('include/config.php');
$id=intval($_GET['id']);
$query=mysqli_query($con,"SELECT `file` FROM `req_isp` WHERE id='$id'");

$rowcount=mysqli_num_rows($query);
?>
<table border="1">
<tr>
<td>download</td>
</tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
	$row=mysqli_fetch_array($query);

?>
<tr>
<td><a href="upload/<?php echo $row["file"] ?>"><?php echo $row["file"] ?></a></td>

</tr>

<?php	
}

?>
</table>