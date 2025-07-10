<?php
	error_reporting(0);

	$conn = mysqli_connect("localhost", "root", "", "oescdlb") or die (mysqli_error());

	$sql = "SELECT DISTINCT subj_code, subj_description, subj_unit FROM `tbl_subjects`";		

	$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reports</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
</head>
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
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="wrapp">
				<div class="row">
					<h3 style="margin-left: 20px;"><span class="far fa-clipboard"></span> LIST OF ALL SUBJECTS</h3>
					<hr class="bg-dark border-4 border-top">
<!-- 					<label style="margin-left: 70%;">Search</label>
					<input type="text" name="search">
					<input type="submit" name="submit"> -->

					<div class="row1">
						<table id="myTable" class="table table-bordered table-striped">
							<thead>
								<th>Subject</th>
								<th>Description</th>
							</thead>
							<?php 
								while ($row = mysqli_fetch_assoc($result)){
									echo
									"<tr>
										<td><a href='grade.php?subj_code=".$row['subj_code']."' style='color: green; text-decoration: none;'>".$row['subj_code']."</td>
										<td>".$row['subj_description']."</td>
									</tr>";
								}
							?>
						</table>
					</div>

				</div>
			</div>
		</div>
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