<?php
	include "../db_conn.php";
	if (isset($_GET['id'])) {
	include "../db_conn.php";

	function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		} 

		$Id = validate($_GET['id']);

		$sql = "SELECT * FROM tbl_student WHERE id=$Id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		}
		else{
			header("Location:index.php");
		}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" href="../assets/css/style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>

	<div class="container my-5">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<h2><span class="fas fa-file-alt"></span> Student Information </h2>
				<hr class="bg-danger border-4 border-top border-danger">
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

				<?php
			 	if (isset($_GET['id'])) {
			 		include "../db_conn.php";

			 		$Id = $_GET['id'];
			 		$query = mysqli_query($conn, "SELECT * FROM tbl_student WHERE id = '$Id'") or die(mysqli_error());
		                while($row = mysqli_fetch_array($query)){
				?>

				<div class="form-group row" style="margin-left: 50px">
					<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
					<div class="col-sm-5">
						<label style="font-weight:bold" class="text h4">Name: </label>
						<label style="font-weight: lighter;" class="text h4"><?php echo $row['fname']." ".$row['mname']." ".$row['lname']?></label>
					</div>
					<div class="col-sm-5">
						<label style="font-weight:bold" class="text h4">Year: </label>
						<label style="font-weight: lighter;" class="text h4"><?php echo $row['year']?></label>
					</div>
				</div>

				<div class="form-group row" style="margin-left: 50px">
					<div class="col-sm-5">
						<label style="font-weight:bold" class="text h4">Address: </label>
						<label style="font-weight: lighter;" class="text h4"><?php echo $row['house_street']." ".$row['barangay']." ".$row['city']." ".$row['province']?></label>
					</div>
					<div class="col-sm-5">
						<label style="font-weight:bold" class="text h4">Mobile Number: </label>
						<label style="font-weight: lighter;" class="text h4"><?php echo $row['mnum']?></label>
					</div>
				</div>
				<br/>

				<h3><span class="fas fa-book-open"></span> SUBJECTS LIST</h3>
				<hr class="bg-danger border-4 border-top border-danger">
				<br/>

				<form method="post" action="grade.php">
				<input type="checkbox" class="chk_boxes" label="check all">   Select all
	       		<br>
	       		<br>
	       		<label style="color: red; font-style: italic; font-weight: lighter;">NOTE: if <p1 style="font-weight: bold;">Status</p1> is <p2 style="font-weight: bold;"> checked </p2> it means <p3 style="font-weight: bold;"> ready to ARCHIVE</p3>, if not it means <p4 style="font-weight: bold;"> not ready</p4></label>
	       		<br>
	       		<br>
				<table class="table table-sm table-bordered table-hover">
					<thead>
						<th>Status</th>
						<th>Code</th>
						<th>Description</th>
						<th>Unit</th>
						<th>Semester</th>
						<th>Prelim</th>
						<th>Midterm</th>
						<th>Prefi</th>
						<th>Final</th>
					</thead>
					<tbody>
					<?php
						include "../db_conn.php";
						$i=0;
						$student_id = $row['student_id'];
						$year = $row['year'];

						$q = mysqli_query($conn, "SELECT * FROM tbl_semester") or die(mysqli_error($conn));
						while ($r = mysqli_fetch_array($q)) {

							if ($r['sem_set']==1) {
								echo"<input type='hidden' name='semester' value='".$r['semester']."'>";
			       				echo "<input type='hidden' name='sem_set' value='".$r['sem_set']."'>";

			       				$semester = $r['semester'];
			       				
			       				$query = mysqli_query($conn, "SELECT * FROM `tbl_student_subjects` WHERE `student_id`='$student_id'")or die(mysqli_error($conn));
								
								while($fetch = mysqli_fetch_array($query)){
									// $i++;
					?>
					
						<tr>
							<td>
								<input type="checkbox" name="subj_id[]" class="chk_boxes1" value="<?php echo $fetch['subj_code']?>">
							</td>
							
							<td>
								<?php echo $fetch['subj_code']?>
								<input type="hidden" name="subj_code[]" value="<?php echo $fetch['subj_code']?>">
							</td>
							<td>
								<?php echo $fetch['student_subj_description']?>
								<input type="hidden" name="subj_description[]" value="<?php echo $fetch['student_subj_description']?>">
							</td>
							<td class="hidden">
								<?php echo $fetch['student_subj_course']?>
								<input type="hidden" name="subj_course[]" value="<?php echo $fetch['student_subj_course']?>">
							</td>
							<td>
								<?php echo $fetch['student_subj_unit']?>
								<input type="hidden" name="subj_unit[]" value="<?php echo $fetch['student_subj_unit']?>">
							</td>
							<td>
								<?php echo $fetch['student_subj_sem']?>
								<input type="hidden" name="subj_sem[]" value="<?php echo $fetch['student_subj_sem']?>">
							</td>
							<td>
								<?php echo $fetch['prelim']?>
								<input type="hidden" name="prelim[]" value="<?php echo $fetch['prelim']?>">
							</td>
							<td>
								<?php echo $fetch['midterm']?>
								<input type="hidden" name="midterm[]" value="<?php echo $fetch['midterm']?>">
							</td>
							<td>
								<?php echo $fetch['prefi']?>
								<input type="hidden" name="prefi[]" value="<?php echo $fetch['prefi']?>">
							</td>
							<td>
								<?php echo $fetch['final']?>
								<input type="hidden" name="final[]" value="<?php echo $fetch['final']?>">
							</td>
							<td class="hidden">
								<input type="hidden" name="subj_year[]" value="<?php echo $fetch['student_subj_year']?>">
							</td>
							<td class="hidden">
								<input type="hidden" name="subj_prereq[]" value="<?php echo $fetch['student_subj_prereq']?>">
							</td>
							<td class="hidden">
								<input type="hidden" name="academic_year[]" value="<?php echo $fetch['academic_year']?>">
							</td>
							<td class="hidden">
								<input type=" hidden" name="student_id[]" value="<?php echo $fetch['student_id']?>">
							</td>
							<td class="hidden">
								<input type=" hidden" name="lname[]" value="<?php echo $fetch['lname']?>">
							</td>
							<td class="hidden">
								<input type=" hidden" name="fname[]" value="<?php echo $fetch['fname']?>">
							</td>
							<td class="hidden">
								<input type=" hidden" name="mname[]" value="<?php echo $fetch['mname']?>">
							</td>
							
					<?php
						if (($fetch['final'] >= 75) AND ($fetch['final'] <=100)) {
							$remarks = 'Passed';
					?>
						<td class="hidden">
							<input type="text" name="subj_grade[]" value="<?php echo $remarks?>">
						</td>
					<?php
						}else{
							$remarks = 'Failed';
					?>
						<td class="hidden">
							<input type="text" name="subj_grade[]" value="<?php echo $remarks?>">
						</td>
					<?php
						}

					?>

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
				<br/>

				<button onclick="checker()" name='Save' class='btn btn-warning'><span class='glyphicon glyphicon-save'></span> Archive</button>

				</form>
				<br/>
				<br/>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>

<script>
	$(function() {
    $('.chk_boxes').click(function() {
        $('.chk_boxes1').prop('checked', this.checked);
    });
});	
</script>

<script>
  function checker() {
    var result = confirm('Are you sure you want to Archive?');
    if (result == false){
      event.preventDefault();
    }
  }
</script>

</body>
</html>