<?php

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$Id = validate($_GET['id']);

	$sql = "DELETE FROM tbl_instructor WHERE ins_id=$Id";
			$result = mysqli_query($conn, $sql);

		if ($result) {
			header("Location:instructor.php?Successfully Deleted!");
		}
		else{
			header("Location:instructor.php?");
		}

}else{
	header("Location:instructor.php");
}



?>