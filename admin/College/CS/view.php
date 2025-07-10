<?php 

if (isset($_GET['id'])) {
	include "../db_conn.php";

	function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		} 

		$Id = validate($_GET['id']);

		$sql = "SELECT * FROM tbl_enrolledcs WHERE id=$Id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		}
		else{
			header("Location:enrolledCS.php");
		}
}else if (isset($_POST['Update'])) {
	include "../db_conn.php";

		$Id = $_POST['myid'];
		$studentid = $_POST['myStudentId'];
		$fname = $_POST['myFname'];
		$lname = $_POST['myLname'];
		$mname = $_POST['myMname'];
		$suffix = $_POST['mySuffix'];
		$address = $_POST['myAddress'];
		$bdate = $_POST['myBdate'];
		$gender = $_POST['myGender'];
		$cstat = $_POST['myCstat'];
		$bplace = $_POST['myBplace'];
		$nationality = $_POST['myNationality'];
		$religion = $_POST['myReligion'];
		$email = $_POST['myEmail'];
		$mnum = $_POST['myMnum'];
		
		$sql = "UPDATE tbl_enrolledcs SET student_id = '$studentid', fname ='$fname', lname ='$lname', mname ='$mname', suffix ='$suffix', address ='$address', bdate ='$bdate', bplace ='$bplace', gender ='$gender', cstat ='$cstat', email ='$email', mnum ='$mnum', nationality ='$nationality', religion ='$religion' WHERE id=$Id";

		$result = mysqli_query($conn, $sql);

		if ($result) {
			header("Location:view.php");
		}
		else{
			header("Location:view.php");
		}

}
else
{
	header("Location:enrolledCS.php?success=Successfully Updated!");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>

	<div class="container-fluid">
		<h2 class="display-1 text-center"> Students' Information </h2>
   		<hr class="bg-dark border-4 border-top">


		<div class="container">
			<form method="POST" action="view.php">
				<div class="form-group row">
					<div class="col-sm-3">
						<label>Student ID:</label>
						<input type="text" name="myStudentId" id="myStudentId" class="form-control" value="<?=$row['student_id']?>">
					</div>
				</div>
				<div class="form-group row">
				    <div class="col-sm-3">
				    	<input type="hidden" name="myid" class="form-control" id="myid" value="<?=$row['id']?>">
				    	<label>Firstname:</label>
				      	<input type="text" class="form-control" id="staticEmail" name="myFname" value="<?=$row['fname']?>">
				    </div>
				    <div class="col-sm-3">
				    	<label>Lastname:</label>
				      	<input type="text" class="form-control" id="staticEmail" name="myLname" value="<?=$row['lname']?>">
				    </div>
				    <div class="col-sm-3">
				    	<label>Middlename:</label>
				      	<input type="text" class="form-control" id="staticEmail" name="myMname" value="<?=$row['mname']?>">
				    </div>
				    <div class="col-sm-3">
				     	<label>Suffix:</label>
				      	<input type="text" class="form-control" id="staticEmail" name="mySuffix" value="<?=$row['suffix']?>">
				    </div>
				 </div>

			  <div class="form-group row">
			    <div class="col-sm-12">
			     	<label>Address:</label>
			      	<input type="text" class="form-control" id="staticEmail" name="myAddress" value="<?=$row['address']?>">
			    </div>
			  </div>

			  <div class="form-group row">
			    <div class="col-sm-3">
			    	<label>Birthdate:</label>
			      	<input type="text" class="form-control" id="staticEmail" name="myBdate" value="<?=$row['bdate']?>">
			    </div>
			    <div class="col-sm-3">
			    	<label>Gender:</label>
			      	<input type="text" class="form-control" id="staticEmail" name="myGender" value="<?=$row['gender']?>">
			    </div>
			    <div class="col-sm-3">
			    	<label>Civil Status:</label>
			      	<input type="text" class="form-control" id="staticEmail" name="myCstats" value="<?=$row['cstat']?>">
			    </div>
			  </div>

			  <div class="form-group row">
			    <div class="col-sm-12">
			    	<label>Birthplace:</label>
			      	<input type="text" class="form-control" id="staticEmail" name="myBplace" value="<?=$row['bplace']?>">
			    </div>
			  </div>

			  <div class="form-group row">
			    <div class="col-sm-6">
			    	<label>Nationality:</label>
			      	<input type="text" class="form-control" id="staticEmail" name="myNationality" value="<?=$row['nationality']?>">
			    </div>
			    <div class="col-sm-6">
			    	<label>Religion:</label>
			      	<input type="text" class="form-control" id="staticEmail" name="myReligion" value="<?=$row['religion']?>">
			    </div>
			  </div>


			  <div class="form-group row">
			    <div class="col-sm-6">
			    	<label>Email:</label>
			      	<input type="text" class="form-control" id="staticEmail" name="myEmail" value="<?=$row['email']?>">
			    </div>
			    <div class="col-sm-6">
			    	<label>Mobile Number:</label>
			      	<input type="text" class="form-control" id="staticEmail" name="myMnum" value="<?=$row['mnum']?>">
			    </div>
			  </div>
			  <button name="Update" class="btn btn-primary my-5"><span class="fas fa-user-check"></span> Update </button>
			</form>
		</div>
	</div>

</body>
</html>