<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>

	<style>
	
	.bgclass{
        background-color: #ffffff;
        border: 1px solid black;
        opacity: 0.90;
        font-weight: bold;
        font-family: Papyrus, fantasy;
        height:300px;
        width:400px;
        align: center;
    }
    img{

    	float : center;
    }

</style>

<?php

error_reporting(0);
	$mysql_hostname = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "recommendation_System";
	$db = mysqli_connect ($mysql_hostname, $mysql_username, $mysql_password,$mysql_database )or die("Something is wrong...");
	$Username = @$_POST['Username'];
	$Password = @$_POST['Password'];
	$Submit = @$_POST['Submit'];
	$pass = null;
	if($Submit){
		if( $Username == null){ echo"Username FIELD IS REQUIRED";}
		if( $Password == null){ echo"Password FIELD IS REQUIRED";}
		else if( ($Username && $Password) != null){

			$query = "SELECT Username FROM login where Username = '$Username' ";
			$result = $db->query($query);
//prashantbhat410
			//echo"<script>alert(\" RESULT : '$result'\")</script>";

		if(mysqli_num_rows($result) > 0){
			//echo"<script>alert(\" USERNAME : '$Username'\")</script>";
			$passquery = "SELECT * FROM login where Username = '$Username' ";
			$passresult = $db->query($passquery);	
			$row = $passresult->fetch_assoc();
			//print_r($row);
			$pass = $row['Password'];
			$name = $row['Name'];
			//echo"<script>alert(\" NAME : '$name' \")</script>";		
			}
			if($Password == $pass){
				setcookie("name", $name, time()+3600, "/","", 0);
				//$_COOKIE['Name'] = $name;
				//echo"<script>(\" window.location="home.php;" \")</script>";
				header('Location: home.php');

			}
			else {
				echo"<script>alert(\"Incorrect username or password...please try again\")</script>";
			}
 		}
 			$result = 999;
		}	
	?>

</head>
<body bgcolor="#F4D03F">
<div align = "center" style="float : right margin: 0 10cm 0 0 ">
<img src="logo1.gif">
<h1><pre><font color = "#3498DB" size="12"><u>REACT </u></font ><font color = "blue" size="12"><u> RECOMMENDATION </u></font><font color = "#3498DB" size="12"><u> SYSTEMS </u></font></pre></h1>
</div>
<h1 style = "color:#6C3483"><u>LOGIN</u></h1>
<div class = "bgclass">
<form method="post" align="center">	
<br><br>
USERNAME        :<input name = "Username" type="textbox" ></input><br><br>
PASSWORD        :<input name = "Password" type="password"></input><br><br>
<input name = "Submit" type="submit" value="LOGIN" style="width:200px;height:50px" align="center"></input><br><br>
</form>
</div>
<br>
<h3>NOT A USER YET?</h3>
<input type = "button" value = "SIGNUP " style="width:200px;height:50px" onclick = window.location="register.php";>

</body>
</html>