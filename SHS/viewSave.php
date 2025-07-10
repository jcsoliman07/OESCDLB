<?php

	include 'db_conn.php';

	if (isset($_POST['button'])) {
		$Id = $_POST['id'];
		$student_id = $_POST['student_id'];
		$grade = $_POST['grade'];
		$strand = $_POST['strand'];
		$student_status = $_POST['student_status'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mname = $_POST['mname'];
		$suffix = $_POST['suffix'];
		// $address = $_POST['address'];
		$house_no = $_POST['house_no'];
		$barangay = $_POST['barangay'];
		$city = $_POST['city'];
		$province = $_POST['province'];
		$bdate = $_POST['bdate'];
		$enrolled_date = $_POST['enrolled_date'];
		$bplace = $_POST['bplace'];
		$gender = $_POST['gender'];
		$cstat = $_POST['cstat'];
		$nationality = $_POST['nationality'];
		$religion = $_POST['religion'];
		$email = $_POST['email'];
		$mnum = $_POST['mnum'];

		$fathername = $_POST['fathername'];
		$fmnum = $_POST['fathermnum'];
		$foccupation = $_POST['foccupation'];
		$foccupaddress = $_POST['faddress'];

		$mothername = $_POST['mothername'];
		$mmnum = $_POST['fathermnum'];
		$moccupation = $_POST['moccupation'];
		$moccupaddress = $_POST['maddress'];

		$guardianname = $_POST['guardianname'];
		$gmnum = $_POST['guardiannumber'];
		$goccupation = $_POST['goccupation'];
		$goccupaddress = $_POST['gaddress'];

		$requirement1 = $_POST['requirement1'];
		$requirement2 = $_POST['requirement2'];
		$requirement3 = $_POST['requirement3'];
		$requirement4 = $_POST['requirement4'];
		$requirement5 = $_POST['requirement5'];
		$requirement6 = $_POST['requirement6'];

		$query = mysqli_query($conn,"SELECT student_id FROM tbl_shs_student");
		$result = mysqli_fetch_assoc($query);

		if ($result['student_id'] == $student_id) {
				echo "<script type='text/javascript'>alert('Student ID is already taken!');window.location.href='../admin/newenrolleesSHS/shs_abm/index.php'</script>";
		}else{
			if (preg_match("/^([0-9]{11})$/"),$mnum)) {

				echo "<script type='text/javascript'>alert('Please check your mobile number!');window.location.href='../admin/newenrolleesSHS/shs_abm/index.php'</script>";
	
			}else if (preg_match("/^([0-9]{11})$/"),$fmnum)) {

				echo "<script type='text/javascript'>alert('Please check Father mobile number!');window.location.href='../admin/newenrolleesSHS/shs_abm/index.php'</script>";
					
			}else if (preg_match("/^([0-9]{11})$/"),$mmnum)) {

				echo "<script type='text/javascript'>alert('Please check Mother mobile number!');window.location.href='../admin/newenrolleesSHS/shs_abm/index.php'</script>";
					
			}else if (preg_match("/^([0-9]{11})$/"),$gmnum)) {

				echo "<script type='text/javascript'>alert('Please check Guardian mobile number!');window.location.href='../admin/newenrolleesSHS/shs_abm/index.php'</script>";
					
			}else{

				$query = "INSERT INTO `tbl_shs_student`(`enrolled_date`, `student_status`, `strand`, `student_id`, `grade`, `fname`, `lname`, `mname`, `suffix`, `house_street`, `barangay`, `city`, `province`, `bdate`, `bplace`, `religion`, `nationality`, `gender`, `cstat`, `email`, `mnum`, `fathername`, `fathermnum`, `foccupation`, `faddress`, `mothername`, `mothermnum`, `moccupation`, `maddress`, `guardianname`, `guardiannumber`, `goccupation`, `gaddress`, `requirement1`, `requirement2`, `requirement3`, `requirement4`, `requirement5`, `requirement6`) VALUES ('$enrolled_date', '$student_status', '$strand', '$student_id', '$grade', '$fname', '$lname', '$mname','$suffix', '$house_no', '$barangay', '$city', '$province', '$bdate', 'bplace', '$religion', '$nationality', '$gender', '$cstat', '$email', '$mnum', '$fathername', '$fmnum', '$foccupation', '$foccupaddress', '$mothername', '$mmnum', '$moccupation', '$moccupaddress', '$guardianname', '$gmnum', '$goccupation', '$goccupaddress','$requirement1', '$requirement2', '$requirement3', '$requirement4', '$requirement5', '$requirement6')";
			
				$result = mysqli_query($conn, $query);

				if ($result){

					$query1 = "DELETE FROM tbl_shs_newstudent WHERE id = '$Id'";
					$result1 = mysqli_query($conn, $query1);

					if ($result1){

						echo "<script type='text/javascript'>alert('Successfully Save!');window.location.href='../admin/newenrolleesSHS/shs_abm/index.php'</script>";
					}else{
						echo "<script type='text/javascript'>alert('Unsuccessfully Save!');window.location.href='../admin/newenrolleesSHS/shs_abm/index.php'</script>";
					}

				}else{
					echo "<script type='text/javascript'>alert('Unsuccessfully Save!');window.location.href='../admin/newenrolleesSHS/shs_abm/index.php'</script>";
				}
			}
		}
	}

?>
