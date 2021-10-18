<?php

$db_user="root";
$db_pass="";
$db_name="medi_db";
$host="localhost";
$domain="http://localhost/medical_shop/";
date_default_timezone_set("Asia/Kolkata");
 $conn=mysqli_connect($host,$db_user,$db_pass,$db_name) or die("Connection Failed");

?>