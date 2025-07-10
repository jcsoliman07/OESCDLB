<!DOCTYPE html>
<html>
<head>
  <title></title>


  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c4aa1da3d9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  



</head>
<body>
<div class="container-fluid my-5">
    <?php
      include "display.php";
      $query = "SELECT * FROM tbl_student ORDER BY id";
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
    <a href="student.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Print</a>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th class="text-center" scope="col">#</th>
          <th class="text-center" scope="col"> Student ID </th>
          <th class="text-center" scope="col"> Name</th>
          <th class="text-center" scope="col"> Prelim </th>
          <th class="text-center" scope="col">Midterm </th>
          <th class="text-center" scope="col">Prefinal </th>
          <th class="text-center" scope="col">Final </th>
          <th class="text-center" scope="col">Conversion </th>
          <th class="text-center" scope="col">Remarks</th>
          <!-- <th scope="col"> Course </th> -->
          
        </tr>
      </thead>
      <tbody>
        <?php
          require 'db_conn.php';
          $course = 'Bachelor of Arts in Economics';
          $i = 0;
          $query = mysqli_query($conn, "SELECT * FROM `tbl_student` WHERE `course` = '$course'") or die(mysqli_error());
          while($rows = mysqli_fetch_array($query)){
            $i++;
        ?>
        <tr>
          <th class="text-center" scope="row"><?=$i?></th>
          <td class="text-center"><?php echo $rows['student_id']; ?></td>
          <td class="text-center"><?php echo $rows['lname']; ?>, <?php echo $rows['fname']; ?></td>
          <td class="text-center"><?php echo $rows['prelim']; ?></td>
          <td class="text-center"><?php echo $rows['midterm']; ?></td>
          <!-- <td><?php echo $rows['course']; ?></td> -->
          <td class="text-center"><?php echo $rows['prefi']; ?></td>
          <td class="text-center"><?php echo $rows['final']; ?></td>
          
      
        </tr>
        <?php
          // include 'edit.php';
          }
        ?>
      </tbody>
    </table>
  </div>

 

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