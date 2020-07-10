<?php

$sql = “SELECT `file` FROM `req_isp` WHERE id = ‘1’”;
$result2 = mysqli_query($link, $sql);    // query execution
$row = mysqli_fetch_object($result2); // returns the current row of the resultset
$pdf_content = $row->field_name; // Put contents of pdf into variable
$fileName = time().”.pdf”; // create the unique name for pdf generated
//download file from database and allows you to save in your system
header(“Content-type: application/pdf”);
header(“Content-disposition: attachment; filename=”.$fileName);
print $pdf_content;

?>