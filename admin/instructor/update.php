<?php
	session_start();
	include_once('db_conn.php');
 
	if(isset($_POST['edit'])){
		$ins_id = $_POST['id'];
		$ins_name = $_POST['ins_name'];
		$ins_description = $_POST['ins_description'];

		$sql = "UPDATE `tbl_instructor` SET `ins_name` = '$ins_name', `ins_description` = '$ins_description'  WHERE `ins_id`='$ins_id'";

		$result = mysqli_query($conn, $sql);

		if ($result) {
			$_SESSION['success'] = 'Instructor updated successfully';
			header("Location:instructor.php");
		}else{
			$_SESSION['error'] = 'Something went wrong in updating Instructor';
			header("Location:instructor.php");
		}
	}
?>

