<?php
	define("PROJECT_NAME", "MY SHOP");

	function pagename($page){
		if(isset($page)){
			require_once $page;
		}
	}
?>