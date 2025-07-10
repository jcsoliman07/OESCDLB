<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Archive Records</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

    <style>
        body{
            background-color: ghostwhite;
        }
        .container{
            margin: 0;
            top: 0;
            width: 100%;
            padding: 10px;
        }

        .my_container .wrapp{
            padding: 20px;
            top: 10px;
            bottom: 20px;
            max-width: 100%;
            position: relative;
            background-color: white;
            box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
        }

        .my_container .row{
            margin-bottom: 10px;
        }

        .my_container a{
            font-size: 16px;
        }

        .my_container a:hover{
            color: black;
        }

        .my_container .wrapp table{
            width: 100%;
        }
    </style>

</head>
<body>

<div class="container">
    <div class="my_container">
        <div class="wrapp">
            <div class="row">
                <a href="index.php"><span class="glyphicon glyphicon-arrow-left"></span>  Back</a>
            </div>
            <div class="row1">
                <form method="POST" action="archive.php">
                    <button onclick="checker()" name='Save' class='btn btn-warning'><span class='glyphicon glyphicon-save'></span> Archive</button>
                    <br/>
                    <br/>
                    <table class="table table-bordered">
                        <thead>
                            <th style="text-align:center;">
                                Select All
                                <br/>
                                <input type="checkbox" class="chk_boxes" label="check all">
                            </th>
                            <th>Student ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Subject</th>
                            <th>Course</th>
                            <th>Year</th>
                            <th>Semester</th>
                            <th>Prelim</th>
                            <th>Midterm</th>
                            <th>Pre-final</th>
                            <th>Final</th>
                            <th>Remarks</th>
                        </thead>

                        <tbody>
                            <?php 
                                include "connection.php";

                               $sql = mysqli_query($conn, "SELECT * FROM tbl_retrieved");
                               while ($result = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td style="text-align:center;">
                                        <input type="checkbox" name="id[]" class="chk_boxes1" value="<?php echo $result['id']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <td>
                                        <?php echo $result['academic_year']?>
                                        <input type="hidden" name="archive_id[]" class="chk_boxes1" value="<?php echo $result['id']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <td>
                                        <?php echo $result['lname']?>
                                        <input type="hidden" name="student_id[]" class="chk_boxes1" value="<?php echo $result['student_id']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <td>
                                        <?php echo $result['fname']?>
                                        <input type="hidden" name="lname[]" class="chk_boxes1" value="<?php echo $result['lname']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <td>
                                        <?php echo $result['mname']?>
                                        <input type="hidden" name="fname[]" class="chk_boxes1" value="<?php echo $result['fname']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <td>
                                        <?php echo $result['subj_code']?>
                                        <input type="hidden" name="mname[]" class="chk_boxes1" value="<?php echo $result['mname']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <td>
                                        <?php echo $result['subj_course']?>
                                        <input type="hidden" name="subj_code[]" class="chk_boxes1" value="<?php echo $result['subj_code']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <td>
                                        <?php echo $result['subj_year']?>
                                        <input type="hidden" name="subj_course[]" class="chk_boxes1" value="<?php echo $result['subj_course']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <td>
                                        <?php echo $result['subj_sem']?>
                                        <input type="hidden" name="subj_year[]" class="chk_boxes1" value="<?php echo $result['subj_year']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <td>
                                        <?php echo $result['prelim']?>
                                        <input type="hidden" name="subj_sem[]" class="chk_boxes1" value="<?php echo $result['subj_sem']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <td>
                                        <?php echo $result['midterm']?>
                                        <input type="hidden" name="prelim[]" class="chk_boxes1" value="<?php echo $result['prelim']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <td>
                                        <?php echo $result['prefi']?>
                                        <input type="hidden" name="midterm[]" class="chk_boxes1" value="<?php echo $result['midterm']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <td>
                                        <?php echo $result['finals']?>
                                        <input type="hidden" name="prefi[]" class="chk_boxes1" value="<?php echo $result['prefi']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <td class="hidden">
                                        <input type="text" name="finals[]" class="chk_boxes1" value="<?php echo $result['finals']?>">
                                    </td>
                                    <td class="hidden">
                                        <input type="text" name="academic_year[]" class="chk_boxes1" value="<?php echo $result['academic_year']?>">
                                    </td>
                                    <td class="hidden">
                                        <input type="text" name="subj_unit[]" class="chk_boxes1" value="<?php echo $result['subj_unit']?>">
                                    </td>
                                    <td class="hidden">
                                        <input type="text" name="subj_description[]" class="chk_boxes1" value="<?php echo $result['subj_description']?>">
                                    </td>
                                    <td class="hidden">
                                        <input type="text" name="subj_prereq[]" class="chk_boxes1" value="<?php echo $result['subj_prereq']?>">
                                    </td>
                                    <!-- ---------------------------------------------------- -->
                                    <?php
                                        if (($result['finals'] >= 75) AND ($result['finals'] <= 100)) {
                                            $remarks = 'Passed';
                                    ?>
                                        <td style="font-weight: bold; color: green;">
                                            <?php echo $remarks?>
                                            <input type="hidden" name="subj_grade[]" value="<?php echo $remarks?>">
                                        </td>
                                    <?php
                                        }else{
                                            $remarks = 'Failed';
                                    ?>
                                        <td style="font-weight: bold; color: red;">
                                            <?php echo $remarks?>
                                            <input type="hidden" name="subj_grade[]" value="<?php echo $remarks?>">
                                        </td>
                                    <?php
                                        }
                                    ?>

                                </tr>
                            <?php
                               }
                            ?>
                        </tbody>
                        
                    </table>
                    <button onclick="checker()" name='Save' class='btn btn-warning'><span class='glyphicon glyphicon-save'></span> Archive</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(function() {
    $('.chk_boxes').click(function() {
        $('.chk_boxes1').prop('checked', this.checked);
    });
}); 
</script>

</body>
</html>