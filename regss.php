<?php 
$color_code=array('#59E817', '#F88017', '#800000', '#FF0000', '#FFFF00');
$random_color=$color_code[array_rand($color_code)];
$random_font_color=$color_code[array_rand($color_code)];
//echo $random_color;
include_once('dbh.php');
$sql = "SELECT id, name, surname, sex, course, admin, email, dob, mobile FROM  student";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) >0){
	echo '
	<table border="5px" cellpadding="10px"><th>Id</th><th>Name</th><th>Surname</th><th>Sex</th><th>Course</th><th>Admission</th><th>E-mail</th><th>Date of Birth</th><th>Mobile</th><br>';
	while($row = mysqli_fetch_assoc($result)){
		echo '
		<tr><td>'. $row["id"] .'</td><td>'. $row["name"] .'</td><td>'. $row["surname"] .'</td><td>'. $row["sex"] .'</td>
		<td>'. $row["sex"] .'</td><td>'. $row["course"] .'</td><td>'. $row["admin"] .'</td><td>'. $row["email"] .'</td>
		<td>'. $row["dob"] .'</td><td>'. $row["mobile"] .'</td></tr>
		';
		}
	}
?>
<html>
<body style="background:<?php echo $random_color;?>">
<h6 style="color:<?php echo $random_color;?>'>">.</h6>
</html>