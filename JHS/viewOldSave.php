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

		$query = "UPDATE `tbl_jhs_student` SET `enrolled_date`='$enrolled_date',`student_status`='$student_status',`student_id`='$student_id',`grade`='$grade',`fname`='$fname',`lname`='$lname',`mname`='$mname',`suffix`='$suffix',`house_street`='$house_no',`barangay`='$barangay',`city`='$city',`province`='$province',`bdate`='$bdate',`bplace`='$bplace',`religion`='$religion',`nationality`='$nationality',`gender`='$gender',`cstat`='$cstat',`email`='$email',`mnum`='$mnum',`fathername`='$fathername',`fathermnum`='$fmnum',`foccupation`='$foccupation',`faddress`='$foccupaddress',`mothername`='$mothername',`mothermnum`='$mmnum',`moccupation`='$moccupation',`maddress`='$moccupaddress',`guardianname`='$guardianname',`guardiannumber`='$gmnum',`goccupation`='$goccupation',`gaddress`='$goccupaddress',`requirement1`='$requirement1',`requirement2`='$requirement2',`requirement3`='$requirement3',`requirement4`='$requirement4',`requirement5`='$requirement5',`requirement6`='$requirement6' WHERE `student_id`='$student_id'";
		
		$result = mysqli_query($conn, $query);

			if ($result) {

				$query1 = "DELETE FROM tbl_jhs_oldstudent WHERE id = '$Id'";
				$result1 = mysqli_query($conn, $query1);

				if ($result1) {
					echo "<script type='text/javascript'>alert('Successfully Save!');window.location.href='../admin/newenrolleesJHS/jhs_7/index.php'</script>";
				}else{
					echo "<script type='text/javascript'>alert('Unsuccessfully Save!');window.location.href='../admin/newenrolleesJHS/jhs_7/index.php'</script>";
				}

			}else{
				echo "<script type='text/javascript'>alert('Unsuccessfully Save!');window.location.href='../admin/newenrolleesJHS/jhs_7/index.php'</script>";
			}
		}
	}

?>
