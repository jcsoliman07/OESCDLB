<!-- <?php
  session_start();

  if (isset($_SESSION['username'])) {
    echo "<input type='hidden' value='".$_SESSION['username']."'";
  }
  else{
    header("Location:../../login/index.php");
  } 
?> -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
  <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
  <style>
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
      <h3 class="display-1"><span class="fas fa-file-alt"></span> AB ECONOMICS </h3>
      <hr class="bg-dark border-4 border-top">
      <div class="row">
      <br>
      <div class="height10">
      </div>
      <div class="row">
        <table id="myTable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th scope="col"> Student Status </th>
              <th scope="col"> Year </th>
              <th scope="col"> Semester </th>
              <th scope="col"> Firstname </th>
              <th scope="col"> Lastname </th>
              <th scope="col"> Middlename </th>
              <th scope="col"> Gender </th>
              <th scope="col"> Email </th>
              <th scope="col"> View </th>
            </tr>
          </thead>
          <tbody>
            <?php
              
              include_once('db_conn.php');
              $status = 'New';
              $course = 'Bachelor of Arts in Economics';
              $sql = "SELECT * FROM tbl_newstudent WHERE `student_status`='$status' AND `course`='$course' ORDER BY id ASC";
 
              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($rows = $query->fetch_assoc()){
                echo 
                "<tr>
                  <td>".$rows['student_status']."</td>
                  <td>".$rows['year']."</td>
                  <td>".$rows['semester']."</td>
                  <td>".$rows['fname']."</td>
                  <td>".$rows['lname']."</td>
                  <td>".$rows['mname']."</td>
                  <td>".$rows['gender']."</td>
                  <td>".$rows['email']."</td>
                  <td>
                    <a href='../../../college/view.php?id=".$rows['id']."' type='button' name='button' id='button' class='btn btn-primary btn-sm' data-toggle='tooltip' data-placement='top' title='View Student Information'><span class='fas fa-eye'></span></a>
                  </td>
                </tr>";
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

</body>
</html>