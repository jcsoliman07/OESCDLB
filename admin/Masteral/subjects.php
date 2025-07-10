<?php
	if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		} 

		$Id = validate($_GET['id']);

		$sql = "SELECT * FROM tbl_masteralstudent WHERE id=$Id";
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
			<div class="col-sm-12">
				<h3><span class="fas fa-book-open"></span> SUBJECTS LIST</h3>
				<hr class="bg-danger border-4 border-top border-danger">
				<br/>

				<form method="post" action="grade.php">
				<input type="checkbox" class="chk_boxes" label="check all">   Select all
	       		<br>
	       		<br>
	       		<label style="color: red; font-style: italic; font-weight: lighter;">NOTE: if <p1 style="font-weight: bold;">Status</p1> is <p2 style="font-weight: bold;"> checked </p2> it means <p3 style="font-weight: bold;"> PASSED </p3>, if not it means <p4 style="font-weight: bold;">FAILED</p4></label>
	       		<br>
	       		<br>
				<table class="table table-sm table-bordered table-hover">
					<thead>
						<th>Status</th>
						<th>Code</th>
						<th>Description</th>
						<th>Course</th>
						<th>Unit</th>
					</thead>
					<tbody>
					<?php
						include "db_conn.php";
						$i=0;
						$student_id = $row['student_id'];
			       				
			       		$query = mysqli_query($conn, "SELECT * FROM `tbl_masteralstudent_subject` WHERE `student_id`='$student_id'")or die(mysqli_error($conn));
						while($fetch = mysqli_fetch_array($query)){
									// $i++;
					?>
					
						<tr>
							<td>
								<input type="checkbox" name="id[]" class="chk_boxes1" value="<?php echo $fetch['subj_id']?>">
							</td>
							<td class="hidden">
								<input type="hidden" name="subj_grade[]" value="Passed">
							</td>
							<td class="hidden">
								<input type="hidden" name="subj_grade1[]" value="Failed">
							</td>
							<td>
								<?php echo $fetch['subject']?>
								<input type="hidden" name="subj_id[]" value="<?php echo $fetch['subj_id']?>">
							</td>
							<td>
								<?php echo $fetch['subj_course']?>
								<input type="hidden" name="subject[]" value="<?php echo $fetch['subject']?>">
							</td>
							<td>
								<?php echo $fetch['subj_major']?>
								<input type="hidden" name="subj_course[]" value="<?php echo $fetch['subj_course']?>">
							</td>
							<td>
								<?php echo $fetch['subj_unit']?>
								<input type="hidden" name="subj_major[]" value="<?php echo $fetch['subj_major']?>">
							</td>
							<td class="hidden">
								<input type="hidden" name="subj_unit[]" value="<?php echo $fetch['subj_unit']?>">
							</td>
							<td class="hidden">
								<input type="hidden" name="student_id[]" value="<?php echo $fetch['student_id']?>">
							</td>
						</tr>
					
					<?php
					}
					?>
					</tbody>
				</table>
				<br/>
				<br/>

				<button name='Save' class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Submit</button>

				</form>
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

</body>
</html>