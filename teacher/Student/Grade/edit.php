<?php

	if (isset($_POST['edit'])) {

		include "db_conn.php";

			$id = $_POST['id'];
			$student_id = $_POST['st_id'];
			$prelim = $_POST['prelim'];
			$midterm = $_POST['midterm'];
			$prefi = $_POST['prefi'];
			$final = $_POST['final'];
			$subj_code = $_POST['subj_code'];

			echo $error_minmax = "";

		if (($prelim > 0 && $prelim < 60) || ($midterm > 0 && $midterm < 60) || ($prefi > 0 && $prefi < 60) || ($final > 0 && $final < 60)) {
			echo "<script type='text/javascript'>alert('Please input valid data (60-100)');window.location.href='classlist.php?subj_code=".$subj_code."'</script>";
		}else{
			$sql = "UPDATE `tbl_student_subjects` SET `subj_code`='$subj_code', `prelim`='$prelim', `midterm`='$midterm', `prefi`='$prefi', `final`='$final' WHERE `id`='$id'";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				header("Location:classlist.php?subj_code=".$subj_code);
			}
			else{
				header("Location:subject.php?error=Unsuccessfully Added!");
			}
		}
	}

?>	