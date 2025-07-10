<?php
	session_start();
	include_once('connection.php');
 
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$year = $_POST['year'];

		$sql = "UPDATE `tbl_academicyear` SET `year`='$year' WHERE `id` = '$id'";

		// $sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', address = '$address' WHERE id = '$id'";
 
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Academic Year updated successfully';
		}
		///////////////
 
		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
 
		else{
			$_SESSION['error'] = 'Something went wrong in updating Academic Year';
		}
	}
	else{
		$_SESSION['error'] = 'Select Academic Year to edit first';
	}
 
	header('location: index.php');
 
?>