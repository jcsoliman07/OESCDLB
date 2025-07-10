<?php

	if (isset($_POST['Add'])) {

		include "db_conn.php";

		
		$student_id = $_POST['student_id'];
		// $semester = $_POST['semester'];
		$course = $_POST['course'];
		$major = $_POST['major'];
		$year = $_POST['year'];
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$suffix = $_POST['suffix'];
		$house_street = $_POST['house_street'];
		$barangay = $_POST['barangay'];
		$city = $_POST['city'];
		$province = $_POST['province'];
		$bdate = $_POST['bdate'];
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




	$sql = "INSERT INTO `tbl_student` (st_id,  course, major, year, lname, fname, mname, suffix, house_street, barangay, city, province, bdate, bplace, religion, nationality, gender, cstat, email, mnum, fathername, fathermnum, foccupation, faddress, mothername, mothermnum, moccupation, maddress, guardianname, guardiannumber, goccupation, gaddress) VALUES ('$st_id', '$course', '$major','$year','$lname', '$fname', '$mname', '$suffix', '$house_street', '$barangay','$city', '$province', '$bdate', '$bplace', '$religion', '$nationality', '$gender', '$cstat', '$email', '$mnum', '$fathername', '$fathermnum', '$foccupation', '$faddress', '$mothername', '$mothermnum', '$moccupation', '$maddress', '$guardianname', '$guardiannumber', '$goccupation', '$gaddress')";
	
	$result = mysqli_query($conn, $sql);
		if ($result) {

			header("Location:student.php?success=Successfully Added!");
		}
		else{
			header("Location:student.php?error=Unsuccessfully Added!");
		}
	}

?>