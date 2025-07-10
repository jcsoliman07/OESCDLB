<?php

	if (isset($_POST['Save'])) {

		include "db_conn.php";

		$ins_name = $_POST['ins_name'];
		$ins_major = $_POST['ins_major'];

		$sql = "INSERT INTO tbl_instructor (ins_name, ins_major) VALUES ('$ins_name', '$ins_major')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			header("Location:instructor.php?success=Successfully Added!");
		}
		else{
			header("Location:addinst.php?error=Unsuccessfully Added!");
		}
	}

?>

<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="../css/.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>

	
	
	<div class="container my-5">
		<br>
		<a href="instructor.php"><span class="fas fa-angle-double-left"></span> Instructor </a>
		<br>

		<h3 class="display-4"> Add New Instructor </h3>


		<form action="addinst.php" method="post">
			<div class="mb-3">
				<label class="form-label">Name: </label>
				<input type="text" name="ins_name" class="form-control" required>
			</div>

			<div class="mb-3">
				<label class="form-label">Major: </label>
				<input type="text" name="ins_major" class="form-control" required>
			</div>

		  <br>
		  <button type="submit" class="btn btn-primary my-5" name="Add"><span class="fas fa-save"></span> Save </button>  <a href="addsubj.php" name="Add" class="btn btn-primary my-5"><span class="fas fa-save"></span> Save </a> -->
		 <!--  <button type="submit" name="Add" class="btn btn-primary"><span class="far fa-save"></span> Save </button> -->
	<!-- 	</form>
	</div>

</body>
</html> -->