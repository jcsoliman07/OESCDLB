<?php

if (isset($_POST['submit'])) {
	include 'db_conn.php';

	$checked_array = $_POST['id'];

	foreach($_POST['retrieve_id'] as $key => $value){

	if (in_array($_POST['retrieve_id'][$key],$checked_array)) {
		$retrieve_id = $_POST['retrieve_id'][$key];
		$instructor_id = $_POST['instructor_id'][$key];
		$subj_code = $_POST['subj_code'][$key];
		$academic_year = $_POST['academic_year'][$key];
		$subj_description = $_POST['subj_description'][$key];
		$subj_unit = $_POST['subj_unit'][$key];
		$subj_id = $_POST['subj_id'][$key];
		

		$query5 = "INSERT INTO `tbl_instructor_subjects`(`instructor_id`, `academic_year`, `subj_id`, `subj_code`, `subj_description`, `subj_unit`) VALUES ('$instructor_id','$academic_year', '$subj_id', '$subj_code', '$subj_description', '$subj_unit')";

		$result5 = mysqli_query($conn,$query5);

			if ($result5) 
			{
				$query4 = "DELETE FROM tbl_instructor_history WHERE instructor_id = '$instructor_id' AND subj_code = '$subj_code'";
				$result4 = mysqli_query($conn, $query4);

				if ($result4) {
					echo "<script type='text/javascript'>alert('Successfully Added!');window.location.href='retrieve.php'</script>";
				}else{
					echo "<script type='text/javascript'>alert('Unsuccessfully Added!');window.location.href='retrieve.php'</script>";
				}
			}
			else
			{
				echo "<script type='text/javascript'>alert('Error!');window.location.href='retrieve.php'</script>";
			}
		}
	}
}
?>

