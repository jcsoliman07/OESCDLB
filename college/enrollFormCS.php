<!-- <?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'oescdlb');

?> -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form - Undergraduate Studies</title>
	<link rel="shortcut icon" type="image/png" href="../SchoolLogo.png">

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
			z-index: 1;
			position: sticky;
			top: 0px;
			padding-top: 1%;
			padding-bottom: 1%;
			padding-left: 3%;
			width: 100%;
			max-height: 300px;
			background: #1e1e1e;
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
			/*position: fixed;*/
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: rgba(77, 77, 77, 0.7);
		}

		#modal{
			max-width: 500px;
			height: 700px;
			margin: auto;
			background-color: white;
			/*position: absolute;*/
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
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
					Lopez Avenue, Batong Malake, Los Baños, Laguna 4030
				</p10>
			</td>
		</table>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-13">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a href="#new" class="nav-link active" role="tab" data-toggle="tab">New</a>
			  </li>
			 <!--  <li class="nav-item">
			   	<a href="#old" class="nav-link active" role="tab" data-toggle="tab">Old</a>
			  </li> -->
			</ul>

			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="new">
					<?php include "enrollFormNewCS.php";?>
				</div>
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