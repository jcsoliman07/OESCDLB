<?php
	include '../../db_conn.php';

	if (isset($_POST['Add'])) {
		$course = $_POST['course'];
		$major = $_POST['major'];
		$status = $_POST['status'];
		$student_id = $_POST['student_id'];
		$year = $_POST['year'];
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

		$sql = "INSERT INTO tbl_masteralold ( `enrolled_date`, `student_status`, `course`, `major`, `student_id`, `year`, `fname`, `lname`, `mname`, `suffix`, `house_street`, `barangay`, `city`, `province`, `bdate`, `bplace`, `religion`, `nationality`, `gender`, `cstat`, `email`, `mnum`, `fathername`, `fathermnum`, `foccupation`, `faddress`, `mothername`, `mothermnum`, `moccupation`, `maddress`, `guardianname`, `guardiannumber`, `goccupation`, `gaddress`) VALUES ('$enrolled_date','$status','$course','$major','$student_id','$year','$fname','$lname','$mname','$suffix','$house_no','$barangay','$city','$province','$bdate','$bplace','$religion','$nationality','$gender','$cstat','$email','$mnum','$fathername','$fathermnum','$foccupation','$faddress','$mothername','$mothermnum','$moccupation','$maddress','$guardianname','$guardiannumber','$goccupation','$address')";

			$result = $conn->query($sql);
			if ($result) {
				echo "<script type='text/javascript'>alert(' Successfully Sent! ');window.location.href='main.php'</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert(' Unsuccessfully Sent! ');window.location.href='main.php'</script>";
			}
	}
?>


<!-- <?php
	include "db_conn.php";

	if (isset($_POST['Submit'])) {
		
		$major = $_POST['major'];
		$course = $_POST['course'];
		$status = $_POST['status'];
		$year = $_POST['year'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mname = $_POST['mname'];
		$suffix = $_POST['suffix'];
		$address = $_POST['address'];
		$bdate = $_POST['bdate'];
		$bplace = $_POST['bplace'];
		$gender = $_POST['gender'];
		$cstat = $_POST['cstat'];
		$nationality = $_POST['nationality'];
		$religion = $_POST['religion'];
		$email = $_POST['email'];
		$mnum = $_POST['mnum'];

		$fathername = $_POST['fathername'];
		$fmnum = $_POST['fmnum'];
		$foccupation = $_POST['foccupation'];
		$foccupaddress = $_POST['foccupaddress'];

		$mothername = $_POST['mothername'];
		$mmnum = $_POST['mmnum'];
		$moccupation = $_POST['moccupation'];
		$moccupaddress = $_POST['moccupaddress'];

		$guardianname = $_POST['guardianname'];
		$gmnum = $_POST['gmnum'];
		$goccupation = $_POST['goccupation'];
		$goccupaddress = $_POST['goccupaddress'];

		$image1 = $_FILES['imageA']['name'];
		$image2 = $_FILES['imageB']['name'];
		$image3 = $_FILES['imageC']['name'];
		$image4 = $_FILES['imageD']['name'];
		$image5 = $_FILES['imageE']['name'];
		$image6 = $_FILES['imageF']['name'];

		$target_dir = "upload/";

		$target_file1 = $target_dir . basename($image1);
		$target_file2 = $target_dir . basename($image2);
		$target_file3 = $target_dir . basename($image3);
		$target_file4 = $target_dir . basename($image4);
		$target_file5 = $target_dir . basename($image5);
		$target_file6 = $target_dir . basename($image6);

		$imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
		$imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
		$imageFileType3 = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));
		$imageFileType4 = strtolower(pathinfo($target_file4, PATHINFO_EXTENSION));
		$imageFileType5 = strtolower(pathinfo($target_file5, PATHINFO_EXTENSION));
		$imageFileType6 = strtolower(pathinfo($target_file6, PATHINFO_EXTENSION));

		$check1 = getimagesize($_FILES['imageA']['tmp_name']);
		$check2 = getimagesize($_FILES['imageB']['tmp_name']);
		$check3 = getimagesize($_FILES['imageC']['tmp_name']);
		$check4 = getimagesize($_FILES['imageD']['tmp_name']);
		$check5 = getimagesize($_FILES['imageE']['tmp_name']);
		$check6 = getimagesize($_FILES['imageF']['tmp_name']);

		$extension1 = substr($image1, strlen($image1)-4, strlen($image1));
		$extension2 = substr($image2, strlen($image2)-4, strlen($image2));
		$extension3 = substr($image3, strlen($image3)-4, strlen($image3));
		$extension4 = substr($image4, strlen($image4)-4, strlen($image4));
		$extension5 = substr($image5, strlen($image5)-4, strlen($image5));
		$extension6 = substr($image6, strlen($image6)-4, strlen($image6));

		$allowed_extensions = array(".jpg", ".jpeg", ".png");

		$sql = "INSERT INTO tbl_approvalstudent (student_status, course, year, fname, lname, mname, suffix, address, bdate, bplace, religion, nationality, gender, cstat, email, mnum, fathername, fathermnum , foccupation , faddress, mothername, mothermnum, moccupation, maddress, guardianname, guardiannumber, goccupation, gaddress, requirement1, requirement2, requirement3, requirement4, requirement5, requirement6) VALUES ('$status','$course','$year','$fname','$lname','$mname','$suffix','$address','$bdate','$bplace','$religion','$nationality','$gender','$cstat','$email','$mnum','$fathername','$fmnum','$foccupation','$foccupaddress','$mothername','$mmnum','$moccupation','$moccupaddress','$guardianname','$gmnum','$goccupation','$goccupaddress','$target_file1','$target_file2','$target_file3','$target_file4','$target_file5','$target_file6')";

		$result = $conn->query($sql);
		if ($result) {
			echo "<script type='text/javascript'>alert('Successfully Sent!');window.location.href='main.php'</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Unsuccessfully Sent!');window.location.href='main.php'</script>";
		}
}
else{
	echo"Error!";
}
?> -->




