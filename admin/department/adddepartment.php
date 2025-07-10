<?php

	if (isset($_POST['add'])) {
		include "db_conn.php";

		$department = $_POST['department'];

		$sql = "INSERT INTO tbl_department (department) VALUES ('$department')";
		$result = mysqli_query($conn,$sql);

		if ($result) {
			header("Location:department.php?success=Successfully Added New Department!");
		}
		else
		{
			header("Location:department.php?error=Unsuccessfully!");
		}
	}

?>