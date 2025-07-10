<?
session_start();
$conn=mysqli_connect("localhost","root","","oescdlb");  
 if (!isset($_SESSION["username"])) {  
      header("location:../../mainlogin.php");  
      die();
 }  
?>


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

	<div class="modal fade" id="update_modal<?php echo $row1['student_id']?>" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form method="POST" action="addOld.php" autocomplete="off">
				<div class="modal-header">
					<h3 class="modal-title">Information</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-sm-12">

					<input type="hidden" name="status" id="status" class="form-control form-control-sm" value="Old" readonly>

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label"><p1 style="color:red"> * </p1> Year: </label>
								<select name="year" id="year" class="form-control  form-control-sm">
									<option value="" disabled>--Select--</option>
									<option> First </option>
									<option> Second </option>
								</select>
						</div>

					</div>
					<input type="text" name="course" id="course" value="<?=$row1['course']?>">
					<input type="text" name="major" id="major" value="<?=$row1['major']?>">
					<input type="text" name="student_id" id="major" value="<?=$row1['student_id']?>">
					
					<hr class="bg-danger border-4 border-top border-danger">
					<br>

					<div class="form-group row">
						<div class="col-sm-3">
							<input type="hidden" name="id" value="<?=$row1['id']?>">
							<label class="form-label">Firstname: </label>
							<input type="text" style="background: white;" name="fname" class="form-control form-control-sm" value="<?=$row1['fname']?>" >
						</div>
						<div class="col-sm-3">
							<label class="form-label">Lastname: </label>
							<input type="text" style="background: white;" name="lname" class="form-control form-control-sm" value="<?=$row1['lname']?>" >
						</div>
						<div class="col-sm-3">
							<label class="form-label">Middlename: </label>
							<input type="text" style="background: white;" name="mname" class="form-control form-control-sm" value="<?=$row1['mname']?>" >
						</div>
						<div class="col-sm-3">
							<label class="form-label">Suffix: </label>
							<input type="text" style="background: white;" name="suffix" class="form-control form-control-sm" value="<?=$row1['suffix']?>" >
						</div>
					</div>
						<div class="form-group row">
						<div class="col-sm-3">
							<label class="form-label">House no. / Street: </label>
							<input type="text" name="house_no" id="house_no" class="form-control  form-control-sm"  placeholder="House No. / Street" value="<?=$row1['house_street']?>" >
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
						<div class="col-sm-3">
							<label class="form-label">Barangay: </label>
							<input type="text" name="barangay" id="barangay" class="form-control  form-control-sm"  placeholder="Barangay" value="<?=$row1['barangay']?>" >
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
						<div class="col-sm-3">
							<label class="form-label">Municipality / City: </label>
							<input type="text"  name="city" id="city" class="form-control  form-control-sm"  placeholder="Municipality / City" value="<?=$row1['city']?>" >
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
						<div class="col-sm-3">
							<label class="form-label">Province: </label>
							<input type="text" name="province" id="province" class="form-control  form-control-sm"  placeholder="Province" value="<?=$row1['province']?>" >
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-4">
							<label class="form-label">Birthdate: </label>
							<input type="text" style="background: white;" name="bdate" class="form-control form-control-sm" value="<?=$row1['bdate']?>" >
						</div>
						<div class="col-sm-4">
							<label class="form-label">Gender: </label>
							<input type="text" style="background: white;" name="gender" class="form-control form-control-sm" value="<?=$row1['gender']?>" >
						</div>
						<div class="col-sm-4">
							<label class="form-label">Civil Status: </label>
							<input type="text" style="background: white;" name="cstat" class="form-control form-control-sm" value="<?=$row1['cstat']?>" >
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<label class="form-label">Birthplace: </label>
							<input type="text" style="background: white;" name="bplace" class="form-control form-control-sm" value="<?=$row1['bplace']?>" >
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Nationality: </label>
							<input type="text" style="background: white;" name="nationality" class="form-control" value="<?=$row1['nationality']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Religion: </label>
							<input type="text" style="background: white;" name="religion" class="form-control" value="<?=$row1['religion']?>" >
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Email: </label>
							<input type="text" style="background: white;" name="email" class="form-control" value="<?=$row1['email']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Mobile Number: </label>
							<input type="text" style="background: white;" name="mnum" class="form-control" value="<?=$row1['mnum']?>"  >
						</div>
					</div>

					<br/>
					<h3><b>Parents Information</b></h3>
					<hr class="bg-danger border-4 border-top border-danger">

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Father Name: </label>
							<input type="text" style="background: white;" name="fathername" class="form-control" value="<?=$row1['fathername']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Mobile Number: </label>
							<input type="text" style="background: white;" name="fathermnum" class="form-control" value="<?=$row1['fathermnum']?>" >
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Occupation: </label>
							<input type="text" style="background: white;" name="foccupation" class="form-control" value="<?=$row1['foccupation']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Occupation Address: </label>
							<input type="text" style="background: white;" name="faddress" class="form-control" value="<?=$row1['faddress']?>" >
						</div>
					</div>
					<hr class="bg-danger border-4 border-top border-danger">
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Mother Name: </label>
							<input type="text" style="background: white;" name="mothername" class="form-control" value="<?=$row1['mothername']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Mobile Number: </label>
							<input type="text" style="background: white;" name="mothermnum" class="form-control" value="<?=$row1['mothermnum']?>" >
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Occupation: </label>
							<input type="text" style="background: white;" name="moccupation" class="form-control" value="<?=$row1['moccupation']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Occupation Address: </label>
							<input type="text" style="background: white;" name="maddress" class="form-control" value="<?=$row1['maddress']?>" >
						</div>
					</div>
					<hr class="bg-danger border-4 border-top border-danger">
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Guardian Name: </label>
							<input type="text" style="background: white;" name="guardianname" class="form-control" value="<?=$row1['guardianname']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Mobile Number: </label>
							<input type="text" style="background: white;" name="guardiannumber" class="form-control" value="<?=$row1['guardiannumber']?>" >
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Occupation: </label>
							<input type="text" style="background: white;" name="goccupation" class="form-control" value="<?=$row1['goccupation']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Occupation Address: </label>
							<input type="text" style="background: white;" name="gaddress" class="form-control" value="<?=$row1['gaddress']?>" >
						</div>
					</div>
					<br/>
					<br/>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="Add" class="btn btn-primary"><span class="fas fa-check"></span> Submit </button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel </button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
}
?>
</body>
</html>
