<?php

	if (isset($_POST['add'])) {

		include "db_conn.php";

		// $crse_depart = $_POST['crse_depart'];
		$crse_major = $_POST['crse_major'];
		$crse_description = $_POST['crse_description'];
		$crse_department = $_POST['crse_department'];

		$sql = "INSERT INTO tbl_course (crse_major, crse_description, crse_department) VALUES ('$crse_major', '$crse_description', '$crse_department')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			header("Location:course.php?success=Successfully Added!");
		}
		else{
			header("Location:course.php?error=Unsuccessfully Added!");
		}
	}

?>
















