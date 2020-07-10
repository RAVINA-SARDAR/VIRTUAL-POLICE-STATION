
<!DOCTYPE html>
<body>
 <link href="css/style.css" rel="stylesheet">
<div class="container">
  <form method="POST" action="insertcon.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">Email </label>
    <input type="text" id="lname" name="email" placeholder="Your Mail id..">

   

    <label for="subject">Subject</label>
    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="submit1"  value="Submit">

  </form>
</div>
</body>
<html>