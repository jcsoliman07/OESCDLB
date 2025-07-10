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
<?php
	include '../../db_conn.php';
	$student_id = $_SESSION['login_id'];

	$query = mysqli_query($conn, "SELECT * FROM tbl_student")or die(mysqli_error($conn));
	while($row = mysqli_fetch_array($query)){
		if ($row['student_id'] == $student_id) {

?>

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
				<div class="form-group row">
					<div>
						<?php
							include '../../db_conn.php';
							
							$my_query = mysqli_query($conn, "SELECT * FROM tbl_semester") or die(mysqli_error());
							while($result = mysqli_fetch_array($my_query)){
								$sem_set = $result['sem_set'];

								if ($sem_set == 1) {
									$semester = $result['semester'];
									$student_id = $_SESSION['login_id'];

									$my_query1 = mysqli_query($conn, "SELECT * FROM tbl_student WHERE student_id = '$student_id'")or die(mysqli_error());
									while($result1 = mysqli_fetch_array($my_query1)){
										if ($result1['semester'] != $semester) {
						?>
						<button style="background-color: #044735; border: none;" class="btn btn-success" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['student_id']?>"><span style="color:white;" class="fas far fa-edit" style=""></span> Enroll Now </button>
						
						<?php
										}else{
						?>
						<button style="outline: solid 1px;" class="btn" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['student_id']?>" disabled><span class="fas far fa-edit" style=""></span> Enroll Now </button>

						<?php
										}
									}
								}
							}
						?>
					</div>
				</div>


			</div>

			<div class="col-sm-8" style="background: rgba(0, 0, 0, 0.03); border-radius: 15px;">
				<h3><b>Information</b></h3>
				<hr class="bg-danger border-4 border-top border-danger">

				<form autocomplete="off">
					<div class="form-group row">
						<div class="col-sm-3">
							<input type="hidden" name="id" value="<?=$row['id']?>">
							<label class="form-label">Firstname: </label>
							<input type="text" style="background: white;" name="fname" class="form-control form-control-sm" value="<?=$row['fname']?>" disabled>
						</div>
						<div class="col-sm-3">
							<label class="form-label">Lastname: </label>
							<input type="text" style="background: white;" name="lname" class="form-control form-control-sm" value="<?=$row['lname']?>" disabled>
						</div>
						<div class="col-sm-3">
							<label class="form-label">Middlename: </label>
							<input type="text" style="background: white;" name="mname" class="form-control form-control-sm" value="<?=$row['mname']?>" disabled>
						</div>
						<div class="col-sm-3">
							<label class="form-label">Suffix: </label>
							<input type="text" style="background: white;" name="suffix" class="form-control form-control-sm" value="<?=$row['suffix']?>" disabled>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-3">
							<label class="form-label">House no. / Street: </label>
							<input type="text" style="background: white;" name="house_no" id="house_no" class="form-control  form-control-sm"  placeholder="House No. / Street" value="<?=$row['house_street']?>" disabled>
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
						<div class="col-sm-3">
							<label class="form-label">Barangay: </label>
							<input type="text" style="background: white;"name="barangay" id="barangay" class="form-control  form-control-sm"  placeholder="Barangay" value="<?=$row['barangay']?>" disabled>
							<!-- <input type="text"  name="barangay" id="barangay" class="form-control  form-control-sm"  placeholder="Barangay" value="<?=$row['barangay']?>" > -->
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
						<div class="col-sm-3">
							<label class="form-label">Municipality / City: </label>
							<input type="text" style="background: white;"name="barangay" id="barangay" class="form-control  form-control-sm"  placeholder="Barangay" value="<?=$row['city']?>" disabled>
							<!-- <input type="text"  name="city" id="city" class="form-control  form-control-sm"  placeholder="Municipality / City" value="<?=$row['city']?>" > -->
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
						<div class="col-sm-3">
							<label class="form-label">Province: </label>
							<input type="text" style="background: white;"name="barangay" id="barangay" class="form-control  form-control-sm"  placeholder="Barangay" value="<?=$row['province']?>" disabled>
							<!-- <input type="text"  name="province" id="province" class="form-control  form-control-sm"  placeholder="Province" value="<?=$row['province']?>" > -->
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-4">
							<label class="form-label">Birthdate: </label>
							<input type="text" style="background: white;" name="bdate" class="form-control form-control-sm" value="<?=$row['bdate']?>" disabled>
						</div>
						<div class="col-sm-4">
							<label class="form-label">Gender: </label>
							<input type="text" style="background: white;" name="gender" class="form-control form-control-sm" value="<?=$row['gender']?>" disabled>
						</div>
						<div class="col-sm-4">
							<label class="form-label">Civil Status: </label>
							<input type="text" style="background: white;" name="cstat" class="form-control form-control-sm" value="<?=$row['cstat']?>" disabled>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<label class="form-label">Birthplace: </label>
							<input type="text" style="background: white;" name="bplace" class="form-control form-control-sm" value="<?=$row['bplace']?>" disabled>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Nationality: </label>
							<input type="text" style="background: white;" name="nationality" class="form-control" value="<?=$row['nationality']?>" disabled>
						</div>
						<div class="col-sm-6">
							<label class="form-label">Religion: </label>
							<input type="text" style="background: white;" name="religion" class="form-control" value="<?=$row['religion']?>" disabled>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Email: </label>
							<input type="text" style="background: white;" name="email" class="form-control" value="<?=$row['email']?>" disabled>
						</div>
						<div class="col-sm-6">
							<label class="form-label">Mobile Number: </label>
							<input type="text" style="background: white;" name="mnum" class="form-control" value="<?=$row['mnum']?>"  disabled>
						</div>
					</div>

					<br/>
					<h3><b>Parents Information</b></h3>
					<hr class="bg-danger border-4 border-top border-danger">

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Father Name: </label>
							<input type="text" style="background: white;" name="fathername" class="form-control" value="<?=$row['fathername']?>" disabled>
						</div>
						<div class="col-sm-6">
							<label class="form-label">Mobile Number: </label>
							<input type="text" style="background: white;" name="fathermnum" class="form-control" value="<?=$row['fathermnum']?>" disabled>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Occupation: </label>
							<input type="text" style="background: white;" name="foccupation" class="form-control" value="<?=$row['foccupation']?>" disabled>
						</div>
						<div class="col-sm-6">
							<label class="form-label">Occupation Address: </label>
							<input type="text" style="background: white;" name="faddress" class="form-control" value="<?=$row['faddress']?>" disabled>
						</div>
					</div>
					<hr class="bg-danger border-4 border-top border-danger">
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Mother Name: </label>
							<input type="text" style="background: white;" name="mothername" class="form-control" value="<?=$row['mothername']?>" disabled>
						</div>
						<div class="col-sm-6">
							<label class="form-label">Mobile Number: </label>
							<input type="text" style="background: white;" name="mothermnum" class="form-control" value="<?=$row['mothermnum']?>" disabled>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Occupation: </label>
							<input type="text" style="background: white;" name="moccupation" class="form-control" value="<?=$row['moccupation']?>" disabled>
						</div>
						<div class="col-sm-6">
							<label class="form-label">Occupation Address: </label>
							<input type="text" style="background: white;" name="maddress" class="form-control" value="<?=$row['maddress']?>" disabled>
						</div>
					</div>
					<hr class="bg-danger border-4 border-top border-danger">
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Guardian Name: </label>
							<input type="text" style="background: white;" name="guardianname" class="form-control" value="<?=$row['guardianname']?>" disabled>
						</div>
						<div class="col-sm-6">
							<label class="form-label">Mobile Number: </label>
							<input type="text" style="background: white;" name="guardiannumber" class="form-control" value="<?=$row['guardiannumber']?>" disabled>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Occupation: </label>
							<input type="text" style="background: white;" name="goccupation" class="form-control" value="<?=$row['goccupation']?>" disabled>
						</div>
						<div class="col-sm-6">
							<label class="form-label">Occupation Address: </label>
							<input type="text" style="background: white;" name="gaddress" class="form-control" value="<?=$row['gaddress']?>" disabled>
						</div>
					</div>
					<br/>
					<br/>
				</form>
			</div>
		</div>
		<hr class="bg-danger border-4 border-top border-danger">

	</div>
<?php
	include "enrollform.php";
	}
}
?>
<script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/bootstrap.js"></script>
</body>
</html>