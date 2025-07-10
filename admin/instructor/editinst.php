<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>

	<div class="modal fade" id="update_modal<?php echo $rows['ins_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="updateinst.php">
				<div class="modal-header">
					<h3 class="modal-title">Confirm Student</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<div class="mb-3">
								<label class="form-label">Name: </label>
								<input type="text" name="ins_name" class="form-control" value="<?=$rows['ins_name']?>" required>
							</div>

							<div class="mb-3">
								<label class="form-label">Major: </label>
								<input type="text" name="ins_major" class="form-control" value="<?=$rows['ins_major']?>" required>
							</div>

							<input type="text" name="id" value="<?=$rows['ins_id']?>" hidden>

							<br>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="Add" class="btn btn-primary"><span class="fas fa-edit"></span> Update </button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel </button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- 	<div class = "container">
		<br>
		<table>
			<tr>
				<td> <a href="instructor.php"><span class="fas fa-angle-double-left"></span> Instructor </a></td>
				<td> <h4> / </h4> </td>
			</tr>
		</table>
		<br>

		<h3 class="display-4"> Edit Instructor </h3>
		<br>
		<form method="post" action="editinst.php" >

			
			<button type="submit" class="btn btn-primary my-5" name="Add"><span class="fas fa-save"></span> Save </button>
			<a href="editsubj.php" name="Add" class="btn btn-primary my-5"><span class="fas fa-save"></span> Save </a>
			<button type="submit" class="btn btn-primary" name="Save"> Save </button>
			<a href="instructor.php" class="btn btn-danger"> CANCEL </a>

		</form>
		
	</div> -->

</body>
</html>