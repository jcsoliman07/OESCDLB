<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		} 

		$Id = validate($_GET['id']);

		$sql = "SELECT * FROM tbl_bastudent WHERE id=$Id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		}
		else{
			header("Location:subjects.php");
		}
}else
{
	header("Location:newcs.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>

	<div class="container">
		<div class="info">
			<h2><b>Student Information</b></h2>
		</div>
		<br>
		<div class="mb-3">
			<table class="top">
				<tr>
					<td>
						<label class="form-label">Firstname: </label>
						<input type="text" name="fname" class="form-control" value="<?=$row['fname']?>" readonly>
					</td>
					<td>
						<label class="form-label">Lastname: </label>
						<input type="text" name="lname" class="form-control" value="<?=$row['lname']?>" readonly>
					</td>
					<td>
						<label class="form-label">Middlename: </label>
						<input type="text" name="mname" class="form-control" value="<?=$row['mname']?>" readonly>
					</td>
					<td>
						<label class="form-label">Suffix: </label>
						<input type="text" name="suffix" class="form-control" value="<?=$row['suffix']?>" readonly>
					</td>
				</tr>
			</table>
		</div>

		<div class="mb-3">
			<table>
				<tr>
					<label class="form-label">Address: </label>
					<input type="text" name="address" class="form-control" value="<?=$row['address']?>" readonly>
				</tr>
			</table>
		</div>

		<div class="mb-3">
			<table>
				<tr>
					<td>
						<label class="form-label">Birthdate: </label>
						<input type="text" name="bdate" class="form-control" value="<?=$row['bdate']?>" readonly>
					</td>
					<td>
						<label class="form-label">Gender: </label>
						<input type="text" name="gender" class="form-control" value="<?=$row['gender']?>" readonly>
					</td>
					<td>
						<label class="form-label">Civil Status: </label>
						<input type="text" name="cstat" class="form-control" value="<?=$row['cstat']?>" readonly>
					</td>
				</tr>
			</table>
		</div>

		<div class="mb-3">
			<table>
				<tr>
					<label class="form-label">Birthplace: </label>
					<input type="text" name="bplace" class="form-control" value="<?=$row['bplace']?>" readonly>
				</tr>
			</table>
		</div>

		<div class="mb-3">
			<table>
				<tr>
					<td>
						<label class="form-label">Nationality: </label>
						<input type="text" name="nationality" class="form-control" value="<?=$row['nationality']?>" readonly>
					</td>
					<td>
						<label class="form-label">Religion: </label>
						<input type="text" name="religion" class="form-control" value="<?=$row['religion']?>" readonly>
					</td>
				</tr>
			</table>
		</div>

		<div class="mb-3">
			<table>
				<tr>
					<td>
						<label class="form-label">Email: </label>
						<input type="text" name="email" class="form-control" value="<?=$row['email']?>" readonly>
					</td>
					<td>
						<label class="form-label">Mobile Number: </label>
						<input type="text" name="mnum" class="form-control" value="<?=$row['mnum']?>" readonly>
					</td>
				</tr>
			</table>
		</div>

		<div class="requirement">
			<table>
				<tr>
					<label class="form-label">Requirement: </label>
					<td>

						<?php
							include "db_conn.php";

							$sql = "SELECT * FROM tbl_bastudent ORDER BY id DESC";
							$result = mysqli_query($conn, $sql);

							if (mysqli_num_rows($result) > 0) {
								while ($images = mysqli_fetch_assoc($result)) {?>
									<img class="rounded" alt="requirement" src="../../college/upload/<?=$images['requirement']?>">
								
							<?php } } ?>
					</td>
				</tr>
			</table>
		</div>

	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
	$('.rounded').on('click', function(){
	$(this).toggleClass('zoomed');
	});
</script>

</body>
</html>