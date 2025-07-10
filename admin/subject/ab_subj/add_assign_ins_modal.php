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

	<div class="col-sm-10">
		<h2><span class="fas fa-file-alt"></span> Subject Information </h2>
		<hr class="bg-danger border-4 border-top border-danger">

		<?php
			if (isset($_GET['id'])) {
				include "connection.php";

				$Id = $_GET['id'];

				$q1 = mysqli_query($conn,"SELECT * FROM tbl_subjects WHERE subj_id='$Id'") or die(mysqli_error());
				while($row = mysqli_fetch_array($q1)){
		?>
			<div class="form-group row">
				<input type="hidden" name="id" value="<?php echo $row['subj_id']?>"/>
				<div class="col-sm-5">
					<label class="text h4">Subject Code: </label>
					<label class="text h4"><?php echo $row['subj_code']?></label>
				</div>
				<div class="col-sm-5">
					<label class="text h4">Subject Description: </label>
					<label class="text h4"><?php echo $row['subj_description']?></label>
				</div>
			</div>
		<?php
				}
			}
		?>
		<br/>
		<h2><span class="fas fa-clipboard"></span> Instructor List </h2>
	    <hr class="bg-danger border-4 border-top border-danger">
	    <br/>
		<form method="post" action="addsubject.php">
			
			<table id="myTable" class="table table-sm table-bordered table-hover">
				<thead>
					<th>Action</th>
					<th>Instructor ID</th>
					<th>Name</th>
					<th>Position</th>
					<th>Status</th>
				</thead>

				<tbody>
				<?php
					include "connection.php";
					$Id = $_GET['id'];

					echo "<input type='hidden' name='subject_id' value='".$Id."'>";

					$query2 = mysqli_query($conn, "SELECT * FROM tbl_subjects WHERE subj_id='$Id'");
					while($result1 = mysqli_fetch_array($query2)){

					$query3 = "SELECT * FROM tbl_instructor";
					$result2 = $conn->query($query3);
					while($r=$result2->fetch_assoc()){
						echo"
						<tr>
							<td><input type='checkbox' name='id[]' value='".$r['ins_id']."'></td>
							<td>".$r['ins_id']."<input type='hidden' name='ins_id[]' value='".$r['ins_id']."'></td>
							<td>".$r['ins_name']."<input type='hidden' name='subj_id[]' value='".$result1['subj_id']."'></td>
							<td>".$r['ins_description']."<input type='hidden' name='subj_code[]' value='".$result1['subj_code']."'></td>
							<td>".$r['ins_status']."<input type='hidden' name='subj_unit[]' value='".$result1['subj_unit']."'></td>
							<td class='hidden'><input type='hidden' name='subj_description[]' value='".$result1['subj_description']."'></td>
						</tr>";
					}
				}

				?>
				</tbody>

			</table>
			<br/>
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