<?php
  session_start();

  if (isset($_SESSION['username'])) {
    echo "<input type='hidden' value='".$_SESSION['username']."'";
  }
  else{
    header("Location:../../../mainlogin.php");
  } 
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
		<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
		
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
		<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>


	  	<style>
/*   body {
   background: #eeeeee;
   font-family: 'Varela Round', sans-serif;
}


.nav{
   background-color: #006400;
   width: 100%;
   height: 5%;

}

.home{
   color: white;
   padding-top: 15px;
   padding-right: 2%;
   padding-left: 3%;
   padding-bottom: 1%;
}
.home:hover{
   color: lightgreen;
   text-decoration: none;
}*/

/*.student{
   color: white;
   padding-top: 1%;
   padding-right: 1%;
   padding-left: 2%;
   padding-bottom: 1%;
}
.student:hover{
   color: lightgreen;
   text-decoration: none;
}*/
.un{
   color: white;
   padding-left: 70%;
   font-size: 120%;
   padding-top: 1%;
   padding-right: 2%;
   font-family: poppins;
}
.logout{
   color:white;
   margin-left: 90%;
   margin-top: -3.1%;
   padding-top: 1%;
   padding-right: 2.1%;
   padding-bottom: 1%;
   padding-left: 2%;
}
.logout:hover{
   color: lightgreen;
   text-decoration: none;
}

</style>
	</head>
<body>
<div class="form">
<?php
   include "db.php";
   $login_id = $_SESSION['login_id'];
   $sql = mysqli_query($con,"SELECT * FROM `tbl_instructor` WHERE `ins_id` = '$login_id'");
   while ($rows = mysqli_fetch_array($sql)) {
      echo "<input type='hidden' value='".$rows['ins_id']."'>";
   }
?>
</div>

	<div class="container-fluid my-5">
		<label class="h3" style="font-weight: bold;"><span class="far fa-clipboard"></span> CLASS LIST</label>
		<hr class="border-4 border-top">

	<?php
      include "display.php";
      $query = "SELECT * FROM tbl_subjects ORDER BY subj_id";
      $result = mysqli_query($conn, $query);

    ?>

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

		<table class="table table-sm table-bordered table-hover">
			<thead>
				<tr>
					<th class="text-center" scope="col">Subject Code</th>
					<th class="text-center" scope="col">Description</th>
					<th class="text-center" scope="col">Unit</th>
					<!-- <th class="text-center" scope="col">Prerequisite</th> -->
					<!-- <th class="text-center" scope="col">Course</th> -->
					<!-- <th class="text-center" scope="col">Year</th> -->
					<th class="text-center" scope="col"> Action </th>
				</tr>
			</thead>
			<tbody>
				<?php
					include 'db_conn.php';
					$login_id = $_SESSION['login_id'];

					$query = mysqli_query($conn, "SELECT * FROM `tbl_instructor_subjects` WHERE `instructor_id`='$login_id'") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
						// $subj_id = $fetch['subj_id'];
				?>
				
				<form action="classlist.php" method="POST">
				<tr>
					<input type="hidden" name="instructor_id" value="<?php echo $Id?>">
					<input type="hidden" name="subj_code" value="<?php echo $fetch['subj_code']?>">
					<td class="text-center"><?php echo $fetch['subj_code']?></td>
					<td class="text-center"><?php echo $fetch['subj_description']?></td>
					<td class="text-center"><?php echo $fetch['subj_unit']?></td>
					<!-- <td class="text-center"><?php echo $fetch['inst_subj_prereq']?></td> -->
					<!-- <td class="text-center"><?php echo $fetch['inst_subj_course']?></td> -->
					<!-- <td class="text-center"><?php echo $fetch['inst_subj_year']?></td> -->
					<!-- <td class="hidden"><?php echo $fetch['subj_instructor']?></td> -->

					<td class="text-center">
						<!-- <button class="btn btn-primary" name="Submit"><span class="fas fa-eye"> View</button> -->
            		<a href="classlist.php?subj_code=<?=$fetch['subj_code']?>" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> View Student</a>
          		</td>
					
				</tr>
				</form>
				<?php
					}
			
				?>
			</tbody>
		</table>
	</div>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->

<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>

<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>	
</html>