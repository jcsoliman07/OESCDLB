<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

    <style>
        body{
            background-color: rgba(0, 0, 0, 0.05);
            animation: fadeInAnimation ease 0.5s;
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
            padding: 5px;
            margin: 0;    
        }
        .wrapp .wrappFirst{
            margin-left: 5px;
            margin-right: 5px;
            top: 10px;
            bottom: 20px;
            max-width: 100%;
            padding: 15px;
            /*max-height: 500px;*/
            position: relative;
            background-color: white;
            box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
        }
        .wrapp .wrappSecond{
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 30px;
            top: 25px;
            bottom: 30px;
            max-width: 100%;
            padding: 15px;
            /*max-height: 500px;*/
            position: relative;
            background-color: white;
            box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="wrapp">
                <div class="wrappFirst">
                    <h2><span class="fas fa-file-alt"></span> Student Information </h2>
                    <hr class="bg-danger border-4 border-top border-danger">
                    <?php
                        include "connection.php";
                            $Id = $_GET['id'];
                            // echo $Id;

                            $query = mysqli_query($conn, "SELECT * FROM tbl_approvalstudent WHERE student_id = '$Id'");
                            while($result = mysqli_fetch_array($query)){
                                $course = $result['course'];
                        ?>
                        <form method="post" action="addsubject.php">
                        <div class="form-group row" style="margin-left: 50px">
                            <input type="hidden" name="id" value="<?php echo $result['id']?>"/>
                            <div class="col-sm-5">
                                <label style="font-weight:bold" class="text h4">Name: </label>
                                <label style="font-weight: lighter;" class="text h4"><?php echo $result['fname']." ".$result['mname'].". ".$result['lname']?></label>
                            </div>
                            <div class="col-sm-5">
                                <label style="font-weight:bold" class="text h4">Year: </label>
                                <label style="font-weight: lighter;" class="text h4"><?php echo $result['year']?></label>
                            </div>
                        </div>

                        <div class="form-group row" style="margin-left: 50px">
                            <div class="col-sm-5">
                                <label style="font-weight:bold" class="text h4">Address: </label>
                                <label style="font-weight: lighter;" class="text h4"><?php echo $result['house_street']." ".$result['barangay']." ".$result['city']." ".$result['province']?></label>
                            </div>
                            <div class="col-sm-5">
                                <label style="font-weight:bold" class="text h4">Course: </label>
                                <label style="font-weight: lighter;" class="text h4"><?php echo $result['course']?></label>
                            </div>
                        </div>
                    <!-- <hr class="bg-danger border-4 border-top border-danger"> -->
                </div>
                <div class="wrappSecond">
                    <br/>
                    <h2><span class="fas fa-clipboard"></span> Subject List </h2>
                    <hr class="bg-danger border-4 border-top border-danger">
                    <button name='Save' class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Save</button>
                    <br>
                    <br>
                    <input type="checkbox" class="chk_boxes" label="check all">   Select all
                    <br>
                    <br>
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <th>Action</th>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Unit</th>
                            <th>Course</th>
                            <th>Year</th>
                            <th>Semester</th>
                        </thead>
                        <tbody>
                <?php 
                    $query1 = mysqli_query($conn, "SELECT * FROM tbl_subjects WHERE subj_course='$course'");
                    while($row = mysqli_fetch_array($query1)){
                ?>
                            <tr>
                                <td>
                                <input type="checkbox" class="chk_boxes1" name="subj_id[]" value="<?php echo $row['subj_code']?>">
                                </td>
                                <td class="hidden">
                                    <input type="hidden" name="subj_grade[]" value="Passed">
                                </td>
                                <td>
                                    <?php echo $row['subj_code']?>
                                    <input type="hidden" name="subj_code[]" value="<?php echo $row['subj_code']?>">
                                </td>
                                <td>
                                    <?php echo $row['subj_description']?>
                                    <input type="hidden" name="subj_description[]" value="<?php echo $row['subj_description']?>">
                                </td>
                                <td>
                                    <?php echo $row['subj_unit']?>
                                    <input type="hidden" name="subj_unit[]" value="<?php echo $row['subj_unit']?>">
                                </td>
                                <td>
                                    <?php echo $row['subj_course']?>
                                    <input type="hidden" name="subj_course[]" value="<?php echo $row['subj_course']?>">
                                </td>
                                <td>
                                    <?php echo $row['subj_year']?>
                                    <input type="hidden" name="subj_year[]" value="<?php echo $row['subj_year']?>">
                                </td>
                                <td>
                                    <?php echo $row['subj_semester'];?>
                                </td>
                                <td class="hidden">
                                    <?php echo $row['subj_prereq']?>
                                    <input type="hidden" name="subj_prereq[]" value="<?php echo $row['subj_prereq']?>">
                                </td>
                                <td class="hidden">
                                    "<?php echo $result['student_id']?>
                                    <input type="hidden" name="student_id[]" value="<?php echo $result['student_id']?>">
                                </td>
                            </tr>

                <?php

                    }
                }
                ?>
                        </tbody>
                    </table>
                    <hr class="bg-danger border-4 border-top border-danger">

                    <button name='Save' class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Save</button>

                    </form>
                </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>


