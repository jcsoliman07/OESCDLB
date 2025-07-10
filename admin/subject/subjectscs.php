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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>

	<div class="container my-5">
		<hr class="bg-dark border-4 border-top">
		<br/>
		<h3 class="modal-title"><span class="fas far fa-list"></span>        LIST OF SUBJECTS</h3>

		<hr class="bg-dark border-4 border-top">

		<br/>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addIns"><span class="glyphicon glyphicon-plus"></span> Add Subject</button>
		<br/>
		<br/>
		<br/>

		<?php 
		    if (isset($_GET['error'])) { ?>
		    <div class="alert alert-danger" role="alert">
		    	<?php  echo $_GET['error'];?>
		    </div>
		<?php }?> 
		    
		<?php
		    if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
		    	<?php  echo $_GET['success'];?>
		    </div>
		<?php }?>
		<table class="table table-bordered table-hover" id="dtsubjects">
			<thead>
				<th>ID</th>
				<th>Subject</th>
				<th>Description</th>
				<th>Unit</th>
				<th>Pre-requesite</th>
				<th>Course</th>
				<th>Year</th>
				<th>Semester</th>
				<th>Action</th>
			</thead>

			<input type="hidden" name="course" value="BSCS">

			<?php

				$course = 'BSCS';
				
				include "db_conn.php";

				$query = mysqli_query($conn, "SELECT * FROM `tbl_subjects` WHERE `subj_course`='$course'") or die(mysqli_error());
				
				while ($fetch = mysqli_fetch_array($query)) {
			?>

			<tbody>
				<td><?php echo $fetch['subj_id']?></td>
				<td><?php echo $fetch['subj_code']?></td>
				<td><?php echo $fetch['subj_description']?></td>
				<td><?php echo $fetch['subj_unit']?></td>
				<td><?php echo $fetch['subj_prereq']?></td>
				<td><?php echo $fetch['subj_course']?></td>
				<td><?php echo $fetch['subj_year']?></td>
				<td><?php echo $fetch['subj_semester']?></td>
				<td>
					<button class="btn btn-info" data-toggle="modal" type="button" data-target="#update_modal<?php echo $fetch['subj_id']?>"><span class="fas far fa-edit"></span></button>
					<a href="deletesubj.php?id=<?=$fetch['subj_id']?>" class="btn btn-danger my-5"><span class="fas fa-trash-alt"></span></a>

				</td>
			</tbody>
			<?php
				include 'editsubj.php';
			}
			?>
		</table>
		
	</div>

	<div class="modal fade" id="addIns" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="addsubj.php">
          <div class="modal-header">
            <h3 class="modal-title">Add Subject</h3>
          </div>
          <div class="modal-body">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <!-- <h3 class="display-4"> Add New Subject </h3> -->

                <div class="mb-3">
                  <label class="form-label">Subject: </label>
                  <input type="text" name="subj_code" class="form-control" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Description: </label>
                  <input type="text" name="subj_description" class="form-control" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Unit: </label>  
                  <input type="text" name="subj_unit" class="form-control" required>
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Pre-Requisite: </label>
                  <input type="text" name="subj_prereq" class="form-control" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Course: </label>
                  <input type="text" name="subj_course" class="form-control" value="BSCS" readonly>
                </div>
                <!-- <div class="mb-3">
                  <label class="form-label">Course: </label>
                  <select name="subj_course" class="form-control" required>
                    <?php while ($row = mysqli_fetch_array($result)):;?>
                    <option><?php echo $row[2]; ?></option>
                    <?php endwhile;?>
                  </select>
                  <input type="text" name="subj_course" class="form-control" required>
                </div> -->

                <div class="mb-3">
                  <label class="form-label">Year: </label>
                  <select name="subj_year" class="form-control" required>
                    <option>--Select--</option>
                    <option value="First"> First</option>
                    <option value="Second"> Second</option>
                    <option value="Third"> Third</option>
                    <option value="Fourth"> Fourth</option>
                  </select>
                  <!-- <input type="text" name="subj_semester" class="form-control" required> -->
                </div>

                <div class="mb-3">
                  <label class="form-label">Semester: </label>
                  <select name="subj_semester" class="form-control" required>
                    <option>--Select--</option>
                    <option value="First"> First</option>
                    <option value="Second"> Second</option>
                  </select>
                </div>

                <br>
            </div>
          </div>
          <div style="clear:both;"></div>
          <div class="modal-footer">
            <button name="Save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
            <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>




<script src="../js/jquery-3.2.1.min.js"></script>  
<script src="../js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>

</body>
</html>