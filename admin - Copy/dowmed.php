<?php
include('include/config.php');
$id=intval($_GET['id']);
$query=mysqli_query($con,"SELECT MedicalFile FROM `criminal_record` WHERE c_id='$id'");

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
<td><a href="upload/<?php echo $row["ReportFile"] ?>"><?php echo $row["ReportFile"] ?></a></td>

</tr>

<?php	
}

?>
</table>