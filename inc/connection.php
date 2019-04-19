<?php

$host = "localhost";
$db_uname = "root";
$db_pass = "";
$db_name = "regg";

$conn= mysqli_connect($host,$db_uname,$db_pass,$db_name);

if (mysqli_connect_errno()){
	echo "error!".mysqli_connect_errno();
  }
session_start();
?>