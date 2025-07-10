<?php
    require'db_conn.php';

    if(ISSET($_POST['filter'])){
        $yearSem=$_POST['yearSem'];
        $course=$_POST['course'];
 
        $query=mysqli_query($conn, "SELECT * FROM `tbl_subjects` WHERE `subj_course`='$course' AND `subj_year`='$yearSem'") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
            ?>
            <form method='post' action='insert.php'>
            <tr>
                <td><?php echo $fetch['subj_id']?></td>
                <td><?php echo $fetch['subj_code']?></td>
                <td><?php echo $fetch['subj_course']?></td>
                <td><?php echo $fetch['subj_description']?></td>
                <td><?php echo $fetch['subj_unit']?></td>
                <td><?php echo $fetch['subj_year']?></td>
                <?php
                    $Id = $_GET['id'];
                    $sql = "SELECT * FROM tbl_approvalcs WHERE id=$Id";
                    $result = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_array($result)){
                    echo"<input type='hidden' name='student_id' value='".$rows['student_id']."'>";
                ?>
                
                <td>
                <input type='checkbox' name='subj_id[]' value="<?php echo $fetch['subj_id']?>">
                <input type='hidden' name='subj_code[]' value="<?php echo $fetch['subj_code']?>">
                <input type='hidden' name='subj_course[]' value="<?php echo $fetch['subj_course']?>">
                <input type='hidden' name='subj_description[]' value="<?php echo $fetch['subj_description']?>">
                <input type='hidden' name='subj_unit[]' value="<?php echo $fetch['subj_unit']?>">
                <input type='hidden' name='subj_year[]' value="<?php echo $fetch['subj_year']?>">
                <input type='hidden' name='student_id[]' value="<?php echo $rows['student_id']?>">
                <?php
                }
                ?>
                </td>
            </tr>
            <?php
                }
            ?>
            <button name='Save' class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Save</button>    
            </form>

    <?php

    }else if(ISSET($_POST['reset'])){
        $query=mysqli_query($conn, "SELECT * FROM `tbl_subjects`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
            echo"<tr><td>".$fetch['subj_id']."</td><td>".$fetch['subj_code']."</td><td>".$fetch['subj_course']."</td><td>".$fetch['subj_description']."</td><td>".$fetch['subj_unit']."</td><td>".$fetch['subj_year']."</td></tr>";
        }
    }else{
        $query=mysqli_query($conn, "SELECT * FROM `tbl_subjects`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
            echo"<tr><td>".$fetch['subj_id']."</td><td>".$fetch['subj_code']."</td><td>".$fetch['subj_course']."</td><td>".$fetch['subj_description']."</td><td>".$fetch['subj_unit']."</td><td>".$fetch['subj_year']."</td></tr>";
        }
    }
?>