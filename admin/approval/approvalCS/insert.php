<?php
	if (isset($_POST['Save'])) {
		print_r($_POST['subj_id']);
	}

?>

<!-- <?php
	if (isset($_POST['Save'])) {
		include "../db_conn.php";

		$check_array = $_POST['subj_id'];

		foreach($_POST['subj_code'] as $key => $value){

			if(in_array($_POST['subj_code'][$key], $check_array)){

				$subj_id = $_POST['subj_id'][$key];
				$student_id = $_POST['student_id'][$key];
				$subj_code = $_POST['subj_code'][$key];
				$subj_course = $_POST['subj_course'][$key];
				$subj_description = $_POST['subj_description'][$key];
				$subj_unit = $_POST['subj_unit'][$key];
				$subj_year = $_POST['subj_year'][$key];
				$subj_semester = $_POST['subj_semester'][$key];

				$sql = mysqli_query($conn, "INSERT INTO tbl_student_subjects (subj_id, student_id, subj_code, student_subj_course, student_subj_year, student_subj_sem, student_subj_unit, student_subj_description) VALUES ('$subj_id', '$student_id', '$subj_code', '$subj_course', '$subj_year', '$subj_semester', '$subj_unit', '$subj_description')");

				if($sql){
   					header("Location: approvalcs.php?success=Successfully Added Subject/s");
   				}
   				else
   				{
   					header("Location: approvalcs.php?error=Unsuccessfully Added Subject/s");
   				}

			}
		}
	}

?>

<!-- <?php

	if (isset($_POST['Save'])) {

		require "../db_conn.php";

		$counter = count($_POST["subj_id"]);

		for ($i=0; $i <= $counter ; $i++) { 

			if (!empty($_POST["subj_id"][$i])) {

				$subj_id = mysqli_real_escape_string ($conn,$_POST["subj_id"][$i]);
				$student_id = mysqli_real_escape_string ($conn,$_POST["student_id"][$i]);
				$subj_code = mysqli_real_escape_string ($conn,$_POST["subj_code"][$i]);
				$subj_course = mysqli_real_escape_string ($conn,$_POST["subj_course"][$i]);
				$subj_description = mysqli_real_escape_string ($conn,$_POST["subj_description"][$i]);
				$subj_unit = mysqli_real_escape_string ($conn,$_POST["subj_unit"][$i]);
				$subj_year = mysqli_real_escape_string ($conn,$_POST["subj_year"][$i]);
				$subj_semester = mysqli_real_escape_string ($conn,$_POST["subj_semester"][$i]);

				$sql = mysqli_query($conn, "INSERT INTO tbl_student_subjects (subj_id, student_id, subj_code, student_subj_course, student_subj_year, student_subj_sem, student_subj_unit, student_subj_description) VALUES ('$subj_id', '$student_id', '$subj_code', '$subj_course', '$subj_year', '$subj_semester', '$subj_unit', '$subj_description')");
				// $sql = mysqli_query($conn,"INSERT INTO tbl_student_subjects (subj_id, student_id, subj_code, student_subj_course, student_subj_year,  student_subj_sem, student_subj_unit, student_subj_description) VALUES ('$subj_id', '$student_id', '$subj_code', '$subj_course', '$subj_year', '$subj_semester', '$subj_unit', '$subj_description')");

				if($sql){
   					header("Location: approvalcs.php?success=Successfully Added Subject/s");
   				}
   				else
   				{
   					header("Location: approvalcs.php?error=Unsuccessfully Added Subject/s");
   				}
				
			}
		}
	}

?> --> -->