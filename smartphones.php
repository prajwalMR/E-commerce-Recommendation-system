<!DOCTYPE html>
<html>
<head>
	<title>SMART PHONES</title>
	<style type="text/css">
input[type=checkbox] {width:20px; height:20px;}
	</style>
</head>
<?php
$mysql_hostname = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "recommendation_System";
	$db = mysqli_connect ($mysql_hostname, $mysql_username, $mysql_password,$mysql_database )or die("Something is wrong...");


$brand = count(@$_POST['phone']);


if((gettype($_POST['phone'])=="array") && $brand > 0){
	echo  "<h1>RESULTS(based on brand) \n</h1>";

echo  "<h3>  BRAND  |  MODEL NAME  | PRICE | OPERATING SYSTEM | REAR CAMERA | FRONT CAMERA | RAM | ROM | WARRANTY \n</h3>";
foreach($_POST['phone'] as $val){
 $id_c=$val;
 //echo("VALUE : $val");
 	$brandquery ="SELECT * from smartphones where brand = '$val' ";

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
			/*$name = $Row['Name'];
			$brand = $Row['Brand'];
			$mileage = $Row['Mileage'];
			$price = $Row['Price'];
			$fueltype = $Row['Fuel Type'];

			echo nl2br ("NAME : $name |  BRAND : $brand | MILEAGE : $mileage | PRICE : $price | FUEL : $fueltype \n");*/
}
echo  "</font></h5>";
			}
			

			//echo nl2br ("NAME : $name |  BRAND : $brand | MILEAGE : $mileage | PRICE : $price | FUEL : $fueltype \n");
}
//***********************************************************************************************
$price = count(@$_POST['price']);


