<?php
	session_start();
	include_once('db_conn.php');
 
	if(isset($_GET['id'])){
		$sql = "DELETE FROM tbl_department WHERE id = '".$_GET['id']."'";
 
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Department deleted successfully';
		}
		////////////////
 
		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
 
		else{
			$_SESSION['error'] = 'Something went wrong in deleting Department';
		}
	}
	else{
		$_SESSION['error'] = 'Select Department to delete first';
	}
 
	header('location: department.php');
?>