<?php
	include "db_conn.php";

	if (isset($_POST['Submit']))
{		
		$major = $_POST['major'];
		$semester = $_POST['semester'];
		$course = $_POST['course'];
		$status = $_POST['status'];
		$year = $_POST['year'];
		$a_year = $_POST['a_year'];
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

			if ($check1 == false || $check2 == false || $check3 == false || $check4 == false || $check5 == false || $check6 == false) {
				echo "<script type='text/javascript'>alert('Sorry, One or more file is fake. Only JPEG, JPG and PNG are allowed');window.location.href='enrollFormCS.php'</script>";
			}

			else if($_FILES['imageA']['size'] > 5242880 || $_FILES['imageB']['size'] > 5242880 || $_FILES['imageC']['size'] > 5242880 || $_FILES['imageD']['size'] > 5242880 || $_FILES['imageE']['size'] > 5242880 || $_FILES['imageF']['size'] > 5242880){
				echo "<script type='text/javascript'>alert('Sorry, One or more file size is too large');window.location.href='enrollFormCS.php'</script>";
			}
			
			else
			{
				if (file_exists($target_file1) || file_exists($target_file2) || file_exists($target_file3) || file_exists($target_file4) || file_exists($target_file5) || file_exists($target_file6)) {
						
				echo "<script type='text/javascript'>alert('Sorry, One or more file name already exist in our database, give your files a unique name');window.location.href='enrollFormCS.php'</script>";
				}
				else if(!in_array($extension1,$allowed_extensions) || !in_array($extension2,$allowed_extensions) || !in_array($extension3,$allowed_extensions) || !in_array($extension4,$allowed_extensions) || !in_array($extension5,$allowed_extensions) || !in_array($extension6,$allowed_extensions)){

					echo "<script type='text/javascript'>alert('Sorry, One or more file is not an image. Only JPEG, JPG and PNG are allowed');window.location.href='enrollFormCS.php'</script>";

				}
				else{
					$sql = "INSERT INTO tbl_newstudent (enrolled_date, semester, academic_year, student_status, course, major, year, fname, lname, mname, suffix, house_street, barangay, city, province, bdate, bplace, religion, nationality, gender, cstat, email, mnum, fathername, fathermnum , foccupation , faddress, mothername, mothermnum, moccupation, maddress, guardianname, guardiannumber, goccupation, gaddress, requirement1, requirement2, requirement3, requirement4, requirement5, requirement6) VALUES ('$enrolled_date','$semester','$a_year','$status','$course','$major','$year','$fname','$lname','$mname','$suffix','$house_no','$barangay','$city','$province','$bdate','$bplace','$religion','$nationality','$gender','$cstat','$email','$mnum','$fathername','$fmnum','$foccupation','$foccupaddress','$mothername','$mmnum','$moccupation','$moccupaddress','$guardianname','$gmnum','$goccupation','$goccupaddress','$target_file1','$target_file2','$target_file3','$target_file4','$target_file5','$target_file6')";

					$result = $conn->query($sql);
					if ($result) {
						move_uploaded_file($_FILES["imageA"]["tmp_name"], $target_file1);
						move_uploaded_file($_FILES["imageB"]["tmp_name"], $target_file2);
						move_uploaded_file($_FILES["imageC"]["tmp_name"], $target_file3);
						move_uploaded_file($_FILES["imageD"]["tmp_name"], $target_file4);
						move_uploaded_file($_FILES["imageE"]["tmp_name"], $target_file5);
						move_uploaded_file($_FILES["imageF"]["tmp_name"], $target_file6);

						echo "<script type='text/javascript'>alert(' Successfully Sent! ');window.location.href='enrollFormCS.php'</script>";
					}
					else
					{
						echo "<script type='text/javascript'>alert(' Unsuccessfully Sent! ');window.location.href='enrollFormCS.php'</script>";
					}
				}
			}

}else{
	echo"Error!";
}
?>