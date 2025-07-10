<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js" crossorigin="anonymous"></script>
  	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
	<div class="container my-5">
		 <label class="h4" style="font-weight: bold;"><span class="far fa-clipboard"></span> STUDENT LIST</label>
		 <br>

		<hr class="border-4 border-top">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
					<th class="text-center" scope="col"> Student ID</th>
					<th class="text-center" scope="col"> Name</th>
					<th class="text-center" scope="col"> Course </th>
					<th class="text-center" scope="col"> Year </th>
					</tr>
				</thead>

				<tbody>
					<?php
						include "db_conn.php";
						$subj_code = $_GET['subj_code'];

						$query = mysqli_query($conn, "SELECT * FROM tbl_student_subjects WHERE subj_code = '$subj_code'");
						while($result = mysqli_fetch_array($query)){

					?>
					<tr>
						<td class="text-center"><?php echo $result['student_id']?></td>
						<td class="text-center"><?php echo $result['student_subj_course']?></td>
						<td class="text-center"><?php echo $result['student_subj_year']?></td>
						<td class="text-center"><?php echo $result['student_subj_sem']?></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
	</div>

</body>
</html>