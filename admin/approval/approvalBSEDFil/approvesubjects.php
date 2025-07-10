<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="hidden/css" href="css/bootstrap.css"/>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>
	<div class="container my-5">
		<div class="col-sm-1"></div>

		<div class="col-sm-10">
			<h2><span class="fas fa-file-alt"></span> Student Information </h2>
			<hr class="bg-danger border-4 border-top border-danger">
			<br/>

			<?php
		 	if (isset($_GET['id'])) {
		 		include "../db_conn.php";

		 		$Id = $_GET['id'];

		 		$query = mysqli_query($conn, "SELECT * FROM tbl_approvalstudent WHERE id=$Id") or die(mysqli_error());
	                while($row = mysqli_fetch_array($query)){
			?>

			<div class="form-group row">
				<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
				<div class="col-sm-5">
					<label class="text h4">Name: </label>
					<label class="text h4"><?php echo $row['fname']." ".$row['mname'].". ".$row['lname']?></label>
				</div>
				<div class="col-sm-5">
					<label class="text h4">Year: </label>
					<label class="text h4"><?php echo $row['year']?></label>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-5">
					<label class="text h4">Address: </label>
					<label class="text h4"><?php echo $row['address']?></label>
				</div>
				<div class="col-sm-5">
					<label class="text h4">Mobile Number: </label>
					<label class="text h4"><?php echo $row['mnum']?></label>
				</div>
			</div>
			<?php
				}
			}
			?>
			<br/>
			<br/>
			<h2><span class="fas fa-clipboard"></span> Subject List </h2>
	       	<hr class="bg-danger border-4 border-top border-danger">

	       	<br/>

	       	<form method="post" action="addsubject.php">

	       		<input type="checkbox" class="chk_boxes" label="check all">   Select all
	       		<br>
	       		<br>
	       		<table class="table table-sm table-bordered table-hover">
	       			<thead>
	       				<th>Action</th>
	       				<th>Code</th>
       					<th>Description</th>
       					<th>Unit</th>
	       			</thead>
	       			<?php
	       				include "../db_conn.php";
	       				$course = 'BSED';
	       				$major = 'Filipino';
	       				$i = 0;
	       				$Id = $_GET['id'];
	       				
	       				$s = mysqli_query($conn, "SELECT * FROM tbl_approvalstudent WHERE id = '$Id'")or die(mysqli_error($conn));

	       				while($result = mysqli_fetch_array($s)){
	       					// echo $result['year'];
	       					// echo $result['semester'];
	       					$year = $result['year'];
	       					$sem = $result['semester'];
	       					$q = mysqli_query($conn, "SELECT * FROM tbl_semester")or die(mysqli_error($conn));

	       					while($row = mysqli_fetch_array($q)){

	       						if ($row['sem_set'] == 1) {

	       							if ($row['semester'] == $sem) {

			       						$semester = $row['semester'];

			       						$l = mysqli_query($conn, "SELECT * FROM `tbl_subjects` WHERE  `subj_semester`='$semester' AND `subj_year`='$year' AND `subj_course`='$course' AND `subj_major` = '$major'")or die(mysqli_error($conn));

			       						while($fetch = mysqli_fetch_array($l)){
			       							$i++;

	       			?>

	       				<tbody>
	       					<tr>
	       						<td>
	       							<input type="checkbox" name="subj_id[]" class="chk_boxes1" value="<?php echo $fetch['subj_code']?>">
	       						</td>
	       						<td>
	       							<?php echo $fetch['subj_code']?>
	       							<input type="hidden" name="subj_code[]" value="<?php echo $fetch['subj_code']?>">
	       						</td>
	       						<td>
	       							<?php echo $fetch['subj_description']?>
	       							<input type="hidden" name="subj_description[]" value="<?php echo $fetch['subj_description']?>">
	       						</td>
	       						<td>
	       							<?php echo $fetch['subj_unit']?>
	       							<input type="hidden" name="subj_unit[]" value="<?php echo $fetch['subj_unit']?>">
	       						</td>
	       						<td class="hidden">
	       							<input type="hidden" name="student_id[]" value="<?php echo $result['student_id']?>">
	       						</td>
	       						<td class="hidden">
	       							<input type="hidden" name="subj_course[]" value="<?php echo $fetch['subj_course']?>">
	       						</td>
	       						<td class="hidden">
	       							<input type="hidden" name="subj_year[]" value="<?php echo $fetch['subj_year']?>">
	       						</td>
	       						<td class="hidden">
	       							<input type="hidden" name="subj_semester[]" value="<?php echo $fetch['subj_semester']?>">
	       						</td>
		       				</tr>
	       				</tbody>
	       			<?php
	       							}
	       						}
	       					}
	       				}
	       			}
	       			?>

	       			<!-- <?php
		       			include "../db_conn.php";
		       			$Id = $_GET['id'];

		       			$q = mysqli_query($conn, "SELECT * FROM tbl_approvalstudent WHERE id=$Id") or die(mysqli_error());
		       			
		       			while ($result = mysqli_fetch_array($q)){

		       				echo"<input type='hidden' name='year' value='".$result['year']."'>";
		       				$year = $result['year'];
		       				$course = 'BSCS';


			       			$sql = mysqli_query($conn, "SELECT * FROM `tbl_semester`") or die (mysqli_error());
			       			
			       			while ($rows = mysqli_fetch_array($sql)) {

			       				if ($rows['sem_set']==1) {
			       					echo"<input type='hidden' name='semester' value='".$rows['semester']."'>";
			       					echo "<input type='hidden' name='sem_set' value='".$rows['sem_set']."'>";

			       					$semester = $rows['semester'];

			       					$query = mysqli_query($conn, "SELECT * FROM `tbl_subjects` WHERE `subj_semester`='$semester' AND `subj_year`='$year' AND `subj_course`='$course'") or die(mysqli_error());

			       					while ($fetch = mysqli_fetch_array($query)) {
			       						$Id = $_GET['id'];
					                    $l = mysqli_query($conn, "SELECT * FROM `tbl_approvalstudent` WHERE `id`='$Id'") or die (mysqli_error());
					                    // $l = "SELECT * FROM tbl_approvalcs WHERE id=$Id";
					                    // $r = mysqli_query($conn, $l);

					                    while ($rw = mysqli_fetch_array($l)){

		       		?>

		       		<tbody>
		       			<td><?php echo $fetch['subj_id']?></td>
		       			<td><?php echo $fetch['subj_code']?></td>
		       			<td><?php echo $fetch['subj_description']?></td>
		       			<td><?php echo $fetch['subj_unit']?></td>

			       		<input type='hidden' name='subj_id[]' value="<?php echo $fetch['subj_id']?>">
		                <input type='hidden' name='subj_code[]' value="<?php echo $fetch['subj_code']?>">
		                <input type='hidden' name='subj_description[]' value="<?php echo $fetch['subj_description']?>">
		                <input type='hidden' name='subj_unit[]' value="<?php echo $fetch['subj_unit']?>">
		                <input type='hidden' name='subj_year[]' value="<?php echo $fetch['subj_year']?>">
		                <input type='hidden' name='subj_course[]' value="<?php echo $fetch['subj_course']?>">
		                <input type='hidden' name='subj_semester[]' value="<?php echo $fetch['subj_semester']?>">
		                <input type='hidden' name='student_id[]' value="<?php echo $rw['student_id']?>">
		            <?php
		        		}
		            ?>
	   
                	</tbody>
                	<?php
       						}
       					}
       				}
       			}
       			?> -->

	       		</table>
	       		<br/>
	       		<hr class="bg-danger border-4 border-top border-danger">
	       		<br/>
	       		
	       		<button name='Save' class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Save</button>

	       	</form>
		</div>
		
		<div class="col-sm-1"></div>
	</div>
	<br/>
    <br/>
    <br/>
    <br/>



