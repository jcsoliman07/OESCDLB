
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
	* {
	color: #000000;
	margin: 0;
	padding: 0;
	user-select: none;
	box-sizing: border-box;
	font-family: sans-serif;
}

p
{
	padding-top: 5%;
	font-family: Times New Roman;
	font-size: 45px;
	letter-spacing: 2px;
	color: white;
	line-height: 33px;
}

.p1
{
	font-family: Calibri;
	font-size: 10px;
	letter-spacing: 2px;
}

h2
{
	font-family: Calibri;
	text-align: center;
	letter-spacing: 2px;
	color: #000000;
}

.upper
{
	padding-top: 1%;
	padding-bottom: 1%;
	padding-left: 3%;
	width: 100%;
	max-height: 300px;
	background: #1e1e1e;
}

.logo
{

	width: 120px;
	height: 120px;
}

.quote
{
	width: 350px;
	height: 40px;
}

.ud td
{
	padding: 10px;
	line-height: 23px;
}
.upperdown
{
	padding-top: 2%;
	padding-left: 20%;
	width: 100%;
	max-height: 300px;
}

.logo1
{

	width: 130px;
	height: 130px;
}

.containerup
{
	padding-top: 3%;
	display: flex;
	justify-content: center;
	align-items: center;
	/*flex-direction: column;*/
}

.containerup .top
{
	line-height: 20px;
	border-top: 1px solid;
	color: gray;
	width: 100%;
}

.containerup .top td
{
	padding: 10px;
}

.containerup .col1
{
	color: gray;
	width: 100%;
}

.containerup .col1 td
{
	padding: 10px;
}

.containerup .col2
{
	line-height: 20px;
	border-top: 1px solid;
	color: gray;
	width: 100%;
}

.containerup .col2 td
{
	padding: 10px;
}

.containerup .requirement
{
	line-height: 20px;
	border-bottom: 1px solid;
	color: gray;
	width: 100%;
}

.requirement td
{
	padding: 10px;
}

.containerup .sub
{
	line-height: 20px;
	border-top: 1px solid;
	color: gray;
	width: 100%;
}

.containerup form
{
	width: 900px;
	padding: 20px;
}

/*.bgmodal
{
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,0.7);
	position: absolute;
	top: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	display: none;
}

.modalcontent
{
	width: 500px;
	height: 700px;
	background-color: white;
	border-radius: 4px;
	text-align: center;
	padding: 5px;
}*/


.ud td
{
	padding: 10px;
	line-height: 23px;
}

.container
{
	position: relative;
	background-color: #fff;
	width: 60%;
	max-height: 75%
	margin: 2rem;
	border-radius: 0.25rem;
	box-shadow: 0 4px 20px rgba(0,0,0,0.4);
	overflow: auto;
	display: none;
	transition: 0.4s;
}

.container .confirm
{
	transition: 0.4s;
	padding: 2%;
}

.container .confirm .head
{	
	display: absolute;
	padding-top: 1%;
	border-bottom: 1px solid;
	line-height: 40px;
	box-sizing: border-box;
	border-color: rgba(0, 0, 0, 0.5);
	background-color: rgba(0, 0, 0, 0.1);
}

p2
{
	margin-left: 35%;
	font-size: 40px;
	margin-bottom: 10px;
}

p3
{
	font-size: 20px;
}

.container .confirm .confirm-content
{
	width: 100%;

}

