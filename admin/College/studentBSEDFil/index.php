<?php
  session_start();

  if (isset($_SESSION['username'])) {
    echo "<input type='hidden' value='".$_SESSION['username']."'";
  }
  else{
    header("Location:../../../mainlogin.php");
  } 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
  <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
  <style>
    body{
      background-color: rgba(0, 0, 0, 0.1);
      animation: fadeInAnimation ease 1.5s;
      animation-iteration-count: 1;
      animation-fill-mode: forwards;
      animation: fadeOutAnimation ease 1.5s;
    }
     @keyframes fadeInAnimation {
      0% {
          opacity: 0;
      }
      100% {
          opacity: 1;
       }
    }
    @keyframes fadeOutAnimation {
      100% {
          opacity: 1;
      }
      0% {
          opacity: 0;
       }
    }
    .wrapp{
      margin-left: 10px;
      margin-right: 10px;
      padding: 10px;
      top: 10px;
      bottom: 20px;
      max-width: 100%;
/*      max-height: 100%;*/
      position: relative;
      background-color: white;
      box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
    }
    .wrapp .row1{
      margin-left: 15px;
      margin-right: 15px;
      position: relative;
      max-width: 100%;
/*      max-height: 100%;*/
    }
    .mtop10{
      margin-top:10px;
    }
    .modal-label{
      position:relative;
      top:7px
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="wrapp">
      <div class="row">
      <?php
        if(isset($_SESSION['error'])){
          echo
          "
          <div class='alert alert-danger text-center'>
            <button class='close'>&times;</button>
            ".$_SESSION['error']."
          </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo
          "
          <div class='alert alert-success text-center'>
            <button class='close'>&times;</button>
            ".$_SESSION['success']."
          </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      </div>
      <h3 class="display-1"><span class="fas fa-file-alt"></span> STUDENT LIST </h3>
      <hr class="bg-dark border-4 border-top">
      <div class="row">
      <div class="height10">
      </div>
      <div class="row1">
        <table id="myTable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="padding: 5px">Remarks</th>
              <th style="padding: 5px">Student ID</th>
              <th style="padding: 5px">Year</th>
              <th style="padding: 5px">First Name</th>
              <th style="padding: 5px">Last Name</th>
              <th style="padding: 5px">Middle Name</th>
              <th style="padding: 5px">Gender</th>
              <th style="padding: 5px">Action</th>
            </tr>
          </thead>
          <tbody style="font-size: 14px;">
            <?php
              
              include_once('db_conn.php');
              $course = 'Bachelor of Secondary Education';
							$major = 'Filipino';
              $sql = "SELECT * FROM tbl_student WHERE course = '$course' AND major ='$major' ORDER BY id ASC";
 
              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($rows = $query->fetch_assoc()){
              ?><tr>
                  <td>
                  <?php 
                    if ($rows['Remarks'] == "Active") {
                  ?>
                    <span class="btn btn-success btn-sm"><?php echo $rows['Remarks']?></span>

                  <?php
                    }else if ($rows['Remarks'] == "Dropped") {
                  ?>
                   <span class="btn btn-danger btn-sm"><?php echo $rows['Remarks']?></span>
                  <?php
                    }else if ($rows['Remarks'] == "Graduate"){
                  ?>
                    <span class="btn btn-info btn-sm"><?php echo $rows['Remarks']?></span>
                  <?php
                    }else{
                  ?>
                    <span class="btn btn-warning btn-sm"><?php echo $rows['Remarks']?></span>
                  <?php
                    }
                  ?>
                  </td>

                  <td><?php echo $rows['student_id'] ?></td>
                  <td><?php echo $rows['year'] ?></td>
                  <td><?php echo $rows['fname'] ?></td>
                  <td><?php echo $rows['lname'] ?></td>
                  <td><?php echo $rows['mname'] ?></td>
                  <td><?php echo $rows['gender']?> </td>
                  <td>
                    <a href='../../../college/studentbsedfil/info.php?id=<?php echo $rows['id']?>' type='button' name='button' id='button' class='btn btn-info btn-sm' data-toggle='tooltip' data-placement='top' title='View Student Information'><span class='fas fa-list-alt'></span></a>

                    <a href='../../../college/requirementsCS.php?id=<?php echo $rows['id'] ?>' type='button1' name='button1' id='button1' class='btn btn-primary btn-sm' data-toggle='tooltip' data-placement='top' title='Requirements'><span class='far fa-file-image'></span></a>

                    <a href='subjects.php?id=<?php echo $rows['id'] ?>' type='button2' name='button2' id='button2' class='btn btn-success btn-sm'  data-toggle='tooltip' data-placement='top' title='Subjects'><span class='fas fa-book-open'></span></a>

                    <a href='addaccount.php?id=<?php echo $rows['id']?>' type='button3' name='button3' id='button3' class='btn btn-warning btn-sm'  data-toggle='tooltip' data-placement='top' title='Student Accounts'><span class='fas fa-user'></span></a>
                  </td>
                </tr>
              <?php
                // include('edit_delete_modal.php');
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<br>
<br>
<!-- <?php include('add_modal.php') ?> -->
 
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
  //inialize datatable
    $('#myTable').DataTable();
 
    //hide alert
    $(document).on('click', '.close', function(){
      $('.alert').hide();
    })
});
</script>

<script>
    $(document).ready(function(){
      $('#button').tooltip();
    })
</script>
<script>
    $(document).ready(function(){
      $('#button1').tooltip();
    })
</script>

<script>
    $(document).ready(function(){
      $('#button2').tooltip();
    })
</script>

<script>
    $(document).ready(function(){
      $('#button3').tooltip();
    })
</script>

</body>
</html>
