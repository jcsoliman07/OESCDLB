<?php
	include "../db_conn.php";

	if (isset($_POST['Save'])) {

		$type = $_POST['type'];
		$student_id = $_POST['student_id'];
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$re_password = $_POST['re_password'];

		if ($password == $re_password) {

			$re_password = md5($_POST['re_password']);

			$sql = "INSERT INTO tbl_login_acc (username,password,type,login_id,login_name) VALUES ('$username', '$re_password', '$type', '$student_id', '$name')";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				header("Location:index.php?success=Successfully Added!");
			}
			else{
				header("Location:index.php?error=Unsuccessfully Added!");
			}
		}else{
			echo "<script type='text/javascript'>alert('Password does not match!');window.location.href='index.php'</script>";
		}
	}

?>