<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'oescdlb');

 if (isset($_POST['login'])) {
 	
 	$username = mysqli_escape_string($conn, $_POST['username']);
 	$password = mysqli_escape_string($conn, $_POST['password']);
 	$password = md5($password);

 	$sql = mysqli_query($conn, "select * from tbl_studentacc where user='$username' && pass='$password'");
 	$num = mysqli_num_rows($sql);

 	if ($num > 0) {
 		$row = mysqli_fetch_assoc($sql);
 		$_SESSION['username'] = $row['user'];
 		$_SESSION['id'] = $row['id'];
 		$_SESSION['student_id'] = $row['student_id'];
 		$_SESSION['student_name'] = $row['student_name'];
 		header("location: main.php");
 	}else{
 		echo "<script type='text/javascript'>";
		echo "alert('Invalid Username/Password');";
		echo "window.location.href='login.php'";
		echo "</script>";
 	}
 }

 ?>

<!doctype html>
<html lang="en">
  <head>
  	<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	<style>
		body{
			background-color: #9CBA7F;
		}
		.logo{
			width: 130px;
			height: 130px;
		}	
	</style>
	
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
			
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div style="margin-left: 110px;">
		      			<!-- <h2 class="heading-section" style="font-weight: bold; margin-left: -70px">Colegio de Los Baños</h2> -->
		      			<img class="logo" src="../../SchoolLogo.png" alt="logo">
		      		</div>
		      	</div>
			<form action="login.php" method ="post" class="login-form" autocomplete="off">
				<br>
				<div>
					<span class="text-danger" style="text-align: center;"><?php if(isset($user_error))echo $user_error; ?></span>
					<span class="text-danger" style="text-align: center;"><?php if(isset($pass_error))echo $pass_error; ?></span>
				</div>
		      	<div class="form-group">
		      		<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      		<input type="text" name="username" class="form-control rounded-left" placeholder="Username">
		      	</div>
		
	          	<div class="form-group">
	            		<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              		<input type="password" name="password" class="form-control rounded-left" placeholder="Password">
	            	</div>
	            	<br/>
	            	<div class="form-group d-flex align-items-center">
					<div class="w-100 d-flex justify-content-end">
		            	<button type="submit" style="width:100%; font-weight:bold;" name="login" class="btn btn-primary rounded submit">Login</button>
	            	</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

<!-- <?php
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);

		$query = mysqli_query($conn, "SELECT * FROM tbl_studentacc WHERE user='$username' AND pass='$password'");
		$row = mysqli_fetch_array($query);

			if(is_array($row)){
				$_SESSION['username'] = $row['user'];
				$_SESSION['password'] = $row['pass'];
			}else{
				echo "<script type='text/javascript'>";
				echo "alert('Invalid Username/Password');";
				echo "window.location.href='login.php'";
				echo "</script>";
			}
		if (isset($_SESSION["username"])) {
			header("Location: main.php");
			// echo "<script type='text/javascript'>";
			// echo "alert('Welcome! Have a great day!');";
			// echo "window.location.href='main.php'";
			// echo "</script>";
		}

	}

?> -->


	<script src="js/jquery.min.js"></script>
  	<script src="js/popper.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/main.js"></script>

	</body>
</html>

