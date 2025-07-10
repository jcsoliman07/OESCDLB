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
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- <link rel="stylesheet" type="text/css" href="../assets/css/style1.css"> -->
  	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
  	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  	<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"> -->
  	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js" crossorigin="anonymous"></script>
  	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

</head>
<body>

    <?php
      if (isset($_GET['success'])) { ?>
      <div class="alert alert-success" role="alert">
        <?php  echo $_GET['success'];?>
      </div>
    <?php }?>

	<a href="subject.php?id=<?=$row['id']?>" class="btn btn-primary"> Add Subject </a>

	<input type="text" name="student_id" value="<?=$row['id']?>">

	<div class="container my-5">
    <hr class="bg-dark border-4 border-top">s
    <?php
      if (isset($_GET['success'])) { ?>
      <div class="alert alert-success" role="alert">
        <?php  echo $_GET['success'];?>
      </div>
    <?php }?>

    <?php 
      if (isset($_GET['error'])) { ?>
      <div class="alert alert-danger" role="alert">
        <?php  echo $_GET['error'];?>
      </div>
    <?php }?>
    <table class="table table-hover" id="dtenrolledCS">
      <thead class="alert-success">
        <tr>
          <th scope="col">#</th>
          <th scope="col"> Subject Description </th>
          <th scope="col"> Firstname </th>
          <th scope="col"> Lastname </th>
          <th scope="col"> Middlename </th>
          <th scope="col"> Gender </th>
          <th scope="col"> Email </th>
          <th scope="col"> Action </th>
        </tr>
      </thead>
      <tbody class="alert-dark">
        <?php
          require '../db_conn.php';
          $i = 0;
          $query = mysqli_query($conn, "SELECT * FROM tbl_enrolledcs ORDER BY id") or die(mysqli_error());
          while($rows = mysqli_fetch_array($query)){
            $i++;
        ?>
        <tr>
          <th scope="row"><?=$i?></th>
          <td><?php echo $rows['year']; ?></td>
          <td><?php echo $rows['fname']; ?></td>
          <td><?php echo $rows['lname']; ?></td>
          <td><?php echo $rows['mname']; ?></td>
          <td><?php echo $rows['gender']; ?></td>
          <td><?php echo $rows['email']; ?></td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
  </div>

</body>
</html>