<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Retrieve Records</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../datatable/dataTable.bootstrap.min.css">
    <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

<style>
    .wrapp{
      margin-left: 60px;
      max-width: 90%;
    }
</style>

</head>
<body>

<!-- Add New -->

<div class="container">
    <div class="row">
        <div class="col-sm-" style="font-size:16px">
            <a href="index.php"><span class="glyphicon glyphicon-arrow-left"></span>  Back</a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="wrapp">
            <div class="col-sm-2">
                <form method="POST" action="">
                    <div class="form-group row">
                        <h3><b>Filter By: </b></h3>
                        <br>

                            <label class="form-label">Academic Year: </label>
                            <select class="form-control" name="academic_year">
                                <option value="">--Select--</option>
                                <?php
                                    include "connection.php";

                                    $query = mysqli_query($conn, "SELECT * FROM tbl_academicyear") or die(mysqli_error());
                                    while($row = mysqli_fetch_array($query)){
                                        $year = $row['year'];

                                        echo "<option value='$year'>$year</option>";
                                    }
                                ?>
                            </select>
                            <br>

                            <label class="form-label">Course: </label>
                            <select class="form-control" name="subj_course">
                                <option value="">--Select--</option>
                                <?php
                                    include "connection.php";

                                    $query = mysqli_query($conn, "SELECT DISTINCT crse_description FROM tbl_course") or die(mysqli_error());
                                    while($row = mysqli_fetch_array($query)){
                                        $subj_course = $row['crse_description'];

                                        echo "<option value='$subj_course'>$subj_course</option>";
                                    }
                                ?>
                            </select>
                            <br>

                            <label class="form-label">Subject: </label>
                            <select class="form-control" name="subj_code">
                                <option value="">--Select--</option>
                                <?php
                                    include "connection.php";

                                    $query = mysqli_query($conn, "SELECT DISTINCT subj_code FROM tbl_subjects")or die(mysqli_error());
                                    while($row = mysqli_fetch_array($query)){
                                        $subj_code = $row['subj_code'];

                                        echo "<option value='$subj_code'>$subj_code</option>";
                                    }
                                ?>
                            </select>
                            <br>

                            <label class="form-label">Year: </label>
                            <select class="form-control" name="subj_year">
                                <option value="">--Select--</option>
                                <?php
                                    include "connection.php";

                                    $query = mysqli_query($conn, "SELECT DISTINCT subj_year FROM tbl_subjects")or die(mysqli_error());
                                    while($row = mysqli_fetch_array($query)){
                                        $subj_year = $row['subj_year'];

                                        echo "<option value='$subj_year'>$subj_year</option>";
                                    }
                                ?>
                            </select>
                             <br>

                            <label class="form-label">Semester: </label>
                            <select class="form-control" name="subj_semester">
                                <option value="">--Select--</option>
                                <?php
                                    include "connection.php";

                                    $query = mysqli_query($conn, "SELECT DISTINCT subj_semester FROM tbl_subjects")or die(mysqli_error());
                                    while($row = mysqli_fetch_array($query)){
                                         $subj_semester = $row['subj_semester'];

                                         echo "<option value='$subj_semester'>$subj_semester</option>";
                                    }
                                 ?>
                            </select>

                            <br>
                            <br>
                            <button class="btn btn-primary" name="filter"><span class="glyphicon glyphicon-filter"></span>  Filter</button>
                            <button class="btn btn-success" name="reset"><span class="glyphicon glyphicon-refresh"></span>  Reset</button>
                    </div>
                 </form>
            </div>

        <div class="col-sm-1"></div>

        <div class="col-sm-9">
            <br/>
            <table class="table table-bordered table-hover">
                <thead>
                    <th></th>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Subject</th>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>Academic Year</th>
                </thead>

                <tbody>
                    <?php include "filter.php";?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="../jquery/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../datatable/jquery.dataTables.min.js"></script>
<script src="../datatable/dataTable.bootstrap.min.js"></script>
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
  function checker() {
    var result = confirm('Are you sure you want to continue?');
    if (result == false){
      event.preventDefault();
    }
  }
</script>

</body>
</html>

