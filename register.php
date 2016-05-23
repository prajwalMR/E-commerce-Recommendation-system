<!DOCTYPE html>
<html>
<head>
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

	<title>SIGNUP</title>

	<?php
error_reporting(0);
	$mysql_hostname = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "recommendation_System";
	$db = mysqli_connect ($mysql_hostname, $mysql_username, $mysql_password,$mysql_database )or die("Something is wrong...");
	$Name = @$_POST['Name'];
	$Username = @$_POST['Username'];
	$Password = @$_POST['Password'];
	$Repassword = @$_POST['Repassword'];
	$Submit = @$_POST['Submit'];

	if($Submit){
		if( $Name == null){ echo"Name FIELD IS REQUIRED";}
		if( $Username == null){ echo"Username FIELD IS REQUIRED";}
		if( $Password == null){ echo"Password FIELD IS REQUIRED";}
		if($Password != $Repassword){echo"Passwords do not match. Please Retry";}
		else if(($Name && $Username && $Password) != null){

		//$auth = Duplicate($Username,$db);

			$query = "SELECT Username FROM login where Username = '$Username' ";
			$result = $db->query($query);

		if($result->num_rows <= 0){$insert = mysqli_query($db,"INSERT INTO login VALUES ('$Name','$Username','$Password')")
				or die("REFRESH AND PLEASE CHOOSE A DIFFERENT USERNAME");
			if($result->num_rows <= 0){echo"<script>alert(\" SIGNUP SUCCESSFULLY COMPLETED \")</script>";}
			}
			else {echo"THIS USERNAME ALREADY EXISTS PLEASE CHOOSE A DIFFERENT USERNAME";}
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
<h1 style = "color:#6C3483"><u>SIGNUP</u></h1>
<p style = "float:right"><font size="5" color = "#922B21"><b>
We help you choose the best product suitable for your requirements. <br><br>Our products include :  Smartphones , Cars , Laptops ,<br> Motor bikes , Washing machines AND MANY MORE...<b></font>
</p>
<div class = "bgclass" align = "center">
<br>
<form method="post">
NAME            :<input name = "Name" type="textbox" ></input><br><br>	
USERNAME        :<input name = "Username" type="textbox"></input><br><br>
PASSWORD        :<input name = "Password" type="password"></input><br><br>
RETYPE PASSWORD : <input name = "Repassword" type="password"></input><br><br>
<input name = "Submit" type="submit" value="SIGNUP" style="width:200px;height:50px"></input><br><br>
</form>
<br>
<input type = "button" value = "PROCEED TO  LOGIN " style="width:200px;height:50px" onclick = window.location="login.php";>
</div>

</body>
</html>

