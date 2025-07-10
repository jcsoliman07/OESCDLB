<?php
if (isset($_GET['id'])) 
	{
		include "db_conn.php";
			$Id = $_GET['id'];

			$s = "DELETE FROM tbl_csstudent WHERE id=$Id";
			$res = mysqli_query($conn, $s);

			if ($res) {
				header("Location:newcs.php?success=Successfully Deleted!");
			}
			else{
				header("Location:newcs.php");
			}
	}