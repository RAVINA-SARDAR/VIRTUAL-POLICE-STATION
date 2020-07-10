<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

<table>
<thead>
   
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      
      <td><a href="downloads.php?file_id=<?php echo 1 ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>