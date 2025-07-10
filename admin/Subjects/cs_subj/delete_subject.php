<?php 
   session_start();
include('connection.php');

$user_id = $_POST['id'];
$sql = "DELETE FROM tbl_subjects WHERE subj_id='$user_id'";
$delQuery =mysqli_query($con,$sql);
if($delQuery==true)
{
	 $data = array(
        'status'=>'success',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'failed',
      
    );

    echo json_encode($data);
} 

?>