<?php
  session_start();

  if (isset($_SESSION['username'])) {
    echo "<input type='hidden' value='".$_SESSION['username']."'";
  }
  else{
    header("Location:../../../mainlogin.php");
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
			<h3 class="display-1"><span class="far fa-clipboard"></span>    INSTRUCTOR ACCOUNT</h3>
	 		<hr class="bg-dark border-4 border-top">
		 	<?php 
		      if (isset($_GET['error'])) { ?>
		      <div class="alert alert-danger" role="alert">
		        <?php  echo $_GET['error'];?>
		      </div>
		    <?php }?>
		    <br>
		    <?php
				include "db_conn.php";

				$login_id = $_SESSION['login_id'];

				$query = mysqli_query($conn, "SELECT * FROM tbl_login_acc WHERE login_id = '$login_id'") or die(mysqli_error($conn));
					while ($fetch = mysqli_fetch_array($query)) {
			?>
			<form method="post" action="save.php" autocomplete="off">
				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Login ID: </label>
					</div>
					<div class="col-sm-3">
						<input type="text" name="login_id" id="login_id" class="form-control  form-control-sm" value="<?php echo $fetch['login_id']?>" required>
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
						<input type="text" name="name" id="login_name" class="form-control  form-control-sm" value="<?php echo $fetch['login_name']?>">
					</div>
				</div>
				<br/>
				<div class="form-group row">
					<div class="col-sm-2">
						<label class="form-label">Username: </label>
					</div>
					<div class="col-sm-3" style="font-weight: bold;">
						<input type="text" name="username" id="username" class="form-control  form-control-sm" value="<?php echo $fetch['username']?>">
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
					<button name="update" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Submit </button>
				</div>
			</form>

			<?php 
				} 
			?>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

</body>
</html>