<?php
  session_start();
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
      <div class="row">
        <div class="col-sm-1">
          <a href="add_modal.php" target="myFrame" class="btn btn-success"><span class="glyphicon glyphicon-download-alt"></span> Retrieve</a>
        </div>
        <div class="col-sm-1">
          <button onclick="checker()" name='Save' class='btn btn-warning'><span class='glyphicon glyphicon-save'></span> Archive</button>
        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="height10">
      </div>
      <div class="row">
        <table id="myTable" class="table table-bordered table-striped">
          <thead>
           <tr>
             <td>#</td>
             <td>Student ID</td>
             <td>Name</td>
             <td>Subject</td>
             <td>Year</td>
             <td>Semester</td>
             <td>Academic Year</td>
             <td>Prelim</td>
             <td>Midterm</td>
             <td>Prefinals</td>
             <td>Finals</td>
             <td>Action</td>
           </tr>
          </thead>
          <form method="POST" action="">
          <tbody>
            <?php
              
              include_once('db_conn.php');

              $sql = "SELECT * FROM tbl_retrieved";
              $i=0;
              $query = $conn->query($sql);
              while($rows = $query->fetch_assoc()){
                $i++;
              ?>
              <tr>
                  <td>
                    <input type="checkbox" name="id[]" value="<?php echo $rows['id']?>">
                  </td>

                  <td>
                    <?php echo $rows['student_id']?>
                    
                  </td>

                  <td>
                    <?php echo $rows['lname']." ". $rows['fname']." ". $rows['mname']?>
                    
                  </td>

                  <td>
                    <?php echo $rows['subj_code']?>
                    
                  </td>

                  <td>
                    <?php echo $rows['subj_year']?>
                    
                  </td>

                  <td>
                    <?php echo $rows['subj_sem']?>
                    
                  </td>

                  <td>
                    <?php echo $rows['academic_year']?>
                    
                  </td>

                  <td contenteditable="true" data-old_value="<?php echo $rows['prelim']?>" onBlur="saveInlineEdit(this, 'prelim', '<?php echo $rows['id']?>')" onclick="highlightEdit(this);">
                    <?php echo $rows['prelim']?>
                    
                  </td>

                  <td contenteditable="true" data-old_value="<?php echo $rows['prelim']?>" onBlur="saveInlineEdit(this, 'midterm', '<?php echo $rows['id']?>')" onclick="highlightEdit(this);">
                    <?php echo $rows['midterm']?>
                    
                  </td>

                  <td>
                    <?php echo $rows['prefi']?>
                    
                  </td>

                  <td>
                    <?php echo $rows['finals']?>
                    
                  </td>

                  <td>
                    
                  </td>

                  

              </tr>
              <?php
                // include('edit_delete_modal.php');
              }
            ?>
          </tbody>
        </table>
        </form>
      </div>
    </div>
  </div>
</div>

<br>
<br>

 
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

<script>
  function checker() {
    var result = confirm('Are you sure you want to Archive?');
    if (result == false){
      event.preventDefault();
    }
  }
</script>

<script>
  function saveInlineEdit(editableObj,column,id) {
  // no change change made then return false
  if($(editableObj).attr('data-old_value') === editableObj.innerHTML)
  return false;
  // send ajax to update value
  $(editableObj).css("background","#FFF url(loader.gif) no-repeat right");
  $.ajax({
  url: "saveInlineEdit.php",
  type: "POST",
  dataType: "json",
  data:'column='+column+'&value='+editableObj.innerHTML+'&id='+id,
  success: function(response) {
  // set updated value as old value
  $(editableObj).attr('data-old_value',editableObj.innerHTML);
  $(editableObj).css("background","#FDFDFD");
  },
  error: function () {
  console.log("errr");
  }
  });
  }
</script>

</body>
</html>


