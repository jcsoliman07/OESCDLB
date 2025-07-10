<?php 
    session_start();
include('connection.php');
// $username = $_POST['username'];
// $email = $_POST['email'];
// $mobile = $_POST['mobile'];
// $city = $_POST['city'];
$subj_code =$_POST['subj_code'];
$subj_description =$_POST['subj_description'];
$subj_unit =$_POST['subj_unit'];
$subj_prereq =$_POST['subj_prereq'];
$subj_course =$_POST['subj_course'];
$subj_year =$_POST['subj_year'];
$subj_semester =$_POST['subj_semester'];
$id = $_POST['id'];

$sql = "UPDATE `tbl_subjects` SET  `subj_code`='$subj_code' , `subj_description`= '$subj_description', `subj_unit`='$subj_unit',  `subj_prereq`='$subj_prereq' , `subj_course`='$subj_course', `subj_year`='$subj_year', `subj_semester`='$subj_semester' WHERE subj_id='$id' ";

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