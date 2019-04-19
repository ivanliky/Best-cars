<?php

$host = "localhost";
$db_uname = "root";
$db_pass = "";
$db_name = "news_comments";

$conn= mysqli_connect($host,$db_uname,$db_pass,$db_name);

if (!$conn){
	echo "error!".mysqli_connect_errno();
  }

?>