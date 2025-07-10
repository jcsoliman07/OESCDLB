<?php
	include "db_conn.php";

	$Id = $_GET['id'];
	$status = $_GET['status'];


	$sql = "update tbl_instructor set ins_status=$status where ins_id=$Id";
	$result = mysqli_query($conn,$sql);

	if ($result) {
		echo "<script type='text/javascript'>alert('Status Successfully Updated!');window.location.href='instructor.php'</script>";
	}
	else{
		echo "<script type='text/javascript'>alert('Status Unsuccessfully Updated!');window.location.href='instructor.php'</script>";
	}
	
?>