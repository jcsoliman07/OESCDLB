<?php

	if (isset($_POST['add'])) {
		include "db_conn.php";

		$ins_name = $_POST['ins_name'];
		$ins_description = $_POST['ins_description'];

		$image1 = $_FILES['imageA']['name'];

		$target_dir = "upload/";

		$target_file1 = $target_dir . basename($image1);

		$imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));

		$check1 = getimagesize($_FILES['imageA']['tmp_name']);

		$extension1 = substr($image1, strlen($image1)-4, strlen($image1));

		$allowed_extensions = array(".jpg", ".jpeg", ".png");


		if ($check1 == false) {
			echo "<script type='text/javascript'>alert('Sorry, One or more file is fake. Only JPEG, JPG and PNG are allowed');window.location.href='instructor.php'</script>";
		}

		else if($_FILES['imageA']['size'] > 5242880){
			echo "<script type='text/javascript'>alert('Sorry, One or more file size is too large');window.location.href='instructor.php'</script>";
		}

		else if (file_exists($target_file1)) {
					
			echo "<script type='text/javascript'>alert('Sorry, One or more file name already exist in our database, give your files a unique name');window.location.href='instructor.php'</script>";
		}
		else
		{
			
			$sql = "INSERT INTO `tbl_instructor`(`ins_name`, `ins_description`, `ins_image`) VALUES ('$ins_name', '$ins_description', '$target_file1')";

			$result = $conn->query($sql);
			if ($result) {
				
				move_uploaded_file($_FILES["imageA"]["tmp_name"], $target_file1);

				echo "<script type='text/javascript'>alert(' Successfully Added! ');window.location.href='instructor.php'</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert(' Unsuccessfully Added! ');window.location.href='instructor.php'</script>";
			}
		}
	}

?>