.container .confirm .confirm-content td
{
	padding: 10px;
	line-height: 20px;
	font-size: 20px;
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
			<p> COLEGIO DE LOS BAÑOS
				<br>
				<img class="quote" src="../quote.png" alt="quote">
			</p>
		</td>
		</table>
	</div>

	<div class="upperdown">
		<table class="ud">
			<td>
				<img class="logo1" src="../SchoolLogo.png" alt="logo1">
			</td>

			<td>
				<p1><b>Online Enrollment Form</b></p1>
				<br>
				<p1>Lopez Avenue Los Baños, Laguna</p1>
				<br>
				<p1>4030 Los Baños</p1>
				<br>
				<p1>Tel. No. (049)5361977</p1>
			</td>

			<td>
				<p1><b>INSTRUCTION:</b></p1>
				<br>
				<p1>(1) Please supply all information required.</p1>
				<br>
				<p1>(2) Leave it <b>BLANK</b> if the information asked is not applicable to you </p1>
				<br>
				<p1><b>NOTE:</b> Fields mark with (</p1>
				<p1 style="color:red"> *</p1>) 
				<p1>are required </p1>
				
			</td>

		</table>
	</div>

	<div class="containerup">

		<form method="post" action="addCS.php" enctype="multipart/form-data" >

			<div>
				<h2><b>Student Information</b></h2>
				<br>

				<h4>
				<span class="badge badge-info">
				Course: Bachelor of Science in Computer Science
				</span>
				</h4>

				<div class="shadow-none p-3 mb-5 bg-light rounded">
					<table>
						<tr>
						<td>
							<label class="form-label">Year: </label>
							<select name="my_year" class="form-control  form-control-sm" required>
								<option>--Select--</option>
								<option>First Year</option>
								<option>Second Year</option>
								<option>Third Year</option>
								<option>Fourth Year</option>
							</select>
						</td>
						</tr>
					</table>
				</div>
				<h4>
				<span class="badge badge-secondary">
				Student Personal Information
				</span>
				</h4>

				<table class="top">
					<tr>
						<td>
							<label> <p1 style="color:red"> *</p1> Firstname:</label>
							<input type="text" class="form-control form-control-sm" id="fname" name="my_fname" required>
						</td>

						<td>
							<label> <p1 style="color:red"> *</p1> Lastname:</label>
							<input type="text" class="form-control form-control-sm" id="lname" name="my_lname" required>
						</td>
			
						<td>
							<label> <p1 style="color:red"> *</p1> Middlename:</label>
							<input type="text" class="form-control form-control-sm" id="mname" name="my_mname" required>
						</td>

						<td>
							<label>Suffix:</label>
							<input type="text" class="form-control form-control-sm" id="suffix" name="my_suffix">
						</td>
					</tr>
				</table>
				
				<table>
					<tr>
						<label> <p1 style="color:red"> *</p1> Current Address</label>
						<input type="text" class="form-control form-control-sm" id="address" name="address" required>
					</tr>
				</table>
				<br>

				<table class="col1">
					<tr>
						<td>
							<label> <p1 style="color:red"> *</p1> Birthdate: </label>
							<input type="date" class="form-control form-control-sm" id="bdate" name="my_bdate" required>
						</td>
						<td>
							<label> <p1 style="color:red"> *</p1> Birthplace: </label>
							<input type="text" class="form-control form-control-sm" id="bplace" name="my_bplace" required>
						</td>
					</tr>
				</table>

				<table class="col1">
					<tr>
						<td>
						<label> <p1 style="color:red"> *</p1> Religion</label>
						<input type="text" class="form-control form-control-sm" id="religion" name="my_religion" required>
						</td>
			
						<td>
						<label> <p1 style="color:red"> *</p1> Nationality</label>
						<input type="text" class="form-control form-control-sm" id="nationality" name="my_nationality" required>
						</td>
					</tr>
				</table>

				<table class="col1">
					<tr>
						<td>
							<label> <p1 style="color:red"> *</p1> Gender:</label>
							<!-- <input type="" class="form-control form-control-sm" id="gender" name="gender" > -->
							<select name="my_gender" id="gender" class="form-control form-control-sm" required>
								<option value="">Gender</option>
								<option value="Male">  Male </option>
								<option value="Female"> Female </option>
							</select>
						</td>
						<td>
							<label> <p1 style="color:red"> *</p1> Civil Status:</label>
							<select name="my_cstat" class="form-control form-control-sm" required>
								<option>--Select--</option>
								<option> Married </option>
								<option> Single </option>
								<option> Divorced </option>
								<option> Widowed </option>
							</select>
<!-- 						<input type="text" class="form-control form-control-sm" id="cstat" name="my_cstat" required>	 -->
						</td>
					</tr>
				</table>

				<table class="col1">
					<tr>
						<td>
							<label> <p1 style="color:red"> *</p1> E-mail Address:</label>
							<input type="text" class="form-control form-control-sm" id="email" name="my_email" required="Email">	
						</td>
						<td>
							<label> <p1 style="color:red"> *</p1> Mobile Number:</label>
							<input type="text" class="form-control form-control-sm" id="mnum" name="my_mnum" required>	
						</td>
					</tr>
				</table>
				<br>
			</div>
			<br>



			<div>
				<h4>
				<span class="badge badge-secondary">
				Guardian Information
				</span>
				</h4>
				<table class="col2">
					<tr>
						<td>
							<label> <p1 style="color:red"> *</p1> Guardian's Name:</label>
							<input type="text" class="form-control form-control-sm" id="gname" name="my_gname" required>	
						</td>
						<td>
							<label> <p1 style="color:red"> *</p1> Mobile Number:</label>
							<input type="text" class="form-control form-control-sm" id="gmnum" name="my_gmnum" required>
						</td>
					</tr>

					<tr>
						<td>
							<label> <p1 style="color:red"> *</p1> Occupation:</label>
							<input type="text" class="form-control form-control-sm" id="goccupation" name="my_occupation" required>	
						</td>
						<td>
							<label> Occupation Address:</label>
							<input type="text" class="form-control form-control-sm" id="gaddress" name="my_gaddress">
						</td>
					</tr>

				</table>
			</div>
			
			<br>
			<br>
			
			<div>
				<h4>
				<span class="badge badge-secondary">
				Requirement/s
				</span>
				</h4>
				<br>
				<table class="sub">
					<td>
						<input type="file" name="my_requirement" required>
					</td>
				</table>
			</div>

			<br>
			<br>

			<table>
				<br>
				<button name="Add" id="Add" type="submit" class="btn btn-success"> Submit <i style="color:white" class="fas fa-paper-plane"></i></button>

				<!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addIns" name="submit"> Submit <i style="color:white" class="fas fa-paper-plane"></i></button> -->
				 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="submit"> Submit</button> -->

			</table>
		</form>
	</div>

</body>
</html>