<?php
	include "db_conn.php";

	if (isset($_POST['update'])) {

		$login_id = $_POST['login_id'];
		$type = $_POST['type'];
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$re_password = $_POST['re_password'];

		if ($password == $re_password) {

			$re_password = md5($_POST['re_password']);

			$sql = "UPDATE INTO `tbl_login_acc` SET `login_id`='$login_id', `type`='$type', `name`='$name', `username`='$username', `password`='$password' WHERE `login_id`='$login_id' ";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				header("Location:account.php?success=Successfully Added!");
			}
			else{
				header("Location:account.php?error=Unsuccessfully Added!");
			}
		}else{
			echo "<script type='text/javascript'>alert('Password does not match!');window.location.href='account.php'</script>";
		}
	}

?>