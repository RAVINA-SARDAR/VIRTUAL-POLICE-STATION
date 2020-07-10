<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
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
}
.button{
  background-color: white; 
border: 2px solid #008CBA;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button:hover {
  background-color: #008CBA;
  color: white;
}

[type="file"] {
  border: 0;
  clip: rect(20, 20, 20, 20);
  height: 1px;
  overflow: hidden;
  padding: 0;
  position: absolute !important;
  white-space: nowrap;
  width: 1px;
}
 
[type="file"] + label {
  background-color:  #008CBA;
  border-radius: 4rem;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  padding-left: 2rem 4rem;
    padding: 1rem 50px;
}
  
[type="file"]:focus + label,
[type="file"] + label:hover {
    background-color: #f15d22;
}
  
[type="file"]:focus + label {
  outline: 1px dotted #000;
}
</style>

</head>

<body>
 
 <div class="card">
  <div class="container">
  
 
<form method="post" enctype="multipart/form-data">
    <!--<label>Title</label>
    <input type="text" name="title">-->
   <center> <h2><b> <label>File Upload</label> </b></h2> </center>
	<hr>
    <!--<input   class="" type="File" name="file"> -->
	<input type="file" id="file" name="file" />
	<label for="file" />choose a file</label>
	
	<br> <br><br>
    <input class="button" type="submit" name="submit">
 
 
</form>
  </div>
</div>
</body>
</html>
 
<?php 
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "cms";  #database name
 
#connection string
$con = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
        //$title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname =$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "UPDATE `criminal_record` SET ``MedicalFile``='$pname' WHERE c_id='".$_GET['cid']."'";
 
    if(mysqli_query($con,$sql)){
 
    header("Location:view_crime.php");
    }
    else{
        echo "Error";
    }
}
 
 
?>
