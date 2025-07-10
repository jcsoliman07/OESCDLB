<?php
	
	if(isset($_POST['Add'])){
		include "../db_conn.php";

		$Id = $_GET['id'];
		$student_status = $_POST['student_status'];
		$course = $_POST['course'];
		$major = $_POST['major'];
		$student_id = $_POST['student_id'];
		$year = $_POST['year'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mname = $_POST['mname'];
		$suffix = $_POST['suffix'];
		$address = $_POST['address'];
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

		$guardianname = $_POST['gname'];
		$guardiannumber = $_POST['gmnum'];
		$goccupation = $_POST['goccupation'];
		$gaddress = $_POST['gaddress'];

		$requirement1 = $_POST['requirement1'];
		$requirement2 = $_POST['requirement2'];
		$requirement3 = $_POST['requirement3'];
		$requirement4 = $_POST['requirement4'];
		$requirement5 = $_POST['requirement5'];
		$requirement6 = $_POST['requirement6'];

		$query = "SELECT student_id FROM tbl_approvalstudent WHERE student_id ='$student_id'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				echo "<script type='text/javascript'>alert('Student ID is already taken!');window.location.href='newbamarketing.php'</script>";
			}
		}
		else{

			$sql = "INSERT INTO `tbl_approvalstudent` (student_status, course, major, student_id, year, fname, lname, mname, suffix, address, bdate, bplace, religion, nationality, gender, cstat, email, mnum, fathername, fathermnum, foccupation, faddress, mothername, mothermnum, moccupation, maddress, guardianname, guardiannumber, goccupation, gaddress, requirement1, requirement2, requirement3, requirement4, requirement5, requirement6) VALUES ('$student_status', '$course', '$major', '$student_id', '$year', '$fname', '$lname', '$mname', '$suffix', '$address', '$bdate', '$bplace', '$religion', '$nationality', '$gender', '$cstat', '$email', '$mnum', '$fathername', '$fathermnum', '$foccupation', '$faddress', '$mothername', '$mothermnum', '$moccupation', '$maddress', '$guardianname', '$guardianmnum', '$goccupation', '$gaddress', '$requirement1', '$requirement2', '$requirement3', '$requirement4', '$requirement5', '$requirement6')";
		
			$result = mysqli_query($conn, $sql);

			if ($result) 
			{
				header("Location:newbamarketing.php?success=Successfull!");
			}
			else
			{
				header("Location:newbamarketing.php?error=Unsuccessfully!");
			}	
		}
		mysqli_close($conn);
	}
	else
	{
			header("Location:newbamarketing.php?error=Unsuccessfully!");
	}
?>