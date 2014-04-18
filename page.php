<?php 
	require_once('constant.php');
	session_start();
  if(isset($_SESSION["username"])){
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

	    	require_once "shared/flash_messages.php";
	    	echo "<div class='container'>";
        $page_name = $_GET["page_name"]; //listbarang
        if(isset($page_name)){
          require "resources/$page_name.php";  
        }
	    	
	    	echo "</div>";
	    
    ?>


    <!-- Footer
    ================================================== -->
    <?php require_once 'shared/footer.php' ?>
    <?php require_once 'shared/bottom_assets.php' ?>
  </body>
  </html>
<?php
}else{
  header("location:index.php");
}