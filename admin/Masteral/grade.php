<?php
include 'db_conn.php';
	if (isset($_POST['Save'])) {
		
		$checked_array = $_POST['id'];

		foreach ($_POST['subj_id'] as $key => $value) {

			if (in_array($_POST['subj_id'][$key], $checked_array)) {

				$subj_id = $_POST['subj_id'][$key];
				$subj_grade = $_POST['subj_grade'][$key];
				$subject = $_POST['subject'][$key];
				$subj_course = $_POST['subj_course'][$key];
				$subj_unit = $_POST['subj_unit'][$key];
				$subj_major = $_POST['subj_major'][$key];
				$student_id = $_POST['student_id'][$key];

				$query = "INSERT INTO `tbl_masteral_grading`(`student_id`, `subj_id`, `subject`, `subj_grade`) VALUES ('$student_id','$subj_id','$subject','$subj_grade')";

				$result = mysqli_query($conn,$query);

				if ($result) {
					$query1 = "DELETE FROM tbl_masteralstudent_subject WHERE subj_id='$subj_id' AND student_id='$student_id'";
					$result1 = mysqli_query($conn, $query1);
					if ($result1) {
						echo "<script type='text/javascript'>alert('Successfully Added!');window.location.href='index.php'</script>";
					}else{
						echo "<script type='text/javascript'>alert('Unsuccessfully Added!');window.location.href='index.php'</script>";					}
					
				}
				else{
					echo "<script type='text/javascript'>alert('Unknown Error!');window.location.href='index.php'</script>";
				}
			}
			else{
				
				$subj_id = $_POST['subj_id'][$key];
				$subj_grade = $_POST['subj_grade1'][$key];
				$subject = $_POST['subject'][$key];
				$subj_course = $_POST['subj_course'][$key];
				$subj_unit = $_POST['subj_unit'][$key];
				$subj_major = $_POST['subj_major'][$key];
				$student_id = $_POST['student_id'][$key];
				$student_id = $_POST['student_id'][$key];

				$query = "INSERT INTO `tbl_masteral_grading`(`student_id`, `subj_id`, `subject`, `subj_grade`) VALUES ('$student_id','$subj_id','$subject','$subj_grade')";

				$result = mysqli_query($conn,$query);

				if ($result) {
					$query1 = "DELETE FROM tbl_masteralstudent_subject WHERE subj_id='$subj_id' AND student_id='$student_id'";
					$result1 = mysqli_query($conn, $query1);
					if ($result1) {
						echo "<script type='text/javascript'>alert('Successfully Added!');window.location.href='index.php'</script>";
					}else{
						echo "<script type='text/javascript'>alert('Unsuccessfully Added!');window.location.href='index.php'</script>";
					}
					// header("Location:index.php?success=Successfully!");
				}
				else{
					echo "<script type='text/javascript'>alert('Unknown Error!');window.location.href='index.php'</script>";
				}
			}
		}
	}

?>