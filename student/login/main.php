 <?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","oescdlb");  
 if (!isset($_SESSION["username"])) {  
      header("location: ../../mainlogin.php");  
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
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

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
			max-height: 100px;
			background: #1e1e1e;
		}
		.logo{

			width: 70px;
			height: 70px;
		}
		p{
			/*padding-top: 5%;*/
			font-family: Times New Roman;
			font-size: 25px;
			letter-spacing: 2px;
			color: white;
			/*line-height: 33px;*/
		}
/*		p10{
			padding-top: 5%;
			font-family: Times New Roman;
			font-size: 20px;
			letter-spacing: 2px;
			color: white;
			line-height: 33px;
		}*/		
</style>

</head>
<body>
<div class="upper">
		<table>
			<td>		
				<img class="logo" src="../../SchoolLogo.png" alt="logo">
			</td>

			<td>
				<p> 
					COLEGIO DE LOS BAÑOS
				</p>
			</td>
		</table>
	</div>
<div class="container my-5">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-13">
			<br/>
			<br/>
			<ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a href="#profile" class="nav-link active" role="tab" data-toggle="tab">Profile</a>
			  </li>
			  <li class="nav-item">
			   	<a href="#subject" class="nav-link" role="tab" data-toggle="tab">Subjects</a>
			  </li>
			  <li class="nav-item">
			   	<a href="#enroll" class="nav-link" role="tab" data-toggle="tab">Enrolled Subjects</a>
			  </li>
			  <li class="nav-item" style="margin-left: 580px;">
			    <a href="#account" style="font-weight: bold;" class="nav-link" role="tab" data-toggle="tab"><?php echo $_SESSION['login_name']?></a>
			  </li>
			   <li class="nav-item">
			    <a class="nav-link" style="color: red;" href="logout.php">Logout</a>
			  </li>
			</ul>

			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="profile">
					<?php include "info.php";?>
				</div>
				<div role="tabpanel" class="tab-pane fade in" id="subject">
					<?php include "enroll.php";?>
				</div>
				<div role="tabpanel" class="tab-pane fade in" id="enroll">
					<?php include "subjects.php";?>
				</div>

				<div role="tabpanel" class="tab-pane fade in" id="account">
					<?php include "account.php";?>
				</div>

			</div>

			<br/>
			<br/>
		</div>
		<div class=" col-sm-2"> </div>
	</div>	
</div>

</body>
</html>