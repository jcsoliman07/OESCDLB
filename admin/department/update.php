<?php
	session_start();
	include_once('db_conn.php');
 
	if(isset($_POST['edit'])){
		$department = $_POST['department'];
		$Id = $_POST['id'];

		$sql = "UPDATE tbl_department SET department = '$department' WHERE `id`='$Id'";

		// $sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', address = '$address' WHERE id = '$id'";
 
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Department updated successfully';
		}
		///////////////
 
		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
 
		else{
			$_SESSION['error'] = 'Something went wrong in updating Department';
		}
	}
	else{
		$_SESSION['error'] = 'Select Department to edit first';
	}
 
	header('location: department.php');
 
?>

