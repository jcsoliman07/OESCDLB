<?php
	session_start();

	unset($_SESSION['username']);
	unset($_SESSION['id']);
	unset($_SESSION['login_id']);
	header("location: ../../mainlogin.php");
	die();

?>