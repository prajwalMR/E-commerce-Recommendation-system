<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
<?php
error_reporting(0);
echo"<script>alert(\" LOGIN SUCCESSFULL \")</script>";
$mysql_hostname = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "recommendation_System";
	$db = mysqli_connect ($mysql_hostname, $mysql_username, $mysql_password,$mysql_database )or die("Something is wrong...");
	$name = $_COOKIE["name"];
	//print_r($name);
echo"<h1><font color = \"blue\">Welcome  $name</font></h1>";
?>

</head>
<body bgcolor="#F4D03F">
<div align = "center" style="float : right margin: 0 10cm 0 0 ">
<img src="logo1.gif">
<h1><pre><font color = "#3498DB" size="12"><u>REACT </u></font ><font color = "blue" size="12"><u> RECOMMENDATION </u></font><font color = "#3498DB" size="12"><u> SYSTEMS </u></font></pre></h1>
</div>

<table>
<h1><b>CHOOSE THE PRODUCT YOU WANT RECOMMENDATIONS ON :</b></h1>
<tr>
	<td><img src="car.jpg" onclick = window.location="car.php"></td> <td><img src="phone.jpg" onclick = window.location="smartphones.php"></td>
</tr>
<tr>
	<td><img src="laptop.jpg"onclick = window.location="laptop.php"></td> <td><img src="washingmachine.jpg" onclick = window.location="washingmachine.php"></td>
</tr>

</table>
</body>
</html>