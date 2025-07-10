<?php 
	include "db.php";
	if (isset($_POST['Submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);

		$query = mysqli_query($con, "SELECT * FROM tb_instructor WHERE username = '$username' AND password = '$password'");
		$row = mysqli_fetch_array($query);

		// echo $row['user_name'];

		if (is_array($row)){
			$_SESSION["username"] = $row ['user_name'];
			$_SESSION["password"] = $row ['password'];
			$_SESSION["name"] = $row ['inst_fullname'];
		}else{
			echo "<script type='text/javascript'>alert('Invalid Username/Password!');window.location.href='login.php'</script>";
		}
	}
	if (isset($_SESSION["username"])) {
		header("Location:index.php");
	}

?>



<!-- <?php

	include "db.php";

	if (isset($_POST['Submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);

		$query = mysqli_query($con, "SELECT * FROM tb_instructor WHERE `user_name` ='$username' AND `password` = '$password'");
		while($result = mysqli_fetch_array($query)){

			// echo $result['status'];

			if ($result['status'] == 1) {
				echo "<script type='text/javascript'>alert('Welcome! Have a great day');window.location.href='index.php'</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('Your Account is temporary deactivated!');window.location.href='login.php'</script>";
			}

		}
	}

?> -->