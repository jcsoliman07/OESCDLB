<?php
  session_start();

  if (isset($_SESSION['username'])) {
    echo "<input type='hidden' value='".$_SESSION['username']."'";
  }
  else{
    header("Location:../../../mainlogin.php");
  } 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
/*		body {
		   background: #eeeeee;
		   font-family: 'Arial', sans-serif;
		}

		.upper{
			padding-top: 1%;
			padding-bottom: 0%;
			padding-left: 3%;
			width: 100%;
			max-height: 100px;
			background: #1e1e1e;
		}
		.logo{

			width: 70px;
			height: 70px;
		}
		p{
			/*padding-top: 5%;*/
			font-family: Arial;
			font-size: 25px;
			letter-spacing: 2px;
			color: white;
			/*line-height: 33px;*/
		}*/
	</style>
</head>
<body>
<!-- 	<div class="upper">
		<table>
			<td>		
				<img class="logo" src="image/logo.png" alt="logo">
			</td>

			<td>
				<p> 
					COLEGIO DE LOS BAÑOS
				</p>
			</td>
		</table>
	</div> -->
	<br>
<div class="container my-5">
	<div class="row">	
			<div class="row">
			<label class="h3" style="font-weight: bold;"><span class="fa fa-clipboard"></span> LIST OF STUDENT GRADES</label>
			<br>
			<br>
				<table id="myTable" class="table table-bordered table-striped" style="column-span: 100px;">
					<thead>
						<th class="text-center">Student ID</th>
						<th class="text-center">Last Name</th>
						<th class="text-center">First Name</th>
						<th class="text-center">Middle Name</th>
						<th class="text-center">Prelim</th>
						<th class="text-center">Midterm</th>
						<th class="text-center">Prefinal</th>
						<th class="text-center">Final</th>
						<th class="text-center">Grade Convertion</th>
						<th class="text-center">Remarks</th>
						<th class="text-center">Action</th>
					</thead>
					<tbody>
						<?php
							
							include_once('connection.php');
					     		$subj_code = $_GET['subj_code'];
					     		// $login_id = $_SESSION['login_id'];

					  			$sql1 = "SELECT * FROM tbl_student_subjects WHERE subj_code='$subj_code'";
					  			$query1 = $conn->query($sql1);
					  			while($result2 = $query1->fetch_assoc()){
					  				$student_id = $result2['student_id'];
							?>
									<tr>
										<td><?php echo $result2['student_id']?></td>
										<td><?php echo $result2['lname']?></td>
										<td><?php echo $result2['fname']?></td>
										<td><?php echo $result2['mname']?></td>
										
										<td><?php echo $result2['prelim']?></td>
										<td><?php echo $result2['midterm']?></td>
										<td><?php echo $result2['prefi']?></td>
										<td><?php echo $result2['final']?></td>
										<?php
												if (($result2['final'] >= 98.5) AND ($result2['final'] <= 100)) 
							  				{
							  					$total1 = "1.00";
							  			?>
							  			<td style="background-color: green; color: white; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  		<?php
							  				}
							  				elseif (($result2['final'] >= 95.5 ) && ($result2['final'] <= 98.49))
							  				{
							  					$total1 = "1.25";
							  			?>
							  			<td style="background-color: green; color: white; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  		<?php
							  				}
							  				elseif (($result2['final'] >= 92.5 ) && ($result2['final'] <= 95.49))
							  				{
							  					$total1 = "1.50";
							  			?>
							  			<td style="background-color: green; color: white; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  		<?php
							  				}
							  				elseif (($result2['final'] >= 89.5 ) && ($result2['final'] <= 92.49))
							  				{
							  					$total1 = "1.75";
							  		?>
							  			<td style="background-color: green; color: white; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  		<?php
							  				}
							  				elseif (($result2['final'] >= 86.5 ) && ($result2['final'] <= 89.49))
							  				{
							  					$total1 = "2.00";
							  		?>
							  			<td style="background-color: yellowgreen; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  		<?php
							  				}
							  				elseif (($result2['final'] >= 83.5 ) && ($result2['final'] <= 86.49))
							  				{
							  					$total1 = "2.25";
							  		?>
							  			<td style="background-color: yellowgreen; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  		<?php
							  				}
							  				elseif (($result2['final'] >= 80.5 ) && ($result2['final'] <= 83.49))
							  				{
							  					$total1 = "2.50";
							  		?>
							  			<td style="background-color: yellow; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  		<?php
							  				}
							  				elseif (($result2['final'] >= 77.5 ) && ($result2['final'] <= 80.49))
							  				{
							  					$total1 = "2.75";
							  		?>
							  			<td style="background-color: yellow; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  		<?php
							  				}
							  				elseif (($result2['final'] >= 74.5 ) && ($result2['final'] <= 77.59))
							  				{
							  					$total1 = "3.00";
							  		?>
							  			<td style="background-color: red; font-weight: bold; color: white; text-align: center;"> <?php echo $total1?></td>
							  		<?php

							  				}
							  				elseif (($result2['final'] >= 60 ) && ($result2['final'] <= 74.49))
							  				{
							  					$total1 = "5.00";
							  		?>
							  			<td style="background-color: red; color: white; text-align: center;"> <?php echo $total1?></td>
							  		<?php
							  				}
							  				elseif ($result2['final'] == 'DRP')
							  				{
							  					$total1 = "Dropped";
							  		?>
							  			<td style="background-color: white; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  		<?php
							  				}
							  				elseif ($result2['final'] == 0 )
							  				{
							  					$total1 = "NG";
							  		?>
							  			<td style="background-color: white; text-align: center; "> <?php echo $total1?></td>
							  		<?php
							  				}
							  				else {
							  		?>
							  			<td style="background-color: white;"></td>
							  		<?php
							  				}
										?>

										<?php

												//******** remarks*******//
					  				
							  				if (($result2['final'] >= 75) AND ($result2['final'] <= 100)) 
							  				{
							  					$remarks = "PASSED";
							  		?>
							  			<td style="color: green; font-weight: bold; text-align: center;"> <?php echo $remarks?></td>
							  		<?php
							  				}
							  				elseif (($result2['final'] >= 60 ) && ($result2['final'] <= 74))
							  				{
							  					$remarks = "FAILED";
							  		?>
							  			<td style="color: red; font-weight: bold; text-align: center;"> <?php echo $remarks?></td>
							  		<?php
							  				}
							  				elseif ($result2['final'] == 0 )
							  				{
							  					$remarks = "0";
							  		?>
							  			<td style="background-color: white; font-weight: bold; text-align: center;"> <?php echo $remarks?></td>
							  		<?php

							  				}elseif ($result2['final'] == 'DRP'){
							  					$remarks = "DROP";
							  		?>
							  			<td style="background-color: white; font-weight: bold; text-align: center;"> <?php echo $remarks?></td>
							  		<?php
							  				}
							  				else{
							  		?>
							  			<td style="background-color: white;"></td>
							  		<?php
							  				}

											?>
										

										<td class='text-center'>
											<a href="#edit_<?php echo $result2['id']?>"class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-plus'></span></a>
										</td>
									</tr>

							<?php
								include('addgrade_modal.php');
							}
 						// }
						?>
					</tbody>
				</table>
			</div>
				<!-- <a href="subject.php?id=<?=$result2['ins_id']?>" class="btn btn-primary"><span> back</span></a> -->
				<!-- <script>
  					document.write('<a href="' + document.referrer + '">Go Back</a>');
				</script> -->
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
</body>
</html>
