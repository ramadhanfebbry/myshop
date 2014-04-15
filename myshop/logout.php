<?php
session_start();
session_destroy();
session_start();

$_SESSION["flash"] = "Logout Berhasil";
$_SESSION["flash_type"] = "flash-info";

header("Location: index.php");
?>