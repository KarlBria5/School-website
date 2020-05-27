<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
     <link rel="stylesheet" type="text/css" href="css/reg.css" />
  <script type="text/js" src="function.js"></script>
</head>
<body>
       <div class="loginbox">
       <div class= "container">
        <form action="insert.php" method="POST">

                <table cellpadding="10" width="20%" bgcolor="grey" align="center" cellspacing="2">
                <tr>
                  <td colspan=2>
                  <center><font size=4><b>Student Registration Form</b></font></center>
                  </td>
                  </tr>
                <tr>
                  <td>Name</td>
                  <td><input type=text name="name" id="textname" size="30"></td>
                  </tr>
                <tr>
                  <td>Surname</td>
                  <td><input type="text" name="fathername" id="fathername"
                  size="30"></td>
                  </tr>
                <tr>
                  <td>Sex</td>
                  <td><input type="radio" name="sex" value="Male" size="10">Male
                  <input type="radio" name="sex" value="Female" size="10">Female</td>
                  </tr>
                <tr>
                  <td>Course</td>
                  <td><select name="course">
                  <option selected>select..</option>
                  <option>Information Tecnology</option>
                  <option>Coumputer Science</option>
                  <option>Electrical and Electronics</option>
                  <option>Business Commerse</option>
                  <option>Telecommunication Information Tecnology</option>
                  <option>Hospitality</option>
                  <option>Mechanical</option>
                  <option>Civil </option>
                  <option>Applied Physics </option>
                  </select></td>
                </tr>
                 <tr>
                  <td>Admission</td>
                  <td><input type="text" name="admin" id="admin" size="30"></td>
                  </tr>
                  <tr>
                  <td>Email</td>
                  <td><input type="text" name="emailid" id="emailid" size="30"></td>
                  </tr>
                <tr>
                  <td>DOB</td>
                  <td><input type="text" name="dob" id="dob" size="30"></td>
                  </tr>
                <tr>
                  <td>MobileNo</td>
                  <td><input type="text" name="mobileno" id="mobileno" size="30"></td>
                  </tr>
                  <tr>
                  <td><input type="reset"></td>
                  <td colspan="2"><input type="submit" name="submit" value="Submit Form" /></td>
                  </tr>
                  </table>
            </form> </div></div>
</body>
</html>
