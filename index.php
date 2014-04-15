<?php 
	require_once('constant.php');
	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo PROJECT_NAME ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <?php require_once 'shared/header.php' ?>
  <body data-spy="scroll" data-target=".bs-docs-sidebar">

   	<?php require_once "shared/navbar.php" ?>

   	<?php

	    if(isset($_SESSION["username"])){
	    	require_once "shared/flash_messages.php";
	    	echo "<div class='container'>";
	    	

	    	echo "</div>";
	    }else{
	    	require_once "homepage.php";
	    }
    ?>


    <!-- Footer
    ================================================== -->
    <?php require_once 'shared/footer.php' ?>
    <?php require_once 'shared/bottom_assets.php' ?>

 <address>
  <strong>Twitter, Inc.</strong><br>
  Cijerah-Cimahi<br>
  Jl. cikutra No. 32<br>
  <abbr title="Phone">P:</abbr> +6289686403851
</address>

<address>
  <strong>Febri Ramadhan</strong><br>
  <a href="mailto:#">febbry17@gmail.com</a>
</address>
  </body>
  </html>
