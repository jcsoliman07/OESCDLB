<?php
    require'connection.php';

    if(isset($_POST['filter'])){
        $academic_year=$_POST['academic_year'];
        $subj_code=$_POST['subj_code'];
        $subj_year=$_POST['subj_year'];
        $subj_semester=$_POST['subj_semester'];
        $subj_course=$_POST['subj_course'];
        
        $query=mysqli_query($conn, "SELECT * FROM `tbl_grading` WHERE `academic_year`='$academic_year' OR `subj_course`='$subj_course' OR `subj_code`='$subj_code' OR `subj_year`='$subj_year' OR `subj_sem`='$subj_semester'") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){  
        ?>
            <form method='POST' action='retrieve.php'>
                <tbody>
                <tr>
                    <td><input type="checkbox" name="id[]" value="<?php echo $fetch['id'];?>"></td>

                    <td class="hidden">
                        <input type="hidden" name="retrieve_id[]" value="<?php echo $fetch['id'];?>">
                    </td>

                    <td>
                        <?php echo $fetch['student_id']?>
                        <input type="hidden" name="student_id[]" value="<?php echo $fetch['student_id'];?>">
                    </td>

                    <td>
                        <?php echo $fetch['lname']."". $fetch['fname'].", ".$fetch['mname']?>
                        <input type="hidden" name="subj_course[]" value="<?php echo $fetch['subj_course'];?>">
                    </td>

                    <td>
                        <?php echo $fetch['subj_course']?>
                        <input type="hidden" name="lname[]" value="<?php echo $fetch['lname'];?>">
                    </td>

                    <td>
                        <?php echo $fetch['subj_code']?>
                        <input type="hidden" name="fname[]" value="<?php echo $fetch['fname'];?>">
                    </td>

                    <td>
                        <?php echo $fetch['subj_year']?>
                        <input type="hidden" name="mname[]" value="<?php echo $fetch['mname'];?>">
                    </td>

                    <td>
                        <?php echo $fetch['subj_sem']?>
                        <input type="hidden" name="subj_code[]" value="<?php echo $fetch['subj_code'];?>">
                    </td>

                    <td>
                        <?php echo $fetch['academic_year']?>
                        <input type="hidden" name="subj_year[]" value="<?php echo $fetch['subj_year'];?>">
                    </td>

                    <td class="hidden">
                        <input type="hidden" name="subj_sem[]" value="<?php echo $fetch['subj_sem'];?>">
                    </td>
                    <td class="hidden">
                        <input type="hidden" name="academic_year[]" value="<?php echo $fetch['academic_year'];?>">
                    </td>
                    <td class="hidden">
                        <input type="hidden" name="subj_description[]" value="<?php echo $fetch['subj_description'];?>">
                    </td>
                    <td class="hidden">
                        <input type="hidden" name="subj_unit[]" value="<?php echo $fetch['subj_unit'];?>">
                    </td>
                    <td class="hidden">
                        <input type="hidden" name="subj_prereq[]" value="<?php echo $fetch['subj_prereq'];?>">
                    </td>
                    <td class="hidden">
                        <input type="hidden" name="prelim[]" value="<?php echo $fetch['prelim'];?>">
                    </td>
                    <td class="hidden">
                        <input type="hidden" name="midterm[]" value="<?php echo $fetch['midterm'];?>">
                    </td>
                    <td class="hidden">
                        <input type="hidden" name="prefi[]" value="<?php echo $fetch['prefi'];?>">
                    </td>
                    <td class="hidden">
                        <input type="hidden" name="finals[]" value="<?php echo $fetch['finals'];?>">
                    </td>
                     <td class="hidden">
                        <input type="hidden" name="subj_grade[]" value="<?php echo $fetch['subj_grade'];?>">
                    </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
            <button onclick="checker()" name='submit' id='submit' type="submit" class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Save</button>
            <br>
            <br>
            </form>

    <?php
        // Table for Reset

    }else if(isset($_POST['reset'])){
        $query=mysqli_query($conn, "SELECT * FROM `tbl_grading`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
        ?>

            <tr>
                <td></td>
                <td><?php echo $fetch['student_id']?></td>
                <td><?php echo $fetch['lname']."". $fetch['fname'].", ".$fetch['mname']?></td>
                <td><?php echo $fetch['subj_course']?></td>
                <td><?php echo $fetch['subj_code']?></td>
                <td><?php echo $fetch['subj_year']?></td>
                <td><?php echo $fetch['subj_sem']?></td>
                <td><?php echo $fetch['academic_year']?></td>
            </tr>

        <?php
        }

        // Table for View
    }else{
        $query=mysqli_query($conn, "SELECT * FROM `tbl_grading`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
        ?>
            <tr>
                <td><input type="checkbox" disabled></td>
                <td><?php echo $fetch['student_id']?></td>
                <td><?php echo $fetch['lname']."". $fetch['fname'].", ".$fetch['mname']?></td>
                <td><?php echo $fetch['subj_course']?></td>
                <td><?php echo $fetch['subj_code']?></td>
                <td><?php echo $fetch['subj_year']?></td>
                <td><?php echo $fetch['subj_sem']?></td>
                <td><?php echo $fetch['academic_year']?></td>
            </tr>
        <?php
            // echo"<tr><td>".$fetch['name']."</td><td>".$fetch['category']."</td></tr>";
        }
    }
?>

<script>
  function checker() {
    var result = confirm('Are you sure you want to continue?');
    if (result == false){
      event.preventDefault();
    }
  }
</script>