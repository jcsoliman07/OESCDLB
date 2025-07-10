<?php
	
	if(isset($_POST['Add'])){
		include "db_conn.php";
		$id = $_POST['id'];
		// $year = $_POST['my_year'];
		$fname = $_POST['myFname'];
		$lname = $_POST['myLname'];
		$mname = $_POST['myMname'];
		$suffix = $_POST['mySuffix'];
		$address = $_POST['myAddress'];
		$bdate = date('Y-m-d', strtotime($_POST['myBdate']));
		$bplace = $_POST['myBplace'];
		$religion = $_POST['myReligion'];
		$nationality = $_POST['myNationality'];
		$gender = $_POST['myGender'];
		$cstat = $_POST['myCstat'];
		$email = $_POST['myEmail'];
		$mnum = $_POST['myMnum'];
		$guardianname = $_POST['myGname'];
		$guardiannumber = $_POST['myGnum'];
		$goccupation = $_POST['myGoccup'];
		$gaddress = $_POST['myGaddress'];
		$requirement = $_POST['myRequirement'];

		$sql = "INSERT INTO `tbl_enrolledcs` (fname,lname,mname,suffix,address,bdate,bplace,religion,gender,email,nationality,cstat,mnum,guardianname,guardiannumber,goccupation,gaddress,requirement) VALUES ('$fname', '$lname', '$mname', '$suffix', '$address', '$bdate', '$bplace', '$religion', '$gender', '$email', '$nationality', '$cstat', '$mnum', '$guardianname', '$guardiannumber', '$goccupation', '$gaddress', '$fileNameNew')";
	
		$result = mysqli_query($conn, $sql);

		if ($result) 
		{
			header("Location:approvalab.php?success=Successfull!");
		}
		else
		{
			header("Location:approvalab.php?error=Unsuccessfully!");
		}	
		
	}
	else
	{
			header("Location:approvalcs.php?error=Unsuccessfully!");
	}
?>