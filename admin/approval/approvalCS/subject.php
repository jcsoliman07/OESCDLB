<?php
	include "db_conn.php";
	if (isset($_GET['id'])) {
		$update_id = $_GET['id'];
		$sql_update = mysqli_query($conn, "UPDATE `tbl_approvalstudent` SET `notif`=1 WHERE `id`='$update_id'");
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

  	<style>
  		.wrapp{
            margin: 0;    
        }
        .wrapp .wrapp-second{
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 30px;
            top: 25px;
            bottom: 30px;
            max-width: 100%;
            padding: 15px;
            position: relative;
            background-color: white;
            box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
        }
    </style>

</head>
<body>
	<div class="container-fluid">
		<div class="wrapp">
			<div class="col-sm-12">
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
			 		include "../db_conn.php";

			 		$Id = $_GET['id'];
			 		 // WHERE id=$Id
			 		$query = mysqli_query($conn, "SELECT * FROM tbl_approvalstudent WHERE id = '$Id'") or die(mysqli_error());
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
					<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>">
					<input type="hidden" name="semester" class="form-control" value="<?php echo $row['semester'];?>">
					<input type="hidden" name="enrolled_date" class="form-control" value="<?php echo $row['enrolled_date'];?>">
					<input type="hidden" name="a_year" class="form-control" value="<?php echo $row['academic_year'];?>">
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
				<div class="wrapp-second">
				<h2><span class="fas fa-clipboard"></span> Subject List </h2>
		       	<hr class="bg-danger border-4 border-top border-danger">

		       	<br/>


		       		<input type="checkbox" class="chk_boxes" label="check all">   Select all
		       		<br>
		       		<br>
		       		<table class="table table-sm table-bordered table-hover">
		       			<thead>
		       				<th>Action</th>
		       				<th>Code</th>
	       					<th>Description</th>
	       					<th>Unit</th>
	       					<th>Year</th>
	       					<th>Semester</th>
		       			</thead>
		       			<tbody>
		       			<?php
		       				include "../db_conn.php";
		       				// $course = 'Bachelor of Science in Computer Science';
		       				$i = 0;
		       				$Id = $_GET['id'];
		       				
		       				// Pagkuha ng data ng student

		       				$query1 = mysqli_query($conn, "SELECT * FROM tbl_approvalstudent WHERE id = '$Id'")or die(mysqli_error($conn));

		       				while($result1 = mysqli_fetch_array($query1)){
		       					// echo $result['year'];
		       					// echo $result['semester'];
		       					$year = $result1['year'];
		       					$sem = $result1['semester'];
		       					$student_id = $result1['student_id'];
		       					$course = $result1['course'];
		       					$major = $result1['major'];

		       					// Pagkuha ng semester

		       					$query2 = mysqli_query($conn, "SELECT * FROM tbl_semester")or die(mysqli_error($conn));

		       					while($result2 = mysqli_fetch_array($query2)){
		       						if ($result2['sem_set'] == 1) {
		       							if ($result2['semester'] == $sem) {
				       						$semester = $result2['semester'];
				       				
				       				// Pagkuha sa subject na failed

				       				$query3 = mysqli_query($conn, "SELECT * FROM tbl_grading WHERE `student_id` = '$student_id'");

				       				while ($result3 = mysqli_fetch_array($query3)) {

				       					if ($result3['subj_grade'] == 'Failed') {
				       						$subj_code = $result3['subj_code'];
				       						$subj_grade = $result3['subj_grade'];			  

				       			// Subject na Failed ang Prereq

				       			$query4 = mysqli_query($conn,"SELECT * FROM tbl_subjects WHERE `subj_year`='$year' AND `subj_semester`='$semester' AND `subj_course`='$course' AND `subj_major` = '$major'");
				       			while ($result4 = mysqli_fetch_array($query4)) {
				       				if ($result4['subj_prereq'] == $subj_code ) {
				       	?>

				       	<tr>
				       		<td style="background-color: red; color: white;">
				       			<input type="checkbox" name="" disabled>
				       		</td>
				       		<td style="color: red;">
				       			<?php echo $result4['subj_code']?>
				       		</td>
				       		<td style="color: red;">
				       			<?php echo $result4['subj_description']?>
				       		</td>
				       		<td style="color: red;">
				       			<?php echo $result4['subj_unit']?>
				       		</td>
				       		<td style="color: red;">
				       			<?php echo $result4['subj_year']?>
				       		</td>
				       		<td style="color: red;">
				       			<?php echo $result4['subj_semester']?>
				       		</td>
				       	</tr>
				       	<?php
				       				}
				       			}

				       			$query6 = mysqli_query($conn,"SELECT * FROM tbl_subjects WHERE `subj_year`!='$year' AND `subj_semester`='$semester' AND `subj_course`='$course' AND `subj_major` = '$major'");
				       			while($result6 = mysqli_fetch_array($query6)){
				       				if ($result6['subj_code'] == $subj_code) {
				       	?>
				       	 <tr>
				       		<td>
				       			<input type="checkbox" class="chk_boxes1" name="subj_id[]" value="<?php echo $result6['subj_code']?>">
				       		</td>
				       		<td>
				       			<?php echo $result6['subj_code']?>
				       			<input type="hidden" name="subj_code[]" value="<?php echo $result6['subj_code']?>">
				       		</td>
				       		<td>
				       			<?php echo $result6['subj_description']?>
				       			<input type="hidden" name="subj_description[]" value="<?php echo $result6['subj_description']?>">
				       		</td>
				       		<td>
				       			<?php echo $result6['subj_unit']?>
				       			<input type="hidden" name="subj_unit[]" value="<?php echo $result6['subj_unit']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="hidden" name="subj_course[]" value="<?php echo $result6['subj_course']?>">
				       		</td>
				       		<td>
				       			<?php echo $result6['subj_year']?>
				       			<input type="hidden" name="subj_year[]" value="<?php echo $result1['year']?>">
				       		</td>
				       		<td>
				       			<?php echo $result6['subj_semester']?>
				       			<input type="hidden" name="subj_semester[]" value="<?php echo $result6['subj_semester']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="hidden" name="subj_prereq[]" value="<?php echo $result6['subj_prereq']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="text" name="student_id[]" value="<?php echo $result1['student_id']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="text" name="lname1[]" value="<?php echo $result1['lname']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="text" name="fname1[]" value="<?php echo $result1['fname']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="text" name="mname1[]" value="<?php echo $result1['mname']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="text" name="a_year1[]" value="<?php echo $result1['academic_year']?>">
				       		</td>
				       	</tr>

				       	<?php				
				       				}
				       			}

				       		}else if($result3['subj_grade'] == 'Passed'){

				       			$subj_code1 = $result3['subj_code'];
				       			
				       			$query7 = mysqli_query($conn, "SELECT * FROM tbl_subjects WHERE `subj_year`='$year' AND `subj_semester`='$semester' AND `subj_course`='$course' AND `subj_major` = '$major'");

				       			while($result7 = mysqli_fetch_array($query7)){
				       				if ($result7['subj_prereq'] == $subj_code1) {
				       				
				       	?>
				       	<tr>
				       		<td>
				       			<input type="checkbox" class="chk_boxes1" name="subj_id[]" value="<?php echo $result7['subj_code']?>">
				       		</td>
				       		<td>
				       			<?php echo $result7['subj_code']?>
				       			<input type="hidden" name="subj_code[]" value="<?php echo $result7['subj_code']?>">
				       		</td>
				       		<td>
				       			<?php echo $result7['subj_description']?>
				       			<input type="hidden" name="subj_description[]" value="<?php echo $result7['subj_description']?>">
				       		</td>
				       		<td>
				       			<?php echo $result7['subj_unit']?>
				       			<input type="hidden" name="subj_unit[]" value="<?php echo $result7['subj_unit']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="hidden" name="subj_course[]" value="<?php echo $result7['subj_course']?>">
				       		</td>
				       		<td>
				       			<?php echo $result7['subj_year']?>
				       			<input type="hidden" name="subj_year[]" value="<?php echo $result7['subj_year']?>">
				       		</td>
				       		<td>
				       			<?php echo $result7['subj_semester']?>
				       			<input type="hidden" name="subj_semester[]" value="<?php echo $result7['subj_semester']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="hidden" name="subj_prereq[]" value="<?php echo $result7['subj_prereq']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="hidden" name="student_id[]" value="<?php echo $result1['student_id']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="text" name="lname1[]" value="<?php echo $result1['lname']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="text" name="fname1[]" value="<?php echo $result1['fname']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="text" name="mname1[]" value="<?php echo $result1['mname']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="text" name="a_year1[]" value="<?php echo $result1['academic_year']?>">
				       		</td>
				       	</tr>

				       	<?php
				       				}
				       			}
				       		}
				       	}	
				       			// Subjects na default by Sem and Year and Course pero naka condition sa failed na subjects
				       			// $query6 = mysqli_query($conn, "SELECT * FROM tbl_grading WHERE `student_id` = '$student_id' AND `subj_sem`='$semester'");
				       			// while ($result6 = mysqli_fetch_array($query6)) {
				       			// 	$subj_code1 = $result6['subj_code'];
				       			// }
				       			$query5 = mysqli_query($conn, "SELECT * FROM tbl_subjects WHERE `subj_year`='$year' AND `subj_semester`='$semester' AND `subj_course`='$course' AND `subj_major` = '$major'");
				       			while ($result5 = mysqli_fetch_array($query5)) {
				       				// $none = "None";
				       				if ($result5['subj_prereq'] == 'None') {
				       	?>
				       <tr>
				       		<td>
				       			<input type="checkbox" class="chk_boxes1" name="subj_id[]" value="<?php echo $result5['subj_code']?>">
				       		</td>
				       		<td>
				       			<?php echo $result5['subj_code']?>
				       			<input type="hidden" name="subj_code[]" value="<?php echo $result5['subj_code']?>">
				       		</td>
				       		<td>
				       			<?php echo $result5['subj_description']?>
				       			<input type="hidden" name="subj_description[]" value="<?php echo $result5['subj_description']?>">
				       		</td>
				       		<td>
				       			<?php echo $result5['subj_unit']?>
				       			<input type="hidden" name="subj_unit[]" value="<?php echo $result5['subj_unit']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="hidden" name="subj_course[]" value="<?php echo $result5['subj_course']?>">
				       		</td>
				       		<td>
				       			<?php echo $result5['subj_year']?>
				       			<input type="hidden" name="subj_year[]" value="<?php echo $result5['subj_year']?>">
				       		</td>
				       		<td>
				       			<?php echo $result5['subj_semester']?>
				       			<input type="hidden" name="subj_semester[]" value="<?php echo $result5['subj_semester']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="hidden" name="subj_prereq[]" value="<?php echo $result5['subj_prereq']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="hidden" name="student_id[]" value="<?php echo $result1['student_id']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="text" name="lname1[]" value="<?php echo $result1['lname']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="text" name="fname1[]" value="<?php echo $result1['fname']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="text" name="mname1[]" value="<?php echo $result1['mname']?>">
				       		</td>
				       		<td class="hidden">
				       			<input type="text" name="a_year1[]" value="<?php echo $result1['academic_year']?>">
				       		</td>
				       	</tr>
				       	<?php
											}
				       					}
				       				}
				    			}
		       				}
		       			}
		       			?>
		       			</tbody>
		       		</table>
		       		<br/>
		       		<hr class="bg-danger border-4 border-top border-danger">
		       		<br/>
		       		
		       		<button onclick="checker()" name='Save' class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Save</button>

		       	</form>
		       	</div>
		    </div>
		</div>
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

<script>
  function checker() {
    var result = confirm('Are you sure you want to continue?');
    if (result == false){
      event.preventDefault();
    }
  }
</script>


</body>
</html>