<!--        	    <?php
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
        <div class="col-md-2"></div>
            <form method="POST" action="">
                <div class="form-inline">
                    <div class="form-group row">
                    	<label>Course:</label>
                    	<select class="form-control" name="course">
                    		<option value="" disabled="" selected="">Course</option>
                    		<option value="Bachelor of Business Management">BSBA</option>
                    		<option value="Bachelor of Elementary Education">BEE</option>
                    		<option value="Bachelor of Secondary Education">BSEE</option>
                    		<option value="Bachelor of Science in Computer Science">BSCS</option>
                    	</select>

                    	<label>Year and Semester:</label>
	                    <select class="form-control" name="yearSem">
	                        <option value="" disabled="" selected="">Year and Sem</option>
							<option value="First Year and First Sem"> First Year and First Sem </option>
	                		<option value="First Year and Second Sem"> First Year and Second Sem </option>
	                		<option value="Second Year and First Sem"> Second Year and First Sem </option>
	                		<option value="Second Year and Second Sem"> Second Year and Second Sem </option>
	                		<option value="Third Year and First Sem"> Third Year and First Sem </option>
	                		<option value="Third Year and Second Sem"> Third Year and Second Sem </option>
	                		<option value="Fourth Year and First Sem"> Fourth Year and First Sem </option>
	                		<option value="Fourth Year and Second Sem"> Fourth Year and Second Sem </option>
	                    </select>

	                    <button class="btn btn-primary" name="filter">Filter</button>
	                    <button class="btn btn-danger" name="reset">Reset</button>
                	</div>
                </div>
                <?php include 'fetch.php'?>
            </form>
            <br /><br />
            <table class="table">
                <thead>
						<th>ID</th>
						<th>Subject Code</th>
						<th>Course</th>
						<th>Description</th>
						<th>Unit</th>
						<th>Year and Semester</th>
                </thead>
                <tbody>
                    <?php include'filter.php'?>
                </tbody>
            </table>
    </div> -->

	<!-- <div class="container">
		<br>
		<br>
		<h3 class="display-4"> List of Subjects </h3>
		<hr class="bg-danger border-4 border-top border-danger">
		
		<div id="filters">
			<select name="fetchval" id="fetchval">
				<option value="" disabled="" selected="">Year and Sem</option>
				<option value="First Year and First Sem"> First Year and First Sem </option>
                <option value="First Year and Second Sem"> First Year and Second Sem </option>
                <option value="Second Year and First Sem"> Second Year and First Sem </option>
                <option value="Second Year and Second Sem"> Second Year and Second Sem </option>
                <option value="Third Year and First Sem"> Third Year and First Sem </option>
                <option value="Third Year and Second Sem"> Third Year and Second Sem </option>
                <option value="Fourth Year and First Sem"> Fourth Year and First Sem </option>
                <option value="Fourth Year and Second Sem"> Fourth Year and Second Sem </option>
			</select>
		</div>

		<div class="container">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Subject Code</th>
						<th>Description</th>
						<th>Unit</th>
						<th>Year and Semester</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$query = "SELECT * FROM tbl_subjects";
						$result = mysqli_query($conn,$query);

						while ($rows = mysqli_fetch_assoc($result)) {
					?>
					<tr>
						<td><?php echo $rows['subj_id']?></td>
						<td><?php echo $rows['subj_code']?></td>
						<td><?php echo $rows['subj_description']?></td>
						<td><?php echo $rows['subj_unit']?></td>
						<td><?php echo $rows['subj_year']?></td>
					</tr>

					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#fetchval").on('change',function(){
				var value = $(this).val();
				// alert(value);

				$.ajax({
					url:"fetch.php",
					type:"POST",
					data:'request=' + value;
					beforeSend:function(){
						$(".container").html("<span>Uploading...</span>");
					},
					success:function(data){
						$(".container").html(data);
					}
				});
			});
		});
	</script> -->
<script>
	$(function() {
    $('.chk_boxes').click(function() {
        $('.chk_boxes1').prop('checked', this.checked);
    });
});	
</script>

</body>
</html>