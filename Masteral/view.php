<?php
	include "../db_conn.php";
	if (isset($_GET['id'])) {
		$update_id = $_GET['id'];
		$sql_update = mysqli_query($conn, "UPDATE `tbl_masteralnew` SET `notif`=1 WHERE `id`='$update_id'");
	}
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
	
<?php 
$sql = mysqli_query($conn, "SELECT * FROM tbl_masteralnew WHERE id='$update_id'");
while($result = mysqli_fetch_assoc($sql)):?>

	<div class="container-fluid">
		<div class="col-sm-2"></div>
		<div class="col-sm-12">
			<div class="info">
			<h2><b>Student Information</b></h2>
			<hr class="bg-danger border-4 border-top border-danger">
			<br>

			<form method="post" action="viewSave.php" autocomplete="off">
				<div class="form-group row">
					<div class="col-sm-12">
						<button onclick="checker()" name="button" style="display: block;margin-left: auto;margin-right: 0; font-weight: bold;" class="btn btn-info my-5"> Update <span class="fas far fa-check"></button>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-6">
						<label>NOTE: <p1 style="font-style: italic; color:red;">This must be filled by the Registrar / Admin</p1></label>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-3">
						<label class="form-label">Student ID: </label>
						<input type="text" name="student_id" class="form-control" placeholder="00-0000" required>
						<input type="hidden" name="id" class="form-control" value="<?=$result['id']?>">
					</div>
				</div>
				<br/>
				<hr class="bg-danger border-4 border-top border-danger">
				<div class="form-group row">
					<div class="col-sm-3">
						<label class="form-label">First Name: </label>
						<input type="text" name="fname" class="form-control" value="<?=$result['fname']?>" readonly>
						<input type="hidden" name="student_status" class="form-control" value="<?=$result['student_status']?>" readonly>
						<input type="hidden" name="enrolled_date" class="form-control" value="<?=$result['enrolled_date']?>" readonly>
						<input type="hidden" name="course" class="form-control" value="<?=$result['course']?>" readonly>
						<input type="hidden" name="major" class="form-control" value="<?=$result['major']?>" readonly>
						<input type="hidden" name="year" class="form-control" value="<?=$result['year']?>" readonly>
					</div>
					<div class="col-sm-3">
						<label class="form-label">Last Name: </label>
						<input type="text" name="lname" class="form-control" value="<?=$result['lname']?>" readonly>
					</div>
					<div class="col-sm-3">
						<label class="form-label">Middle Name: </label>
						<input type="text" name="mname" class="form-control" value="<?=$result['mname']?>" readonly>
					</div>
					<div class="col-sm-3">
						<label class="form-label">Suffix: </label>
						<input type="text" name="suffix" class="form-control" value="<?=$result['suffix']?>" readonly>
					</div>
				</div>
				<div class="form-group row">
						<div class="col-sm-3">
							<label class="form-label">House no. / Street: </label>
							<input type="text" name="house_no" id="house_no" class="form-control  form-control-sm"  placeholder="House No. / Street" value="<?=$result['house_street']?>" readonly>
						</div>
						<div class="col-sm-3">
							<label class="form-label">Barangay: </label>
							<input type="text" name="barangay" id="barangay" class="form-control  form-control-sm"  placeholder="Barangay" value="<?=$result['barangay']?>" readonly>
						</div>
						<div class="col-sm-3">
							<label class="form-label">Municipality / City: </label>
							<input type="text"  name="city" id="city" class="form-control  form-control-sm"  placeholder="Municipality / City" value="<?=$result['city']?>" readonly>
						</div>
						<div class="col-sm-3">
							<label class="form-label">Province: </label>
							<input type="text" name="province" id="province" class="form-control  form-control-sm"  placeholder="Province" value="<?=$result['province']?>" readonly>
						</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-4">
						<label class="form-label">Birthdate: </label>
						<input type="text" name="bdate" class="form-control" value="<?=$result['bdate']?>" readonly>
					</div>
					<div class="col-sm-4">
						<label class="form-label">Gender: </label>
						<input type="text" name="gender" class="form-control" value="<?=$result['gender']?>" readonly>
					</div>
					<div class="col-sm-4">
						<label class="form-label">Civil Status: </label>
						<input type="text" name="cstat" class="form-control" value="<?=$result['cstat']?>" readonly>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-12">
						<label class="form-label">Birthplace: </label>
						<input type="text" name="bplace" class="form-control" value="<?=$result['bplace']?>" readonly>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="form-label">Nationality: </label>
						<input type="text" name="nationality" class="form-control" value="<?=$result['nationality']?>" readonly>
					</div>
					<div class="col-sm-6">
						<label class="form-label">Religion: </label>
						<input type="text" name="religion" class="form-control" value="<?=$result['religion']?>" readonly>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="form-label">Email: </label>
						<input type="text" name="email" class="form-control" value="<?=$result['email']?>" readonly>
					</div>
					<div class="col-sm-6">
						<label class="form-label">Mobile Number: </label>
						<input type="text" name="mnum" class="form-control" value="<?=$result['mnum']?>" readonly>
					</div>
					<input type="hidden" name="fathername" class="form-control" value="<?=$result['fathername']?>" readonly>
					<input type="hidden" name="fathermnum" class="form-control" value="<?=$result['fathermnum']?>" readonly>
					<input type="hidden" name="foccupation" class="form-control" value="<?=$result['foccupation']?>" readonly>
					<input type="hidden" name="faddress" class="form-control" value="<?=$result['faddress']?>" readonly>
					<input type="hidden" name="mothername" class="form-control" value="<?=$result['mothername']?>" readonly>
					<input type="hidden" name="mothermnum" class="form-control" value="<?=$result['mothermnum']?>" readonly>
					<input type="hidden" name="moccupation" class="form-control" value="<?=$result['moccupation']?>" readonly>
					<input type="hidden" name="maddress" class="form-control" value="<?=$result['maddress']?>" readonly>
					<input type="hidden" name="guardianname" class="form-control" value="<?=$result['guardianname']?>" readonly>
					<input type="hidden" name="guardiannumber" class="form-control" value="<?=$result['guardiannumber']?>" readonly>
					<input type="hidden" name="goccupation" class="form-control" value="<?=$result['goccupation']?>" readonly>
					<input type="hidden" name="gaddress" class="form-control" value="<?=$result['gaddress']?>" readonly>
				</div>
				<br/>
				<br/>
				<?php
					$Id = $result['id'];
					$query = mysqli_query($conn, "SELECT * FROM `tbl_masteralnew` WHERE id='$Id'")or die(mysqli_error($conn));
						
					$uploads = mysqli_fetch_array($query);
				?>
				<h4><b> Requirement/s </b></h4>
				<hr class="bg-danger border-4 border-top border-danger">
				<div class="form-group row">
					<div class="col-sm-1"></div>
					<div class="col-sm-5">
						<label class="form-label"> FORM 137: </label>
						<br/>
						<img style="width:400px; height:300px; border: solid; border-width: 4px;" src="<?php echo $uploads['requirement1']; ?>" alt="image">
						<input type="hidden" name="requirement1" value="<?php echo $uploads['requirement1']; ?>">
					</div>
					<div class="col-sm-1"></div>
					<div class="col-sm-5">
						<label class="form-label"> FORM 138: </label>
						<br/>
						<img style="width:400px; height:300px; border: solid; border-width: 4px;" src="<?php echo $uploads['requirement2']; ?>" alt="image">
						<input type="hidden" name="requirement2" value="<?php echo $uploads['requirement2']; ?>">
					</div>

				</div>
				<br/>
				<div class="form-group row">
					<div class="col-sm-1"></div>
					<div class="col-sm-5">
						<label class="form-label"> NSO/PSA/Birth Certificate: </label>
						<br/>
						<img style="width:400px; height:300px; border: solid; border-width: 4px;" src="<?php echo $uploads['requirement3']; ?>" alt="image">
						<input type="hidden" name="requirement3" value="<?php echo $uploads['requirement3']; ?>">
					</div>
					<div class="col-sm-1"></div>
					<div class="col-sm-5">
						<label class="form-label"> HIGH SCHOOL DIPLOMA: </label>
						<br/>
						<img style="width:400px; height:300px; border: solid; border-width: 4px;" src="<?php echo $uploads['requirement4']; ?>" alt="image">
						<input type="hidden" name="requirement4" value="<?php echo $uploads['requirement4']; ?>">
					</div>
				</div>
				<br/>
				<div class="form-group row">
					<div class="col-sm-1"></div>
					<div class="col-sm-5">
						<label class="form-label"> NSO/PSA/Birth Certificate: </label>
						<br/>
						<img style="width:400px; height:300px; border: solid; border-width: 4px;" src="<?php echo $uploads['requirement5']; ?>" alt="image">
						<input type="hidden" name="requirement5" value="<?php echo $uploads['requirement5']; ?>">
					</div>
					<div class="col-sm-1"></div>
					<div class="col-sm-5">
						<label class="form-label"> PICTURE (2x2): </label>
						<br/>
						<img style="width:400px; height:300px; border: solid; border-width: 4px;" src="<?php echo $uploads['requirement6']; ?>" alt="image">
						<input type="hidden" name="requirement6" value="<?php echo $uploads['requirement6']; ?>">
					</div>
				</div>
				<br/>
				<hr class="bg-danger border-4 border-top border-danger">
				<br/>
				<div class="form-group row">
					<div class="col-sm-12">
						<button name="button" style="display: block;margin-left: auto;margin-right: 0; font-weight: bold;" class="btn btn-info my-5"> Update <span class="fas far fa-check"></button>
					</div>
				</div>
			</div>
			</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
<br/>
<br/>
<?php endwhile?>
<script src="../js/jquery-3.2.1.min.js"></script>  
<script src="../js/bootstrap.js"></script> 

<script>
    $(document).ready(function(){
      $('button').tooltip();
    })
</script>

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