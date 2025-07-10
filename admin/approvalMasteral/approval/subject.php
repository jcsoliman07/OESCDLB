<?php
	include "db_conn.php";
	if (isset($_GET['id'])) {
		$update_id = $_GET['id'];
		$sql_update = mysqli_query($conn, "UPDATE `tbl_masteralapproval` SET `notif`=1 WHERE `id`='$update_id'");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="hidden/css" href="css/bootstrap.css"/>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>
	<div class="container-fluid">
		<div class="col-sm-1"></div>

		<div class="col-sm-10">
			<h2><span class="fas fa-file-alt"></span> Student Information </h2>
			<hr class="bg-danger border-4 border-top border-danger">
			<br/>
			<?php
		      if (isset($_GET['success'])) { ?>
		      <div class="alert alert-success" role="alert">
		        <?php  echo $_GET['success'];?>
		      </div>
		    <?php }?>

		    <?php 
		      if (isset($_GET['error'])) { ?>
		      <div class="alert alert-danger" role="alert">
		        <?php  echo $_GET['error'];?>
		      </div>
		    <?php }?>
    		<br/>

			<?php
		 	if (isset($_GET['id'])) {
		 		include "db_conn.php";

		 		$Id = $_GET['id'];
		 		// echo $Id;
		 		 // WHERE id=$Id
		 		$query = mysqli_query($conn, "SELECT * FROM tbl_masteralapproval WHERE id = '$Id'") or die(mysqli_error());
	                while($row = mysqli_fetch_array($query)){
			?>

			<div class="form-group row">
				<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
				<div class="col-sm-5">
					<label class="text h4">Name: </label>
					<label class="text h4"><?php echo $row['fname']." ".$row['mname'].". ".$row['lname']?></label>
				</div>
				<div class="col-sm-5">
					<label class="text h4">Year: </label>
					<label class="text h4"><?php echo $row['year']?></label>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-5">
					<label class="text h4">Address: </label>
					<label class="text h4"><?php echo $row['house_street']." ".$row['barangay']." ".$row['city']." ".$row['province']?></label>
				</div>
				<div class="col-sm-5">
					<label class="text h4">Mobile Number: </label>
					<label class="text h4"><?php echo $row['mnum']?></label>
				</div>
			</div>
			<form method="post" action="addsubject.php">
				<input type="hidden" name="Id" class="form-control" value="<?php echo $row['id'];?>">
				<input type="hidden" name="student_id1" value="<?php echo $row['student_id'];?>" class="form-control">

				<label class="hidden">year</label>
				<input type="hidden" name="year" value="<?php echo $row['year'];?>"/>

				<input type="hidden" name="student_status" value="<?php echo $row['student_status'];?>"/>
				<input type="hidden" name="course" value="<?php echo $row['course'];?>"/>
				<input type="hidden" name="major" value="<?php echo $row['major'];?>"/>
							
				<input type="hidden" name="fname" value="<?php echo $row['fname'];?>" class="form-control"/>
				<input type="hidden" name="lname" value="<?php echo $row['lname'];?>" class="form-control"/>
				<input type="hidden" name="mname" value="<?php echo $row['mname'];?>" class="form-control"/>
				<input type="hidden" name="suffix" value="<?php echo $row['suffix'];?>" class="form-control"/>

				<input type="hidden" name="house_no" value="<?php echo $row['house_street'];?>" class="form-control"/>
				<input type="hidden" name="barangay" value="<?php echo $row['barangay'];?>" class="form-control"/>
				<input type="hidden" name="city" value="<?php echo $row['city'];?>" class="form-control"/>
				<input type="hidden" name="province" value="<?php echo $row['province'];?>" class="form-control"/>

				<input type="hidden" name="bdate" value="<?php echo $row['bdate'];?>" class="form-control"/>
				<input type="hidden" name="bplace" value="<?php echo $row['bplace'];?>" class="form-control"/>
				<input type="hidden" name="religion" value="<?php echo $row['religion'];?>" class="form-control"/>
				<input type="hidden" name="nationality" value="<?php echo $row['nationality'];?>" class="form-control"/>
				<input type="hidden" name="gender" value="<?php echo $row['gender'];?>" class="form-control"/>
				<input type="hidden" name="cstat" value="<?php echo $row['cstat'];?>" class="form-control"/>
				<input type="hidden" name="email" value="<?php echo $row['email'];?>" class="form-control"/>
				<input type="hidden" name="mnum" value="<?php echo $row['mnum'];?>" class="form-control"/>

				<input type="hidden" name="fathername" value="<?php echo $row['fathername'];?>" class="form-control"/>
				<input type="hidden" name="fathermnum" value="<?php echo $row['fathermnum'];?>" class="form-control"/>
				<input type="hidden" name="foccupation" value="<?php echo $row['foccupation'];?>" class="form-control"/>
				<input type="hidden" name="faddress" value="<?php echo $row['faddress'];?>" class="form-control"/>

				<input type="hidden" name="mothername" value="<?php echo $row['mothername'];?>" class="form-control"/>
				<input type="hidden" name="mothermnum" value="<?php echo $row['mothermnum'];?>" class="form-control"/>
				<input type="hidden" name="moccupation" value="<?php echo $row['moccupation'];?>" class="form-control"/>
				<input type="hidden" name="maddress" value="<?php echo $row['maddress'];?>" class="form-control"/>

				<input type="hidden" name="guardianname" value="<?php echo $row['guardianname'];?>" class="form-control"/>
				<input type="hidden" name="guardiannumber" value="<?php echo $row['guardiannumber'];?>" class="form-control"/>
				<input type="hidden" name="goccupation" value="<?php echo $row['goccupation'];?>" class="form-control"/>
				<input type="hidden" name="gaddress" value="<?php echo $row['gaddress'];?>" class="form-control"/>

				<input type="hidden" name="requirement1" value="<?php echo $row['requirement1'];?>" class="form-control"/>
				<input type="hidden" name="requirement2" value="<?php echo $row['requirement2'];?>" class="form-control"/>
				<input type="hidden" name="requirement3" value="<?php echo $row['requirement3'];?>" class="form-control"/>
				<input type="hidden" name="requirement4" value="<?php echo $row['requirement4'];?>" class="form-control"/>
				<input type="hidden" name="requirement5" value="<?php echo $row['requirement5'];?>" class="form-control"/>
				<input type="hidden" name="requirement6" value="<?php echo $row['requirement6'];?>" class="form-control"/>
			<?php
				}
			}
			?>
			<br/>
			<br/>
			<h2><span class="fas fa-clipboard"></span> Subject List </h2>
	       	<hr class="bg-danger border-4 border-top border-danger">

	       	<br/>


	       		<input type="checkbox" class="chk_boxes" label="check all">   Select all
	       		<br>
	       		<br>
	       		<table class="table table-sm table-bordered table-hover">
	       			<thead>
	       				<th>Action</th>
	       				<th>Subject</th>
       					<th>Course</th>
       					<th>Major</th>
       					<th>Unit</th>
	       			</thead>
	       			<tbody>

	       			<?php
	       				include "db_conn.php";

	       				$i = 0;
	       				$Id = $_GET['id'];

	       				$sql = mysqli_query($conn, "SELECT * FROM tbl_masteralapproval");
	       				while($row = mysqli_fetch_array($sql)){
	       					$student_id = $row['student_id'];
	       					$course = $row['course'];

	       					$sql2 = mysqli_query($conn,"SELECT * FROM tbl_masteral_grading WHERE student_id='$student_id'");
	      					while($row2 = mysqli_fetch_array($sql2)){

	      					if($row2['subj_grade']=='Failed'){
	      						$subject1 = $row2['subject'];

	      						$sql4 = mysqli_query($conn, "SELECT * FROM tbl_masteral_subject WHERE subj_course='$course' AND subject='$subject1'");
	      						while ($row4 = mysqli_fetch_array($sql4)) {
	      			?>
	      			<tr>
	      				<td style="background-color:red"><input type="checkbox"></td>
	      				<td style="color:red"><?php echo $row4['subject']?></td>
	      				<td style="color:red"><?php echo $row4['subj_course']?></td>
	      				<td style="color:red"><?php echo $row4['subj_major']?></td>
	      				<td style="color:red"><?php echo $row4['subj_unit']?></td>
	      			</tr>
	      			<?php
	      							}
	      						}else if($row2['subj_grade']=='Passed'){
	      							$subject2 = $row2['subject'];
		      					$sql3 = mysqli_query($conn, "SELECT * FROM tbl_masteral_subject WHERE subj_course='$course' AND subject='$subject2'");
		      					while($row3 = mysqli_fetch_array($sql3)){
		      			?>
		      			<tr>
		      				<td style="background-color:green"><input type="checkbox" disabled></td>
		      				<td style="color:green"><?php echo $row3['subject']?></td>
		      				<td style="color:green"><?php echo $row3['subj_course']?></td>
		      				<td style="color:green"><?php echo $row3['subj_major']?></td>
		      				<td style="color:green"><?php echo $row3['subj_unit']?></td>
		      			</tr>
		      			<?php
	      						}
	      					}
	      				}
	       				$sql6 = mysqli_query($conn,"SELECT * FROM tbl_masteral_subject WHERE subj_course='$course'");
	      				while($row6 = mysqli_fetch_array($sql6)){
	      			?>
	      			<tr>
		      			<td><input type="checkbox" class="chk_boxes1" name="id[]" value="<?php echo $row6['subj_id']?>"></td>
		      			<td><?php echo $row6['subject']?><input type="hidden" name="subj_id[]" value="<?php echo $row6['subj_id']?>"></td>
		      			<td><?php echo $row6['subj_course']?><input type="hidden" name="subject[]" value="<?php echo $row6['subject']?>"></td>
		      			<td><?php echo $row6['subj_major']?><input type="hidden" name="subj_course[]" value="<?php echo $row6['subj_course']?>"></td>
		      			<td><?php echo $row6['subj_unit']?><input type="hidden" name="subj_major[]" value="<?php echo $row6['subj_major']?>"></td>
		      			<td class="hidden"><input type="text" name="subj_unit[]" value="<?php echo $row6['subj_unit']?>"></td>
		      			<td class="hidden"><input type="text" name="student_id[]" value="<?php echo $row['student_id']?>"></td>
		      		</tr>
	      			<?php
	      				}
	      			}



	       			?>
	       			<!-- <?php
	       				include "db_conn.php";
	       				
	       				$i = 0;
	       				$Id = $_GET['id'];
	       				
	       				// Pagkuha ng data ng student

	       				$sql = mysqli_query($conn, "SELECT * FROM tbl_masteralapproval");
	       				while($row = mysqli_fetch_array($sql)){
	       					$student_id = $row['student_id'];
	       					$course = $row['course'];


	      					$sql2 = mysqli_query($conn,"SELECT * FROM tbl_masteral_grading WHERE student_id='$student_id'");
	      					while($row2 = mysqli_fetch_array($sql2)){

	      					if($row2['subj_grade']=='Failed'){
	      						$subject1 = $row2['subject'];

	      						$sql4 = mysqli_query($conn, "SELECT * FROM tbl_masteral_subject WHERE subj_course='$course' AND subject='$subject1'");
	      						while ($row4 = mysqli_fetch_array($sql4)) {
	      			?>
	      			<tr>
	      				<td style="background-color:red; color:white;"><input type="checkbox" name=""></td>
	      				<td style="color:red;"><?php echo $row4['subject']?></td>
	      				<td style="color:red;"><?php echo $row4['subj_course']?></td>
	      				<td style="color:red;"><?php echo $row4['subj_major']?></td>
	      				<td style="color:red;"><?php echo $row4['subj_unit']?></td>
	      			</tr>
	      			<?php
	       						}
	       						echo $subject2 = $row2['subject'];
	      						$sql1 = mysqli_query($conn,"SELECT * FROM tbl_masteral_subject WHERE subj_course='$course' AND subject!='$subject2'");
	       						while($row1 = mysqli_fetch_array($sql1)){
	       								
	       			?>
	       			<tr>
	       				<td><input type="checkbox" name="id[]" value="<?php echo $row1['subj_id']?>"></td>
	       				<td><?php echo $row1['subject']?><input type="hidden" name="subj_id[]" value="<?php echo $row1['subj_id']?>"></td>
	       				<td><?php echo $row1['subj_course']?><input type="hidden" name="subject[]" value="<?php echo $row1['subject']?>"></td>
	       				<td><?php echo $row1['subj_major']?><input type="hidden" name="subj_course[]" value="<?php echo $row1['subj_course']?>"></td>
	       				<td><?php echo $row1['subj_unit']?><input type="hidden" name="subj_major[]" value="<?php echo $row1['subj_major']?>"></td>
	       				<td class="hidden"><input type="text" name="subj_unit[]" value="<?php echo $row1['subj_unit']?>"></td>
	       				<td class="hidden"><input type="text" name="student_id[]" value="<?php echo $row['student_id']?>"></td>
	       			</tr>

	       			<?php
	       					}
	       					}else if ($row2['subj_grade'] == 'Passed') {
	      							$subject = $row2['subject'];

	      							$sql3 = mysqli_query($conn,"SELECT * FROM tbl_masteral_subject WHERE subj_course='$course' AND subject='$subject'");
	      							while($row3 = mysqli_fetch_array($sql3)){
	      			?>
	      			<tr>
	      				<td style="background-color:green; color:white;"><input type="checkbox" disabled name=""></td>
	      				<td style="color:green;"><?php echo $row3['subject']?></td>
	      				<td style="color:green;"><?php echo $row3['subj_course']?></td>
	      				<td style="color:green;"><?php echo $row3['subj_major']?></td>
	      				<td style="color:green;"><?php echo $row3['subj_unit']?></td>
	      			</tr>
	      			<?php
	      						}
	      					}
	      				}
	      				$sql1 = mysqli_query($conn,"SELECT * FROM tbl_masteral_subject WHERE subj_course='$course'");
	       						while($row1 = mysqli_fetch_array($sql1)){
	       								
	       			?>
	       			<tr>
	       				<td><input type="checkbox" name="id[]" value="<?php echo $row1['subj_id']?>"></td>
	       				<td><?php echo $row1['subject']?><input type="hidden" name="subj_id[]" value="<?php echo $row1['subj_id']?>"></td>
	       				<td><?php echo $row1['subj_course']?><input type="hidden" name="subject[]" value="<?php echo $row1['subject']?>"></td>
	       				<td><?php echo $row1['subj_major']?><input type="hidden" name="subj_course[]" value="<?php echo $row1['subj_course']?>"></td>
	       				<td><?php echo $row1['subj_unit']?><input type="hidden" name="subj_major[]" value="<?php echo $row1['subj_major']?>"></td>
	       				<td class="hidden"><input type="text" name="subj_unit[]" value="<?php echo $row1['subj_unit']?>"></td>
	       				<td class="hidden"><input type="text" name="student_id[]" value="<?php echo $row['student_id']?>"></td>
	       			</tr>

	       			<?php
	       				}
	      			}

	       			?> -->
	       			</tbody>
	       		</table>
	       		<br/>
	       		<hr class="bg-danger border-4 border-top border-danger">
	       		<br/>
	       		
	       		<button name='Save' class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Save</button>

	       	</form>
		</div>
		
		<div class="col-sm-1"></div>
	</div>
	<br/>
    <br/>
    <br/>
    <br/>
<script>
	$(function() {
    $('.chk_boxes').click(function() {
        $('.chk_boxes1').prop('checked', this.checked);
    });
});	
</script>

</body>
</html>
