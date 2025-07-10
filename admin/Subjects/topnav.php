<?php
	session_start();

	if (isset($_SESSION['username'])) {
		echo "<input type='hidden' value='".$_SESSION['username']."'";
	}
	else{
		header("Location:../login/index.php");
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

	<div class="container my-5">
		<div class="my-content">
			<ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="cs_subj/index.php" target="myFrame">Computer Science</a></li>
			    <li class="breadcrumb-item"><a href="abecon_subj/index.php" target="myFrame">AB - Economics</a></li>
			    <li class="breadcrumb-item"><a href="ba_finmansubj/index.php" target="myFrame">BSBA - FinMan</a></li>
			    <li class="breadcrumb-item"><a href="ba_marmansubj/index.php" target="myFrame">BSBA - Marketing</a></li>
			    <li class="breadcrumb-item"><a href="bsed_engsubj/index.php" target="myFrame">BSED - English</a></li>
			    <li class="breadcrumb-item"><a href="bsed_filsubj/index.php" target="myFrame">BSED - Filipino</a></li>
			    <li class="breadcrumb-item"><a href="bsed_mathsubj/index.php" target="myFrame">BSED - Math</a></li>
			    <li class="breadcrumb-item"><a href="bsed_scisubj/index.php" target="myFrame">BSED - Science</a></li>
			    <li class="breadcrumb-item"><a href="beed_subj/index.php" target="myFrame">BEED</a></li>
			</ol>
		</div>
	</div>

</body>
</html>