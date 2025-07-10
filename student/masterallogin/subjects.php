<?
session_start();
$conn=mysqli_connect("localhost","root","","oescdlb");  
 if (!isset($_SESSION["username"])) {  
      header("location:login.php");  
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

<div class="container my5">
	<br>
	<br>
	<label class="h3" style="font-weight: bold;"><span class="far fa-clipboard"></span>              List of Subjects</label>
	<br>
	<br>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-12">
				<table class="table table-sm table-bordered table-hover">
					<thead>
						<th>#</th>
						<th>Code</th>
						<th>Description</th>
						<th>Course</th>
						<th>Unit</th>
						<th>Year</th>
						<th>Semester</th>
						<th>Grade</th>
					</thead>
					<?php
						include '../../db_conn.php';
						$student_id = $_SESSION['login_id'];
						$i = 0;

						$sql = mysqli_query($conn, "SELECT * FROM tbl_student WHERE student_id='$student_id'")or die(mysqli_error($conn));
						while($rows = mysqli_fetch_array($sql))
						{
							$year = $rows['year'];

							$q = mysqli_query($conn, "SELECT * FROM tbl_semester")or die(mysqli_error($conn));
							while ($r = mysqli_fetch_array($q)){

								if ($r['sem_set'] == 1) {
									$semester = $r['semester'];

									$query = mysqli_query($conn, "SELECT * FROM tbl_grading WHERE student_id = '$student_id' AND subj_year = '$year' AND subj_sem = '$semester'")or die(mysqli_error($conn));
									while($fetch = mysqli_fetch_array($query)){
										$i++


					?>
					<tbody>
						<td><?=$i?></td>
						<td><?php echo $fetch['subj_code']?></td>
						<td><?php echo $fetch['subj_description']?></td>
						<td><?php echo $fetch['subj_course']?></td>
						<td><?php echo $fetch['subj_unit']?></td>
						<td><?php echo $fetch['subj_year']?></td>
						<td><?php echo $fetch['subj_sem']?></td>
						<td>
							<?php
								if ($fetch['subj_grade'] == 'Passed') {
									echo"<p class='h5' style='color:green'>'".$fetch['subj_grade']."'</p>";
								}
								else{
									echo "<p class='h5' style='color:red'>'".$fetch['subj_grade']."'</p>";
								}
							?>
						</td>
					</tbody>
					<?php
								}
							}
						}
					}
				?>
				</table>
			</div>
			<div class="col-sm-2"></div>
		</div>
	<hr class="bg-danger border-4 border-top border-danger">

</div>
</body>
</html>