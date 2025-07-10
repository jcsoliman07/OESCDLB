<?php
include '../db_conn.php';
	if (isset($_POST['Save'])) {
		
		$checked_array = $_POST['subj_id'];
		// $checked_array1 = $_POST['subj_id1'];

		foreach ($_POST['subj_code'] as $key => $value) {

			if (in_array($_POST['subj_code'][$key], $checked_array)) {

				$subj_code = $_POST['subj_code'][$key];
				$student_id = $_POST['student_id'][$key];
				$subj_grade = $_POST['subj_grade'][$key];
				$subj_description = $_POST['subj_description'][$key];
				$subj_course = $_POST['subj_course'][$key];
				$subj_unit = $_POST['subj_unit'][$key];
				$subj_sem = $_POST['subj_sem'][$key];
				$subj_year = $_POST['subj_year'][$key];
				$subj_prereq = $_POST['subj_prereq'][$key];
				$academic_year = $_POST['academic_year'][$key];
				$prelim = $_POST['prelim'][$key];
				$midterm = $_POST['midterm'][$key];
				$prefi = $_POST['prefi'][$key];
				$final = $_POST['final'][$key];
				$lname = $_POST['lname'][$key];
				$mname = $_POST['mname'][$key];
				$fname = $_POST['fname'][$key];
				

				$query = "INSERT INTO `tbl_grading`(`academic_year`,`subj_grade`, `student_id`, `lname`, `mname`, `fname`, `subj_code`, `subj_description`, `subj_course`, `subj_year`, `subj_sem`, `subj_unit`, `subj_prereq`, `prelim`, `midterm`, `prefi`, `finals`) VALUES ('$academic_year','$subj_grade','$student_id', '$lname', '$mname', '$fname', '$subj_code', '$subj_description', '$subj_course', '$subj_year', '$subj_sem', '$subj_unit', '$subj_prereq', '$prelim', '$midterm', '$prefi', '$final')";

				$result = mysqli_query($conn,$query);

				if ($result) {
					$query1 = "DELETE FROM tbl_student_subjects WHERE student_id='$student_id' AND subj_code ='$subj_code'";
					$result1 = mysqli_query($conn, $query1);
					if ($result1) {
						echo"<script type='text/javascript'>alert('Successfully Archive!');window.location.href='index.php'</script>";
					}else{
						echo"<script type='text/javascript'>alert('Unsuccessfully Archive!');window.location.href='index.php'</script>";
					}
					
				}
				else{
					echo"<script type='text/javascript'>alert('Error!');window.location.href='index.php'</script>";
				}
			}
		}
	}

?>