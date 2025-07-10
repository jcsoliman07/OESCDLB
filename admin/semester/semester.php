<?php
  session_start();

  if (isset($_SESSION['username'])) {
    echo "<input type='hidden' value='".$_SESSION['username']."'";
  }
  else{
    header("Location:../../mainlogin.php");
  } 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

  <style>
  	.container{
			width: 100%;
			margin: 0;
			padding: 0;
		}
		.container .topwrapp{
			margin-left: 10px;
			margin-right: 10px;
			top: 10px;
			padding: 5px;
			bottom: 20px;
			max-width: 100%;
			height: 100px;
			position: relative;
			background-color: white;
			box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
		}
		.container .topwrapp h6{
			font-size: 12px;
		}	

		.container .wrapp{
			margin-left: 10px;
			margin-right: 10px;
			top: 20px;
			bottom: 20px;
			max-width: 100%;
			/*max-height: 500px;*/
			position: relative;
			background-color: white;
			box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
		}
  </style>

</head>
<body>

	<div class="container">
		<div class="topwrapp">
			<h6>SET CURRENT SEMESTER</h6>
			 <hr class="bg-dark border-1 border-top">
			 <table class="table table-bordered table-hover">
			 	<thead>
			 		<th>Semester</th>
			 		<th>Action</th>
			 	</thead>
			 	<tbody>
			 		<?php
			 			require 'db_conn.php';
			 			$i = 0;
			 			$sql = mysqli_query($conn, "SELECT * FROM `tbl_semester`") or die (mysqli_error());
			 			while ($rows = mysqli_fetch_array($sql)) {
			 				$i++;
			 		?>
			 			<tr>
			 				<td><?php echo $rows['semester']?></td>
			 				<td>
			 					<?php 
			 						if ($rows['sem_set']==1){
			 							echo '<a href="status.php?id='.$rows['id'].'&status=0" class="btn btn-success"><span class="fas far fa-edit"></span>'.' '.$rows['semester'].'</a>';
			 						}else{
			 							echo '<a href="status.php?id='.$rows['id'].'&status=1" class="btn btn-danger"><span class="fas far fa-edit"></span>'.' '.$rows['semester'].'</a>';
			 						}
			 					?>
			 				</td>
			 			</tr>
			 		<?php
			 			}
			 		?>
			 	</tbody>
			 </table>
		</div>

		<div class="wrapp">
			
		</div>
	</div>

</body>
</html>