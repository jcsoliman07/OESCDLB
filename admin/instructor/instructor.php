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
  <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
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
      <h3 style="text-transform:uppercase;"><span class="far fa-clipboard"></span> List of Faculty and Staff </h3>
      <hr class="bg-dark border-4 border-top">
      <div class="row">
        <div class="col-sm-1">
          <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
        </div>
         <div class="col-sm-2">
          <a href="retrieve.php" class="btn btn-success"><span class="glyphicon glyphicon-download-alt"></span> Retrieve</a>
        </div>
        
        <!-- <a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a> -->
      </div>
      <br>
      <div class="height10">
      </div>
      <div class="row">
        <table id="myTable" class="table table-bordered table-striped">
          <thead>
           <tr>
             <td>#</td>
             <td>Instructor Name</td>
             <td>Position</td>
             <td>Status</td>
             <td>Action</td>
           </tr>
          </thead>
          <tbody>
            <?php
              
              include_once('db_conn.php');

              $sql = "SELECT * FROM tbl_instructor";
              $i=0;
              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($rows = $query->fetch_assoc()){
                $i++;
              ?>
              <tr>
                  <td><?php echo $i ?> <input type='hidden' value="<?php echo $rows['ins_id']?>"></td>
                  <td><?php echo $rows['ins_name']?></td>
                  <td><?php echo $rows['ins_description']?></td>
                  <td>
                    <?php

                    $ins_sql = mysqli_query($conn, "SELECT * FROM tbl_login_acc");
                    while ($result = mysqli_fetch_array($ins_sql)) {
                      if ($result['login_id'] == $rows['ins_id']) {
                        if ($rows['ins_status']==1){
                          echo '<a href="status.php?id='.$rows['ins_id'].'&status=0" class="btn btn-success">Activated</a>';
                        }else{
                          echo '<a href="status.php?id='.$rows['ins_id'].'&status=1" class="btn btn-danger"></span>Deactivated</a>';
                        }
                      }else{
                        
                      }
                    }
                     
                    ?>
                  </td>
                  <td>
                    <a href="#edit_<?php echo $rows['ins_id'] ?>" class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>

                    <a href="#delete_<?php echo $rows['ins_id']?>" class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>

                    <a href="assign_subject.php?id=<?php echo $rows['ins_id']?>" type='button' name='button1' id='button1' class='btn btn-primary btn-sm' data-toggle='tooltip' data-placement='top' title='Assign Subject'><span class='glyphicon glyphicon-list-alt'></span></a>

                    <a href="addaccount.php?id=<?php echo $rows['ins_id']?>" type='button3' name='button3' id='button3' class='btn btn-warning btn-sm'  data-toggle='tooltip' data-placement='top' title='Faculty Accounts'><span class='fas fa-user'></span></a>
                  </td>
                </tr>
              <?php
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

<script>
    $(document).ready(function(){
      $('#button1').tooltip();
    })
</script>

</body>
</html>


