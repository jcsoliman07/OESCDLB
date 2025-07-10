<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

  	<style>
  		*{
  			margin: 0;
  			padding: 0;
  			box-sizing: border-box;
  			font-family: 'Poppins', sans-serif;
  		}
  		body{
  			min-height: 100vh;
  			background: #f3f5f9;
  		}
  		.navigation{
  			position: fixed;
  			height: 100%;
  			width: 100%;
  			box-sizing: initial;
  			border-left: 5px solid #008000;
  			background: #008000;
  			transition: 0.5s;
  		}
  		.navigation ul{
  			position: absolute;
  			top: 0;
  			left: 0;
  			width: 100%;
  			padding-left: 5px;
  			padding-top: 20px;
  		}
  		.navifation ul li{
  			position: relative;
  			list-style: none;
  			width: 100%;
  		}
  		.navigation ul li.active{
  			background: #fff;
  		}
  		.navigation ul li a{
  			position: relative;
  			display: block;
  			width: 100%;
  			display: flex;
  			text-decoration: none;
  			color: #fff;
  		}
  		.navigation ul li a .icon{
  			position: relative;
  			display: block;
  			min-width: 60px;
  			height: 60px;
  			line-height: 20px;
  			text-align: center;
  		}
  		.navigation ul li a .title{
  			position: relative;
  			display: block;
  			padding-left: 10px;
  			height: 60px;
  			line-height: 20px;
  			white-space: normal;
  		}

  	</style>

</head>
<body>

<div class="navigation">
	<ul>
		<li class="list active">
			<a href="#">
				<span class="icon"><i class="fas fa-home"></i></span>
				<span class="title">Home</span>
			</a>
		</li>
		<li class="list">
			<a href="#">
				<span class="icon"><i class="fas fa-graduation-cap"></i></span>
				<span class="title">College</span>
			</a>
		</li>
		<li class="list">
			<a href="#">
				<span class="icon"><i class="fas fa-book"></i></span>
				<span class="title">Subjects</span>
			</a>
		</li>
		<li class="list">
			<a href="#">
				<span class="icon"><i class="fas fa-book-reader"></i></span>
				<span class="title">Istructor</span>
			</a>
		</li>
		<li class="list">
			<a href="#">
				<span class="icon"><i class="fas fa-school"></i></span>
				<span class="title">Deparment</span>
			</a>
		</li>
		<li class="list">
			<a href="#">
				<span class="icon"><i class="fas fa-book-open"></i></span>
				<span class="title">Course</span>
			</a>
		</li>
		<li class="list">
			<a href="#">
				<span class="icon"><i class="fas far fa-cog"></i></span>
				<span class="title">Semester</span>
			</a>
		</li>
		<li class="list">
			<a href="#">
				<span class="icon"><i class="fas fa-users"></i></span>
				<span class="title">New Enrollees</span>
			</a>
		</li>
		<li class="list">
			<a href="#">
				<span class="icon"><i class="fas fa-users"></i></span>
				<span class="title">Old Student</span>
			</a>
		</li>
		<li class="list">
			<a href="#">
				<span class="icon"><i class="fas fa-users"></i></span>
				<span class="title">For Approval</span>
			</a>
		</li>
		<li class="list">
			<a href="#">
				<span class="icon"><i class="fas fa-users"></i></span>
				<span class="title">For Transferee/Update</span>
			</a>
		</li>
		<li class="list">
			<a href="#">
				<span class="icon"><i class="far fa-arrow-alt-circle-left"></i></span>
				<span class="title"> Log-out</span>
			</a>
		</li>
	</ul>
</div>

</body>
</html>