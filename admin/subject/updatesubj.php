<?php 
include('db_conn1.php');
	$subj_code = $_POST['subj_code'];
	$subj_description = $_POST['subj_description'];
	$subj_unit = $_POST['subj_unit'];
	$subj_prereq = $_POST['subj_prereq'];
	$subj_course = $_POST['subj_course'];
	$subj_year = $_POST['subj_year'];
	$subj_semester = $_POST['subj_semester'];
	$Id = $_POST['id'];

$sql = "UPDATE `tbl_subjects` SET `subj_code`='$subj_code', `subj_description`='$subj_description', `subj_unit`='$subj_unit', `subj_prereq`='$subj_prereq', `subj_course`='$subj_course', `subj_semester`='$subj_semester', `subj_year`='$subj_year' WHERE `subj_id`='$Id'";

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

		$sql = "SELECT * FROM tbl_subjects WHERE subj_id=$Id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		}
		else{
			header("Location:subjects.php");
		}
}
else if (isset($_POST['Add'])) 
{
	include "db_conn.php";

		$subj_code = $_POST['subj_code'];
		$subj_description = $_POST['subj_description'];
		$subj_unit = $_POST['subj_unit'];
		$subj_prereq = $_POST['subj_prereq'];
		$subj_course = $_POST['subj_course'];
		$subj_semester = $_POST['subj_semester'];
		$subj_year = $_POST['subj_year'];
		$Id = $_POST['id'];
		
		$sql = "UPDATE tbl_subjects SET subj_code='$subj_code', subj_description='$subj_description', subj_unit='$subj_unit', subj_prereq='$subj_prereq', subj_course='$subj_course', subj_semester='$subj_semester', subj_year='$subj_year' WHERE subj_id=$Id";

		$result = mysqli_query($conn, $sql);

		if ($result) {
			header("Location:subjectscs.php?success=Successfully Updated!");
		}
		else{
			header("Location:subjectscs.php?error=Unsuccessfully!");
		}

}
else{
	header("Location:subjectscs.php");
}

?> -->