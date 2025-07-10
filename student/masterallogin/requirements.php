<?
session_start();
$conn=mysqli_connect("localhost","root","","oescdlb");  
 if (!isset($_SESSION["username"])) {  
      header("location:login.php");  
      die();
 }  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
</head>
<body>
<?php
	include '../../db_conn.php';
	$student_id = $_SESSION['student_id'];

	$query = mysqli_query($conn, "SELECT * FROM tbl_student WHERE student_id = '$student_id'")or die(mysqli_error($conn));
	while($row = mysqli_fetch_array($query)){
?>

<div class="container my5">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-12">
				
			</div>
			<div class="col-sm-2"></div>
		</div>
		<hr class="bg-danger border-4 border-top border-danger">

	</div>
<?php
}
?>
</body>
</html>