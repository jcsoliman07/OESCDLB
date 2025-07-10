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
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
  <style>
    body{
    /*background-color: rgba(0, 0, 0, 0.15);*/
      animation: fadeInAnimation ease 1s;
      animation-iteration-count: 1;
      animation-fill-mode: forwards;
    }
    
    @keyframes fadeInAnimation {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
         }
    }
    .wrapp{
      margin-left: 60px;
      max-width: 90%;
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
        <br>
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
      <h3><span class="far fa-clipboard"></span> LIST OF COURSE/S </h3>
      <hr class="bg-dark border-4 border-top">
      <div class="row">
        <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
        <!-- <a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a> -->
      </div>
      <br>
      <div class="height10">
      </div>
      <div class="row">
        <table id="myTable" class="table table-bordered table-striped">
          <thead>
            <!-- <th>ID</th> -->
            <th>Course</th>
            <th>Major</th>
            <th>Department</th>
            <th>Action</th>

          </thead>
          <tbody>
            <?php
              
              include_once('db_conn.php');
              
              $sql = "SELECT * FROM tbl_course";
 
              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($rows = $query->fetch_assoc()){
                echo 
                "<tr>
                  <td>".$rows['crse_description']."</td>
                  <td>".$rows['crse_major']."</td>
                  <td>".$rows['crse_department']."</td>
                  <td>
                    <a href='#edit_".$rows['crse_id']."' class='btn btn-success btn-sm' data-toggle='modal' data-placement='top' title='Send Email'><span class='glyphicon glyphicon-edit'></span></a>
                    <a href='#delete_".$rows['crse_id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
                  </td>
                </tr>";
                include('edit_delete_modal.php');
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
<?php include('add_modal.php') ?>
 
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
</body>
</html>
