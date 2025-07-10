<!-- <?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'oescdlb');

?> -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CDLB Online Enrollment</title>

	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="SchoolLogo.png">
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
		#overlay{
			display: none;
			position: fixed;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			z-index: -1;
			background: rgba(77, 77, 77, 0.7);
		}

		#modal{
			max-width: 500px;
			height: 700px;
			margin: auto;
			background-color: white;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
		}
	</style>
<link rel="shortcut icon" type="..images/png" href="SchoolLogo.png">
</head>
<body>
	
		<form  action="confirmNewBEE.php" method="POST" autocomplete="off" id="form" enctype="multipart/form-data">
		 	<div class="row">
		    	<div class="col-sm-2"></div>
		    	<div class="col-sm-8">

		    		<br/>
		    		<br/>
		    		<h2><b>Student Information</b></h2>
		    		<hr class="bg-dark border-5">
		    		<div class="form-group row">
		    			<div class="col-sm-3"></div>
		    			<div class="col-sm-6">
		    				<div class="shadow-none p-1 bg-light rounded">
				    			<p class="h5" style="color: black;font-style: italic; font-weight: bold;"> Note: </p>

				    			<label style="font-size: 15px; font-style: italic; margin-left: 10%;"><p1 style="color:red;"> * </p1>Please read before filling up the form</label>
				    			<br>
				    			<label style="font-size: 15px; font-style: italic; margin-left: 10%;"><p1 style="color:red;"> * </p1>Items that are not applicable please write <b>N/A</b></label>
				    			<br>
				    			<label style="font-size: 15px; font-style: italic; margin-left: 10%;"><p1 style="color:red;"> * </p1>Email must be active for <b>approval</b> purposes</label>
				    			<br>
				    			<br>
				    		</div>
		    			</div>
		    			<div class="col-sm-2"></div>
		    		</div>
		    		<div>
						<h4>
							<span class="badge badge-success" style="background: #044735;">
								Course: Bachelor of Elementary Education
							</span>
						</h4>
					</div>
					<div class="shadow-none p-3 mb-5 bg-light rounded">
						<br/>
						<div class="form-group row">
							<div class="col-sm-6">
								<label class="form-label" style="font-weight: bold;">Semester:</label>
								<?php
									include "db_conn.php";

									$sql = mysqli_query ($conn, "SELECT * FROM tbl_semester") or die(mysqli_error($conn));

									while ($fetch = mysqli_fetch_array($sql)){
										if ($fetch['sem_set'] == 1) {
											echo "<label class='form-label h6'>".$fetch['semester']."</lable>";
											echo "<input type='hidden' name='semester' id='semester' class='form-control  form-control-sm' value='".$fetch['semester']."' readonly>";
										}
									}
								?>
							</div>
							<div class="col-sm-6">
								<label class="form-label" style="font-weight: bold;">Academic Year:</label>
								<?php
									include "db_conn.php";

									$sql = mysqli_query ($conn, "SELECT * FROM tbl_academicyear") or die(mysqli_error($conn));

									while ($fetch = mysqli_fetch_array($sql)){
										if ($fetch['status'] == 1) {
											echo "<label class='form-label h6'>".$fetch['year']."</lable>";
											echo "<input type='hidden' name='a_year' id='a_year' class='form-control  form-control-sm' value='".$fetch['year']."' readonly>";
										}
									}
								?>
							</div>	
						</div>

						<div class="form-group row">
							<div class="col-sm-6">
								<input type="hidden" name="status" id="status" class="form-control form-control-sm" value="New" readonly>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-sm-6">
								<label class="form-label"><p1 style="color:red"> * </p1> Year: </label>
									<select name="my_year" id="year" class="custom-select form-control-sm">
										<option value="" disabled>--Select--</option>
										<option> First </option>
										<option> Second </option>
										<option> Third </option>
										<option> Fourth </option>
									</select>
								<span class="text-danger"><?php if(isset($year_error))echo $year_error; ?></span>
							</div>

							<input type="hidden" name="course" id="course" value="Bachelor of Elementary Education">
						</div>

		    		</div>

		    		<h4>
		    			<span class="badge badge-success" style="background: #044735;">
							Student Personal Information
						</span>
					</h4>

					<hr class="bg-dark border-5">

					<div class="form-group row">
						<div class="col-sm-3">
							<label class="form-label"><p1 style="color:red"> *</p1>Last Name: </label>
							<input type="text" name="lname" id="lname" class="form-control  form-control-sm" required>
						</div>
						<div class="col-sm-3">
							<label class="form-label"><p1 style="color:red"> *</p1>First Name: </label>
							<input type="text" name="fname" id="fname" class="form-control  form-control-sm" required>
						</div>
						<div class="col-sm-3">
							<label class="form-label"><p1 style="color:red"> </p1>Middle Name: </label>
							<input type="text" name="mname" minlength="2" maxlength="15" size="20" id="mname" class="form-control  form-control-sm" value="N/A">
						</div>
						<div class="col-sm-3">
							<label class="form-label">Suffix: </label>
							<input type="text" name="suffix" id="suffix" class="form-control  form-control-sm" value="N/A">
						</div>
					</div>

					<div class="form-group row">
						<label class="form-label"><p1 style="color:red"> *</p1>Address: </label>
						<div class="col-sm-3">
							<input type="text" name="house_no" id="house_no" class="form-control  form-control-sm" placeholder="House No / Street" required>
						</div>
						<div class="col-sm-3">
							<input type="text" name="barangay" id="barangay" class="form-control  form-control-sm" placeholder="Barangay" required>
						</div>
						<div class="col-sm-3">
							<input type="text" name="city" id="city" class="form-control  form-control-sm" placeholder="Municipality" required>
						</div>
						<div class="col-sm-3">
							<input type="text" name="province" id="province" class="form-control  form-control-sm" placeholder="Province"  required>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-4">
							<label class="form-label"><p1 style="color:red"> *</p1>Birthdate: </label>
							<input type="date" name="bdate" id="bdate" class="form-control  form-control-sm" required>
						</div>
						<div class="col-sm-4">
							<label class="form-label"><p1 style="color:red"> *</p1>Sex: </label>
							<select name="gender" class="custom-select form-control-sm" required >
			                    <option value="">--Select--</option>
			                    <option value="Male"> Male </option>
			                    <option value="Female"> Female </option>
			                </select> 
						</div>
						<div class="col-sm-4">
							<label class="form-label"><p1 style="color:red"> *</p1>Civil Status: </label>
							<select name="cstat" class="custom-select form-control-sm" required>
			                    <option value="">--Select--</option>
			                    <option value="Single"> Single </option>
			                    <option value="Married"> Married </option>
			                    <option value="Widowed"> Widows/er </option>
			                    <option value="Seperated"> Legally Separated </option>
			                    <option value="Seperated"> Annulled </option>
			                </select>
						</div>
					</div>

					<div class="form-group row">
						<div class="col">
							<label class="form-label"><p1 style="color:red"> *</p1>Birthplace: </label>
							<input type="text" name="bplace" id="bplace" class="form-control  form-control-sm" required>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label"><p1 style="color:red"> *</p1>Nationality: </label>
							<input type="text" name="nationality" id="nationality" class="form-control  form-control-sm" required>
						</div>
						<div class="col-sm-6">
							<label class="form-label"><p1 style="color:red"> *</p1>Religion: </label>
							<input type="text" name="religion" id="religion" class="form-control  form-control-sm" required>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label"><p1 style="color:red"> *</p1>Email: </label>
							<input type="email" autocomplete=""required="" placeholder="name@example.com" name="email" id="email" class="form-control  form-control-sm" required>
						</div>
						<div class="col-sm-6">
							<label class="form-label"><p1 style="color:red"> </p1>Contact Number: </label>
							<input type="text" name="mnum" id="mnum" maxlength="11" size="11" class="form-control  form-control-sm" value="N/A">
						</div>
					</div>
					<br/>

					<h4>
		    			<span class="badge badge-success" style="background: #044735;">
							Parents Information 
						</span>
					</h4>
					<hr class="bg-dark border-5">

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label"><p1 style="color:red"> *</p1>Father's Name: </label>
							<input type="text" name="fathername" id="fathername" class="form-control  form-control-sm" required>
						</div>
						<div class="col-sm-6">
							<label class="form-label"><p1 style="color:red"> *</p1>Contact Number: </label>
							<input type="text" name="fmnum" id="fmnum" maxlength="11" size="11" class="form-control  form-control-sm" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Occupation: </label>
							<input type="text" name="foccupation" id="foccupation" class="form-control  form-control-sm" value="N/A">
						</div>
						<div class="col-sm-6">
							<label class="form-label">Office Name and Address: </label>
							<input type="text" name="foccupaddress" id="foccupaddress" class="form-control  form-control-sm" value="N/A">
						</div>
					</div>

					<br/>
					<br/>
					
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label"><p1 style="color:red"> *</p1>Mother's Name: </label>
							<input type="text" name="mothername" id="mothername" class="form-control  form-control-sm" required>
						</div>
						<div class="col-sm-6">
							<label class="form-label"><p1 style="color:red"> *</p1>Contact Number: </label>
							<input type="text" name="mmnum" id="mmnum" maxlength="11" size="11" class="form-control  form-control-sm" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Occupation: </label>
							<input type="text" name="moccupation" id="moccupation" class="form-control  form-control-sm" value="N/A">
						</div>
						<div class="col-sm-6">
							<label class="form-label">Office Name and Address: </label>
							<input type="text" name="moccupaddress" id="moccupaddress" class="form-control  form-control-sm" value="N/A">
						</div>
					</div>

					<br/>
					<br/>

					<h4>
		    			<span class="badge badge-success" style="background: #044735;">
							Guardian Information
						</span>
					</h4>
					<hr class="bg-dark border-5">

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label"><p1 style="color:red"> *</p1>Guardian's Name: </label>
							<input type="text" name="guardianname" id="guardianname" class="form-control  form-control-sm" required>
						</div>
						<div class="col-sm-6">
							<label class="form-label"><p1 style="color:red"> *</p1>Contact Number: </label>
							<input type="text" name="gmnum" id="gnum" maxlength="11" size="11" class="form-control  form-control-sm" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="form-label">Occupation: </label>
							<input type="text" name="goccupation" id="goccupation" class="form-control  form-control-sm" value="N/A">
						</div>
						<div class="col-sm-6">
							<label class="form-label">Office Name and Address: </label>
							<input type="text" name="goccupaddress" id="goccupaddress"  class="form-control  form-control-sm" value="N/A">
						</div>
					</div>
					<br/>
					<hr class="bg-dark border-5">

					<div class="form-group">
						<button id="submit" name="Submit" type="submit" class="btn btn-success btn-sm"> Submit <i style="color:white" class="fas fa-paper-plane"></i></button>

					</div>

		    	<div class="col-sm-2"></div>
		    </div>

	    </form>
	</div>

</body>
</html>