<?php
	session_start();
	include_once('connection.php');
 
	if(isset($_POST['edit'])){
		$subj_id = $_POST['id'];
		$subj_code = $_POST['subj_code'];
		$subj_description = $_POST['subj_description'];
		$subj_course = $_POST['subj_course'];
		$subj_unit = $_POST['subj_unit'];
		$subj_prereq = $_POST['subj_prereq'];
		$subj_year = $_POST['subj_year'];
		$subj_semester = $_POST['subj_semester'];

		$sql = "UPDATE `tbl_subjects` SET `subj_code`='$subj_code',`subj_description`='$subj_description',`subj_unit`='$subj_unit',`subj_prereq`='$subj_prereq',`subj_course`='$subj_course',`subj_semester`='$subj_semester',`subj_year`='$subj_year' WHERE `subj_id` = '$subj_id'";

		// $sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', address = '$address' WHERE id = '$id'";
 
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Subject updated successfully';
		}
		///////////////
 
		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
 
		else{
			$_SESSION['error'] = 'Something went wrong in updating Subject';
		}
	}
	else{
		$_SESSION['error'] = 'Select Subject to edit first';
	}
 
	header('location: index.php');
 
?>