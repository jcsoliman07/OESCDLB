<?php 
include('db_conn1.php');

$subj_id = $_POST['id'];

$sql = "DELETE FROM tbl_subjects WHERE subj_id='$subj_id'";
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

<!-- <?php

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$Id = validate($_GET['id']);

	$sql = "DELETE FROM tbl_subjects WHERE subj_id=$Id";
			$result = mysqli_query($conn, $sql);

		if ($result) {
			header("Location:subjectscs.php?success=Successfully Deleted!");
		}
		else{
			header("Location:subjectscs.php?");
		}

}else{
	header("Location:subjectscs.php");
}



?> -->