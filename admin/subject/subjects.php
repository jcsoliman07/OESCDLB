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
  

<div class="container my-5">
    <h3 class="display-1"> LIST OF SUBJECTS PER COURSE/YEAR</h3>
    <hr class="bg-dark border-4 border-top">
    <br>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addIns"><span class="glyphicon glyphicon-plus"></span> Add Subject</button>
    <br>
    <br>

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
    
    <hr class="bg-danger border-4 border-top border-danger">
    <table class="table table-bordered">
      <thead class="alert-success">
        <tr>
          <th scope="col">#</th>
          <th scope="col"> Subject </th>
          <th scope="col"> Description </th>
          <th scope="col"> Unit </th>
          <th scope="col"> Pre Requisite </th>
          <th scope="col"> Course </th>
          <th scope="col"> Year & Semester </th>
          <th scope="col"> Action </th>
        </tr>
      </thead>
      <tbody style="background-color:#fff;">
        <?php
          require 'db_conn.php';
            $i = 0;
          $query = mysqli_query($conn, "SELECT * FROM tbl_subjects") or die(mysqli_error());
          while($rows = mysqli_fetch_array($query)){
            $i++
        ?>
        <tr>
          <td scope="row"><?=$i?></td>
          <td><?php echo $rows['subj_code']; ?></td>
          <td><?php echo $rows['subj_description']; ?></td>
          <td><?php echo $rows['subj_unit']; ?></td>
          <td><?php echo $rows['subj_prereq']; ?></td>
          <td><?php echo $rows['subj_course']; ?></td>
          <td><?php echo $rows['subj_year']; ?></td>

          <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $rows['subj_id']?>"><span class="glyphicon glyphicon-edit"></span> Edit </button>
            <a href="deletesubj.php?id=<?=$rows['subj_id']?>" class="btn btn-danger my-5"><span class="fas fa-trash-alt"></span>Delete</a> 
          </td>
        </tr>
        <?php
          include 'editsubj.php';
          }
        ?>
      </tbody>
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

                <?php 
                  $sname = "localhost";
                  $uname = "root";
                  $password = "";

                  $db_name = "oescdlb";

                  $conn = mysqli_connect($sname, $uname, $password, $db_name);
                  $query = "SELECT * FROM tbl_course";

                  $result = mysqli_query($conn,$query);

                  if (!$conn) {
                    echo "Connection Failed!";
                  }
                ?>

                <div class="mb-3">
                  <label class="form-label">Course: </label>
                  <select name="subj_course" class="form-control" required>
                    <?php while ($row = mysqli_fetch_array($result)):;?>
                    <option><?php echo $row[2]; ?></option>
                    <?php endwhile;?>
                  </select>
                  <!-- <input type="text" name="subj_course" class="form-control" required> -->
                </div>

                <div class="mb-3">
                  <label class="form-label">Year & Semester: </label>
                  <select name="subj_year" class="form-control" required>
                    <option>--Select--</option>
                    <option value="First Year and First Sem"> First Year and First Sem </option>
                    <option value="First Year and Second Sem"> First Year and Second Sem </option>
                    <option value="Second Year and First Sem"> Second Year and First Sem </option>
                    <option value="Second Year and Second Sem"> Second Year and Second Sem </option>
                    <option value="Third Year and First Sem"> Third Year and First Sem </option>
                    <option value="Third Year and Second Sem"> Third Year and Second Sem </option>
                    <option value="Fourth Year and First Sem"> Fourth Year and First Sem </option>
                    <option value="Fourth Year and Second Sem"> Fourth Year and Second Sem </option>
                  </select>
                  <!-- <input type="text" name="subj_semester" class="form-control" required> -->
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
</html>