<!-- <?php


	include "../db_conn.php";

	$year = $_POST['my_year'];
	$fname = $_POST['my_fname'];
	$lname = $_POST['my_lname'];
	$mname = $_POST['my_mname'];
	$suffix = $_POST['my_suffix'];
	$address = $_POST['address'];
	$bdate = date('Y-m-d', strtotime($_POST['my_bdate']));
	$bplace = $_POST['my_bplace'];
	$religion = $_POST['my_religion'];
	$nationality = $_POST['my_nationality'];
	$gender = $_POST['my_gender'];
	$cstat = $_POST['my_cstat'];
	$email = $_POST['my_email'];
	$mnum = $_POST['my_mnum'];
	$guardianname = $_POST['my_gname'];
	$guardiannumber = $_POST['my_gmnum'];
	$goccupation = $_POST['my_occupation'];
	$fathername = $_POST['my_fathername'];
	$fathernumber = $_POST['my_fmnum'];
	$foccupation = $_POST['my_foccupation'];
	$faddress = $_POST['my_faddress'];
	$mothername = $_POST['my_mothername'];
	$mothernumber = $_POST['my_mmnum'];
	$moccupation = $_POST['my_moccupation'];
	$maddress = $_POST['my_maddress'];

	$requirement = $_FILES['my_requirement'];

	$fileName = $_FILES['my_requirement']['name'];
	$fileTmpName = $_FILES['my_requirement']['tmp_name'];
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png');

	if (in_array($fileActualExt, $allowed)) 
	{
		$fileNameNew = uniqid('', true).".".$fileActualExt;
		$fileDestination = 'upload/'.$fileNameNew;
		move_uploaded_file($fileTmpName, $fileDestination);

		// $sql1 = "INSERT INTO `tbl_csstudent` (requirement) VALUES ('$fileNameNew')";
		$sql = "INSERT INTO `tbl_csstudent` (year,fname,lname,mname,suffix,address,bdate,bplace,religion,gender,email,nationality,cstat,mnum,guardianname,guardiannumber,goccupation,gaddress,fathername,fathernumber,foccupation,faddress,mothername,mothernumber,moccupation,maddress,requirement) VALUES ('$year','$fname', '$lname', '$mname','$suffix', '$address', '$bdate', '$bplace', '$religion', '$gender', '$email', '$nationality', '$cstat', '$mnum', '$guardianname', '$guardiannumber', '$goccupation', '$gaddress', '$fathername', '$fathernumber', '$foccupation', '$faddress', '$mothername', '$mothernumber', '$moccupation', '$maddress', '$fileNameNew')";
	
		$result = mysqli_query($conn, $sql);

		if ($result) 
		{
			header("Location: enrollCS.php");
		}
		else
		{
			echo "Data not Inserted!";
		}	
	}else
	{
		echo "You cannot upload files of this type!";
	}

	// $sql = "INSERT INTO `tbl_csstudent` (fname,lname,mname,suffix,address,bdate,bplace,religion,gender,email,nationality,cstat,mnum,guardianname,guardiannumber,goccupation,gaddress) VALUES ('$fname', '$lname', '$mname','$suffix', '$address', '$bdate', '$bplace', '$religion', '$gender', '$email', '$nationality', '$cstat', '$mnum', '$guardianname', '$guardiannumber', '$goccupation', '$gaddress')";
	
	// $result = mysqli_query($conn, $sql);

	// if ($result) 
	// {
	// 	header("Location: enrollCS.php");
	// }
	// else
	// {
	// 	echo "Data not Inserted!";
	// }	


?>
 -->