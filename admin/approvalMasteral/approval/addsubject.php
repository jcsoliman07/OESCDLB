<?php
include 'db_conn.php';
	if (isset($_POST['Save'])) {

		$Id = $_POST['Id'];
		$student_status = $_POST['student_status'];
		$course = $_POST['course'];
		$major = $_POST['major'];
		$student_id = $_POST['student_id1'];
		$year = $_POST['year'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mname = $_POST['mname'];
		$suffix = $_POST['suffix'];
		$house_no = $_POST['house_no'];
		$barangay = $_POST['barangay'];
		$city = $_POST['city'];
		$province = $_POST['province'];
		$bdate = date('Y-m-d', strtotime($_POST['bdate']));
		$bplace = $_POST['bplace'];
		$religion = $_POST['religion'];
		$nationality = $_POST['nationality'];
		$gender = $_POST['gender'];
		$cstat = $_POST['cstat'];
		$email = $_POST['email'];
		$mnum = $_POST['mnum'];

		$fathername = $_POST['fathername'];
		$fathermnum = $_POST['fathermnum'];
		$foccupation = $_POST['foccupation'];
		$faddress = $_POST['faddress'];

		$mothername = $_POST['mothername'];
		$mothermnum = $_POST['mothermnum'];
		$moccupation = $_POST['moccupation'];
		$maddress = $_POST['maddress'];

		$guardianname = $_POST['guardianname'];
		$guardiannumber = $_POST['guardiannumber'];
		$goccupation = $_POST['goccupation'];
		$gaddress = $_POST['gaddress'];

		$requirement1 = $_POST['requirement1'];
		$requirement2 = $_POST['requirement2'];
		$requirement3 = $_POST['requirement3'];
		$requirement4 = $_POST['requirement4'];
		$requirement5 = $_POST['requirement5'];
		$requirement6 = $_POST['requirement6'];


		$checked_array = $_POST['id'];

		foreach($_POST['subj_id'] as $key => $value){

			if (in_array($_POST['subj_id'][$key],$checked_array)) {
				$subj_id = $_POST['subj_id'][$key];
				$subject = $_POST['subject'][$key];
				$student_id = $_POST['student_id'][$key];
				$subj_course = $_POST['subj_course'][$key];
				$subj_major = $_POST['subj_major'][$key];
				$subj_unit = $_POST['subj_unit'][$key];

				$query = mysqli_query($conn,"SELECT * FROM tbl_masteral_grading WHERE student_id='$student_id'");
				$result = mysqli_fetch_assoc($query);

				if ($result['student_id'] == $student_id AND $result['subject'] == $subject AND $result['subj_grade'] == 'Passed') {
					echo "<script type='text/javascript'>alert('Student is Already Passed in this subject!');window.location.href='approval.php'</script>";
				}else{

					$query1 = "INSERT INTO `tbl_masteralstudent_subject`(`student_id`, `subj_id`, `subject`, `subj_course`, `subj_major`, `subj_unit`) VALUES ('$student_id','$subj_id','$subject','$subj_course','$subj_major','$subj_unit')";
					$result1 = mysqli_query($conn,$query1);

					if ($result1) 
					{
						$status1 = 'Old';

						if ($status1 == $student_status) {

							$query2 = "UPDATE tbl_masteralstudent SET student_status = '$student_status', course = '$course', major = '$major', student_id = '$student_id1', year = '$year',  student_id = '$student_id', fname ='$fname', lname ='$lname', mname ='$mname', suffix ='$suffix', `house_street`='$house_no',`barangay`='$barangay',`city`='$city',`province`='$province',bdate ='$bdate', gender ='$gender', cstat ='$cstat', bplace ='$bplace', nationality ='$nationality', religion ='$religion', email ='$email', mnum ='$mnum', fathername ='$fathername', fathermnum ='$fathermnum', foccupation ='$foccupation', faddress ='$faddress', mothername ='$mothername', mothermnum ='$mothermnum', moccupation ='$moccupation', maddress ='$maddress', guardianname ='$guardianname', guardiannumber ='$guardiannumber', goccupation ='$goccupation', gaddress ='$gaddress' WHERE student_id = '$student_id'";
							
						 	$result2 = mysqli_query($conn, $query2);

						 	if ($result2) {
					 			$query3 = "DELETE FROM tbl_masteralapproval WHERE id = '$Id'";
								$result3 = mysqli_query($conn, $query3);

								if ($result3) {
									echo "<script type='text/javascript'>alert('Successfully Added!');window.location.href='approval.php'</script>";
								}else{
									echo "<script type='text/javascript'>alert('Unsuccessfully Added!');window.location.href='approval.php'</script>";
								}
							}else{
								echo "<script type='text/javascript'>alert('Unknown Error!');window.location.href='approval.php'</script>";
							}

						}else{

							$query1 = "INSERT INTO `tbl_masteralstudent`(`student_status`, `course`, `major`, `student_id`, `year`, `fname`, `lname`, `mname`, `suffix`, `house_street`, `barangay`, `city`, `province`, `bdate`, `bplace`, `religion`, `nationality`, `gender`, `cstat`, `email`, `mnum`, `fathername`, `fathermnum`, `foccupation`, `faddress`, `mothername`, `mothermnum`, `moccupation`, `maddress`, `guardianname`, `guardiannumber`, `goccupation`, `gaddress`, `requirement1`, `requirement2`, `requirement3`, `requirement4`, `requirement5`, `requirement6`) VALUES ('$student_status', '$course', '$major', '$student_id', '$year', '$fname', '$lname', '$mname', '$suffix', '$house_no','$barangay','$city','$province', '$bdate', '$bplace', '$religion', '$nationality', '$gender', '$cstat', '$email', '$mnum', '$fathername', '$fathermnum', '$foccupation', '$faddress', '$mothername', '$mothermnum', '$moccupation', '$maddress', '$guardianname', '$guardiannumber', '$goccupation', '$gaddress', '$requirement1', '$requirement2', '$requirement3', '$requirement4', '$requirement5', '$requirement6')";
					
							$result1 = mysqli_query($conn, $query1);

							if ($result1) {
								$query4 = "DELETE FROM tbl_masteralapproval WHERE id = '$Id'";
								$result4 = mysqli_query($conn, $query4);

								if ($result4) {
									echo "<script type='text/javascript'>alert('Successfully Added!');window.location.href='approval.php'</script>";
								}else{
									echo "<script type='text/javascript'>alert('Unsuccessfully Added!');window.location.href='approval.php'</script>";
								}
							}else{
								echo "<script type='text/javascript'>alert('Unknow Error!');window.location.href='approval.php'</script>";
							}
						}
						// echo "<script type='text/javascript'>alert('Successfully Added!');window.location.href='approval.php'</script>";	
					}
					else
					{
						echo "<script type='text/javascript'>alert('Unsuccessfully Added!');window.location.href='approval.php'</script>";
					}
				}
			}
		}
	}

?>
