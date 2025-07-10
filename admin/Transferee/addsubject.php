<?php
include 'connection.php';
	if (isset($_POST['Save'])) {
		
		$checked_array = $_POST['subj_id'];
		// $checked_array1 = $_POST['subj_id1'];

		foreach ($_POST['subj_code'] as $key => $value) {

			if (in_array($_POST['subj_code'][$key], $checked_array)) {
				// echo $_POST['subj_code'][$key];
				// echo "<br>";
				// echo $_POST['subj_grade'][$key];
				// echo $_POST['subj_description'][$key];
				// echo $_POST['subj_course'][$key];
				// echo $_POST['subj_unit'][$key];
				// echo $_POST['subj_sem'][$key];
				// echo $_POST['subj_year'][$key];
				// echo $_POST['student_id'][$key];

				$subj_code = $_POST['subj_code'][$key];
				$subj_grade = $_POST['subj_grade'][$key];
				$subj_description = $_POST['subj_description'][$key];
				$subj_course = $_POST['subj_course'][$key];
				$subj_unit = $_POST['subj_unit'][$key];
				$subj_sem = $_POST['subj_sem'][$key];
				$subj_year = $_POST['subj_year'][$key];
				$subj_prereq = $_POST['subj_prereq'][$key];
				$student_id = $_POST['student_id'][$key];

				$query = "INSERT INTO `tbl_grading`(`subj_grade`, `student_id`, `subj_code`, `subj_description`, `subj_course`, `subj_year`, `subj_sem`, `subj_unit`, `subj_prereq`) VALUES ('$subj_grade','$student_id', '$subj_code', '$subj_description', '$subj_course', '$subj_year', '$subj_sem', '$subj_unit', '$subj_prereq')";

				$result = mysqli_query($conn,$query);

				if ($result) {
					// header("Location:index.php?error=Unsuccessfully!");
					echo "<script type='text/javascript'>alert('Successfully Added!');window.location.href='update.php'</script>";
				}
				else{
					echo "<script type='text/javascript'>alert('Unsuccessfully Added!');window.location.href='update.php'</script>";
					// header("Location:index.php?error=Unsuccessfull!");
				}
			}
		}
	}	
?>