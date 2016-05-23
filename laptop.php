<!DOCTYPE html>
<html>
<head>
	<title>LAPTOPS</title>
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

echo  "<h3><font color = \"blue\">  BRAND  |  MODEL   |  PRICE |  OPERATING SYSTEM  |  COLOR  |  PROCESSOR  |  SCREEN SIZE  |  RAM  |  HDD  |  SYSTEM ARCHITECTURE  |  GRAPHICS  |  WARRANTY \n</font></h3>";
foreach($_POST['brand'] as $val){
 $id_c=$val;
 //echo("VALUE : $val");
 	$brandquery ="SELECT * from laptops where brand = '$val' ";

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
//*******************************************************************************************************
$price = count(@$_POST['price']);

if((gettype($_POST['price'])=="array") && $price > 0){
	echo  "<h1>RESULTS(based on Price)  \n</h1>";

echo  "<h3><font color = \"blue\">  BRAND  |  MODEL   |  PRICE |  OPERATING SYSTEM  |  COLOR  |  PROCESSOR  |  SCREEN SIZE  |  RAM  |  HDD  |  SYSTEM ARCHITECTURE  |  GRAPHICS  |  WARRANTY \n</font></h3>";
foreach($_POST['price'] as $val){
 $id_c=$val;
 $valUpper = $val + 10000;
 //echo("VALUE : $val");
 	$pricequery ="SELECT * from laptops where price > '$val' and price < '$valUpper' ";

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
//*********************************************************************************************

?>
<body>
<input type = "button" value = "BACK TO HOME PAGE" style="width:200px;height:50px" onclick = window.location="home.php"></input>
<div align = "center" style="float : right margin: 0 10cm 0 0 ">
<img src="logo1.gif">
<h1><pre><font color = "#3498DB" size="12"><u>REACT </u></font ><font color = "blue" size="12"><u> RECOMMENDATION </u></font><font color = "#3498DB" size="12"><u> SYSTEMS </u></font></pre></h1>
</div><div>
<form method = "post">
<h1>BRAND</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>HP<input type = "checkbox" value="HP" name="brand[]"></input></td>
<td>Lenovo<input type = "checkbox" value="Lenovo" name="brand[]"></input></td>
<td>Dell<input type = "checkbox" value="Dell" name="brand[]"></input></td>
<td>Apple<input type = "checkbox" value="Apple" name="brand[]"></input></td>
<td>Asus<input type = "checkbox" value="Asus" name="brand[]"></input></td>
<td>Acer<input type = "checkbox" value="Acer" name="brand[]"></input></td>
<td>Sony<input type = "checkbox" value="Sony" name="brand[]"></input></td>
</tr>
</table>
</font>

<h1>PRICE(in rupees)</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>20000 - 30000<input type = "checkbox" value="20000" name="price[]"></input></td>
<td>30000 - 40000<input type = "checkbox" value="30000" name="price[]"></input></td>
<td>30000 - 40000<input type = "checkbox" value="30000" name="price[]"></input></td>
<td>30000 - 40000<input type = "checkbox" value="30000" name="price[]"></input></td>
<td>40000 - 50000<input type = "checkbox" value="40000" name="price[]"></input></td>
<td>50000 - 80000<input type = "checkbox" value="50000" name="price[]"></input></td>
</tr>
</table>
</font>
<h1>Operating System</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>Free DOS<input type = "checkbox" value ="Free DOS" name = "os[]"></input></td>
<td>Windows 10 <input type = "checkbox" value ="Windows 10" name = "os[]"></input></td>
<td>Windows 8.1 <input type = "checkbox" value ="Windows 8.1" name = "os[]"></input></td>
<td>Mac OS X Yosemite <input type = "checkbox" value ="Mac OS X Yosemite" name = "os[]"></input></td>

</tr>
</table>
</font>

<h1>Processor</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>Intel Core i3<input type = "checkbox" value ="Intel Core i3" name = "processor[]"></input></td>
<td>Intel Core i5<input type = "checkbox" value ="Intel Core i5" name = "processor[]"></input></td>
<td>Intel Core i7<input type = "checkbox" value ="Intel Core i7" name = "processor[]"></input></td>

</tr>
</table>
</font>
<h1>RAM (in GB)</h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>4<input type = "checkbox" value ="4" name = "ram[]"></input></td>
<td>8<input type = "checkbox" value ="8" name = "ram[]"></input></td>
<td>16<input type = "checkbox" value ="16" name = "ram[]"></input></td>

</tr>
</table>
</font>

<h1>Graphics </h1>
<font size="5">
<table cellspacing = "20px">
<tr>
<td>Intel HD Graphics<input type = "checkbox" value ="8" name = "gpu[]"></input></td>
<td>2 GB   <input type = "checkbox" value ="16" name = "gpu[]"></input></td>
<td>4 GB<input type = "checkbox" value ="32" name = "gpu[]"></input></td>
</tr>
</table>
</font>


<input type = "submit" value = "GET ME RESULTS" style="width:200px;height:50px" name="GET ME RESULTS" ></input>
</form>
</div>

</body>
</html>
