<?php 
include('connection.php');
$subj_code =$_POST['subj_code'];
$subj_description =$_POST['subj_description'];
$subj_unit =$_POST['subj_unit'];
$subj_prereq =$_POST['subj_prereq'];
$subj_course =$_POST['subj_course'];
$subj_year =$_POST['subj_year'];
$subj_semester =$_POST['subj_semester'];

// $username = $_POST['username'];
// $email = $_POST['email'];
// $mobile = $_POST['mobile'];
// $city = $_POST['city'];

$sql = "INSERT INTO `tbl_subjects` (`subj_code`,`subj_description`,`subj_unit`,`subj_prereq`,`subj_course`,`subj_year`,`subj_semester`) values ('$subj_code', '$subj_description', '$subj_unit', '$subj_prereq', '$subj_course', '$subj_year', '$subj_semester' )";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
} 

?>