<?php
if (isset($_GET['id'])) 
	{
		include "db_conn.php";
			$Id = $_GET['id'];

			$s = "DELETE FROM tbl_bsestudent WHERE id=$Id";
			$res = mysqli_query($conn, $s);

			if ($res) {
				header("Location:newbse.php?success=Successfully Deleted!");
			}
			else{
				header("Location:newbse.php");
			}
	}