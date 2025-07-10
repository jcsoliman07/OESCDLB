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

		$sql = "SELECT * FROM tbl_instructor WHERE ins_id=$Id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		}
		else{
			header("Location:intructor.php");
		}
}
else if (isset($_POST['Add'])) 
{
	include "db_conn.php";

		$ins_name = $_POST['ins_name'];
		$ins_major = $_POST['ins_major'];
		$Id = $_POST['id'];

		$sql = "UPDATE tbl_instructor SET ins_name='$ins_name', ins_major='$ins_major' WHERE ins_id=$Id";

		$result = mysqli_query($conn, $sql);

		if ($result) {
			header("Location:instructor.php?success=Successfully Updated!");
		}
		else{
			header("Location:editinst.php?error=Unsuccessfully Updated!");
		}

}
else{
	header("Location:instructor.php");
}

?>