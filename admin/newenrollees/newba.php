<!DOCTYPE html>
<html>
<head>
  <title></title>

  <!-- <link rel="stylesheet" type="text/css" href="../assets/css/style1.css"> -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>


</head>
<body>
  

<div class="container my-5">
    <h3 class="display-1"> LIST OF NEW ENROLLEES BUSINESS ADMINISTRATION </h3>
    <!-- <a href="addsubj.php" class="btn btn-primary my-5 float-left"><span class="fas fa-plus-circle"></span> New</a> -->
    <hr class="bg-danger border-4 border-top border-danger">
    <?php
      include "displaycs.php";
      $query = "SELECT * FROM tbl_bastudent ORDER BY id";
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
    <br /><br />
    <table class="table table-bordered">
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
      <tbody style="background-color:#fff;">
        <?php
          require 'db_conn.php';
          $i = 0;
          $query = mysqli_query($conn, "SELECT * FROM tbl_bastudent ORDER BY id") or die(mysqli_error());
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
             <a href="viewba.php?id=<?=$rows['id']?>" class="btn btn-primary my-5"><span class="fas fa-eye"></span> View </a>
            <button class="btn btn-success my-5" data-toggle="modal" type="button" data-target="#update_modal<?php echo $rows['id']?>"><span class="fas fa-edit"></span> Confirm</button>
            <a href="deleteba.php?id=<?=$rows['id']?>" class="btn btn-danger my-5"><span class="fas fa-trash-alt"></span> Delete </a>
            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add user</button> -->
          </td>
        </tr>
        <?php
          include 'confirm_ba.php';
          }
        ?>
      </tbody>
    </table>
  </div>

  <div class="modal fade" id="form_modal" aria-hidden="true">
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
  </div> 

<script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/bootstrap.js"></script> 

</body>
</html>