<?php
	session_start();

	if (isset($_SESSION['username'])) {
		echo "<input type='hidden' value='".$_SESSION['username']."'";
	}
	else{
		header("Location:../login/index.php");
	}	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width-device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
<body>
	<div class="container my-5"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Update Data Through Modal Dialog Using MySQLi</h3>
		<hr style="border-top:1px #ccc;"/>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add user</button>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-success">
				<tr>
					<th scope="col">#</th>
              		<th scope="col"> Year </th>
              		<th scope="col"> Firstname </th>
              		<th scope="col"> Lastname </th>
              		<th scope="col"> Middlename </th>
              		<th scope="col"> Gender </th>
              		<th scope="col"> Email </th>
              		<th scope="col"> Action </th>
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require 'db_conn.php';
					$query = mysqli_query($conn, "SELECT * FROM tbl_csstudent ORDER BY id") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $fetch['fname']?></td>
					<td><?php echo $fetch['lname']?></td>
					<td><?php echo $fetch['mname']?></td>
					<td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $fetch['user_id']?>"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>
				</tr>
				<?php
					// include 'update_user.php';
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="save_user.php">
					<div class="modal-header">
						<h3 class="modal-title">Add User</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Firstname</label>
								<input type="text" name="firstname" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Lastname</label>
								<input type="text" name="lastname" class="form-control" required="required" />
							</div>
							<div class="form-group">
								<label>Address</label>
								<input type="text" name="address" class="form-control" required="required"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>	
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>	
</html>
