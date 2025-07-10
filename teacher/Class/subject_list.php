<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
</head>
<body>
	<div class="container my-5">
		<label class="h3" style="font-weight: bold;"><span class="far fa-clipboard"></span>Class List</label>
		<hr class="border-4 border-top">

	<?php
      include "display.php";
      $query = "SELECT * FROM tbl_subject ORDER BY subj_id";
      $result = mysqli_query($conn, $query);
    ?>

    <?php
      if (isset($_GET['success'])) { ?>
      <div class="alert alert-success" role="alert">
        <?php  echo $_GET['success'];?>
      </div>
    <?php }?>

    <?php 
      if (isset($_GET['error'])) { ?>
      <div class="alert alert-danger" role="alert">
        <?php  echo $_GET['error'];?>
      </div>
    <?php }?>

	    <table class="table table-bordered table-hover">
	    	<thead>
				<tr>
					<th class="text-center" scope="col">Subject Code</th>
					<th class="text-center" scope="col">Description</th>
					<th class="text-center" scope="col">Unit</th>
					<th class="text-center" scope="col">Prerequisite</th>
					<th class="text-center" scope="col">Course</th>
					<th class="text-center" scope="col">Year</th>
					<th class="text-center" scope="col"> Action </th>
				</tr>

				<?php
					include 'db_conn.php';
					if (isset($_GET['id'])) {

						$Id = $_GET['id'];


					$query = mysqli_query($conn, "SELECT * FROM `tbl_subject` WHERE `subj_instructor`='$Id'") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
						$subj_id = $fetch['subj_id'];
				?>

				<form action="classlist.php" method="POST">
					<tr>
						<input type="hidden" name="inst_id" value="<?php echo $Id?>">
						<input type="hidden" name="subj_id" value="<?php echo $subj_id?>">
						<td class="text-center"><?php echo $fetch['subj_code']?></td>
						<td class="text-center"><?php echo $fetch['subj_description']?></td>
						<td class="text-center"><?php echo $fetch['subj_unit']?></td>
						<td class="text-center"><?php echo $fetch['subj_prereq']?></td>
						<td class="text-center"><?php echo $fetch['subj_course']?></td>
						<td class="text-center"><?php echo $fetch['subj_year']?></td>
						<td class="hidden"><?php echo $fetch['subj_instructor']?></td>

						<td class="text-center">
							<button class="btn btn-primary" name="Submit"><span class="fas fa-eye"> View</button>
	            		<!-- <a href="classlist.php?id=<?=$fetch['subj_id']?>" class="btn btn-info"><span class="fas fa-eye"></span></a> -->
	          			</td>
					</tr>
				</form>

				<?php
					
					}
				}
			
				?>
			</thead>
	    </table>
	</div>
</body>
</html>