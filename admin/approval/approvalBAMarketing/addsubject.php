<?php
include '../db_conn.php';
	if (isset($_POST['Save'])) {

		$Id = $_POST['id'];
		$semester = $_POST['semester'];
		$student_status = $_POST['student_status'];
		$course = $_POST['course'];
		$major = $_POST['major'];
		$student_id = $_POST['student_id1'];
		$year = $_POST['year'];
		$a_year = $_POST['a_year'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mname = $_POST['mname'];
		$suffix = $_POST['suffix'];
		$house_no = $_POST['house_no'];
		$barangay = $_POST['barangay'];
		$city = $_POST['city'];
		$province = $_POST['province'];
		$bdate = date('Y-m-d', strtotime($_POST['bdate']));
		$enrolled_date = date('Y-m-d', strtotime($_POST['enrolled_date']));
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

		$status1 = 'Old';

		if ($status1 == $student_status) {

			$query2 = "UPDATE tbl_student SET enrolled_date = '$enrolled_date',semester = '$semester', academic_year = '$a_year',student_status = '$student_status', course = '$course', major = '$major', student_id = '$student_id1', year = '$year',  student_id = '$student_id', fname ='$fname', lname ='$lname', mname ='$mname', suffix ='$suffix', `house_street`='$house_no',`barangay`='$barangay',`city`='$city',`province`='$province',bdate ='$bdate', gender ='$gender', cstat ='$cstat', bplace ='$bplace', nationality ='$nationality', religion ='$religion', email ='$email', mnum ='$mnum', fathername ='$fathername', fathermnum ='$fathermnum', foccupation ='$foccupation', faddress ='$faddress', mothername ='$mothername', mothermnum ='$mothermnum', moccupation ='$moccupation', maddress ='$maddress', guardianname ='$guardianname', guardiannumber ='$guardiannumber', goccupation ='$goccupation', gaddress ='$gaddress' WHERE student_id = '$student_id'";
			
		 	$result2 = mysqli_query($conn, $query2);

		 	if ($result2) {
	 			$query3 = "DELETE FROM tbl_approvalstudent WHERE id = '$Id'";
				$result3 = mysqli_query($conn, $query3);

				if ($result3) {
					$checked_array = $_POST['subj_id'];

					foreach($_POST['subj_code'] as $key => $value){

						if (in_array($_POST['subj_code'][$key],$checked_array)) {
							$subj_code = $_POST['subj_code'][$key];
							$subj_description = $_POST['subj_description'][$key];
							$subj_unit = $_POST['subj_unit'][$key];
							$student_id = $_POST['student_id'][$key];
							$subj_course = $_POST['subj_course'][$key];
							$subj_year = $_POST['subj_year'][$key];
							$subj_semester = $_POST['subj_semester'][$key];
							$subj_prereq = $_POST['subj_prereq'][$key];
							$fname1 = $_POST['fname1'][$key];
							$lname1 = $_POST['lname1'][$key];
							$mname1 = $_POST['mname1'][$key];
							$a_year1 = $_POST['a_year1'][$key];

							$query5 = "INSERT INTO `tbl_student_subjects`(`academic_year`,`student_id`,`lname`, `fname`, `mname`, `subj_code`, `student_subj_course`, `student_subj_year`, `student_subj_sem`, `student_subj_unit`, `student_subj_description`, `student_subj_prereq`) VALUES ('$a_year1','$student_id', '$lname1', '$fname1', '$mname1','$subj_code', '$subj_course', '$subj_year', '$subj_semester', '$subj_unit', '$subj_description', '$subj_prereq')";
							$result5 = mysqli_query($conn,$query5);

							if ($result5) 
							{
								echo "<script type='text/javascript'>alert('Successfully Added!');window.location.href='approvalbamarketing.php'</script>";
							}
							else
							{
								echo "<script type='text/javascript'>alert('Unsuccessfully Added!');window.location.href='approvalbamarketing.php'</script>";
							}
						}
					}
				}else{
					echo "<script type='text/javascript'>alert('Unable to add!');window.location.href='approvalbamarketing.php'</script>";
				}
			}else{
				echo "<script type='text/javascript'>alert('Error!');window.location.href='approvalbamarketing.php'</script>";
			}

		}else{

			$query1 = "INSERT INTO `tbl_student`(`enrolled_date`,`semester`, `academic_year`,`student_status`, `course`, `major`, `student_id`, `year`, `fname`, `lname`, `mname`, `suffix`, `house_street`, `barangay`, `city`, `province`, `bdate`, `bplace`, `religion`, `nationality`, `gender`, `cstat`, `email`, `mnum`, `fathername`, `fathermnum`, `foccupation`, `faddress`, `mothername`, `mothermnum`, `moccupation`, `maddress`, `guardianname`, `guardiannumber`, `goccupation`, `gaddress`, `requirement1`, `requirement2`, `requirement3`, `requirement4`, `requirement5`, `requirement6`) VALUES ('$enrolled_date','$semester', '$a_year','$student_status', '$course', '$major', '$student_id', '$year', '$fname', '$lname', '$mname', '$suffix', '$house_no','$barangay','$city','$province', '$bdate', '$bplace', '$religion', '$nationality', '$gender', '$cstat', '$email', '$mnum', '$fathername', '$fathermnum', '$foccupation', '$faddress', '$mothername', '$mothermnum', '$moccupation', '$maddress', '$guardianname', '$guardiannumber', '$goccupation', '$gaddress', '$requirement1', '$requirement2', '$requirement3', '$requirement4', '$requirement5', '$requirement6')";
	
			$result1 = mysqli_query($conn, $query1);

			if ($result1) {
				$query4 = "DELETE FROM tbl_approvalstudent WHERE id = '$Id'";
				$result4 = mysqli_query($conn, $query4);

				if ($result4) {
					$checked_array = $_POST['subj_id'];

					foreach($_POST['subj_code'] as $key => $value){

						if (in_array($_POST['subj_code'][$key],$checked_array)) {
							$subj_code = $_POST['subj_code'][$key];
							$subj_description = $_POST['subj_description'][$key];
							$subj_unit = $_POST['subj_unit'][$key];
							$student_id = $_POST['student_id'][$key];
							$subj_course = $_POST['subj_course'][$key];
							$subj_year = $_POST['subj_year'][$key];
							$subj_semester = $_POST['subj_semester'][$key];
							$subj_prereq = $_POST['subj_prereq'][$key];
							$fname1 = $_POST['fname1'][$key];
							$lname1 = $_POST['lname1'][$key];
							$mname1 = $_POST['mname1'][$key];
							$a_year1 = $_POST['a_year1'][$key];

							$query5 = "INSERT INTO `tbl_student_subjects`(`academic_year`,`student_id`,`lname`, `fname`, `mname`, `subj_code`, `student_subj_course`, `student_subj_year`, `student_subj_sem`, `student_subj_unit`, `student_subj_description`, `student_subj_prereq`) VALUES ('$a_year1','$student_id', '$lname1', '$fname1', '$mname1','$subj_code', '$subj_course', '$subj_year', '$subj_semester', '$subj_unit', '$subj_description', '$subj_prereq')";
							$result6 = mysqli_query($conn,$query5);

							if ($result6) 
							{
								echo "<script type='text/javascript'>alert('Successfully Added!');window.location.href='approvalbamarketing.php'</script>";
							}
							else
							{
								echo "<script type='text/javascript'>alert('Unsuccessfully Added!');window.location.href='approvalbamarketing.php'</script>";
							}
						}
					}	
				}else{
					echo "<script type='text/javascript'>alert('Unable to add!');window.location.href='approvalbamarketing.php'</script>";
				}
			}else{
				echo "<script type='text/javascript'>alert('Error!');window.location.href='approvalbamarketing.php'</script>";
			}
		}
	}

?>
