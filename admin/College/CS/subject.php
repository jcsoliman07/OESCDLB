<?php
//index.php
    include('database_connection.php');

    $subj_course = '';

    $query = "
     SELECT subj_course FROM tbl_subjects GROUP BY subj_course ORDER BY subj_course ASC
    ";
    $statement = $connect->prepare($query);

    $statement->execute();

    $result = $statement->fetchAll();

    foreach($result as $row)
    {
     $subj_course .= '<option value="'.$row["subj_course"].'">'.$row["subj_course"].'</option>';
    }
?>
<!DOCTYPE html>
<html>
 <head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery.lwMultiSelect.js"></script>
  <link rel="stylesheet" href="jquery.lwMultiSelect.css" />
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">
   <form method="post" id="insert_data">
    <select name="subj_course" id="subj_course" class="form-control action">
     <option value="">Select Course</option>
     <?php echo $subj_course; ?>
    </select>
    <br />
    <select name="subj_year" id="subj_year" class="form-control action">
     <option value="">Select Year and Semester</option>
    </select>
    <br />
    <select name="subj_description" id="subj_description" multiple class="form-control">
    </select>
    <br />
    <input type="hidden" name="hidden_subj_description" id="hidden_subj_description" />
    
    <?php
    if (isset($_GET['id'])) {
    include "../db_conn.php";

        $Id = $_GET['id'];

        $sql = "SELECT * FROM tbl_enrolledcs WHERE id=$Id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $fetch = mysqli_fetch_assoc($result);
        }
    }
    ?>

    <input type="hidden" name="student_id" id="student_id" value="<?=$fetch['id']?>">

    <input type="submit" name="insert" id="action" class="btn btn-info" value="Add" />
   </form>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

    $('#subj_description').lwMultiSelect();

    $('.action').change(function(){
    if($(this).val() != '')
    {
        var action = $(this).attr("id");
        var query = $(this).val();
        var result = '';
        if(action == 'subj_course')
        {
            result = 'subj_year';
        }
        else
        {
            result = 'subj_description';
        }
        $.ajax({
        url:'fetch.php',
        method:"POST",
        data:{action:action, query:query},
        success:function(data)
        {
            $('#'+result).html(data);
            if(result == 'subj_description')
            {
                $('#subj_description').data('plugin_lwMultiSelect').updateList();
            }
        }
    })
    }
});

    $('#insert_data').on('submit', function(event){
    event.preventDefault();
    if($('#subj_course').val() == '')
    {
        alert("Please Select Course");
        return false;
    }
    else if($('#subj_year').val() == '')
    {
        alert("Please Select Year and Semester");
        return false;
    }
    else if($('#subj_description').val() == '')
    {
        alert("Please Select Subject");
        return false;
    }
    else
    {
        $('#hidden_subj_description').val($('#subj_description').val());
        $('#action').attr('disabled', 'disabled');
        var form_data = $(this).serialize();
        $.ajax({
            url:"insert.php",
            method:"POST",
            data:form_data,
            success:function(data)
            {
                $('#action').attr("disabled", "disabled");
                if(data == 'done')
                {
                    $('#subj_description').html('');
                    $('#subj_description').data('plugin_lwMultiSelect').updateList();
                    $('#subj_description').data('plugin_lwMultiSelect').removeAll();
                    $('#insert_data')[0].reset();
                    alert('Data Inserted');
                }
            }

        });
    }
});

});
</script>