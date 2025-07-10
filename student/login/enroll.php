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
	<br>
	<br>
	<div class="container my-5">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-12">
				<br>
				<br>
				<br>
				<br>
				<table class="table table-bordered table-hover">
					<thead >
						<th style="text-align:center;">#</th>
						<th style="text-align:center;">Subject Code</th>
						<th style="text-align:center;">Description</th>
						<th style="text-align:center;">Unit</th>
						<th style="text-align:center;">Semester</th>
						<th style="text-align:center;">Year</th>
					</thead>
					<tbody>
				<?php

					include "../../db_conn.php";

					$student_id = $_SESSION['login_id'];
					// echo $student_id;
					$year1 = 'First';
					$year2 = 'Second';
					$year3 = 'Third';
					$year4 = 'Fourt';
					$i = 0;

					$query = mysqli_query($conn, "SELECT * FROM tbl_student WHERE student_id='$student_id'");
					while($result = mysqli_fetch_array($query)){
						$year = $result['year'];
						$course = $result['course'];
						$major = $result['major'];

						$query1 = mysqli_query($conn, "SELECT * FROM tbl_subjects WHERE subj_course='$course' AND subj_major = '$major'");
						while($result1 = mysqli_fetch_array($query1)){
							$i++;


							if ($result1['subj_year'] == $year1) {
							// echo "<label>First Year</label>";
				?>

				<!-- <td scope="row" colspan='6' style='text-align: center;'>
					First Year
				</td> -->
				<tr>
					<td style="text-align:center;"><?=$i?></td>
					<td style="text-align:center;"><?php echo $result1['subj_code']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_description']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_unit']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_semester']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_year']?></td>
				</tr>


				<?php

						}
					}
				}
				?>
				</tbody/>


				</table>
				<hr class="bg-danger border-4 border-top border-danger">
				<br>
				<br>
				<br>
				<br>

				<table class="table table-bordered table-hover">
					<thead>
						<th style="text-align:center;">#</th>
						<th style="text-align:center;">Subject Code</th>
						<th style="text-align:center;">Description</th>
						<th style="text-align:center;">Unit</th>
						<th style="text-align:center;">Semester</th>
						<th style="text-align:center;">Year</th>
					</thead>
					<tbody>
				<?php

					include "../../db_conn.php";

					$student_id = $_SESSION['login_id'];
					// echo $student_id;
					$year2 = 'Second';
					$i = 0;

					$query = mysqli_query($conn, "SELECT * FROM tbl_student WHERE student_id='$student_id'");
					while($result = mysqli_fetch_array($query)){
						$year = $result['year'];
						$course = $result['course'];
						$major = $result['major'];

						$query1 = mysqli_query($conn, "SELECT * FROM tbl_subjects WHERE subj_course='$course' AND subj_major = '$major'");
						while($result1 = mysqli_fetch_array($query1)){
							$i++;

							if ($result1['subj_year'] == $year2) {
							// echo "<label>First Year</label>";
				?>

				<!-- <td scope="row" colspan='6' style='text-align: center;'>
					First Year
				</td> -->
				<tr>
					<td style="text-align:center;"><?=$i?></td>
					<td style="text-align:center;"><?php echo $result1['subj_code']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_description']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_unit']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_semester']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_year']?></td>
				</tr>


				<?php
						}
					}
				}
				?>
				</tbody/>

				</table>
				<hr class="bg-danger border-4 border-top border-danger">
				<br>
				<br>
				<br>
				<br>

				<table class="table table-bordered table-hover">
					<thead>
						<th style="text-align:center;">#</th>
						<th style="text-align:center;">Subject Code</th>
						<th style="text-align:center;">Description</th>
						<th style="text-align:center;">Unit</th>
						<th style="text-align:center;">Semester</th>
						<th style="text-align:center;">Year</th>
					</thead>
					<tbody>
				<?php

					include "../../db_conn.php";

					$student_id = $_SESSION['login_id'];
					// echo $student_id;
					
					$year3 = 'Third';
					$i = 0;

					$query = mysqli_query($conn, "SELECT * FROM tbl_student WHERE student_id='$student_id'");
					while($result = mysqli_fetch_array($query)){
						$year = $result['year'];
						$course = $result['course'];
						$major = $result['major'];

						$query1 = mysqli_query($conn, "SELECT * FROM tbl_subjects WHERE subj_course='$course' AND subj_major = '$major'");
						while($result1 = mysqli_fetch_array($query1)){
							$i++;

							if ($result1['subj_year'] == $year3) {
							// echo "<label>First Year</label>";
				?>

				<!-- <td scope="row" colspan='6' style='text-align: center;'>
					First Year
				</td> -->
				<tr>
					<td style="text-align:center;"><?=$i?></td>
					<td style="text-align:center;"><?php echo $result1['subj_code']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_description']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_unit']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_semester']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_year']?></td>
				</tr>


				<?php
						}
					}
				}
				?>
				</tbody/>

				</table>
				<hr class="bg-danger border-4 border-top border-danger">
				<br>
				<br>
				<br>
				<br>

				<table class="table table-bordered table-hover">
					<thead>
						<th style="text-align:center;">#</th>
						<th style="text-align:center;">Subject Code</th>
						<th style="text-align:center;">Description</th>
						<th style="text-align:center;">Unit</th>
						<th style="text-align:center;">Semester</th>
						<th style="text-align:center;">Year</th>
					</thead>
					<tbody>
				<?php

					include "../../db_conn.php";

					$student_id = $_SESSION['login_id'];
					// echo $student_id;
					
					$year4 = 'Fourth';
					$i = 0;

					$query = mysqli_query($conn, "SELECT * FROM tbl_student WHERE student_id='$student_id'");
					while($result = mysqli_fetch_array($query)){
						$year = $result['year'];
						$course = $result['course'];
						$major = $result['major'];

						$query1 = mysqli_query($conn, "SELECT * FROM tbl_subjects WHERE subj_course='$course' AND subj_major = '$major'");
						while($result1 = mysqli_fetch_array($query1)){
							$i++;

							if ($result1['subj_year'] == $year4) {
							// echo "<label>First Year</label>";
				?>

				<!-- <td scope="row" colspan='6' style='text-align: center;'>
					First Year
				</td> -->
				<tr>
					<td style="text-align:center;"><?=$i?></td>
					<td style="text-align:center;"><?php echo $result1['subj_code']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_description']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_unit']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_semester']?></td>
					<td style="text-align:center;"><?php echo $result1['subj_year']?></td>
				</tr>


				<?php
						}
					}
				}
				?>
				</tbody/>

				</table>
				<hr class="bg-danger border-4 border-top border-danger">
				<br>
				<br>
				<br>
				<br>

			</div>
			<div class="col-sm-2"></div>
		</div>
	</div><!-- 
 -->
</body>
</html>