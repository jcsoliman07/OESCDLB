<!DOCTYPE html>
<html>
<head>
  <title></title>

  <!-- <link rel="stylesheet" type="text/css" href="../assets/css/style1.css"> -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c4aa1da3d9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  



</head>
<body>
  

<div class="container my-5">
    <!-- <a href="addsubj.php" class="btn btn-primary my-5 float-left"><span class="fas fa-plus-circle"></span> New</a> -->
    <hr class="bg-dark border-4 border-top">
    <br/>
    <?php
      include "displaycs.php";
      $query = "SELECT * FROM tbl_csstudent ORDER BY id";
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
    <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add user</button> -->
    <table class="table table-hover" id="dtenrolledCS">
      <thead class="alert-success">
        <tr>
          <th scope="col">#</th>
          <th scope="col"> Year </th>
          <th scope="col"> Firstname </th>
          <th scope="col"> Lastname </th>
          <th scope="col"> Middlename </th>
          <th scope="col"> Gender </th>
          <th scope="col"> Email </th>
          <th scope="col"> Action </th>
        </tr>
      </thead>
      <tbody class="alert-dark">
        <?php
          require '../db_conn.php';
          $i = 0;
          $query = mysqli_query($conn, "SELECT * FROM tbl_enrolledcs ORDER BY id") or die(mysqli_error());
          while($rows = mysqli_fetch_array($query)){
            $i++;
        ?>
        <tr>
          <th scope="row"><?=$i?></th>
          <td><?php echo $rows['year']; ?></td>
          <td><?php echo $rows['fname']; ?></td>
          <td><?php echo $rows['lname']; ?></td>
          <td><?php echo $rows['mname']; ?></td>
          <td><?php echo $rows['gender']; ?></td>
          <td><?php echo $rows['email']; ?></td>
          
 <!--     <td><?php echo $fetch['fname']?></td>
          <td><?php echo $fetch['lname']?></td>
          <td><?php echo $fetch['mname']?></td> -->
          <td>
             <!-- <a href="viewcs.php?id=<?=$rows['id']?>" class="btn btn-primary my-5"><span class="fas fa-eye"></span> View </a> -->
            <!-- <button class="btn btn-success my-5" data-toggle="modal" type="button" data-target="#update_modal<?php echo $rows['id']?>"><span class="fas fa-edit"></span> Confirm</button> -->
            <a href="view.php?id=<?=$rows['id']?>" class="btn btn-primary"><span class="fas fa-list"></span></a>
            <a href="viewSubjects.php?id=<?=$rows['id']?>" class="btn btn-info"><span class="fas fa-regul fa-book"></span></a>
            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add user</button> -->
          </td>
        </tr>
        <?php
          // include 'confirm_cs.php';
          }
        ?>
      </tbody>
      <tfoot>
        <tr>
          <td scope="col">#</td>
          <td scope="col"> Year </td>
          <td scope="col"> Firstname </td>
          <td scope="col"> Lastname </td>
          <td scope="col"> Middlename </td>
          <td scope="col"> Gender </td>
          <td scope="col"> Email </td>
          <td scope="col"> Action </td>
        </tr>
      </tfoot>
    </table>
  </div>

 <!--  <div class="modal fade" id="form_modal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="save_user.php">
          <div class="modal-header">
            <h3 class="modal-title">Add User</h3>
          </div>
          <div class="modal-body">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            </div>
          </div>
          <div style="clear:both;"></div>
          <div class="modal-footer">
            <button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
            <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>  -->

<script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/bootstrap.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>


<script>
  // Basic example
$(document).ready(function () {
  $('#dtenrolledCS').DataTable({
    "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
  });
  $('.dataTables_length').addClass('bs-select');
});
</script>

</body>
</html>