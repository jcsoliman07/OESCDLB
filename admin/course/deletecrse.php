<?php
	session_start();
	include_once('db_conn.php');
 
	if(isset($_GET['id'])){
		$sql = "DELETE FROM tbl_course WHERE crse_id = '".$_GET['id']."'";
 
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Course deleted successfully';
		}
		////////////////
 
		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
 
		else{
			$_SESSION['error'] = 'Something went wrong in deleting Course';
		}
	}
	else{
		$_SESSION['error'] = 'Select Course to delete first';
	}
 
	header('location: course.php');
?>