<?php
include('include/config.php');
$id=intval($_GET['id']);
$query=mysqli_query($con,"SELECT ReportFile FROM `criminal_record` WHERE c_id='$id'");

$rowcount=mysqli_num_rows($query);
?>
<html>
<head>

	<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 20px  20px 20px 20px;
}</style>
</head>
<body>
<div class="card">
  <div class="container">
  
<table>
<tr>
<td><center> <h2><b> <label>Download</label> </b></h2> </center></td>
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

</div>
</div>
</body>
</html>