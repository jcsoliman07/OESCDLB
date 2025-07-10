<?php
  include "sendemail/send_email.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>

  <!-- <link rel="stylesheet" type="hidden/css" href="../assets/css/style1.css"> -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>


</head>
<body>
  

<div class="container my-5">
    <h3 class="display-1"> LIST OF NEW ENROLLEES COMPUTER SCIENCE </h3>
    <!-- <a href="addsubj.php" class="btn btn-primary my-5 float-left"><span class="fas fa-plus-circle"></span> Send Email</a> -->
    <hr class="bg-danger border-4 border-top border-danger">
    <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add user</button> -->
    <br>
      <?php
        if(ISSET($_SESSION['status'])){
        if($_SESSION['status'] == "ok"){
      ?>
      <div class="alert alert-info"><?php echo $_SESSION['result']?></div>
      <?php
        }else{
      ?>
        <div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
      <?php
      }
                  
        unset($_SESSION['result']);
        unset($_SESSION['status']);
      }
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
          $query = mysqli_query($conn, "SELECT * FROM tbl_approvalcs ORDER BY id") or die(mysqli_error());
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
   
          <td>

            <a href="sendemail/sendemailCS.php?id=<?=$rows['id']?>" class="btn btn-primary my-5"><span class="fas fa-envelope"></span></a>

            <a href="deletecs.php?id=<?=$rows['id']?>" class="btn btn-danger my-5"><span class="fas fa-trash-alt"></span></a>

            <a href="approvesubjects.php?id=<?=$rows['id']?>" class="btn btn-info"><span class="fas fa-solid fa-book"></span></a>

            <button class="btn btn-success my-5" data-toggle="modal" type="button" data-target="#update_modal<?php echo $rows['id']?>"><span class="fas fa-user-check"></span> Confirm</button>

            <!-- <a href="approve.php?id=<?=$rows['id']?>" class="btn btn-success my-5"><span class="fas fa-solid fa-user-check"></span></a> -->
            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal?id=<?=$rows['id']?>"><span class="fas fa-user-check"></span></button> -->
          
          </td>
        </tr>
        <?php
            include 'confirmcs.php';
          }
        ?>
      </tbody>
    </table>
  </div>

<script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/bootstrap.js"></script> 

</body>
</html>