<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
<style>
   body {
   background: #eeeeee;
   font-family: 'Varela Round', sans-serif;
}


.nav{
   background-color: #006400;
   width: 100%;
   height: 5%;

}

.home{
   color: white;
   padding-top: 15px;
   padding-right: 2%;
   padding-left: 3%;
   padding-bottom: 1%;
}
.home:hover{
   color: lightgreen;
   text-decoration: none;
}

.student{
   color: white;
   padding-top: 1%;
   padding-right: 1%;
   padding-left: 2%;
   padding-bottom: 1%;
}
.student:hover{
   color: lightgreen;
   text-decoration: none;
}
.un{
   color: white;
   padding-left: 70%;
   font-size: 120%;
   padding-top: 1%;
   padding-right: 2%;
   font-family: poppins;
}
.logout{
   color:white;
   margin-left: 90%;
   margin-top: -3.1%;
   padding-top: 1%;
   padding-right: 2.1%;
   padding-bottom: 1%;
   padding-left: 2%;
}
.logout:hover{
   color: lightgreen;
   text-decoration: none;
}

</style>
	</head>
<body>
<div class="form">
	<?php
	   include "db.php";
	   $username = $_SESSION['username'];
	   $sql = mysqli_query($con,"SELECT * FROM tbl_instructor WHERE `username` = '$username'");

	   while ($rows = mysqli_fetch_array($sql)) {
	      echo "<input type='hidden' value='".$rows['ins_id']."'>";
	?>
	<div class="nav">
		<a href="../../index.php?id=<?=$rows['ins_id']?>" class="student"><i class="fa fa-home"></i><span> Home</span></a>  
	      <a href="student.php?id=<?=$rows['ins_id']?>" class="student"><i class="fa fa-clipboard"></i><span> Class List</span></a>
	      <p class="un"><?php echo $_SESSION['username']; ?></p>
	      <a href="../../logout.php?id=<?=$rows['ins_id']?>" class="logout"><i class="fa fa-power-off"></i> <span>Logout</span></a>

	      
	 
	</div>
	<?php
	   }
	?>
</div>

<body>
	<div class="container-fluid my-5">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-12">
				<label class="h3" style="font-weight: bold;"><span class="far fa-clipboard"></span>Student Information</label>
				<hr class="border-4 border-top">
				<br/>

				<?php 
					if (isset($_POST['Submit'])) {
						include 'db_conn.php';

						// $subj_code = $_POST['subj_code'];
     					$inst_id = $_POST['ins_id'];
     					$st_id = $_POST['student_id'];
     					// echo $subj_id;
     					// echo $inst_id;
     					// echo $st_id; 

						$query = mysqli_query($conn, "SELECT * FROM tbl_student_subject WHERE student_id='$student_id' ") or die(mysqli_error($conn));
						while ($rows = mysqli_fetch_array($query)) {

				?>
				
				<div class="form-group row">
					<div class="col-sm-5">
						<label style="font-size: 18px;" class="form-label">Student ID: </label>
						<label style="font-size: 18px;" class="form-label h5"> <?php echo $rows['student_id']?> </label>
					</div>

					<div class="col-sm-5">
						<label style="font-size: 18px;" class="form-label">Course: </label>
						<label style="font-size: 18px;" class="form-label h5"> <?php echo $rows['student_subj_course']?> </label>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-5">
						<label style="font-size: 18px;" class="form-label">Name: </label>
						<label style="font-size: 18px;" class="form-label h5"> <?php echo $rows['lname'].", ".$rows['fname']." ".$rows['mname']." "?> </label>
					</div>

					<div class="col-sm-5">
						<label style="font-size: 18px;" class="form-label">Year: </label>
						<label style="font-size: 18px;" class="form-label h5"> <?php echo $rows['student_subj_year']?> </label>
					</div>
				</div>

				<br/>
				<table class="table table-sm table-bordered table-hover">
					<thead class="alert-success">
						<th class="text-center">#</th>
						<th class="text-center">Subject Code</th>
						<th class="text-center">Prelim</th>
						<th class="text-center">Midterm</th>
						<th class="text-center">Prefinal</th>
						<th class="text-center">Final</th>
						<th class="text-center">Cumulative</th>
						<th class="text-center">Remarks</th>
						<th class="text-center">Action</th>
					</thead>
					<tbody>
					<?php
					include 'db_conn.php';
					$i = 0;
					// $st_id = $rows['st_id'];
					// $inst_id = $rows['inst_id'];

					$query = mysqli_query($conn, "SELECT * FROM `tbl_grade` WHERE `student_id`='$student_id' AND `ins_id` = '$inst_id' AND `subj_id`='$subj_id'") or die(mysqli_error($conn));
					while($fetch = mysqli_fetch_array($query)){
					$i++;
					$final = ($fetch['prelim'] + $fetch['midterm'] + $fetch['prefi'] + $fetch['final']) / 4;
					?>
				<tr>
					<form method="post" action="insertgrade.php">
						<!-- <input type="text" name="subj_id" value="<?php echo $Id?>"> -->
						<td class="text-center"><?=$i?></td>
						<td class="text-center"><?php echo $fetch['subj_code']?></td>
						<td class="text-center"><?php echo $fetch['prelim']?></td>
						<td class="text-center"><?php echo $fetch['midterm']?></td>
						<td class="text-center"><?php echo $fetch['prefi']?></td>
						<td class="text-center"><?php echo $fetch['final']?></td>
						<td class="hidden"><?php echo $inst_id?></td>

						<input type="hidden" name="st_id" value="<?php echo $fetch['st_id']?>">
						<input type="hidden" name="subj_id" value="<?php echo $fetch['subj_id']?>">
						<input type="hidden" name="subj_code" value="<?php echo $fetch['subj_code']?>">
						<input type="hidden" name="prelim" value="<?php echo $fetch['prelim']?>">
						<input type="hidden" name="midterm" value="<?php echo $fetch['midterm']?>">
						<input type="hidden" name="prefi" value="<?php echo $fetch['prefi']?>">
						<input type="hidden" name="final" value="<?php echo $fetch['final']?>">
						<input type="hidden" name="inst_id" value="<?php echo $inst_id?>">

						<td class="text-center alert-info"><?php echo filter_var($final, FILTER_VALIDATE_INT) == false ? number_format($final,2) : number_format($final) ?></td>
						<?php
							if($final >=75){
								echo "<td style='background-color:green; color:#fff;'>Pass</td>";
							}else if($final < 75){
								echo "<td style='background-color:red; color:#fff;'>Fail</td>";
							}
						?>
						<td class="text-center">
							<!-- <button name="Submit" class="btn btn-success"><span class="fas fa-plus"></span> Add Grade</button> -->
							<a href="#edit_'.$row['subj_id'].'" class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>
							<!-- <a href="insertgrade.php?id=<?=$fetch['subj_id']?>" class="btn btn-success"><span class="fas fa-plus"></span>Add Grade</a> -->
						</td>
					</form>
				</tr>
				<?php
					//include 'updategrade.php';
					}
				}
			}
			?>

					</tbody>
				</table>

			</div>




			<div class="col-sm-1"></div>
		</div>
	</div>

<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>
</html>