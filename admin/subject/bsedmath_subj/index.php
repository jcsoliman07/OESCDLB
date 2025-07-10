<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>C</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
	<style>
		body{
			background-color: rgba(0, 0, 0, 0.1);
		}
		.wrapp{
	      margin-left: 10px;
	      margin-right: 10px;
	      padding: 10px;
	      top: 10px;
	      bottom: 10px;
	      max-width: 100%;
	      max-height: 100%;
	      position: relative;
	      background-color: white;
	      box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
	    }
	    .wrapp .row1{
	      margin-left: 15px;
	      margin-right: 15px;
	      padding-bottom: 20px;
	      position: relative;
	      max-width: 100%;
	    }
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="wrapp">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<h3><span class="far fa-clipboard"></span> LIST OF SUBJECTS FOR AB - ECONOMICS</h3>
			<hr class="bg-dark border-4 border-top">
			<div class="row1">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
				<!-- <a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a> -->
			</div>
			<br>
			<div class="height10">
			</div>
			<div class="row1">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>#</th>
						<th>Subject</th>
						<th>Description</th>
						<th>Courses</th>
						<th>Unit</th>
						<th>Pre-req</th>
						<th>Year</th>
						<th>Semester</th>
						<th>Action</th>
					</thead>
					<tbody style="font-size:13px">
						<?php
							$i=0;
							include_once('connection.php');
							$course = 'Bachelor of Secondary Education';
							$major = "Mathematics";
							
							$sql = "SELECT * FROM tbl_subjects WHERE subj_course='$course' AND subj_major = '$major'";
 
							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								$i++;
								echo 
								"<tr>
									<td>".$i."<input type='hidden' value=".$row['subj_id']."</td>
									<td><a href='student_list.php?subj_code=".$row['subj_code']."' style='color: green; text-decoration: none;'>".$row['subj_code']."</td>
									<td>".$row['subj_description']."</td>
									<td>".$row['subj_course']."</td>
									<td>".$row['subj_unit']."</td>
									<td>".$row['subj_prereq']."</td>
									<td>".$row['subj_year']."</td>
									<td>".$row['subj_semester']."</td>
									<td>
										<a href='#edit_".$row['subj_id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='#delete_".$row['subj_id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
										<a href='assign_inst.php?id=".$row['subj_id']."' type='button' name='button1' id='button1' class='btn btn-primary btn-sm' data-toggle='tooltip' data-placement='top' title='Assign Instructor'><span class='fas fa-users'></span></a>
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<br>
<br>
<?php include('add_modal.php') ?>
 
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
