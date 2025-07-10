<?php
include 'db_conn.php';
	if (isset($_POST['Save'])) {
		
		$checked_array = $_POST['id'];

		foreach ($_POST['ins_id'] as $key => $value) {

			if (in_array($_POST['ins_id'][$key], $checked_array)) {

				$ins_id = $_POST['ins_id'][$key];
				$subj_code = $_POST['subj_code'][$key];
				$subj_description = $_POST['subj_description'][$key];
				$subj_unit = $_POST['subj_unit'][$key];
				$subj_id = $_POST['subj_id'][$key];
				$academic_year = $_POST['academic_year'][$key];

				$query = "INSERT INTO `tbl_instructor_history`(`instructor_id`, `academic_year`, `subj_id`, `subj_code`, `subj_description`, `subj_unit`) VALUES ('$ins_id', 'academic_year', '$subj_id', '$subj_code', '$subj_description', '$subj_unit')";

				$result = mysqli_query($conn,$query);

				if ($result) {
					$query1 = "DELETE FROM tbl_instructor_subjects WHERE instructor_id='$ins_id'";
					$result1 = mysqli_query($conn, $query1);
					if ($result1) {
						echo "<script type='text/javascript'>alert('Successfully Archive!');window.location.href='instructor.php'</script>";
					}else{
						echo "<script type='text/javascript'>alert('Unsccessfully! Please try again!');window.location.href='instructor.php'</script>";
					}
					
				}
				else{
					echo"<script type='text/javascript'>alert('Unknown Error!');window.location.href='instructor.php'</script>";
				}
			}
			// else{
				
			// 	$subj_code = $_POST['subj_code'][$key];
			// 	$subj_description = $_POST['subj_description'][$key];
			// 	$subj_course = $_POST['subj_course'][$key];
			// 	$subj_unit = $_POST['subj_unit'][$key];
			// 	$subj_sem = $_POST['subj_sem'][$key];
			// 	$subj_year = $_POST['subj_year'][$key];
			// 	$subj_prereq = $_POST['subj_prereq'][$key];

			// 	$query = "INSERT INTO `tbl_history`(`subj_code`, `subj_description`, `subj_course`,`subj_unit`, , `subj_prereq`, `subj_sem`, `subj_year`) VALUES ('$subj_code', '$subj_description', '$subj_course', '$subj_unit',  '$subj_prereq', '$subj_year', '$subj_sem')";

			// 	$result = mysqli_query($conn,$query);

			// 	if ($result) {
			// 		$query1 = "DELETE FROM tbl_instructor_subjects WHERE subj_code='$subj_code'";
			// 		$result1 = mysqli_query($conn, $query1);
			// 		if ($result1) {
			// 			echo"<script type='text/javascript'>alert('Successfully Archive!');window.location.href='instructor.php'</script>";
			// 		}else{
			// 			echo"<script type='text/javascript'>alert('Unsuccessfully Archive!');window.location.href='instructor.php'</script>";
			// 		}
			// 	}
			// 	else{
			// 		echo"<script type='text/javascript'>alert('Unsuccessfully Archive!');window.location.href='instructor.php'</script>";
			// 	}
			// }
		}
	}

?>