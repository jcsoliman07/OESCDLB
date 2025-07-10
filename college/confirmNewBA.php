<?php
	
	if (isset($_POST['Submit'])) {
		$major = $_POST['major'];
		$semester = $_POST['semester'];
		$course = $_POST['course'];
		$status = $_POST['status'];
		$year = $_POST['my_year'];
		$a_year = $_POST['a_year'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mname = $_POST['mname'];
		$suffix = $_POST['suffix'];
		// $address = $_POST['address'];
		$house_no = $_POST['house_no'];
		$barangay = $_POST['barangay'];
		$city = $_POST['city'];
		$province = $_POST['province'];
		$bdate = $_POST['bdate'];
		$bplace = $_POST['bplace'];
		$gender = $_POST['gender'];
		$cstat = $_POST['cstat'];
		$nationality = $_POST['nationality'];
		$religion = $_POST['religion'];
		$email = $_POST['email'];
		$mnum = $_POST['mnum'];

		$fathername = $_POST['fathername'];
		$fmnum = $_POST['fmnum'];
		$foccupation = $_POST['foccupation'];
		$foccupaddress = $_POST['foccupaddress'];

		$mothername = $_POST['mothername'];
		$mmnum = $_POST['mmnum'];
		$moccupation = $_POST['moccupation'];
		$moccupaddress = $_POST['moccupaddress'];

		$guardianname = $_POST['guardianname'];
		$gmnum = $_POST['gmnum'];
		$goccupation = $_POST['goccupation'];
		$goccupaddress = $_POST['goccupaddress'];
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<style>
		* {
			color: #000000;
			margin: 0;
			padding: 0;
			user-select: none;
			box-sizing: border-box;
			font-family: sans-serif;
		}
		.upper{
			z-index: 1;
			position: sticky;
			top: 0px;
			padding-top: 1%;
			padding-bottom: 1%;
			padding-left: 3%;
			width: 100%;
			max-height: 300px;
			background: #044735;
		}
		.logo{

			width: 120px;
			height: 120px;
		}
		p{
			padding-top: 5%;
			font-family: Times New Roman;
			font-size: 45px;
			letter-spacing: 2px;
			color: white;
			line-height: 33px;
		}
		p10{
			padding-top: 5%;
			font-family: Times New Roman;
			font-size: 20px;
			letter-spacing: 2px;
			color: white;
			line-height: 33px;
		}
		.upperdown{
			padding-top: 2%;
			padding-left: 20%;
			width: 100%;
			max-height: 300px;
		}
		.ud td{
			padding: 10px;
			line-height: 23px;
		}
		.logo1{
			width: 130px;
			height: 130px;
		}
		h2{
			font-family: Calibri;
			text-align: center;
			letter-spacing: 2px;
			color: #000000;
		}
	</style>

</head>
<body>
	<div class="upper">
		<table>
			<td>		
				<img class="logo" src="../SchoolLogo.png" alt="logo">
			</td>

			<td>
				<p> 
					COLEGIO DE LOS BAÑOS
				</p>
				<p10>
					Lopez Avenue Los Baños Laguna 4030 Los Baños
				</p10>
			</td>
		</table>
	</div>
	<div class="container-fluid">
		<div class="upperdown">
			<table class="ud">
				<td>
					<img class="logo1" src="../SchoolLogo.png" alt="logo1">
				</td>

				<td>
					<p1><b>INSTRUCTION:</b></p1>
					<br/>
					<br/>
					<p1>(1) Give all your files a unique name</p1>
					<br/>
					<br/>
					<p1><b>Example: </b> Form137-(Your Name) </p1>
					<br>
				</td>

			</table>
		</div>
	</div>
		<br/>
		<br/>

	<form action="addBA.php" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-2"></div>

			<div class="col-sm-8">
				
				<script>
  					document.write('<a href="' + document.referrer + '">Go Back</a>');
				</script>

				<br/>
		    	<h2><b>Confirm Information</b></h2>
		    	<hr class="bg-dark border-5">

		   		<div class="shadow-none p-3 mb-5 bg-light rounded">
		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Major: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="major" id="major" class="form-control  form-control-sm" value="<?php echo $major;?>" readonly>
							<input type="hidden" name="enrolled_date" id="enrolled_date" value="<?php echo date("Y-m-d"); ?>">
							<<input type="hidden" name="a_year" id="a_year" value="<?php echo $a_year; ?>">
		   				</div>

		   			</div>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>
		   				<div class="col-sm-1">
		   					<label class="form-label"> Semester: </label>
		   				</div>
		   				<div class="col-sm-4">
		   					<input type="text" style="border: none; background: white;" name="semester" id="semester" class="form-control  form-control-sm" value="<?php echo $semester;?>" readonly>
		   				</div>
		   			</div>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Status: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="status" id="status" class="form-control  form-control-sm" value="<?php echo $status;?>" readonly>
							<input type="hidden" name="course" id="course" class="form-control  form-control-sm" value="<?php echo $course;?>" readonly>
		   				</div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Civil Status: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="cstat" id="cstat" class="form-control  form-control-sm" value="<?php echo $cstat;?>" readonly>
		   				</div>

		   				<div class="col-sm-1"></div>
		   			</div>

		   			<div class="form-group row">
		   			<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Year: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="year" id="year" class="form-control  form-control-sm" value="<?php echo $year;?>" readonly>
		   				</div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Nationality: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="nationality" id="nationality" class="form-control  form-control-sm" value="<?php echo $nationality;?>" readonly>
		   				</div>

		   				<div class="col-sm-1"></div>

		   			</div>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> First Name: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="fname" id="fname" class="form-control  form-control-sm" value="<?php echo $fname;?>" readonly>
		   				</div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Religion: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="religion" id="religion" class="form-control  form-control-sm" value="<?php echo $religion;?>" readonly>
		   				</div>

		   				<div class="col-sm-1"></div>
		   			</div>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Last Name: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="lname" id="lname" class="form-control  form-control-sm" value="<?php echo $lname;?>" readonly>
		   				</div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Email: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="email" style="border: none; background: white;" name="email" id="email" class="form-control  form-control-sm" value="<?php echo $email;?>" readonly>
		   				</div>

		   				<div class="col-sm-1"></div>
		   			</div>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Middle Name: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="mname" id="maname" class="form-control  form-control-sm" value="<?php echo $mname;?>" readonly>
		   				</div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Mobile Number: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="mnum" id="mnum" class="form-control  form-control-sm" value="<?php echo $mnum;?>" readonly>
		   				</div>

		   				<div class="col-sm-1"></div>
		   			</div>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Suffix: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="suffix" id="suffix" class="form-control  form-control-sm" value="<?php echo $suffix;?>" readonly>
		   				</div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Gender: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="gender" id="gender" class="form-control  form-control-sm" value="<?php echo $gender;?>" readonly>
		   				</div>

		   				<div class="col-sm-1"></div>
		   			</div>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Birth Date: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="bdate" id="bdate" class="form-control  form-control-sm" value="<?php echo $bdate;?>" readonly>
		   				</div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Birth Place: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="bplace" id="bplace" class="form-control  form-control-sm" value="<?php echo $bplace;?>" readonly>
		   				</div>

		   				<div class="col-sm-1"></div>
		   			</div>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Address: </label>
		   				</div>
						<div class="col-sm-2">
							<input type="text" style="border: none; background: white;" name="house_no" id="house_no" class="form-control  form-control-sm"  placeholder="House No. / Street" value="<?php echo $house_no;?>" readonly>
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
						<div class="col-sm-2">
							<input type="text" style="border: none; background: white;" name="barangay" id="barangay" class="form-control  form-control-sm"  placeholder="Barangay" value="<?php echo $barangay;?>" readonly>
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
						<div class="col-sm-2">
							<input type="text" style="border: none; background: white;" name="city" id="city" class="form-control  form-control-sm"  placeholder="Municipality / City" value="<?php echo $city;?>" readonly>
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
						<div class="col-sm-3">
							<input type="text" style="border: none; background: white;" name="province" id="province" class="form-control  form-control-sm"  placeholder="Province" value="<?php echo $province;?>" readonly>
							<!-- <span class="text-danger"><?php if(isset($address_error))echo $address_error; ?></span> -->
						</div>
					</div>

		   			<br/>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>
		   				<div class="col-sm-4">
		   					<h4>
				    			<span class="badge badge-success">
									Parents Information
								</span>
							</h4>
		   				</div>
		   			</div>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Father's Name: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="fathername" id="fathername" class="form-control  form-control-sm" value="<?php echo $fathername;?>" readonly>
		   				</div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Mobile Number: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="fmnum" id="fmnum" class="form-control  form-control-sm" value="<?php echo $fmnum;?>" readonly>
		   				</div>

		   				<div class="col-sm-1"></div>
		   			</div>


		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Occupation: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="foccupation" id="foccupation" class="form-control  form-control-sm" value="<?php echo $foccupation;?>" readonly>
		   				</div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Occupation Address: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="foccupaddress" id="foccupaddress" class="form-control  form-control-sm" value="<?php echo $foccupaddress;?>" readonly>
		   				</div>

		   				<div class="col-sm-1"></div>
		   			</div>

		   			<br/>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Mother's Name: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="mothername" id="mothername" class="form-control  form-control-sm" value="<?php echo $mothername;?>" readonly>
		   				</div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Mobile Number: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="mmnum" id="mmnum" class="form-control  form-control-sm" value="<?php echo $mmnum;?>" readonly>
		   				</div>

		   				<div class="col-sm-1"></div>
		   			</div>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Occupation: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="moccupation" id="moccupation" class="form-control  form-control-sm" value="<?php echo $moccupation;?>" readonly>
		   				</div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Occupation Address: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="moccupaddress" id="moccupaddress" class="form-control  form-control-sm" value="<?php echo $moccupaddress;?>" readonly>
		   				</div>

		   				<div class="col-sm-1"></div>
		   			</div>

		   			<br/>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>
		   				<div class="col-sm-4">
		   					<h4>
				    			<span class="badge badge-success">
									Guardians Information
								</span>
							</h4>
		   				</div>
		   			</div>

		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Guardian's Name: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="guardianname" id="guardianname" class="form-control  form-control-sm" value="<?php echo $guardianname;?>" readonly>
		   				</div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Mobile Number: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="gmnum" id="gmnum" class="form-control  form-control-sm" value="<?php echo $gmnum;?>" readonly>
		   				</div>

		   				<div class="col-sm-1"></div>
		   			</div>


		   			<div class="form-group row">
		   				<div class="col-sm-1"></div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Occupation: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="goccupation" id="goccupation" class="form-control  form-control-sm" value="<?php echo $goccupation;?>" readonly>
		   				</div>

		   				<div class="col-sm-1">
		   					<label class="form-label"> Occupation Address: </label>
		   				</div>
		   				<div class="col-sm-4">
							<input type="text" style="border: none; background: white;" name="goccupaddress" id="goccupaddress" class="form-control  form-control-sm" value="<?php echo $goccupaddress;?>" readonly>
		   				</div>

		   				<div class="col-sm-1"></div>
		   			</div>

		   		</div>

		   		<div class="form-group row">
		   			<h4>
		    			<span class="badge badge-success">
							Requirement/s
						</span>
							<label style="font-size: 17px; font-style: italic; margin-left: 35px;"><p1 style="color:red;"> *Note: Requirements must submit as picture only.(jpg/png)</p1></label>
					</h4>
					<hr class="bg-dark border-5">

					<div class="form-group row">
						<div class="col-sm-10">
							<label class="form-label">   Form 137: <p1 style="color:red;font-size: 12px; font-style: italic;margin-left: 145px;">*</p1><i style="font-size: 12px;font-style: italic;">Note: Format Name (Form137_LastnameFirstnameMiddlename) </i> </label>
							<input type="file" style="border: none; background: white;" name="imageA" id="imageA" class="form-control form-control-sm" required>				
						</div>
											
					</div>

					<br/>
					<div class="form-group row">
						<div class="col-sm-10">
							<label class="form-label">   Form 138: <p1 style="color:red;font-size: 12px; font-style: italic;margin-left: 145px;">*</p1><i style="font-size: 12px;font-style: italic;">Note: Format Name (Form138_LastnameFirstnameMiddlename) </i> </label>
							<input type="file" style="border: none; background: white;" name="imageB" id="imageB" class="form-control form-control-sm" required>
						</div>
					</div>

					<br/>
					<div class="form-group row">
						<div class="col-sm-10">
							<label class="form-label">   NSO/PSA/Birth Certificate: <p1 style="color:red;font-size: 12px; font-style: italic;margin-left: 30px;">*</p1><i style="font-size: 12px;font-style: italic;">Note: Format Name (NSO/PSA/Birth Certificate_LastnameFirstnameMiddlename) </i> </label>
							<input type="file" style="border: none; background: white;" name="imageC" id="imageC"  class="form-control form-control-sm" required>
						</div>
					</div>

					<br/>
					<div class="form-group row">
						<div class="col-sm-10">
							<label class="form-label">   Diploma: <p1 style="color:red;font-size: 12px; font-style: italic;margin-left: 160px;">*</p1><i style="font-size: 12px;font-style: italic;">Note: Format Name (Diploma_LastnameFirstnameMiddlename) </i> </label>
							<input type="file" style="border: none; background: white;" name="imageD" id="imageD" class="form-control form-control-sm" required>
						</div>
					</div>

					<br/>
					<div class="form-group row">
						<div class="col-sm-10">
							<label class="form-label">   Good Moral: <p1 style="color:red;font-size: 12px; font-style: italic;margin-left: 135px;">*</p1><i style="font-size: 12px;font-style: italic;">Note: Format Name (Good Moral_LastnameFirstnameMiddlename) </i> </label>
							<input type="file" style="border: none; background: white;" name="imageE" id="imageE" class="form-control form-control-sm" required>
						</div>
					</div>

					<br/>
					<div class="form-group row">
						<div class="col-sm-10">
							<label class="form-label"> Picture (2x2): <p1 style="color:red;font-size: 12px; font-style: italic;margin-left: 135px;">*</p1><i style="font-size: 12px;font-style: italic;">Note: Format Name (Picture (2x2)_LastnameFirstnameMiddlename) </i> </label>
							<input type="file" style="border: none; background: white;" name="imageF" id="imageF" class="form-control form-control-sm" required>
						</div>
					</div>

					<br/>
					<br/>

					<hr class="bg-dark border-5">		   		
				</div>

				<div class="form-group">
	
					<button id="submit" name="Submit" type="submit" class="btn btn-success btn-sm"> Submit <i style="color:white" class="fas fa-paper-plane"></i></button>

				</div>

			</div>

			<div class="col-sm-2"></div>
		</div>
	</form>

</body>
</html>