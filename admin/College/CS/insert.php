
<?php
//insert.php

if(isset($_POST['subj_course']))
{
    include('database_connection.php');
    $query = "
    INSERT INTO tbl_student_subjects (student_id, student_subj_course, student_subj_year, student_subj_description) 
    VALUES(:student_id, :subj_course, :subj_year, :subj_description)
    ";
    $statement = $connect->prepare($query);
    $statement->execute(
    array(
        ':student_id'   => $_POST['student_id'],
        ':subj_course'  => $_POST['subj_course'],
        ':subj_year'    => $_POST['subj_year'],
        ':subj_description' => $_POST['hidden_subj_description']
    )
    );
    $result = $statement->fetchAll();

    if(isset($result))
    {
        echo 'done';
    }

}

?>