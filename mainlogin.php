<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CDLB Login</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

	<link rel="shortcut icon" type="image/png" href="SchoolLogo.png">
</head>
<body>

<div class="container">
	<div class="header">
		<div class="header-content">
			<img src="SchoolLogo.png" alt="">
			<h1>Colegio de Los Baños</h1>
		</div>
	</div>

	<div class="wrapper">
		<form class="login" action="check_login.php" method="POST" autocomplete="off">
			<?php
				if (isset($_GET['error'])){
			?>
			<div class="alert">
				<?=$_GET['error']?>
			</div>
			<?php 
				} 
			?>

			<div class="body-content">
				<div class="my_content1">
					<h1>Please enter your username and password to continue</h1>

					<div class="content">
						<label>Login As:</label>
						<select name="type">
							<option selected value="Student">Student</option>
							<option value="Admin">Admin</option>
							<option value="Faculty">Faculty</option>
						</select>
					</div>

					<div class="content">
						<label>Username:</label>
						<input class="username" type="text" name="username">
					</div>
					
					<div class="content">
						<label>Password:</label>
						<input class="password" type="password" id="password" name="password">
					</div>

					<div class="content">
						<button type="submit" class="btn">Log-in</button>
					</div>

					<p>If you are enrolled but don't have an account please go to our Registrar Office and ask about your "USERNAME" and "PASSWORD"</p>
				</div>
				
				
				<div class="my_content1">
					<img src="image/bbnew.jpg" alt="">
				</div>
			</div>
		</form>
	</div>

	<div class="footer">
		<p>Lopez Avenue, Batong Malake, Los Baños, Laguna, Philippines 4030 | Email: cdlb1994@yahoo.com</p>
      	<p>Copyright © 2022 Colegio De Los Banos</p>
	</div>

</div>


</body>
</html>