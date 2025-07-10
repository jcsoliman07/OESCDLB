<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Grade Reports</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="print.css" media="print">

	<style>
		body {
		   background: #eeeeee;
		   font-family: 'Varela Round', sans-serif;
		}
		

		.student{
		   color: white;
		   padding-top: 1%;
		   padding-right: 1%;
		   padding-left: 2%;
		   padding-bottom: 1%;
		}
		.student:hover{
		   color: lightgreen;
		   text-decoration: none;
		}
		.un{
		   color: white;
		   padding-left: 70%;
		   font-size: 120%;
		   padding-top: 1%;
		   padding-right: 2%;
		   font-family: poppins;
		}
		.logout{
		   color:white;
		   margin-left: 90%;
		   margin-top: -3.1%;
		   padding-top: 1%;
		   padding-right: 2.1%;
		   padding-bottom: 1%;
		   padding-left: 2%;
		}
		.logout:hover{
		   color: lightgreen;
		   text-decoration: none;
		}
		.wrapp{
			margin-left: 60px;
			max-width: 90%;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
		.pr{
		padding: 2%;
		color: white;
	}
	.pr:hover {
		color: white;
		text-decoration: none;
	}
	</style>
</head>
<body>
	<header>
	<img src="header.png" style="width: 70%; height:110px; margin-left: 15%;">
	</header>

	<div class="container my5">
	<br>
	<h4 class="text-center">COLLEGE GRADING SHEET</h4>
	<br>
	<br>
	<div class="container my-5">
	<?php
			if (isset($_GET['subj_code'])) {
				include "connection.php";

				$subj_code = $_GET['subj_code'];

				$q1 = mysqli_query($conn,"SELECT * FROM tbl_subjects WHERE subj_code='$subj_code' LIMIT 1") or die(mysqli_error());

				while($row = mysqli_fetch_array($q1)){
					// echo $row['subj_code'];
	?>

		<div class="form-group row">
			<input type="hidden" name="id" value="<?php echo $row['subj_id']?>"/>
			<div class="col-sm-5">
				<label class="text h5"><b>Subject Code: </b></label>
				<label class="text h5"><?php echo $row['subj_code']?></label>
			</div>
			<div class="col-sm-5">
				<label class="text h5"><b>Description: </b></label>
				<label class="text h5"><?php echo $row['subj_description']?></label>
			</div>
			<div class="col-sm-5">
				<label class="text h5"><b>Semester: </b></label>
				<label class="text h5"><?php echo $row['subj_semester']?></label>
			</div>
		</div>

		<?php 
				}
			}
		?>

	<hr class="bg-dark border-4 border-top">
	<form method="POST" action="">
	<div class="row">
		<table id="myTable" class="table table-bordered table-striped" style="column-span: 100px;">
			<thead>
						
				<th class="text-center">Name</th>
				<th class="text-center">Year</th>
				<th class="text-center">Prelim</th>
				<th class="text-center">Midterm</th>
				<!-- <th class="text-center">Midterm Grade</th> -->
				<th class="text-center">Prefinal</th>
				<!-- <th class="text-center">Prefinal Grade</th> -->
				<th class="text-center">Final</th>
				<th class="text-center">Convertion</th>
				<th class="text-center"> Remarks</th>
			</thead>
			<tbody>
				<?php
							
					include_once('connection.php');
					    $subj_code = $_GET['subj_code'];

					  	$sql1 = "SELECT * FROM tbl_student_subjects WHERE subj_code='$subj_code'";
					  	$query1 = $conn->query($sql1);
					  	while($result2 = $query1->fetch_assoc()){
					  		$st_id = $result2['student_id'];

					  		$sql2 = mysqli_query($conn, "SELECT * FROM tbl_student WHERE student_id = '$st_id'");
					  		while($result3 = mysqli_fetch_array($sql2)){	

					  	?>

					  	
							
							<tr>
										

								<td><?php echo $result3['lname']?> <?php echo $result3['fname']?></td>	

								<td><?php echo $result2['student_subj_year']?></td>

								<td><?php echo $result2['prelim']?></td>

								<td><?php echo $result2['midterm']?></td>

								<td><?php echo $result2['prefi']?></td>

								<td><?php echo $result2['final']?></td>

								<td class='text-center alert-info'>
								<?php 
									if (($result2['final'] >= 98) AND ($result2['final'] <= 100)) 
							  		{
							  			$total1 = "1.00";
							  		}
							  		elseif (($result2['final'] >= 95 ) && ($result2['final'] <= 98))
							  		{
							  			$total1 = "1.25";
							  		}
							  		elseif (($result2['final'] >= 92 ) && ($result2['final'] <= 95))
							  		{
							  			$total1 = "1.50";
							  		}
							  		elseif (($result2['final'] >= 89 ) && ($result2['final'] <= 92))
							  		{
							  			$total1 = "1.75";
							  		}
							  		elseif (($result2['final'] >= 86 ) && ($result2['final'] <= 89))
							  		{
							  			$total1 = "2.00";
							  		}
							  		elseif (($result2['final'] >= 83 ) && ($result2['final'] <= 86))
							  		{
							  			$total1 = "2.25";
							  		}
							  		elseif (($result2['final'] >= 80 ) && ($result2['final'] <= 83))
							  		{
							  			$total1 = "2.50";
							  		}
							  				elseif (($result2['final'] >= 77 ) && ($result2['final'] <= 80))
							  		{
							  			$total1 = "2.75";
							  		}
							  		elseif (($result2['final'] >= 74 ) && ($result2['final'] <= 77))
							  		{
							  			$total1 = "3.00";
							  		}
							  		elseif (($result2['final'] >= 69 ) && ($result2['final'] <= 73))
							  		{
							  			$total1 = "5.00";
							  		}
							  		elseif ($result2['final'] == 'DRP' )
							  		{
							  			$total1 = "Dropped";
							  		}
							  		elseif ($result2['final'] == 0 )
							  		{
							  			$total1 = "NG";
							  		}
					  			?>
								</td>

								<!-- <td class='text-center alert-info'><?php echo $total1 ?></td> -->

								<td class='text-center alert-info'>
									<!-- <?php echo $remarks ?> -->

								<?php
									if (($result2['final'] >= 75) AND ($result2['final'] <= 100)) 
					  				{
					  					$remarks = "PASSED";
					  				}
					  				elseif (($result2['final'] >= 69 ) && ($result2['final'] <= 74))
					  				{
					  					$remarks = "FAILED";
					  				}
					  				elseif ($result2['final'] == 0 )
					  				{
					  					$remarks = " ";
					  				}
					  				elseif ($result2['final'] == 'DRP')
					  				{
					  					$remarks = "DROP";
					  				}
								?>
									
								</td>
										
			
							</tr>

							<?php
								}
							}
 						
						?>
					</tbody>
				</table>
				<button onclick="window.print();" class="btn btn-primary" id="print-btn"><a class="pr" href="home.php"><span class="glyphicon glyphicon-print"></span> Print</a></button>	

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

<!-- <script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();
 
    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script> -->

</body>
</html>