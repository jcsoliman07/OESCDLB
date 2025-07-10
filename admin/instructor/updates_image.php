<?php
	session_start();
	include_once('db_conn.php');
 
	if(isset($_POST['edit'])){
		$ins_id = $_POST['ins_id'];
		$image1 = $_FILES['imageA']['name'];

		$target_dir = "upload/";
		$target_file1 = $target_dir . basename($image1);
		$imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
		$check1 = getimagesize($_FILES['imageA']['tmp_name']);
		$extension1 = substr($image1, strlen($image1)-4, strlen($image1));
		$allowed_extensions = array(".jpg", ".jpeg", ".png");

		

		if (file_exists($target_file1))
		{
			echo "<script type='text/javascript'>alert('Sorry, One or more file name already exist in our database, give your files a unique name');window.location.href='instructor.php'</script>";
		}
		else
		{

			$sql = "UPDATE `tbl_instructor` SET `ins_image` = '$target_file1'  WHERE `ins_id`='$ins_id'";

			$result = mysqli_query($conn, $sql);

			if ($result) 
			{
				move_uploaded_file($_FILES["imageA"]["tmp_name"], $target_file1);
				
				$_SESSION['success'] = 'Instructor updated successfully';
				header("Location:instructor.php");
			}
			else
			{
				$_SESSION['error'] = 'Something went wrong in updating Instructor';
				header("Location:instructor.php");
			}
		}
	}
?>

