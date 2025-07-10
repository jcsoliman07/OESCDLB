<?php
	session_start();

	unset($_SESSION['username']);
	unset($_SESSION['id']);
	unset($_SESSION['student_id']);
	header("location: ../../mainlogin.php");
	die();

?>