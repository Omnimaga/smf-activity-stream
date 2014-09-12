<?php
	if(!defined('SMF')){
		die('Hacking attempt...');
	}
	function youraction_add_hook(&$actionArray){
		$actionArray['youraction'] = array('YourAction.php', 'YourActionMain');
	}
?>