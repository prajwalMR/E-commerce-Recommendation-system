<!DOCTYPE html>
<html>
<head>
	<title>CAR</title>
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


$car = count(@$_POST['brand']);


if((gettype($_POST['brand'])=="array") && $car > 0){
	echo  "<h1>RESULTS(based on brand) \n</h1>";

echo  "<h3>NAME  |  BRAND  |  MODEL  |  MILEAGE  | PRICE | FUELTYPE \n</h3>";
foreach($_POST['brand'] as $val){
 $id_c=$val;
 //echo("VALUE : $val");
 	$carquery ="SELECT * from cars where Brand = '$val' ";

 $carresult = $db->query($carquery);
 			$numRow = mysqli_num_rows($carresult);
 			
			$row = $carresult->fetch_all();
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
//********************************************************************************

$fuel = count(@$_POST['fuel']);

if((gettype($_POST['fuel'])=="array") && $fuel > 0){
	echo  "<h1>RESULTS(based on Fuel Type)  \n</h1>";

echo  "<h3>NAME  |  BRAND  |  MODEL  |  MILEAGE  | PRICE | FUELTYPE \n</h3>";
foreach($_POST['fuel'] as $val){
 $id_c=$val;
 //echo("VALUE : $val");
 	$fuelquery ="SELECT * from cars where FuelType = '$val' ";

 $fuelresult = $db->query($fuelquery);
 			$numRow = mysqli_num_rows($fuelresult);
 			
			$row = $fuelresult->fetch_all();
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

//*************************************************************************************

$price = count(@$_POST['price']);

if((gettype($_POST['price'])=="array") && $price > 0){
	echo  "<h1>RESULTS(based on Price)  \n</h1>";

echo  "<h3>NAME  |  BRAND  |  MODEL  |  MILEAGE  | PRICE | FUELTYPE \n</h3>";
foreach($_POST['price'] as $val){
 $id_c=$val;
 $valUpper = $val + .5;
 //echo("VALUE : $val");
 	$pricequery ="SELECT * from cars where Price > '$val' and Price < '$valUpper' ";

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
//**********************************************************************************************

$Mileage = count(@$_POST['Mileage']);

if((gettype($_POST['Mileage'])=="array") && $Mileage > 0){
	echo  "<h1>RESULTS(based on Mileage)  \n</h1>";

echo  "<h3>NAME  |  BRAND  |  MODEL  |  MILEAGE  | PRICE | FUELTYPE \n</h3>";
foreach($_POST['Mileage'] as $val){
 $id_c=$val;
 $valUpper = $val + 5;
 //echo("VALUE : $val");
 	$Mileagequery ="SELECT * from cars where Mileage > '$val' and Mileage < '$valUpper' ";

 $Mileageresult = $db->query($Mileagequery);
 			$numRow = mysqli_num_rows($Mileageresult);
 			
			$row = $Mileageresult->fetch_all();
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
//*************************************************************************************
?>

<body>
<h1 align = "center"><font size = "10" color = "#FF5733"><u>CARS</u></font></h1>
<input type = "button" value = "BACK TO HOME PAGE" style="width:200px;height:50px" onclick = window.location="home.php"></input>
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
<td>Hyundai<input type = "checkbox" name = "brand[]" value = "Hyundai"></input></td>
<td>Honda<input type = "checkbox" name = "brand[]" value = "Honda"></input></td>
<td>Ford<input type = "checkbox" name = "brand[]" value = "Ford"></input></td>
<td>Nissan<input type = "checkbox" name = "brand[]" value = "Nissan"></input></td>
<td>Volkswagen<input type = "checkbox" name = "brand[]" value = "Volkswagen"></input></td>
<td>Chevrolet<input type = "checkbox" name = "brand[]" value = "Chevrolet"></input></td>
<td>TATA Motors<input type = "checkbox" name = "brand[]" value = "TATA Motors"></input></td>
<td>Maruthi<input type = "checkbox" name = "brand[]" value = "Maruthi"></input></td>
</tr>
</table>
</font>

<h1>MILEAGE(kmpl)</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>15-20<input type = "checkbox" name = "Mileage[]" value = "15"></input></td>
<td>20-25<input type = "checkbox" name = "Mileage[]" value = "20"></input></td>
<td>25-30<input type = "checkbox" name = "Mileage[]" value = "25"></input></td>
<td>30-35<input type = "checkbox" name = "Mileage[]" value = "30"></input></td>
<td>35-40<input type = "checkbox" name = "Mileage[]" value = "35"></input></td>
</tr>
</table>
</font>


<h1>PRICE(in lakhs)</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>2 - 2.5<input type = "checkbox" name = "price[]" value = "2"></input></td>
<td>2.5 - 3<input type = "checkbox" name = "price[]" value = "2.5"></input></td>
<td>3 - 3.5<input type = "checkbox" name = "price[]" value = "3"></input></td>
<td>3.5 - 4<input type = "checkbox" name = "price[]" value = "3.5"></input></td>
<td>4 - 4.5<input type = "checkbox" name = "price[]" value = "4"></input></td>
<td>4.5 - 5<input type = "checkbox" name = "price[]" value = "4.5"></input></td>
<td>5 - 5.5<input type = "checkbox" name = "price[]" value = "5"></input></td>
</tr>
</table>
</font>

<h1>FULE TYPE</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>PETROL<input type = "checkbox" name = "fuel[]" value = "P"></input></td>
<td>DIESEL<input type = "checkbox" name = "fuel[]" value = "d"></input></td>
<td>CNG<input type = "checkbox" name = "fuel[]" value = "c"></input></td>
</tr>
</table>
</font>
<input type = "submit" value = "GET ME RESULTS" style="width:200px;height:50px" ></input>

</form>
</div>

</body>
</html>
