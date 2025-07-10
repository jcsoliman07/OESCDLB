<?php
	session_start();
	include_once('connection.php');
 
	if(isset($_POST['add'])){

		$subj_code = $_POST['subj_code'];
		$subj_description = $_POST['subj_description'];
		$subj_course = $_POST['subj_course'];
		$subj_unit = $_POST['subj_unit'];
		$subj_prereq = $_POST['subj_prereq'];
		$subj_year = $_POST['subj_year'];
		$subj_semester = $_POST['subj_semester'];

		$sql = "INSERT INTO `tbl_subjects`(`subj_code`, `subj_description`, `subj_unit`, `subj_prereq`, `subj_course`, `subj_semester`, `subj_year`) VALUES ('$subj_code','$subj_description','$subj_unit','$subj_prereq','$subj_course','$subj_semester','$subj_year')";
 
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Subject added successfully';
		}
		///////////////
 
		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
 
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
 
	header('location: index.php');
?>