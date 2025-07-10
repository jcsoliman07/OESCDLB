<?php 

if (isset($_GET['id'])) {
	include "../db_conn.php";

	function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		} 

		$Id = validate($_GET['id']);

		$sql = "SELECT * FROM tbl_masteralstudent WHERE id=$Id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		}
		else{
			header("Location:../../admin/Masteral/index.php");
		}
}else
{
	header("Location:../../admin/Masteral/index.php");
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

	<div class="container my5">
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group row">
					<div>
						<hr class="bg-danger border-4 border-top border-danger">
						<label style="font-weight: bold;" class="form-label">Name: </label>
						<label class="text h5"><?php echo $row['lname']." ".$row['fname']." ".$row['mname']?></label>
					</div>
				</div>
				<div class="form-group row">
					<div>
						<label style="font-weight: bold;" class="form-label">Course: </label>
						<label class="text h5"><?php echo $row['course']?></label>
					</div>
				</div>
				<div class="form-group row">
					<div>
						<label style="font-weight: bold;" class="form-label">Status: </label>
						<label class="text h5"><?php echo $row['student_status']?></label>
						<hr class="bg-danger border-4 border-top border-danger">
					</div>
				</div>

			</div>

			<div class="col-sm-8">
				<h3><b>Requirement/s</b></h3>
				<hr class="bg-danger border-4 border-top border-danger">

				<form method="post" action="info.php" autocomplete="off">
					<?php
						$Id = $row['id'];
						$query = mysqli_query($conn, "SELECT * FROM `tbl_masteralstudent` WHERE id='$Id'")or die(mysqli_error($conn));
							
						$uploads = mysqli_fetch_array($query);
					?>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label"> FORM 137: </label>
							<img style="width:300px; height:200px; border: solid; border-width: 4px;" src="<?php echo $uploads['requirement1']; ?>" alt="image">
						</div>
						<div class="col-sm-6">
							<label class="form-label"> FORM 138: </label>
							<img style="width:300px; height:200px; border: solid; border-width: 4px;" src="<?php echo $uploads['requirement2']; ?>" alt="image">
						</div>
					</div>
					<br/>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label"> NSO/PSA/Birth Certificate: </label>
							<img style="width:300px; height:200px; border: solid; border-width: 4px;" src="<?php echo $uploads['requirement3']; ?>" alt="image">
						</div>
						<div class="col-sm-6">
							<label class="form-label"> DIPLOMA: </label>
							<img style="width:300px; height:200px; border: solid; border-width: 4px;" src="<?php echo $uploads['requirement4']; ?>" alt="image">
						</div>
					</div>
					<br/>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label"> NSO/PSA/Birth Certificate: </label>
							<img style="width:300px; height:200px; border: solid; border-width: 4px;" src="<?php echo $uploads['requirement5']; ?>" alt="image">
						</div>
						<div class="col-sm-6">
							<label class="form-label"> DIPLOMA: </label>
							<img style="width:300px; height:200px; border: solid; border-width: 4px;" src="<?php echo $uploads['requirement6']; ?>" alt="image">
						</div>
					</div>
				</form>
				<br/>
				<br/>
				<br/>
			</div>
		</div>
	</div>

</body>
</html>