<?php 

if (isset($_GET['id'])) {
	include "../db_conn.php";

	function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		} 

		$Id = validate($_GET['id']);

		$sql = "SELECT * FROM tbl_enrolledcs WHERE id=$Id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		}
		else{
			header("Location:student.php");
		}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

  

</head>
<body>
	
	<div class="container">
		<br/>
		<h3 class="display-1"> SUBJECT LIST </h3>
		<hr class="bg-dark border-4 border-top">
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

		<input type="hidden" name="student_id" value="<?=$row['id']?>">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
		        	<th>#</th>
					<th>Subject Code</th>
					<th>Course</th>
					<th>Description</th>
					<th>Unit</th>
					<th>Year</th>
					<th>Semester</th>
		        </tr>
			</thead>
			<tbody>
				<?php
					include "../db_conn.php";
					$Id = validate($_GET['id']);

					$sql = mysqli_query($conn, "SELECT * FROM tbl_enrolledcs WHERE id=$Id") or die(mysqli_error());
						
					while ($fetch = mysqli_fetch_assoc($sql)) {
		
					echo"<input type='hidden' name='student_id' value='".$fetch['student_id']."'";
					$student_id = $fetch['student_id'];

					$i = 0;
					$query = mysqli_query($conn, "SELECT * FROM `tbl_student_subjects` WHERE `student_id`='$student_id'") or die(mysqli_error());
					while ($rows = mysqli_fetch_array($query)) {
						$i++
				?>
				<tr>
					<td scope="row"><?=$i?></td>
					<td><?php echo $rows['subj_code']?></td>
					<td><?php echo $rows['student_subj_course']?></td>
					<td><?php echo $rows['student_subj_description']?></td>
					<td><?php echo $rows['student_subj_unit']?></td>
					<td><?php echo $rows['student_subj_year']?></td>
					<td><?php echo $rows['student_subj_sem']?></td>
				</tr>
				<?php
					}
				}
				?>
				
			</tbody>
		</table>
	</div>

</body>
</html>