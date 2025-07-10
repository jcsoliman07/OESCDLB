<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

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
			<h3><span class="far fa-clipboard"></span> LIST OF ASSIGNED INSTRUCTOR</h3>
			<hr class="bg-dark border-4 border-top">
			<div class="row1">

			<?php
				$id = $_GET['id'];
				// echo $id;
				echo "<a href='add_assign_ins_modal.php?id=".$id."' type='button' name='button1' id='button1' class='btn btn-primary btn-sm' data-toggle='tooltip' data-placement='top' title='Assign Instructor'><span class='fas fa-user-check'></span>Assign Instructor</a>";
			?>

			</div>
			<br>
			<div class="height10">
			</div>
			<form method="POST" action="archive.php">
			<div class="row1">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>#</th>
						<th>Name</th>
						<th>Position</th>
						<th>Status</th>
					</thead>
					<tbody style="font-size:13px">
						<?php
							
							include_once('connection.php');
							$i=0;
							$s = mysqli_query($conn, "SELECT * FROM tbl_subjects WHERE subj_id='$id'");
							while ($r = mysqli_fetch_array($s)) {
								$subj_code = $r['subj_code'];
								// echo $subj_code;

							$sql = "SELECT * FROM tbl_instructor_subjects WHERE subj_code='$subj_code'";
 
							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								$i++;

								$ins_id = $row['instructor_id'];

								$sql1 = "SELECT * FROM tbl_instructor WHERE ins_id = $ins_id ORDER BY `ins_id` ASC";

								$query = $conn->query($sql1);
								while($row1 = $query->fetch_assoc()){

									echo 
									"<tr>
										<td>".$i."<input type='checkbox' name='id[]' checked='true' style='display:none;' value='".$row['instructor_id']."'></td>

										<td>".$row1['ins_name']."<input type='hidden' name='instructor_id[]' value='".$row['instructor_id']."'></td>
										
										<td>".$row1['ins_description']."<input type='hidden' name='subj_id[]' value='".$row['subj_id']."'></td>

										<td>".$row1['ins_status']."<input type='hidden' name='subj_code[]' value='".$row['subj_code']."'></td>

										<td class='hidden'><input type='text' name='subj_description[]' value='".$row['subj_description']."'></td>

										<td class='hidden'><input type='text' name='subj_unit[]' value='".$row['subj_unit']."'></td>
									</tr>";

								}
								// include('edit_delete_modal.php');
							}
						}
						?>
					</tbody>
				</table>
				<button onclick="checker()" name='Save' class='btn btn-warning'><span class='glyphicon glyphicon-save'></span> Archive</button>
			</div>
		</form>
		</div>
	</div>
</div>

<br>
<br>
 
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

<script>
    $(document).ready(function(){
      $('#button1').tooltip();
    })
</script>

<script>
  function checker() {
    var result = confirm('Are you sure you want to Archive the data?');
    if (result == false){
      event.preventDefault();
    }
  }
</script>

</body>
</html>