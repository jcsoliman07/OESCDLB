<?php
if (isset($_GET['id'])) 
	{
		include "db_conn.php";
			$Id = $_GET['id'];

			$s = "DELETE FROM tbl_approvalstudent WHERE id=$Id";
			$res = mysqli_query($conn, $s);

			if ($res) {
				header("Location:approvalbafinman.php?success=Successfully Deleted!");
			}
			else{
				header("Location:approvalbafinman.php");
			}
	}