<?php
	session_start();
	include_once('db_conn.php');
 
	if(isset($_POST['edit'])){
		$crse_depart = $_POST['crse_depart'];
		$crse_major = $_POST['crse_major'];
		$crse_description = $_POST['crse_description'];
		$crse_department = $_POST['crse_department'];
		$Id = $_POST['id'];

		$sql = "UPDATE tbl_course SET crse_major = '$crse_major', crse_description='$crse_description', crse_department ='$crse_department' WHERE `crse_id`='$Id'";

		// $sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', address = '$address' WHERE id = '$id'";
 
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Course updated successfully';
		}
		///////////////
 
		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
 
		else{
			$_SESSION['error'] = 'Something went wrong in updating Course';
		}
	}
	else{
		$_SESSION['error'] = 'Select Course to edit first';
	}
 
	header('location: course.php');
 
?>

