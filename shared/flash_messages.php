<?php
if(isset($_SESSION['flash'])){
	?>
	<div class="container">
		<div class="alert <?php echo $_SESSION['flash_type'] ?>"  style="margin-top:10px">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <?php echo $_SESSION['flash'] ?>
		</div>
	</div>

<?php
	$_SESSION['flash'] = null;
	$_SESSION['flash_type'] = null;
	}
?>