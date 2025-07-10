 <?php

	include 'db_conn.php';

	if (isset($_POST['button'])) {
		$Id = $_POST['id'];
		$student_id = $_POST['student_id'];
		$major = $_POST['major'];
		$year = $_POST['year'];
		$student_status = $_POST['student_status'];
		$enrolled_date = $_POST['enrolled_date'];
		$course = $_POST['course'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mname = $_POST['mname'];
		$suffix = $_POST['suffix'];
		$house_no = $_POST['house_no'];
		$barangay = $_POST['barangay'];
		$city = $_POST['city'];
		$province = $_POST['province'];
		$bdate = $_POST['bdate'];
		$gender = $_POST['gender'];
		$cstat = $_POST['cstat'];
		$bplace = $_POST['bplace'];
		$nationality = $_POST['nationality'];
		$religion = $_POST['religion'];
		$email = $_POST['email'];
		$mnum = $_POST['mnum'];

		$fathername = $_POST['fathername'];
		$fathermnum = $_POST['fathermnum'];
		$faddress = $_POST['faddress'];
		$foccupation = $_POST['foccupation'];

		$mothername = $_POST['mothername'];
		$mothermnum = $_POST['mothermnum'];
		$maddress = $_POST['maddress'];
		$moccupation = $_POST['moccupation'];

		$guardianname = $_POST['guardianname'];
		$guardiannumber = $_POST['guardiannumber'];
		$goccupation = $_POST['goccupation'];
		$gaddress = $_POST['gaddress'];

		$query = "INSERT INTO `tbl_masteralapproval`(`enrolled_date`, `student_status`, `course`, `major`, `student_id`, `year`, `fname`, `lname`, `mname`, `suffix`, `house_street`, `barangay`, `city`, `province`, `bdate`, `bplace`, `religion`, `nationality`, `gender`, `cstat`, `email`, `mnum`, `fathername`, `fathermnum`, `foccupation`, `faddress`, `mothername`, `mothermnum`, `moccupation`, `maddress`, `guardianname`, `guardiannumber`, `goccupation`, `gaddress`) VALUES ('$enrolled_date','$student_status','$course','$major','$student_id', '$year', '$fname','$lname','$mname','$suffix','$house_no','$barangay','$city','$province','$bdate','$bplace','$religion','$nationality','$gender','$cstat','$email','$mnum','$fathername','$fathermnum','$foccupation','$faddress','$mothername','$mothermnum','$moccupation','$maddress','$guardianname','$guardiannumber','$goccupation','$gaddress')";
		
			$result = mysqli_query($conn, $query);

			if ($result) {

				$query1 = "DELETE FROM tbl_masteralold WHERE id = '$Id'";
				$result1 = mysqli_query($conn, $query1);

				if ($result1) {
					echo "<script type='text/javascript'>alert('Successfully Save!');window.location.href='../admin/newenrolleesMasteral/index.php'</script>";
				}else{
					echo "<script type='text/javascript'>alert('Unsuccessfully Save!');window.location.href='../admin/newenrolleesMasteral/index.php'</script>";
				}

			}else{
				echo "<script type='text/javascript'>alert('Unsuccessfully Save!');window.location.href='../admin/newenrolleesMasteral/index.php";
			}
		}

?>