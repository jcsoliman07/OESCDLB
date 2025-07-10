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
	<div class="container my-5">
		<div class="col-sm-1"></div>

		<div class="col-sm-10">
			<h2><span class="fas fa-file-alt"></span> Student Information </h2>
			<hr class="bg-danger border-4 border-top border-danger">
			<br/>

			<?php
		 	if (isset($_GET['id'])) {
		 		include "../db_conn.php";

		 		$Id = $_GET['id'];

		 		$query = mysqli_query($conn, "SELECT * FROM tbl_approvalstudent WHERE id=$Id") or die(mysqli_error());
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
					<label class="text h4"><?php echo $row['address']?></label>
				</div>
				<div class="col-sm-5">
					<label class="text h4">Mobile Number: </label>
					<label class="text h4"><?php echo $row['mnum']?></label>
				</div>
			</div>
			<?php
				}
			}
			?>
			<br/>
			<br/>
			<h2><span class="fas fa-clipboard"></span> Subject List </h2>
	       	<hr class="bg-danger border-4 border-top border-danger">

	       	<br/>

	       	<form method="post" action="addsubject.php">

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
	       				$course = 'BSCS';
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

	       					// Pagkuha ng semester

	       					$query2 = mysqli_query($conn, "SELECT * FROM tbl_semester")or die(mysqli_error($conn));

	       					while($result2 = mysqli_fetch_array($query2)){
	       						if ($result2['sem_set'] == 1) {
	       							if ($result2['semester'] == $sem) {
			       						$semester = $result2['semester'];
			       		

			       			$query3 = mysqli_query($conn, "SELECT * FROM tbl_subjects WHERE `subj_year` ='$year' AND `subj_sem`='$semester' AND `subj_coure`='$course'");
			       			while($result3 = mysqli_fetch_array($query3)){
			       	?>
			       	<tr>
			       		<td>
			       			<?php echo $result3['subj_code'];?>
			       		</td>
			       	</tr>

			       	<?php
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