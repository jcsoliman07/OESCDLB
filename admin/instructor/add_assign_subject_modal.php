<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>

<div class="container-fluid">
	<div class="col-sm-1"></div>

	<div class="col-sm-12">
		<h2><span class="fas fa-file-alt"></span> Instructor Information </h2>
		<hr class="bg-danger border-4 border-top border-danger">

		<?php
			if (isset($_GET['id'])) {
				include "db_conn.php";

				$Id = $_GET['id'];

				$q1 = mysqli_query($conn,"SELECT * FROM tbl_instructor WHERE ins_id='$Id'") or die(mysqli_error());
				while($row = mysqli_fetch_array($q1)){
		?>
			<div class="form-group row">
				<input type="hidden" name="id" value="<?php echo $row['ins_id']?>"/>
				<div class="col-sm-5">
					<label class="text h4">Name: </label>
					<label class="text h4"><?php echo $row['ins_name']?></label>
				</div>
				<div class="col-sm-5">
					<label class="text h4">Employment Status: </label>
					<label class="text h4"><?php echo $row['ins_status']?></label>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-5">
					<label class="text h4">Employment Position: </label>
					<label class="text h4"><?php echo $row['ins_description']?></label>
				</div>
			</div>
		<?php
				}
			}
		?>
		<br/>
		<h2><span class="fas fa-clipboard"></span> Subject List </h2>
	    <hr class="bg-danger border-4 border-top border-danger">
	    <br/>
		<form method="post" action="addsubject.php">
			<button name='Save' class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Save</button>
			<br><br>
			<table id="myTable" class="table table-sm table-bordered table-hover">
				<thead>
					<th>Action</th>
					<th>Subject Code</th>
					<th>Description</th>
					<th>Unit</th>
					<th>Pre-req</th>
					<th>Year</th>
					<th>Semester</th>
				</thead>

				<tbody>
				<?php
					include "db_conn.php";
					$Id = $_GET['id'];

					echo "<input type='hidden' name='instructor_id' value='".$Id."'>";

					$query4 = mysqli_query($conn, "SELECT * FROM tbl_academicyear");
					while($result3 = mysqli_fetch_array($query4)){

						if ($result3['status'] == 1) {
							// echo $result3['year'];
						

					// $query2 = mysqli_query($conn, "SELECT * FROM tbl_instructor");
					// while($result1 = mysqli_fetch_array($query2)){

					$query3 = "SELECT DISTINCT subj_id, subj_code, subj_description, subj_unit, subj_prereq, subj_year, subj_semester FROM tbl_subjects";
					$result2 = $conn->query($query3);
					while($r=$result2->fetch_assoc()){
						echo"
						<tr>
							<td><input type='checkbox' name='id[]' value='".$r['subj_id']."'></td>
							<td>".$r['subj_code']."<input type='hidden' name='subj_id[]' value='".$r['subj_id']."'></td>
							<td>".$r['subj_description']."<input type='hidden' name='subj_code[]' value='".$r['subj_code']."'></td>
							<td>".$r['subj_unit']."<input type='hidden' name='ins_id[]' value='".$Id."'></td>
							<td>".$r['subj_prereq']."<input type='hidden' name='subj_unit[]' value='".$r['subj_unit']."'></td>
							<td>".$r['subj_year']."<input type='hidden' name='academic_year[]' value='".$result3['year']."'></td>
							<td>".$r['subj_semester']."<input type='hidden' name='subj_description[]' value='".$r['subj_description']."'></td>
						</tr>";

							
						}
					}
				}

				?>
				</tbody>

			</table>
	       	<hr class="bg-danger border-4 border-top border-danger">
	       	<br/>
	       		
	       	<button name='Save' class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Save</button>
	       	<br/>
	       	<br/>
	       	<br/>
		</form>

	</div>

	<div class="col-sm-1"></div>
</div>
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();
 
    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>