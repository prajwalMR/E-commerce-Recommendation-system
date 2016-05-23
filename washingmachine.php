<!DOCTYPE html>
<html>
<head>
	<title>WASHING MACHINES</title>
	<style type="text/css">
	
	
input[type=checkbox] {width:20px; height:20px;}
	</style>
</head>
<?php
error_reporting(0);

$mysql_hostname = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "recommendation_System";
	$db = mysqli_connect ($mysql_hostname, $mysql_username, $mysql_password,$mysql_database )or die("Something is wrong...");


$brand = count(@$_POST['brand']);


if((gettype($_POST['brand'])=="array") && $brand > 0){
	echo  "<h1>RESULTS(based on brand) \n</h1>";

echo  "<h3>  BRAND  |  MODEL NAME  | PRICE | OPERATING SYSTEM | REAR CAMERA | FRONT CAMERA | RAM | ROM | WARRANTY \n</h3>";
foreach($_POST['brand'] as $val){
 $id_c=$val;
 //echo("VALUE : $val");
 	$brandquery ="SELECT * from washingmachines where brand = '$val' ";

 $brandresult = $db->query($brandquery);
 			$numRow = mysqli_num_rows($brandresult);
 			
			$row = $brandresult->fetch_all();
			//print_r($row);

			echo  "<font size= \"5\" color=\"red\"><h5>";
			for( $i =0; $i<$numRow ; $i++){

				$Row = $row[$i];

				foreach ($Row as $key) {
					echo nl2br ("     $key   |  ");
				}
				echo nl2br ("\n \n");
			
}
echo  "</font></h5>";
			}
			
}
//********************************************************************************************************
$price = count(@$_POST['price']);


if((gettype($_POST['price'])=="array") && $price > 0){
	echo  "<h1>RESULTS(based on PRICE) \n</h1>";

echo  "<h3>  BRAND  |  MODEL NAME  | PRICE | FUNCTION TYPE | WASHING CAPACITY| SHADE |  DIGITAL DISPLAY  | WEIGHT | WARRANTY \n</h3>";
foreach($_POST['price'] as $val){
 $id_c=$val;
 $valUpper = $val + 5000;
 //echo("VALUE : $val");
 	$pricequery ="SELECT * from washingmachines where price >'$val' && price < $valUpper";

 $priceresult = $db->query($pricequery);
 			$numRow = mysqli_num_rows($priceresult);
 			
			$row = $priceresult->fetch_all();
			//print_r($row);

			echo  "<font size= \"5\" color=\"red\"><h5>";
			for( $i =0; $i<$numRow ; $i++){

				$Row = $row[$i];

				foreach ($Row as $key) {
					echo nl2br ("     $key   |  ");
				}
				echo nl2br ("\n \n");
			
}
echo  "</font></h5>";
			}
			
}
//***************************************************************************************************


?>
<body>
<div style="float : right margin: 0 10cm 0 0 ">

<input type = "button" value = "BACK TO HOME PAGE" style="width:200px;height:50px" onclick = window.location="home.php"></input>
<div align = "center" style="float : right margin: 0 10cm 0 0 ">
<img src="logo1.gif">
<h1><pre><font color = "#3498DB" size="12"><u>REACT </u></font ><font color = "blue" size="12"><u> RECOMMENDATION </u></font><font color = "#3498DB" size="12"><u> SYSTEMS </u></font></pre></h1>
</div>

	
</div>
<div>
<form method = "post">
<h1>BRAND</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>IFB<input type = "checkbox" value="IFB" name=brand[]></input></td>
<td>Panasonic<input type = "checkbox" value="Panasonic" name=brand[]></input></td>
<td>LG<input type = "checkbox" value="LG" name=brand[]></input></td>
<td>Godrej<input type = "checkbox" value="Godrej" name=brand[]></input></td>
<td>Whirlpool<input type = "checkbox" value="Whirlpool" name=brand[]></input></td>
<td>Kelvinator<input type = "checkbox" value="Kelvinator" name=brand[]></input></td>
<td>Electrolux<input type = "checkbox" value="Electrolux" name=brand[]></input></td>
<td>Onida<input type = "checkbox" value="Onida" name=brand[]></input></td>
<td>Bosch<input type = "checkbox" value="Bosch" name=brand[]></input></td>
<td>Haier<input type = "checkbox" value="Haier" name=brand[]></input></td>
<td>GEM<input type = "checkbox" value="GEM" name=brand[]></input></td>


</tr>
</table>
</font>

<h1>PRICE(in rupees)</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>5000 - 10000<input type = "checkbox" value="5000" name=price[]></input></td>
<td>10000 - 15000<input type = "checkbox" value="10000" name=price[]></input></td>
<td>15000 - 25000<input type = "checkbox" value="15000" name=price[]></input></td>
<td>25000 - 40000<input type = "checkbox" value="25000" name=price[]></input></td>
</tr>
</table>
</font>
<h1>Function Type</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>Semi Automatic Top Load<input type = "checkbox" value="Semi Automatic Top Load" name=type[]></input></td>
<td>Fully Automatic Top Load<input type = "checkbox" value="Fully Automatic Top Load" name=type[]></input></td>
<td>Fully Automatic Front Load<input type = "checkbox" value="Fully Automatic Front Load" name=[]></input></td>


</tr>
</table>
</font>

<h1>Washing Capacity (in Kg)</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>5 - 6<input type = "checkbox" value="5" name=capacity[]></input></td>
<td>6 - 7<input type = "checkbox" value="6" name=capacity[]></input></td>
<td>7 - 8<input type = "checkbox" value="7" name=capacity[]></input></td>

</tr>
</table>
</font>
<h1>Warranty (in months)</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>12 - 36<input type = "checkbox" value="12" name=warranty[]></input></td>
<td>36 - 60<input type = "checkbox" value="48 - 60" name=warranty[]></input></td>
</tr>
</table>
</font>
<input type = "submit" value = "GET ME RESULTS" style="width:200px;height:50px" ></input>
</form>
</div>

</body>
</html>
