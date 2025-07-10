<?
session_start();
$conn=mysqli_connect("localhost","root","","oescdlb");  
 if (!isset($_SESSION["username"])) {  
      header("location:../../mainlogin.php");  
      die();
 }  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
</head>
<body>

<div class="container my5">
	<br>
	<br>
	<label class="h3" style="font-weight: bold;"><span class="far fa-clipboard"></span>             List of Subjects</label>
	<br>
	<br>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-12">
				<table class="table table-sm table-bordered table-hover">
					<thead>
						<th>Subject Code</th>
						<th>Description</th>
						<th>Unit</th>
						<th>Equivalent</th>

					</thead>
					<tbody>
						
							<?php
								include '../../db_conn.php';
								$student_id = $_SESSION['login_id'];
						

								$sql = mysqli_query($conn, "SELECT * FROM tbl_student WHERE student_id='$student_id'")or die(mysqli_error($conn));
								while($rows = mysqli_fetch_array($sql))
								{

									$year = $rows['year'];
									$semester = $rows['semester'];

									$query = mysqli_query($conn, "SELECT * FROM tbl_student_subjects WHERE student_id = '$student_id' AND student_subj_year = '$year' AND student_subj_sem = '$semester'")or die(mysqli_error($conn));
									while($fetch = mysqli_fetch_array($query))
									{
							?>
							<tr>
								<td><?php echo $fetch['subj_code']?></td>
								<td><?php echo $fetch['student_subj_description']?></td>
								<td><?php echo $fetch['student_subj_unit']?></td>
								<?php
								if (($fetch['final'] >= 98.5) AND ($fetch['final'] <= 100)) 
							  		{
							  			$total1 = "1.00";
							  		?>
							  		<td style="background-color: green; color: white; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  	<?php
							  	}elseif (($fetch['final'] >= 95.5 ) && ($fetch['final'] <= 98.49))
							  		{
							  			$total1 = "1.25";
							  		?>
							  		<td style="background-color: green; color: white; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  	<?php
							  	}elseif (($fetch['final'] >= 92.5 ) && ($fetch['final'] <= 95.49))
							  		{
							  			$total1 = "1.50";
							  		?>
							  		<td style="background-color: green; color: white; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  	<?php
							  	}elseif (($fetch['final'] >= 89.5 ) && ($fetch['final'] <= 92.49))
							  		{
							  			$total1 = "1.75";
							  		?>
							  		<td style="background-color: green; color: white; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  	<?php
							  	}elseif (($fetch['final'] >= 86.5 ) && ($fetch['final'] <= 89.49))
							  		{
							  			$total1 = "2.00";
							  		?>
							  		<td style="background-color: yellowgreen; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  	<?php
							  	}elseif (($fetch['final'] >= 83.5 ) && ($fetch['final'] <= 86.49))
							  		{
							  			$total1 = "2.25";
							  		?>
							  	<td style="background-color: yellowgreen; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  	<?php
							  	}elseif (($fetch['final'] >= 80.5 ) && ($fetch['final'] <= 83.49))
							  		{
							  			$total1 = "2.50";
							  		?>
							  	<td style="background-color: yellow; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  	<?php
							  	}elseif (($fetch['final'] >= 77.5 ) && ($fetch['final'] <= 80.49))
							  		{
							  			$total1 = "2.75";
							  		?>
							  		<td style="background-color: yellow; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  	<?php
							  	}elseif (($fetch['final'] >= 74.5 ) && ($fetch['final'] <= 77.59))
							  		{
							  			$total1 = "3.00";
							  		?>
							  	<td style="background-color: red; font-weight: bold; color: white; text-align: center;"> <?php echo $total1?></td>
							  	<?php
								}elseif (($fetch['final'] >= 60 ) && ($fetch['final'] <= 74.49))
							  		{
							  			$total1 = "5.00";
							  		?>
							  	<td style="background-color: red; color: white; text-align: center;"> <?php echo $total1?></td>
							  	<?php
							  	}elseif ($fetch['final'] == 'DRP')
							  		{
							  			$total1 = "Dropped";
							  		?>
							  	<td style="background-color: white; font-weight: bold; text-align: center;"> <?php echo $total1?></td>
							  	<?php
							  	}elseif ($fetch['final'] == 0 )
							  		{
							  			$total1 = "NG";
							  		?>
							  		<td style="background-color: white; text-align: center; "> <?php echo $total1?></td>
							  	<?php
							  		}else {
							  		?>
							  		<td style="background-color: white;"></td>
							  	<?php
							  		}
								?>
							</tr>
							<?php
									}
								}
							?>
						
					</tbody>
				</table>
			</div>
			<div class="col-sm-2"></div>
		</div>
	<hr class="bg-danger border-4 border-top border-danger">

</div>
</body>
</html>