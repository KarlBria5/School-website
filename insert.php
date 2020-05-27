
<?php
include_once('dbh.php');
if(isset($_POST['submit']))
  $name = $_POST['name'];
  $surname = $_POST['fathername'];
  $sex = $_POST['sex'];
  $course = $_POST['course'];
  $admin = $_POST['admin'];
  $email = $_POST['emailid'];
  $dob = $_POST['dob'];
  $mobile =md5($_POST['mobileno']);
    
  $sql = "INSERT INTO student(name, surname, sex, course, admin, email, dob, mobile) VALUES ('$name', '$surname', '$sex', '$course', '$admin', '$email', '$dob', '$mobile')";
    mysqli_query($con, $sql);
  header("Location:../practswork/reg.php?submission=successful");
