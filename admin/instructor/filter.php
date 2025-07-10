<?php
    require'db_conn.php';

    if(isset($_POST['filter'])){
        $academic_year=$_POST['academic_year'];
        $subj_code=$_POST['subj_code'];
        
        $query=mysqli_query($conn, "SELECT * FROM `tbl_instructor_history` WHERE `academic_year`='$academic_year' OR `subj_code`='$subj_code'") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){  

            $ins_id = $fetch['instructor_id'];

            $query1 = mysqli_query($conn, "SELECT * FROM `tbl_instructor` WHERE ins_id='$ins_id'");
            while($fetch1 = mysqli_fetch_array($query1)){
        ?>
            <form method='POST' action='add_retrieve.php'>
                <tbody>
                <tr>
                    <td>
                        <input type="checkbox" name="id[]" value="<?php echo $fetch['id'];?>">
                    </td>
                    <td>
                        <?php echo $fetch1['ins_name']?>
                        <input type="hidden" name="retrieve_id[]" value="<?php echo $fetch['id'];?>">
                    </td>
                    <td>
                        <?php echo $fetch['subj_code']?>
                        <input type="hidden" name="instructor_id[]" value="<?php echo $fetch['instructor_id'];?>">
                    </td>
                    <td>
                        <?php echo $fetch['academic_year']?>
                        <input type="hidden" name="subj_code[]" value="<?php echo $fetch['subj_code'];?>">
                    </td>
                    <td class="hidden">
                        <input type="hidden" name="academic_year[]" value="<?php echo $fetch['academic_year'];?>">
                    </td>
                    <td class="hidden">
                        <input type="hidden" name="subj_id[]" value="<?php echo $fetch['subj_id'];?>">
                    </td>
                    <td class="hidden">
                        <input type="hidden" name="subj_description[]" value="<?php echo $fetch['subj_description'];?>">
                    </td>
                    <td class="hidden">
                        <input type="hidden" name="subj_unit[]" value="<?php echo $fetch['subj_unit'];?>">
                    </td>
                </tr>
            </tbody>
        <?php
            }
        }
        ?>
            <button onclick="checker()" name='submit' id='submit' type="submit" class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Save</button>
            <br>
            <br>
            </form>

    <?php
        // Table for Reset

    }else if(isset($_POST['reset'])){
        $query=mysqli_query($conn, "SELECT * FROM `tbl_instructor_history`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){

            $ins_id = $fetch['instructor_id'];

            $query1 = mysqli_query($conn, "SELECT * FROM `tbl_instructor` WHERE ins_id='$ins_id'");
            while($fetch1 = mysqli_fetch_array($query1)){
        ?>

            <tr>
                <td><input type="checkbox" disabled></td>
                <td><?php echo $fetch1['ins_name']?></td>
                <td><?php echo $fetch['subj_code']?></td>
                <td><?php echo $fetch['academic_year']?></td>
            </tr>

        <?php
            }
        }

        // Table for View
    }else{
        $query=mysqli_query($conn, "SELECT * FROM `tbl_instructor_history`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){

            $ins_id = $fetch['instructor_id'];

            $query1 = mysqli_query($conn, "SELECT * FROM `tbl_instructor` WHERE ins_id='$ins_id'");
            while($fetch1 = mysqli_fetch_array($query1)){


        ?>
            <tr>
                <td><input type="checkbox" disabled></td>
                <td><?php echo $fetch1['ins_name']?></td>
                <td><?php echo $fetch['subj_code']?></td>
                <td><?php echo $fetch['academic_year']?></td>
            </tr>
        <?php
            // echo"<tr><td>".$fetch['name']."</td><td>".$fetch['category']."</td></tr>";
            }
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