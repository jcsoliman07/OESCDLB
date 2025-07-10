<?php
//fetch.php

if(isset($_POST['action']))
{
 include('database_connection.php');

 $output = '';

 if($_POST["action"] == 'subj_course')
 {
  $query = "
  SELECT subj_year FROM tbl_subjects 
  WHERE subj_course = :subj_course 
  GROUP BY subj_year
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':subj_course'  => $_POST["query"]
   )
  );
  $result = $statement->fetchAll();
  $output .= '<option value="">Select Year and Semester</option>';
  foreach($result as $row)
  {
   $output .= '<option value="'.$row["subj_year"].'">'.$row["subj_year"].'</option>';
  }
 }
 if($_POST["action"] == 'subj_year')
 {
  $query = "
  SELECT subj_description FROM tbl_subjects 
  WHERE subj_year = :subj_year
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':subj_year'  => $_POST["query"]
   )
  );
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $output .= '<option value="'.$row["subj_description"].'">'.$row["subj_description"].'</option>';
  }


 }
 echo $output;
}

?>
