<?php
session_start();
include 'db_connection.php';

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['type'])) {

	function input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$username = input($_POST['username']);
	$password = input($_POST['password']);
	$type = input($_POST['type']);

	if (empty($username)) {
		header("location:mainlogin.php?error=Username is Required");
	}else if (empty($password)) {
		header("location:mainlogin.php?error=Password is Required");
	}else{
		$password = md5($password);

		$sql = "SELECT * FROM tbl_login_acc WHERE username='$username' AND password='$password'";

		$result = mysqli_query($conn,$sql);

		 if (mysqli_num_rows($result) === 1) {
		 	$row = mysqli_fetch_assoc($result);
		 		$my_type = 'Admin';
		 		$my_type1 = 'Student';
		 		$my_type2 = 'Faculty';

		 		if ($row['password'] === $password && $row['type'] == $type) {
		 			$_SESSION['username'] = $row['username'];
		 			$_SESSION['login_name'] = $row['login_name'];
		 			$_SESSION['type'] = $row['type'];
		 			$_SESSION['login_id'] = $row['login_id'];
		 			$_SESSION['id'] = $row['id'];

		 			if ($_SESSION['type'] == $my_type) {
		 				header("location:admin/Home/loading.php");
		 			}
		 			else if ($_SESSION['type'] == $my_type1) {
		 				// header("location:student/login/main.php");
		 				$student_id = $_SESSION['login_id'];

		 				$q = mysqli_query($conn,"SELECT * FROM tbl_student");
		 				while($r = mysqli_fetch_array($q)){
		 					if ($r['student_id'] == $student_id) {
		 						header("location:student/login/main.php");
		 					}else{
		 						$q1 = mysqli_query($conn,"SELECT * FROM tbl_masteralstudent WHERE student_id='$student_id'");
				 				while($r1 = mysqli_fetch_array($q1)){
				 					header("location:student/masterallogin/main.php");
				 				}
		 					}
		 				}
		 			}
		 			else if ($_SESSION['type'] == $my_type2) {
		 				$inst_id = $_SESSION['login_id'];

		 				$q1 = mysqli_query($conn,"SELECT * FROM tbl_instructor WHERE ins_id='$inst_id'");
		 				while($r1 = mysqli_fetch_array($q1)){
		 					$status = $r1['ins_status'];

		 					if ($status == 1) {
		 						header("location:teacher/loading.php");
		 					}else{
		 						echo "<script type='text/javascript'>alert('Your Acccount is Temporary Deactivated! Please wait until the Administrator activate it. Thankyou! ');window.location.href='mainlogin.php'</script>";
		 					}
		 				}
		 				// header("location:teacher/loading.php");
		 			}
		 			else{
		 				echo "<script type='text/javascript'>alert('Incorrrect Usrname or Password');window.location.href='mainlogin.php'</script>";
		 			}

		 		}
		 		else{
		 			echo "<script type='text/javascript'>alert('Unidentify User!');window.location.href='mainlogin.php'</script>";
		 		}
		 }
		 else{
		 	echo "<script type='text/javascript'>alert('Unidentify User!');window.location.href='mainlogin.php'</script>";
		 }

	}
}
else{
	header("location:mainlogin.php");
}

?>