<?php
include("connection.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form 
	$username=addslashes($_POST['username']); 
	$mypassword=addslashes($_POST['password']); 

	$sql="SELECT * FROM user WHERE username='$username' and password='$mypassword'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1)
	{
		session_register("username");
		$_SESSION['username'] = $username;
		$_SESSION["flash"] = "Login Berhasil!";
		$_SESSION["flash_type"] = "alert-success";
		
	}
	else 
	{
		$_SESSION["flash"] = "Username atau password tidak cocok!";
		$_SESSION["flash_type"] = "alert-danger";
		
	}

	header("location: index.php");
}
?>