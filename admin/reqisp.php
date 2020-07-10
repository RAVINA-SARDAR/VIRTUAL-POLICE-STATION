
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
$rno=$_POST['reqno'];
$fd=$_POST['fdate'];
$ld=$_POST['tdate'];
$ft=$_POST['ftime'];
$lt=$_POST['ttime'];
$odesc=$_POST['odesc'];

$query=mysqli_query($con,"INSERT INTO `req_isp`(`req_num`, `from_date`, `to_date`, `from_time`, `to_time`, `o_desc`) VALUES ('$rno','$fd','$ld','$ft','$lt','$odesc')");
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
								<h3>Request For ISP</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									
<?php } ?>
									<br />

			<form class="form-horizontal row-fluid" name="chngpwd" method="post" onSubmit="return valid();">
									
<div class="control-group">
<label class="control-label" for="basicinput">Request Number</label>
<div class="controls">
<input type="text" placeholder="Enter Request Number"  name="reqno" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">From date</label>
<div class="controls">
<input type="date" name="fdate" required="required" value="" required="" class="form-control">
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">To date</label>
<div class="controls">
<input type="date" name="tdate" required="required" value="" required="" class="form-control">
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">From Time</label>
<div class="controls">
<input type="time" name="ftime" required="required" value="" required="" class="form-control">
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">To Time</label>
<div class="controls">
<input type="time" name="ttime" required="required" value="" required="" class="form-control">
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Other Description</label>
<div class="controls">
<input type="text" placeholder="Enter Other Description"  name="odesc" class="span8 tip" required>
</div>
</div>




										

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