if((gettype($_POST['price'])=="array") && $price  > 0){
	echo  "<h1>RESULTS(based on PRICE	) \n</h1>";

echo  "<h3>  BRAND  |  MODEL NAME  | PRICE | OPERATING SYSTEM | REAR CAMERA | FRONT CAMERA | RAM | ROM | WARRANTY \n</h3>";
foreach($_POST['price'] as $val){
 $id_c=$val;
 $valUpper = $val + 5000;
 //echo("VALUE : $val");
 	$pricequery ="SELECT * from smartphones where price >'$val'  and price < $valUpper ";

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


//***********************************************************************************************

$System = count(@$_POST['os']);


if((gettype($_POST['os'])=="array") && $System > 0){
	echo  "<h1>RESULTS(based on OPERATING SYSTEM) \n</h1>";

echo  "<h3>  BRAND  |  MODEL NAME  | PRICE | OPERATING SYSTEM | REAR CAMERA | FRONT CAMERA | RAM | ROM | WARRANTY \n</h3>";
foreach($_POST['os'] as $val){
 $id_c=$val;
 //echo("VALUE : $val");
 	$Systemquery ="SELECT * from smartphones where operatingsystem = '$val' ";

 $Systemresult = $db->query($Systemquery);
 			$numRow = mysqli_num_rows($Systemresult);
 			
			$row = $Systemresult->fetch_all();
			//print_r($row);

			echo  "<font size= \"5\" color=\"red\"><h5>";
			for( $i =0; $i<$numRow ; $i++){

				$Row = $row[$i];

				foreach ($Row as $key) {
					echo nl2br ("     $key   |  ");
				}
				echo nl2br ("\n \n");
			/*$name = $Row['Name'];
			$brand = $Row['Brand'];
			$mileage = $Row['Mileage'];
			$price = $Row['Price'];
			$fueltype = $Row['Fuel Type'];

			echo nl2br ("NAME : $name |  BRAND : $brand | MILEAGE : $mileage | PRICE : $price | FUEL : $fueltype \n");*/
}
echo  "</font></h5>";
			}
			

			//echo nl2br ("NAME : $name |  BRAND : $brand | MILEAGE : $mileage | PRICE : $price | FUEL : $fueltype \n");
}
  

$ram = count(@$_POST['ram']);


if((gettype($_POST['ram'])=="array") && $ram > 0){
	echo  "<h1>RESULTS(based on brand) \n</h1>";

echo  "<h3>  BRAND  |  MODEL NAME  | PRICE | OPERATING SYSTEM | REAR CAMERA | FRONT CAMERA | RAM | ROM | WARRANTY \n</h3>";
foreach($_POST['ram'] as $val){
 $id_c=$val;
 //echo("VALUE : $val");
 	$ramquery ="SELECT * from smartphones where ram = '$val' ";

 $ramresult = $db->query($ramquery);
 			$numRow = mysqli_num_rows($ramresult);
 			
			$row = $ramresult->fetch_all();
			//print_r($row);

			echo  "<font size= \"5\" color=\"red\"><h5>";
			for( $i =0; $i<$numRow ; $i++){

				$Row = $row[$i];

				foreach ($Row as $key) {
					echo nl2br ("     $key   |  ");
				}
				echo nl2br ("\n \n");
			/*$name = $Row['Name'];
			$brand = $Row['Brand'];
			$mileage = $Row['Mileage'];
			$price = $Row['Price'];
			$fueltype = $Row['Fuel Type'];

			echo nl2br ("NAME : $name |  BRAND : $brand | MILEAGE : $mileage | PRICE : $price | FUEL : $fueltype \n");*/
}
echo  "</font></h5>";
			}
			

			//echo nl2br ("NAME : $name |  BRAND : $brand | MILEAGE : $mileage | PRICE : $price | FUEL : $fueltype \n");
}

$rom = count(@$_POST['rom']);


if((gettype($_POST['rom'])=="array") && $rom > 0){
	echo  "<h1>RESULTS(based on ROM) \n</h1>";

echo  "<h3>  BRAND  |  MODEL NAME  | PRICE | OPERATING SYSTEM | REAR CAMERA | FRONT CAMERA | RAM | ROM | WARRANTY \n</h3>";
foreach($_POST['rom'] as $val){
 $id_c=$val;
 //echo("VALUE : $val");
 	$romquery ="SELECT * from smartphones where rom = '$val' ";

 $romresult = $db->query($romquery);
 			$numRow = mysqli_num_rows($romresult);
 			
			$row = $romresult->fetch_all();
			//print_r($row);

			echo  "<font size= \"5\" color=\"red\"><h5>";
			for( $i =0; $i<$numRow ; $i++){

				$Row = $row[$i];

				foreach ($Row as $key) {
					echo nl2br ("     $key   |  ");
				}
				echo nl2br ("\n \n");
			/*$name = $Row['Name'];
			$brand = $Row['Brand'];
			$mileage = $Row['Mileage'];
			$price = $Row['Price'];
			$fueltype = $Row['Fuel Type'];

			echo nl2br ("NAME : $name |  BRAND : $brand | MILEAGE : $mileage | PRICE : $price | FUEL : $fueltype \n");*/
}
echo  "</font></h5>";
			}
			

			//echo nl2br ("NAME : $name |  BRAND : $brand | MILEAGE : $mileage | PRICE : $price | FUEL : $fueltype \n");
}




?>
<body>
<div align = "center" style="float : right margin: 0 10cm 0 0 ">
<img src="logo1.gif">
<h1><pre><font color = "#3498DB" size="12"><u>REACT </u></font ><font color = "blue" size="12"><u> RECOMMENDATION </u></font><font color = "#3498DB" size="12"><u> SYSTEMS </u></font></pre></h1>
</div>
<div>
<form method = "post">
<h1>BRAND</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>Mi<input type = "checkbox" value="Mi" name=phone[]></input></td>
<td>Motorola<input type = "checkbox" value="Motorola" name=phone[] ></input></td>
<td>Samsung<input type = "checkbox" value="Samsung" name=phone[]></input></td>
<td>Honor<input type = "checkbox" value ="Honor" name=phone[]></input></td>
<td>Microsoft<input type = "checkbox" value="Microsoft" name=phone[]></input></td>
<td>Asus<input type = "checkbox" value="Asus" name=phone[]></input></td>
<td>Nokia<input type = "checkbox" value="Nokia" name=phone[]></input></td>
<td>LeEco<input type = "checkbox" value="LeEco" name=phone[]></input></td>
<td>Lenovo<input type = "checkbox" value="Lenovo" name=phone[]></input></td>
<td>Micromax<input type = "checkbox" value="Micromax" name=phone[]></input></td>
<td>Apple<input type = "checkbox" value="Apple" name=phone[]></input></td>
<td>HTC<input type = "checkbox" value="HTC" name=phone[]></input></td>

</tr>
</table>
</font>

<h1>PRICE(in rupees)</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>6000 - 10000<input type = "checkbox" value="5000" name=price[]></input></td>
<td>10000 - 15000<input type = "checkbox" value="10000" name=price[]></input></td>
<td>15000 - 20000<input type = "checkbox" value="15000" name=price[]></input></td>
<td>20000 - 30000<input type = "checkbox" value="20000" name=price[]></input></td>
<td>30000 - 60000<input type = "checkbox" value="30000" name=price[] ></input></td>
</tr>
</table>
</font>


<h1>Operating System</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>Android<input type = "checkbox" value="Android" name=os[]></input></td>
<td>iOS<input type = "checkbox" value="iOS V9" name=os[]></input></td>
<td>Windows<input type = "checkbox" value="Windows" name=os[]></input></td>
</tr>
</table>
</font>

<h1>RAM (in GB)</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>1<input type = "checkbox" value="1 GB" name=ram[]></input></td>
<td>1.5<input type = "checkbox" value="1.5 GB" name=ram[]></input></td>
<td>2<input type = "checkbox" value="2 GB" name=ram[]></input></td>
<td>3<input type = "checkbox" value="3 GB" name=ram[]></input></td>
<td>4<input type = "checkbox" value="4 GB" name=ram[]></input></td>
</tr>
</table>
</font>

<h1>ROM (in GB)</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>8<input type = "checkbox" value="8 GB" name=rom[]></input></td>
<td>16<input type = "checkbox" value="16 GB"  name=rom[]></input></td>
<td>32<input type = "checkbox" value="32 GB"  name=rom[]></input></td>
<td>64<input type = "checkbox" value="64 GB"  name=rom[]></input></td>
</tr>
</table>
</font>
<input type = "submit" value = "GET ME RESULTS" style="width:200px;height:50px" value="GET ME RESULTS"></input>
</form>
</div>
</body>
</html>
