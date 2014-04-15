<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "myshop";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
or die("Connection to mysql failed");
mysql_select_db($mysql_database, $bd) or die("Connection to database failed");
?>