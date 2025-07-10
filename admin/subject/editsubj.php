
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

	<div class="modal fade" id="update_modal<?php echo $fetch['subj_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="updatesubj.php">
				<div class="modal-header">
					<h3 class="modal-title">Edit Subject</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<div class="mb-3">
								<label class="form-label">Subject: </label>
								<input type="text" name="subj_code" class="form-control" value="<?=$fetch['subj_code']?>" required>
							</div>

							<div class="mb-3">
								<label class="form-label">Description: </label>
								<input type="text" name="subj_description" class="form-control" value="<?=$fetch['subj_description']?>" required>
							</div>

							<div class="mb-3">
								<label class="form-label">Unit: </label>	
								<input type="text" name="subj_unit" class="form-control" value="<?=$fetch['subj_unit']?>" required>
							</div>
							
							<div class="mb-3">
								<label class="form-label">Pre-Requisite: </label>
								<input type="text" name="subj_prereq" class="form-control" value="<?=$fetch['subj_prereq']?>" required>
							</div>

							<div class="mb-3">
								<label class="form-label">Course: </label>
								<input type="text" name="subj_course" class="form-control" value="<?=$fetch['subj_course']?>" readonly required>
							</div>

							<div class="mb-3">
								<label class="form-label">Year: </label>
								<select name="subj_year" class="form-control">
									<option value="">--Select--</option>
									<option value="First" <?php if($fetch["subj_year"]=='First'){echo "selected";}?>>First</option>
									<option value="Second" <?php if($fetch["subj_year"]=='Second'){echo "selected";}?>>Second</option>
									<option value="Third" <?php if($fetch["subj_year"]=='Third'){echo "selected";}?>>Third</option>
									<option value="Fourth" <?php if($fetch["subj_year"]=='Fourth'){echo "selected";}?>>Fourth</option>
								</select>
								<!-- <input type="text" name="subj_year" class="form-control" value="<?=$row['subj_year']?>" required> -->
							</div>

							<div class="mb-3">
								<label class="form-label">Semester: </label>
								<select name="subj_semester" class="form-control">
									<option value="">--Select--</option>
									<option value="First" <?php if($fetch["subj_semester"]=='First'){echo "selected";}?>>First</option>
									<option value="Second" <?php if($fetch["subj_semester"]=='Second'){echo "selected";}?>>Second</option>
								</select>
								<!-- <input type="text" name="subj_year" class="form-control" value="<?=$row['subj_year']?>" required> -->
							</div>


							<input type="text" name="id" value="<?=$fetch['subj_id']?>" hidden>

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

</body>
</html>