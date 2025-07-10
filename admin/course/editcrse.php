<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>

<div class="modal fade" id="update_modal<?php echo $rows['crse_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="updatecrse.php">
				<div class="modal-header">
					<h3 class="modal-title">Confirm Student</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<div class="mb-3">
								<label class="form-label">Course: </label>
								<input type="text" name="crse_description" class="form-control" value="<?=$rows['crse_description']?>" required>
							</div>

							 <div class="mb-3">
                				<label class="form-label">Major: </label>
                				<input type="text" name="crse_major" class="form-control" value="<?=$rows['crse_major']?>">
              				</div>

							<div class="mb-3">
								<label class="form-label">Department: </label>
								<select name="crse_department" class="form-control">
									<option value="">--Select--</option>
									<option value="Business Administration" <?php if($rows["crse_department"]=='Business Administration'){echo "selected";}?>>Business Administration</option>
									<option value="Computer Science" <?php if($rows["crse_department"]=='Computer Science'){echo "selected";}?>>Computer Science</option>
									<option value="Economics" <?php if($rows["crse_department"]=='Economics'){echo "selected";}?>>Economics</option>
									<option value="Education" <?php if($rows["crse_department"]=='Education'){echo "selected";}?>>Education</option>
								</select>
								
							</div>

							<input type="text" name="id" value="<?=$rows['crse_id']?>" hidden>

							<br>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="Add" class="btn btn-primary"><span class="fas fa-edit"></span> Update </button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel </button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- 	<div class = "container">
		<br>
		<table>
			<tr>
				<td> <a href="course.php"><span class="fas fa-angle-double-left"></span> Course </a></td>
				<td> <h4> / </h4> </td>
			</tr>
		</table>
		<br>

		<h3 class="display-4"> Edit Course </h3>
		<br>
		<br>
		<form method="post" action="updatecrse.php" >

			
			<button type="submit" class="btn btn-primary my-5" name="Add"><span class="fas fa-save"></span> Save </button>
			<a href="editsubj.php" name="Add" class="btn btn-primary my-5"><span class="fas fa-save"></span> Save </a>
			<button type="submit" class="btn btn-primary" name="Save"> Save </button>
			<a href="course.php" class="btn btn-danger"> CANCEL </a>

		</form>
		
	</div> -->

</body>
</html>


<!-- 
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>
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
<div class="container-fluid">
    <h3 class="display-1"><span class="far fa-clipboard"></span> LIST OF COURSE/S </h3>
    <hr class="bg-dark border-4 border-top">
    <a href="addcrse.php" class="btn btn-primary my-5 float-left"><span class="fas fa-plus-circle"></span> New</a>
    <br>

     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addIns"><span class="glyphicon glyphicon-plus"></span> Add Course</button>
    <br>
    <br>

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

   <hr class="bg-danger border-4 border-top border-danger">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>Course</th>
          <th>Major</th>
          <th>Department</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody style="background-color:#fff;">
        <?php
          require 'db_conn.php';
            $i = 0;
          $query = mysqli_query($conn, "SELECT * FROM tbl_course ORDER BY crse_description ASC") or die(mysqli_error());
          while($rows = mysqli_fetch_array($query)){
            $i++
        ?>
        <tr>
          <td><?php echo $rows['crse_description']?></td>
          <td><?php echo $rows['crse_major']?></td>
          <td><?php echo $rows['crse_department']?></td>
          <td><button class="btn btn-info" data-toggle="modal" type="button" data-target="#update_modal<?php echo $rows['crse_id']?>"><span class="glyphicon glyphicon-edit"></span> Edit </button>
            <a href="deletecrse.php?id=<?=$rows['crse_id']?>" class="btn btn-danger my-5"><span class="fas fa-trash-alt"></span>Delete</a> 
          </td>
        </tr>
        <?php
          include 'editcrse.php';
          }
        ?>
      </tbody>
    </table>
</div>

<div class="modal fade" id="addIns" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="addcrse.php">
          <div class="modal-header">
            <h3 class="modal-title">Add Course</h3>
          </div>
          <div class="modal-body">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <div class="mb-3">
                <label class="form-label">Course: </label>
                <input type="text" name="crse_description" class="form-control" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Major: </label>
                <input type="text" name="crse_major" class="form-control">
              </div>

              <div class="mb-3">
                <label class="form-label">Department: </label>
                <select name="crse_department" class="form-control">
                  <option value="">None</option>
                <?php
                  include "db_conn.php";
                  $department = mysqli_query($conn, "SELECT description FROM tbl_department");

                  while($result = mysqli_fetch_array($department)){
                ?>
                  <option <?php $result['description']?>><?php echo $result['description']?></option>
                  <?php
                }
                ?>
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
</body>
</html> -->