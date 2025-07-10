<?php
include 'db_conn.php';
	if (isset($_POST['Save'])) {

		$checked_array = $_POST['id'];

		foreach($_POST['subj_id'] as $key => $value){

			if (in_array($_POST['subj_id'][$key],$checked_array)) {
				$subj_id = $_POST['subj_id'][$key];
				$subj_code = $_POST['subj_code'][$key];
				$subj_description = $_POST['subj_description'][$key];
				$ins_id = $_POST['ins_id'][$key];
				$subj_unit = $_POST['subj_unit'][$key];
				$academic_year = $_POST['academic_year'][$key];

				$sql = "SELECT * FROM tbl_instructor_subjects WHERE subj_code='$subj_code'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);

					$query = mysqli_query($conn, "SELECT * FROM tbl_instructor") or die(mysqli_error($conn));
						while ($fetch = mysqli_fetch_array($query)) {

						$query1 = mysqli_query($conn, "SELECT * FROM tbl_subjects") or die(mysqli_error($conn));
						while ($fetch1 = mysqli_fetch_array($query1)) {

								if ($fetch1['subj_code'] == $row['subj_code'] AND $fetch['ins_id'] == $row['instructor_id']) {
									echo"<script type='text/javascript'>alert('Instructor is Already Assigned in this subject!');window.location.href='instructor.php'</script>";
								}
							}
						}
				}else{
						$query = "INSERT INTO `tbl_instructor_subjects`(`instructor_id`, `academic_year`, `subj_id`, `subj_code`, `subj_description`, `subj_unit`) VALUES ('$ins_id', '$academic_year','$subj_id', '$subj_code', '$subj_description', '$subj_unit')";
						$result1 = mysqli_query($conn,$query);

						if ($result1) 
						{
							echo"<script type='text/javascript'>alert('Successfully Assigned!');window.location.href='instructor.php'</script>";
						}
						else
						{
							echo"<script type='text/javascript'>alert('Unsuccessfully Assigned!');window.location.href='instructor.php'</script>";
						}
				}
			}
		}
	}

?>
