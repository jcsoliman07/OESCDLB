<?php

	include "../db.php";

	if (isset($_POST['Submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($con, "SELECT * FROM tb_instructor WHERE `user_name` ='$username' AND `password` = '$password'");
		while($result = mysqli_fetch_array($query)){

			if ($result['status'] == 1) {
				header("Location: ../index.php");
			}
			else{
				echo "<div class='form'><h3>Your Account is Deactivated.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
			}

		}
	}

?>