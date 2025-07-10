<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>

	<div class="container">
		<h2><span class="far fa-clipboard"></span> RETRIEVE DATA </h2>
		<hr class="bg-danger border-4 border-top border-danger">
		<div class="row">
			<div class="col-sm-2">

				<form method="POST" action="">
				<div class="form-group row">
					<h3><b>Filter By: </b></h3>

					<br>

					<label class="form-label">Academic Year: </label>
					<select class="form-control" name="academic_year">
						<option value="">--Select--</option>
						<?php
							include "db_conn.php";

							$query = mysqli_query($conn, "SELECT * FROM tbl_academicyear")or die(mysqli_error());
							while($row = mysqli_fetch_array($query)){
								$year = $row['year'];

								echo "<option value='$year'>$year</option>";
							}
						?>
					</select>
					<br>

					<label class="form-label">Subject: </label>
					<select class="form-control" name="subj_code">
						<option value="">--Select--</option>
						<?php
							include "db_conn.php";

							$query = mysqli_query($conn, "SELECT DISTINCT subj_code FROM tbl_subjects")or die(mysqli_error());
							while($row = mysqli_fetch_array($query)){
								$subj_code = $row['subj_code'];

								echo "<option value='$subj_code'>$subj_code</option>";
							}
						?>
					</select>
					<br>

					<br>
					<br>
					<button class="btn btn-primary" name="filter">Filter</button>
					<button class="btn btn-success" name="reset">Reset</button>
					</form>
				</div>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-9">
				<br>
						<table class="table table-bordered table-hover">
		          <thead>
		            <th></th>
		            <th>Name</th>
		            <th>Subject</th>
		            <th>Academic Year</th>
		          </thead>
		        	<tbody>
		            <?php include "filter.php";?>
		          </tbody>
		        </table>
			</div>
		</div>
		
	</div>

<script>
  function checker() {
    var result = confirm('Are you sure you want to continue?');
    if (result == false){
      event.preventDefault();
    }
  }
</script>

</body>
</html>