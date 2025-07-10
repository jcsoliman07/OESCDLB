
<?php
include 'db_conn.php';
error_reporting(0);

	if (isset($_POST['Save'])) {
		
		$checked_array = $_POST['id'];

		foreach ($_POST['instructor_id'] as $key => $value) {

			if (in_array($_POST['instructor_id'][$key], $checked_array)) {

				$instructor_id = $_POST['instructor_id'][$key];
				$subj_id = $_POST['subj_id'][$key];
				$subj_code = $_POST['subj_code'][$key];
				$subj_description = $_POST['subj_description'][$key];
				$subj_unit = $_POST['subj_unit'][$key];

				$query = "INSERT INTO `tbl_instructor_history`(`instructor_id`, `subj_id`, `subj_code`, `subj_description`, `subj_unit`) VALUES ('$instructor_id', '$subj_id', '$subj_code', '$subj_description', '$subj_unit')";

				$result = mysqli_query($conn,$query);

				if ($result) {
					$query1 = "DELETE FROM tbl_instructor_subjects WHERE instructor_id='$instructor_id'";
					$result1 = mysqli_query($conn, $query1);
					if ($result1) {
						echo "<script type='text/javascript'>alert('Successfully Archive!');window.location.href='index.php'</script>";
					}else{
						echo "<script type='text/javascript'>alert('Unsccessfully! Please try again!');window.location.href='index.php'</script>";
					}
					
				}
				else{
					header("Location:index.php?error=Unsuccessfull!");
				}
			}
			
		}
	}

?>