<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form method="post" enctype="multipart/form-data">
    <!--<label>Title</label>
    <input type="text" name="title">-->
    <label>File Upload</label>
    <input type="File" name="file">
    <input type="submit" name="submit">
 
 
</form>
 
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
