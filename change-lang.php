<?php
	session_start();
	if($_POST['lang']=='ru'){
		$_SESSION['lang'] = 'ru';
	}
	else{
		$_SESSION['lang'] = 'uz';
	}
?>