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
	    	if(isset($_SESSION["page_name"])){
	    		require_once $_SESSION["page_name"];
	    	}
	    	echo "</div>";
	    }else{
	    	require_once "homepage.php";
	    }
    ?>


    <!-- Footer
    ================================================== -->
    <?php require_once 'shared/footer.php' ?>
    <?php require_once 'shared/bottom_assets.php' ?>
  </body>
  </html>
