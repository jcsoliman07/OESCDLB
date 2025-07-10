<?php
include 'connection.php';

if (isset($_POST['Save'])) {

	$checked_array = $_POST['id'];

	foreach($_POST['archive_id'] as $key => $value){

		if (in_array($_POST['archive_id'][$key], $checked_array)) {
			$archive_id = $_POST['archive_id'][$key];
			$student_id = $_POST['student_id'][$key];
			$lname = $_POST['lname'][$key];
			$fname = $_POST['fname'][$key];
			$mname = $_POST['mname'][$key];
			$subj_code = $_POST['subj_code'][$key];
			$subj_course = $_POST['subj_course'][$key];
			$subj_year = $_POST['subj_year'][$key];
			$subj_sem = $_POST['subj_sem'][$key];
			$prelim = $_POST['prelim'][$key];
			$midterm = $_POST['midterm'][$key];
			$prefi = $_POST['prefi'][$key];
			$finals = $_POST['finals'][$key];
			$subj_grade = $_POST['subj_grade'][$key];
			$academic_year = $_POST['academic_year'][$key];
			$subj_unit = $_POST['subj_unit'][$key];
			$subj_prereq = $_POST['subj_prereq'][$key];
			$subj_description = $_POST['subj_description'][$key];

			$sql = "INSERT INTO `tbl_grading`(`academic_year`, `subj_grade`, `student_id`, `lname`, `mname`, `fname`, `subj_code`, `subj_description`, `subj_course`, `subj_year`, `subj_sem`, `subj_unit`, `subj_prereq`, `prelim`, `midterm`, `prefi`, `finals`) VALUES ('$academic_year', '$subj_grade', '$student_id', '$lname', '$mname', '$fname', '$subj_code', '$subj_description', '$subj_course', '$subj_year', '$subj_sem', '$subj_unit', '$subj_prereq', '$prelim', '$midterm', '$prefi', '$finals')";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				$query = "DELETE FROM tbl_retrieved WHERE student_id='$student_id' AND subj_code ='$subj_code'";
				$result1 = mysqli_query($conn, $query);

				if ($result1) {
					echo"<script type='text/javascript'>alert('Successfully Archive!');window.location.href='index.php'</script>";
				}
				else{
					echo"<script type='text/javascript'>alert('Unsuccessfully Archive!');window.location.href='index.php'</script>";
				}
			}else{

				echo"<script type='text/javascript'>alert('Unsuccessfully Archive!');window.location.href='index.php'</script>";
			}
		}
	}
}

?>
