<?php
	session_start();

	if (isset($_SESSION['username'])) {
		echo "<input type='hidden' value='".$_SESSION['username']."'";
	}
	else{
		header("Location:login/index.php?");
	}	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

  <!-- <link rel="stylesheet" type="text/css" href="stylenav.css"> -->
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
		list-style: none;
		text-decoration: none;
		font-family: 'Josefin Sans', sans-serif;
	}

	.wrapper .sidebar .up
	{
	  text-align: center;
	  align-items: center;
	  border-bottom: 2px solid rgba(0,0,0,0.7);
	}

	.wrapper .sidebar .logo
	{
	  width: 120px;
	  height: 120px;
	}  	

	body
	{
  		background: #f3f5f9;
	}

	.wrapper
	{
	  /*display: flex;*/
	  position: relative;
	  height: 100%;
	}
	
	.wrapper .sidebar
	{
	  position: flex;
	  /*overflow-y: hidden;*/
	  width: 100%;
	  height: 100%;
	  background: green;
	}

	.wrapper .sidebar h4
	{
	  font-size: 16px;
	  color: #fff;
	  text-transform: uppercase;
	  text-align: center;
	  margin-bottom: 5px;
	}

	.wrapper .sidebar ul li
	{
	  padding: 13px;
	  border-bottom: 1px solid rgba(0,0,0,0.05);
	  border-top: 1px solid rgba(225,225,225 ,0.05);
	}
	.wrapper .sidebar ul li.active
	{
		border-radius: 20px 0px 0px 20px;
		background: #dddddd;
	}
	.wrapper .sidebar ul li.active a
	{
		font-weight: bold;
		color: #008000;
	}

	.wrapper .sidebar ul li a
	{
	  color: #dddddd;
	  display: block;
	  text-decoration: none;
	}

	.wrapper .sidebar ul li a .fas
	{
	  width: 25px;
	}

	.wrapper .sidebar ul li:hover
	{
		border-radius: 20px 0px 0px 20px;
	  background: #dddddd;
	  font-weight: bold;
	}

	.wrapper .sidebar ul li:hover a
	{
	  color: #008000;
	}
	#count{
		border-radius: 50%;
		position: relative;
		top: -10px;
		left: -5px;
		background-color: red;
	}
  </style>

</head>
<body>

	<div class="wrapper">
		
		<div class="sidebar">
			<div class="up">
				<img class="logo" src="../SchoolLogo.png" alt="logo">
				<h4>Colegio de Los Baños</h4>
				<!-- <label class="form-label h4" style="background:  white; color: white;">Hi! <?php echo $_SESSION['username']?></label> -->
			</div>
			<ul>
				<li class="list active"><a href="Home/home.php" target="frame_body"><i class="fas fa-home"></i>Home</a></li>
				<li class="list"><a href="College/collegeframe.php" target="frame_body"><i class="fas fa-graduation-cap"></i>College</a></li>
				<li class="list"><a href="subject/subjectframe.php" target="frame_body"><i class="fas fa-book"></i>Subjects</a></li>
				<!-- <li class="list"><a href="instructor/instructor.php" target="frame_body"><i class="fas fa-book-reader"></i>Instructor</a></li> -->
				<li class="list"><a href="department/department.php" target="frame_body"><i class="fas fa-school"></i>Department</a></li>
				<li class="list"><a href="course/course.php" target="frame_body"><i class="fas fa-book-open"></i>Course</a></li>
				<li class="list"><a href="semester/semester.php" target="frame_body"><i class="fas far fa-cog"></i>Semester</a></li>
				<?php 
				include "../db_conn.php";
					$sql = mysqli_query($conn, "SELECT * FROM tbl_newstudent WHERE notif='0'");
					$count = mysqli_num_rows($sql);

					if ($count) {
				?>
					<li class="list"><a href="newenrollees/framemain.php" target="frame_body"><i class="fas fa-users"></i>New Enrollees <span class="badge badge-light" id="count"><?php echo $count;?></span></a></li>
				<?php
					}else{
				?>
					<li class="list"><a href="newenrollees/framemain.php" target="frame_body"><i class="fas fa-users"></i>New Enrollees</a></li>
				<?php
					}
				?>


				<?php 
				include "../db_conn.php";
					$sql1 = mysqli_query($conn, "SELECT * FROM tbl_oldstudent WHERE notif='0'");
					$count1 = mysqli_num_rows($sql1);

					if ($count1) {
				?>
					<li class="list"><a href="oldstudent/framemain.php" target="frame_body"><i class="fas fa-users"></i>Old Student<span class="badge badge-light" id="count"><?php echo $count1;?></span></a></li>
				<?php
					}else{
				?>
					<li class="list"><a href="oldstudent/framemain.php" target="frame_body"><i class="fas fa-users"></i>Old Student</a></li>
				<?php
					}
				?>

				<li class="list"><a href="approval/approvalframe.php" target="frame_body"><i class="fas fa-users"></i>For Approval</a></li>
				<li class="list"><a href="Transferee/update.php" target="frame_body"><i class="fas fa-users"></i>For Transferee/Update</a></li>

				<!-- <li class="list"><a href="ABEcon/list.php" target="frame_body"><i class="glyphicon glyphicon-list-alt"></i>Reports</a></li> -->
				
				<li class="list"><a onclick="checker()" href="login/logout.php?logout" target="_parent" style="color: red;"><i class="far fa-arrow-alt-circle-left"></i>    Log-out</a></li>
			</ul>
		</div>
	</div>
<script>
	let list = document.querySelectorAll('.list');
	for (let i=0; i<list.length; i++){
		list[i].onclick = function (){ 
			let j = 0;
			while(j < list.length){
				list[j++].className = 'list';
			}
			list[i].className = 'list active';
		}
				
	}
</script>
<script>
  function checker() {
    var result = confirm('Are you sure you want to Logout?');
    if (result == false){
      event.preventDefault();
    }
  }
</script>
</body>
</html>