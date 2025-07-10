<?
session_start();
$conn=mysqli_connect("localhost","root","","oescdlb");  
 if (!isset($_SESSION["username"])) {  
      header("location: ../../mainlogin.php");  
      die();
 }  
?>

 <?php
	include "../../db_conn.php";

	if (isset($_POST['Save'])) {

		$type = $_POST['type'];
		$student_id = $_POST['student_id'];
		$sname = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repassword = $_POST['password'];

		if ($password == $repassword) {

			$repassword = md5($_POST['repassword']);

			$sql = "UPDATE `tbl_login_acc` SET `password`='$repassword' WHERE `username`='$username'";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				echo"<script type='text/javascript'>alert('Successfully Added!');window.location.href='main.php'</script>";
				
			}
			else{
				echo"<script type='text/javascript'>alert('Unsuccessfully Added!');window.location.href='main.php'</script>";
			}
		}else{
			echo "<script type='text/javascript'>alert('Password does not match!');window.location.href='main.php'</script>";
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
  	<link rel="stylesheet" href="../assets/css/style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>
<br>
<br>
<br>

<?php
	include '../../db_conn.php';
	$login_id = $_SESSION['login_id'];

	$query = mysqli_query($conn, "SELECT * FROM tbl_login_acc WHERE login_id = '$login_id'")or die(mysqli_error($conn));
	while($row = mysqli_fetch_array($query)){
		// $password = trim($row['pass']);
		// $password = md5($row['pass']);
?>
<div class="container my5">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<h3 class="display-1"><span class="far fa-clipboard"></span>    STUDENT ACCOUNT</h3>
	 		<hr class="bg-dark border-4 border-top">
			<form method="post" action="account.php">
				<?php
			      if (isset($_GET['success'])) { ?>
			      <div class="alert alert-success" role="alert">
			        <?php  echo $_GET['success'];?>
			      </div>
			    <?php }?>

			    <?php 
			      if (isset($_GET['error'])) { ?>
			      <div class="alert alert-danger" role="alert">
			        <?php  echo $_GET['error'];?>
			      </div>
			    <?php }?>
			    <br>
				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Student ID: </label>
					</div>
					<div class="col-sm-3">
						<input type="text" name="student_id" id="student_id" class="form-control  form-control-sm" value="<?php echo $row['login_id']?>" required readonly>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Type: </label>
					</div>
					<div class="col-sm-3">
						<input type="text" name="type" id="type" class="form-control  form-control-sm" value="Student" readonly>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Name: </label>
					</div>
					<div class="col-sm-3">
						<input type="text" name="sname" id="sname" class="form-control  form-control-sm" value="<?php echo $row['login_name']?>" readonly>
					</div>
				</div>
				<br/>
				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Username: </label>
					</div>
					<div class="col-sm-3" style="font-weight: bold;">
						<input type="text" name="username" id="username" class="form-control  form-control-sm" value="<?php echo $row['username']?>" readonly>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Password: </label>
					</div>
					<div class="col-sm-3" style="font-weight: bold;">
						<input type="password" name="password" id="password" class="form-control  form-control-sm" value="<?php echo $row['password']?>">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Retype Password: </label>
					</div>
					<div class="col-sm-3" style="font-weight: bold;">
						<input type="password" name="repassword" id="password" class="form-control  form-control-sm" value="<?php echo $row['password']?>">
					</div>
				</div>
				<br/>
				<div style="margin-left: 290px;">
					<button name="Save" class="btn btn-primary"><span style="color:white;" class="glyphicon glyphicon-save"></span> Submit </button>
				</div>
			</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
<?php }?>
</body>
</html>