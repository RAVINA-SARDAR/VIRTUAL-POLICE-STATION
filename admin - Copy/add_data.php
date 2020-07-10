
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$rno=$_POST['cname'];
$fd=$_POST['ctype'];
$ld=$_POST['cloc'];
$ft=$_POST['cdetails'];


$query=mysqli_query($con,"INSERT INTO `criminal_record`( `criminal_name`, `crime_type`, `crime_location`, `Crime_Details`) VALUES ('$rno','$fd','$ld','$ft')");
// code for show complaint number
if (mysqli_query($con, $query)) {
 echo '<script> alert("Your complain has been successfully filled")</script>';
} else {
  
echo '<script> alert("Your complain has been  inserted :)")</script>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Request Call Details</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<script type="text/javascript">
function valid()
{
if(document.chngpwd.password.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.password.focus();
return false;
}
else if(document.chngpwd.newpassword.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpassword.focus();
return false;
}
else if(document.chngpwd.confirmpassword.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.confirmpassword.focus();
return false;
}
else if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Add Todays Crime</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									
<?php } ?>
									<br />

			<form class="form-horizontal row-fluid" name="chngpwd" method="post" onSubmit="return valid();">
									
<div class="control-group">
<label class="control-label" for="basicinput">Criminal Name</label>
<div class="controls">
<input type="text" placeholder="Enter Criminal Name"  name="cname" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Crime Type</label>
<div class="controls">
<select name="ctype" id="category" class="form-control" onChange="getCat(this.value);" required="">
<option value="">Select Location</option>
<?php $sql=mysqli_query($con,"select id,subcategory from subcategory ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option value="<?php echo htmlentities($rw['subcategory']);?>"><?php echo htmlentities($rw['subcategory']);?></option>
<?php
}
?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Crime Location</label>
<div class="controls">
<select name="cloc" id="category" class="form-control" onChange="getCat(this.value);" required="">
<option value="">Select Location</option>
<?php $sql=mysqli_query($con,"select id,categoryName from category ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option value="<?php echo htmlentities($rw['categoryName']);?>"><?php echo htmlentities($rw['categoryName']);?></option>
<?php
}
?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Crime details</label>
<div class="controls">
<textarea  name="cdetails" required="required" cols="10" rows="10" class="form-control" maxlength="2000"></textarea>
</div>
</div>

<!--<div class="control-group">
<label class="control-label" for="basicinput">Crime report</label>
<div class="controls">
<button><a href="addcrime_report.php" name="compfile" class="form-control" value="">choose file</a><button>
</div>
</div>-->






										

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Submit</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
<?php } ?>