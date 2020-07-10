<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{
	

?>
 
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>User Profile</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
<style>
table {
  border: 1px solid ;
  border-color : #808080;
}
tr, td{
  border-bottom: 1px solid #ddd;
  padding: 15px;
  text-align: left;
}
tr:nth-child(even) {background-color: #f2f2f2;}

.button {background-color: #008CBA; 
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 2px 2px;
  cursor: pointer;
} /* Blue */
</style>
</head>
<body>

<div style="margin-left:50px;">
 <form name="updateticket" id="updateticket" method="post"> 




    	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" >
									<thead>
										<tr>
											<th>Request No:</th>
											<th>Criminal Name:</th>
											
											<th>Other Description</th>
											<th>Action</th>
										
										</tr>
									</thead>
								
  
		
    
    
    <tbody>
	<?php 

$ret1=mysqli_query($con,"SELECT * FROM `req_medical`");
while($row=mysqli_fetch_array($ret1))
{
?>

    
    <tr>
	<td><?php echo htmlentities($row['id']); ?></td><br/>
      <td><?php echo htmlentities($row['criminal_name']); ?></td><br/>
   
        
      <td><?php echo htmlentities($row['Description']); ?></td><br/>
	  
	  
	    <td><?php echo htmlentities($row['Description']); ?></td><br/>
   

<td><a href="insertmedi.php?reqno=<?php echo htmlentities($row['id']);?>">add file</a></td>
        </tr>

   
    <?php } ?>
	</tbody>
 
</table>
 </form>
</div>

</body>
</html>

<?php } ?>