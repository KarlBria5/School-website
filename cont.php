
<?php
include_once('hbd.php');
if(isset($_POST['submit']))
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contain = $_POST['contain'];
  $phoneno = $_POST['phoneno'];
    
  $sql = "INSERT INTO contactus(name, email, contain, phoneno) VALUES ('$name', '$email', '$contain', '$phoneno')";
    mysqli_query($con, $sql);
