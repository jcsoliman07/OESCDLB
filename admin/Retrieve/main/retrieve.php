<?php

if (isset($_POST['submit'])) {
	include 'connection.php';

	$checked_array = $_POST['id'];

	foreach($_POST['retrieve_id'] as $key => $value){

	if (in_array($_POST['retrieve_id'][$key],$checked_array)) {
		$retrieve_id = $_POST['retrieve_id'][$key];
		$student_id = $_POST['student_id'][$key];
		$lname = $_POST['lname'][$key];
		$fname = $_POST['fname'][$key];
		$mname = $_POST['mname'][$key];
		$subj_course = $_POST['subj_course'][$key];
		$subj_code = $_POST['subj_code'][$key];
		$subj_year = $_POST['subj_year'][$key];
		$subj_sem = $_POST['subj_sem'][$key];
		$academic_year = $_POST['academic_year'][$key];
		$subj_description = $_POST['subj_description'][$key];
		$subj_unit = $_POST['subj_unit'][$key];
		$subj_prereq = $_POST['subj_prereq'][$key];
		$prelim = $_POST['prelim'][$key];
		$midterm = $_POST['midterm'][$key];
		$prefi = $_POST['prefi'][$key];
		$finals = $_POST['finals'][$key];
		$subj_grade = $_POST['subj_grade'][$key];
		

		$query5 = "INSERT INTO `tbl_retrieved`(`academic_year`, `subj_grade`, `student_id`, `lname`, `mname`, `fname`, `subj_code`, `subj_description`, `subj_course`, `subj_year`, `subj_sem`, `subj_unit`, `subj_prereq`, `prelim`, `midterm`, `prefi`, `finals`) VALUES ('$academic_year','$subj_grade', '$student_id', '$lname', '$mname', '$fname', '$subj_code', '$subj_description', '$subj_course', '$subj_year', '$subj_sem', '$subj_unit', '$subj_prereq', '$prelim', '$midterm', '$prefi', '$finals')";

		$result5 = mysqli_query($conn,$query5);

			if ($result5) 
			{
				$query4 = "DELETE FROM tbl_grading WHERE student_id = '$student_id' AND subj_code = '$subj_code'";
				$result4 = mysqli_query($conn, $query4);

				if ($result4) {
					echo "<script type='text/javascript'>alert('Successfully Added!');window.location.href='index.php'</script>";
				}else{
					echo "<script type='text/javascript'>alert('Unsuccessfully Added!');window.location.href='index.php'</script>";
				}
			}
			else
			{
				echo "<script type='text/javascript'>alert('Error!');window.location.href='index.php'</script>";
			}
		}
	}
}
?>

