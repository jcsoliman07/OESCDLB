<?php
	if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		} 

		$Id = validate($_GET['id']);

		$sql = "SELECT * FROM tbl_instructor WHERE ins_id=$Id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);

			$query = mysqli_query($conn, "SELECT * FROM tbl_login_acc") or die(mysqli_error($conn));

				while ($fetch = mysqli_fetch_array($query)) {

					if ($fetch['login_id'] == $row['ins_id']) {
						echo"<script type='text/javascript'>alert('Instructor already have an account!');window.location.href='instructor.php'</script>";
					}
				}
		}
		else{
			header("Location:index.php");
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
<div class="container my5">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<h3 class="display-1"><span class="far fa-clipboard"></span>    STUDENT ACCOUNT</h3>
	 		<hr class="bg-dark border-4 border-top">
		 	<?php 
		      if (isset($_GET['error'])) { ?>
		      <div class="alert alert-danger" role="alert">
		        <?php  echo $_GET['error'];?>
		      </div>
		    <?php }?>
		    <br>
			<form method="post" action="save.php" autocomplete="off">
				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Login ID: </label>
					</div>
					<div class="col-sm-3">
						<input type="text" name="ins_id" id="student_id" class="form-control  form-control-sm" value="<?php echo $row['ins_id']?>" required>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Type: </label>
					</div>
					<div class="col-sm-3">
						<input type="text" name="type" id="type" class="form-control  form-control-sm" value="Faculty" readonly>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Name: </label>
					</div>
					<div class="col-sm-3">
						<input type="text" name="name" id="name" class="form-control  form-control-sm" value="<?php echo $row['ins_name']?>">
					</div>
				</div>
				<br/>
				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Username: </label>
					</div>
					<div class="col-sm-3" style="font-weight: bold;">
						<input type="text" name="username" id="username" class="form-control  form-control-sm">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Password: </label>
					</div>
					<div class="col-sm-3" style="font-weight: bold;">
						<input type="password" name="password" id="password" class="form-control  form-control-sm" placeholder="Password">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Re-type Password: </label>
					</div>
					<div class="col-sm-3" style="font-weight: bold;">
						<input type="password" name="re_password" id="password" class="form-control  form-control-sm" placeholder="Re-type Password">
					</div>
				</div>
				<br/>
				<div style="margin-left: 290px;">
					<button name="Save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Submit </button>
				</div>
			</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

</body>
</html>