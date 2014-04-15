<?php
	define("PROJECT_NAME", "MY SHOP");
	define("PROJECT_DESCRIPTION", "MY SHOP description");
	

	function pagename($page){
		if(isset($page)){
			require_once $page;
		}
	}
?>