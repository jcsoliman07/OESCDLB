<?php

if (isset($_POST['Update'])) {
		include 'db_conn.php';

		$id = $_POST['id'];
		$prelim = $_POST['prelim'];
		$midterm = $_POST['midterm'];
		$prefi = $_POST['prefi'];
		$Final = $_POST['Final'];


			$sql = "UPDATE `tbl_student_subjects` SET `prelim`='$prelim', `midterm`='$midterm', `prefi`='$prefi', `final`='$Final' WHERE `id`='$id'";

			$result = mysqli_query($conn, $sql);

			if ($result) {
				header("Location:grade.php?success=Successfully Updated!");
			}
			else{
				header("Location:grade.php?error=UnSuccessfully!");
			}
		
	}

?>