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

		$sql = "SELECT * FROM tbl_student WHERE id=$Id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		}
		else{
			header("Location:../../admin/college/studentBAMarketing/index.php");
		}
}else if (isset($_POST['Update'])) {
	include "../db_conn.php";

	$Id = $_POST['id'];
	$remarks = $_POST['remarks'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mname = $_POST['mname'];
	$suffix = $_POST['suffix'];
	$house_no = $_POST['house_no'];
	$barangay = $_POST['barangay'];
	$city = $_POST['city'];
	$province = $_POST['province'];
	$bdate = $_POST['bdate'];
	$gender = $_POST['gender'];
	$cstat = $_POST['cstat'];
	$bplace = $_POST['bplace'];
	$nationality = $_POST['nationality'];
	$religion = $_POST['religion'];
	$email = $_POST['email'];
	$mnum = $_POST['mnum'];
	$fathername = $_POST['fathername'];
	$fathermnum = $_POST['fathermnum'];
	$foccupation = $_POST['foccupation'];
	$faddress = $_POST['faddress'];
	$mothername = $_POST['mothername'];
	$mothermnum = $_POST['mothermnum'];
	$moccupation = $_POST['moccupation'];
	$maddress = $_POST['maddress'];
	$guardianname = $_POST['guardianname'];
	$guardiannumber = $_POST['guardiannumber'];
	$goccupation = $_POST['goccupation'];
	$gaddress = $_POST['gaddress'];


	$sql = "UPDATE tbl_student SET Remarks='$remarks', fname ='$fname', lname ='$lname', mname ='$mname', suffix ='$suffix', `house_street`='$house_no',`barangay`='$barangay',`city`='$city',`province`='$province',bdate ='$bdate', gender ='$gender', cstat ='$cstat', bplace ='$bplace', nationality ='$nationality', religion ='$religion', email ='$email', mnum ='$mnum', fathername ='$fathername', fathermnum ='$fathermnum', foccupation ='$foccupation', faddress ='$faddress', mothername ='$mothername', mothermnum ='$mothermnum', moccupation ='$moccupation', maddress ='$maddress', guardianname ='$guardianname', guardiannumber ='$guardiannumber', goccupation ='$goccupation', gaddress ='$gaddress' WHERE id = '$Id'";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo "<script type='text/javascript'>alert('Successfully Updated!');window.location.href='../../admin/college/studentBAMarketing/index.php?success=Successfully Updated!'</script>";
	}
	else{
		echo "<script type='text/javascript'>alert('Unsuccessfully Updated!');window.location.href='../../admin/college/studentBAMarketing/index.php?error=Unsuccessfully Updated!'</script>";
	}
}
else
{
	echo "<script type='text/javascript'>alert('Error!');window.location.href='../../admin/college/studentBAMarketing/index.php?error=Unsuccessfully Updated!'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
</head>
<body>

	<div class="container">
		<form method="post" action="info.php" autocomplete="off">
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group row">
					<div>
						<hr class="bg-danger border-4 border-top border-secondary">
						<label style="font-weight: bold;" class="form-label">Student ID: </label>
						<label class="text h5"><?php echo $row['student_id']?></label>
					</div>
				</div>
				<div class="form-group row">
					<div>
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
						<hr class="bg-danger border-4 border-top border-secondary">
					</div>
				</div>

				<div class="form-group row">
					<label style="font-weight: bold;" class="form-label">Remarks: </label>
					<select name="remarks" class="custom-select">
						<option value="">--Select--</option>
						<?php
							include "../db_conn.php";

							$remarks_sql = mysqli_query($conn, "SELECT * FROM tbl_remarks") or die(mysqli_error());
							while ($remarks_result = mysqli_fetch_assoc($remarks_sql)) {
								// $remarks = $remarks_result['remarks'];
						?>

								<option <?php if ($row['Remarks'] == $remarks_result['remarks']) { ?> selected = "selected" <?php } ?>value="<?php echo $remarks_result['remarks']?>"><?php echo $remarks_result['remarks']?></option>
						<?php
							}
						?>
					</select>
				</div>

			</div>

			<div class="col-sm-8">
				<h3><b>Information</b></h3>
				<hr class="bg-danger border-4 border-top border-secondary">

				
					<div class="form-group row">
						<div class="col-sm-3">
							<input type="hidden" name="id" value="<?=$row['id']?>">
							<label class="form-label">Firstname: </label>
							<input type="text" name="fname" class="form-control form-control-sm" value="<?=$row['fname']?>">
						</div>
						<div class="col-sm-3">
							<label class="form-label">Lastname: </label>
							<input type="text" name="lname" class="form-control form-control-sm" value="<?=$row['lname']?>">
						</div>
						<div class="col-sm-3">
							<label class="form-label">Middlename: </label>
							<input type="text" name="mname" class="form-control form-control-sm" value="<?=$row['mname']?>">
						</div>
						<div class="col-sm-3">
							<label class="form-label">Suffix: </label>
							<input type="text" name="suffix" class="form-control form-control-sm" value="<?=$row['suffix']?>" >
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-3">
							<label class="form-label">House no. / Street: </label>
							<input type="text" name="house_no" id="house_no" class="form-control  form-control-sm"  placeholder="House No. / Street" value="<?=$row['house_street']?>" >
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
						<div class="col-sm-3">
							<label class="form-label">Barangay: </label>
							<input type="text" name="barangay" id="barangay" class="form-control  form-control-sm"  placeholder="Barangay" value="<?=$row['barangay']?>" >
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
						<div class="col-sm-3">
							<label class="form-label">Municipality / City: </label>
							<input type="text"  name="city" id="city" class="form-control  form-control-sm"  placeholder="Municipality / City" value="<?=$row['city']?>" >
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
						<div class="col-sm-3">
							<label class="form-label">Province: </label>
							<input type="text" name="province" id="province" class="form-control  form-control-sm"  placeholder="Province" value="<?=$row['province']?>" >
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-4">
							<label class="form-label">Birthdate: </label>
							<input type="text" name="bdate" class="form-control form-control-sm" value="<?=$row['bdate']?>">
						</div>
						<div class="col-sm-4">
							<label class="form-label">Gender: </label>
							<input type="text" name="gender" class="form-control form-control-sm" value="<?=$row['gender']?>">
						</div>
						<div class="col-sm-4">
							<label class="form-label">Civil Status: </label>
							<input type="text" name="cstat" class="form-control form-control-sm" value="<?=$row['cstat']?>">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<label class="form-label">Birthplace: </label>
							<input type="text" name="bplace" class="form-control form-control-sm" value="<?=$row['bplace']?>">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Nationality: </label>
							<input type="text" name="nationality" class="form-control" value="<?=$row['nationality']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Religion: </label>
							<input type="text" name="religion" class="form-control" value="<?=$row['religion']?>" >
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Email: </label>
							<input type="text" name="email" class="form-control" value="<?=$row['email']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Mobile Number: </label>
							<input type="text" name="mnum" class="form-control" value="<?=$row['mnum']?>" >
						</div>
					</div>

					<br/>
					<h3><b>Parents Information</b></h3>

					<hr class="bg-danger border-4 border-top border-secondary">

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Father Name: </label>
							<input type="text" name="fathername" class="form-control" value="<?=$row['fathername']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Mobile Number: </label>
							<input type="text" name="fathermnum" class="form-control" value="<?=$row['fathermnum']?>" >
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Occupation: </label>
							<input type="text" name="foccupation" class="form-control" value="<?=$row['foccupation']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Occupation Address: </label>
							<input type="text" name="faddress" class="form-control" value="<?=$row['faddress']?>" >
						</div>
					</div>

					<hr class="bg-danger border-4 border-top border-secondary">

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Mother Name: </label>
							<input type="text" name="mothername" class="form-control" value="<?=$row['mothername']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Mobile Number: </label>
							<input type="text" name="mothermnum" class="form-control" value="<?=$row['mothermnum']?>" >
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Occupation: </label>
							<input type="text" name="moccupation" class="form-control" value="<?=$row['moccupation']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Occupation Address: </label>
							<input type="text" name="maddress" class="form-control" value="<?=$row['maddress']?>" >
						</div>
					</div>

					<hr class="bg-danger border-4 border-top border-secondary">

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Guardian Name: </label>
							<input type="text" name="guardianname" class="form-control" value="<?=$row['guardianname']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Mobile Number: </label>
							<input type="text" name="guardiannumber" class="form-control" value="<?=$row['guardiannumber']?>" >
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Occupation: </label>
							<input type="text" name="goccupation" class="form-control" value="<?=$row['goccupation']?>" >
						</div>
						<div class="col-sm-6">
							<label class="form-label">Occupation Address: </label>
							<input type="text" name="gaddress" class="form-control" value="<?=$row['gaddress']?>" >
						</div>
					</div>
					<br/>
					<button name="Update" class="btn btn-primary my-5"><span class="fas fa-user-check"></span> Update </button>
					<br/>
				</form>
				<br/>
				<br/>
				<br/>
			</div>
		</div>
	</div>

</body>
</html>