<?php

$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "recommendation_System";
$db = mysqli_connect ($mysql_hostname, $mysql_username, $mysql_password,$mysql_database )or die("Something is wrong...");

//mysql_select_db_($mysql_database, $db) or die("cant find database");
?>