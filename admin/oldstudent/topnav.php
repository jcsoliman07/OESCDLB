<?php
  session_start();

  if (isset($_SESSION['username'])) {
    echo "<input type='hidden' value='".$_SESSION['username']."'";
  }
  else{
    header("Location:../../mainlogin.php");
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
  	<style type="text/css">
  	body{
	    animation: fadeInAnimation ease 0.5s;
	    animation-iteration-count: 1;
	    animation-fill-mode: forwards;
		}
		@keyframes fadeInAnimation {
		    0% {
		        opacity: 0;
		    }
		    100% {
		        opacity: 1;
		     }
		}
		.breadcrumb li a{
  			color: #044735;
  		}

  		.breadcrumb li:hover a{
  			color: #dec348;
  		}

  		.breadcrumb li.active a{
  			text-decoration: none;
  			color: #dec348;
  		}
  		#count{
		border-radius: 50%;
		position: relative;
		top: -8px;
		/*left: -10px;*/
		background-color: red;
	}
  	</style>
</head>
<body>

	<div class="container-fluid">
		<div class="my-content">
			<h2 class="display-1">LIST OF NEW ENROLLEES PER COURSE</h3>
			<ol class="breadcrumb" style="font-weight: bold; font-size: 1.4rem; text-transform: uppercase; text-align:center;">
				<!-- Course AB -->
				<?php 
          include "db_conn.php";
          $course = 'Bachelor of Arts in Economics';
            $sql1 = mysqli_query($conn, "SELECT * FROM tbl_oldstudent WHERE notif='0' AND course='$course'");
            $count1 = mysqli_num_rows($sql1);

            if ($count1) {
          ?>
          	<li class="breadcrumb-item list active" style="margin: -5px;"><a href="oldAB/oldab.php" target="myFrame">AB-Econ<span class="badge badge-light" id="count"><?php echo $count1;?></span></a></li>
          <?php
          }else{
          ?>
            <li class="breadcrumb-item list active" style="margin: 4px;"><a href="oldAB/oldab.php" target="myFrame">AB-Econ</a></li>
          <?php
          }
        ?>

        <!-- Course BA - FIN MAN -->
        <?php 
          include "db_conn.php";
          $course = 'Bachelor of Science in Business Administration';
					$major = "Financial Management";
            $sql1 = mysqli_query($conn, "SELECT * FROM tbl_oldstudent WHERE notif='0' AND course='$course' AND major='$major'");
            $count1 = mysqli_num_rows($sql1);

            if ($count1) {
          ?>
          	<li class="breadcrumb-item list" style="margin: -5px;" ><a href="oldBAFinMan/oldbafinman.php" target="myFrame">BSBA-FinMan<span class="badge badge-light" id="count"><?php echo $count1;?></span></a></li>
          <?php
          }else{
          ?>
            <li class="breadcrumb-item list" style="margin: 4px;"><a href="oldBAFinMan/oldbafinman.php" target="myFrame">BSBA-FinMan</a></li>
          <?php
          }
        ?>

        <!-- Course BA -MARKETING -->
        <?php 
          include "db_conn.php";
					$course = 'Bachelor of Science in Business Administration';
					$major = "Marketing Management";
            $sql1 = mysqli_query($conn, "SELECT * FROM tbl_oldstudent WHERE notif='0' AND course='$course' AND major='$major'");
            $count1 = mysqli_num_rows($sql1);

            if ($count1) {
          ?>
          	<li class="breadcrumb-item list" style="margin: -5px;"><a href="oldBAMarketing/oldbamarketing.php" target="myFrame">BSBA-Marketing<span class="badge badge-light" id="count"><?php echo $count1;?></span></a></li>
          <?php
          }else{
          ?>
            <li class="breadcrumb-item list" style="margin: 4px;"><a href="oldBAMarketing/oldbamarketing.php" target="myFrame">BSBA - Marketing</a></li>
          <?php
          }
        ?>

        <!-- Course BSCS -->
        <?php 
          include "db_conn.php";
					$course = 'Bachelor of Science in Computer Science';
           $sql1 = mysqli_query($conn, "SELECT * FROM tbl_oldstudent WHERE notif='0' AND course = '$course'");
            $count1 = mysqli_num_rows($sql1);

            if ($count1) {
          ?>
          	<li class="breadcrumb-item list" style="margin: -5px;"><a href="oldCS/oldcs.php" target="myFrame">BSCS<span class="badge badge-light" id="count"><?php echo $count1;?></span></a></li>
          <?php
          }else{
          ?>
            <li class="breadcrumb-item list" style="margin: 4px;"><a href="oldCS/oldcs.php" target="myFrame">BSCS</a></li>
          <?php
          }
        ?>


        <!-- Course BSED ENGLISH -->
        <?php 
          include "db_conn.php";
					$course = 'Bachelor of Secondary Education';
					$major = "English";
            $sql1 = mysqli_query($conn, "SELECT * FROM tbl_oldstudent WHERE notif='0' AND course='$course' AND major='$major'");
            $count1 = mysqli_num_rows($sql1);

            if ($count1) {
          ?>
          	<li class="breadcrumb-item list" style="margin: -5px;"><a href="oldBSEDEnglish/oldbsedeng.php" target="myFrame">BSE - English<span class="badge badge-light" id="count"><?php echo $count1;?></span></a></li>
          <?php
          }else{
          ?>
            <li class="breadcrumb-item list" style="margin: 4px;"><a href="oldBSEDEnglish/oldbsedeng.php" target="myFrame">BSE - English</a></li>
          <?php
          }
        ?>


        <!-- Course BSED FILIPINO -->
        <?php 
          include "db_conn.php";
					$course = 'Bachelor of Secondary Education';
					$major = "English";
            $sql1 = mysqli_query($conn, "SELECT * FROM tbl_oldstudent WHERE notif='0' AND course='$course' AND major='$major'");
            $count1 = mysqli_num_rows($sql1);

            if ($count1) {
          ?>
          	<li class="breadcrumb-item list" style="margin: -5px;"><a href="oldBSEDFilipino/oldbsedfil.php" target="myFrame">BSE - Filipino<span class="badge badge-light" id="count"><?php echo $count1;?></span></a></li>
          <?php
          }else{
          ?>
            <li class="breadcrumb-item list" style="margin: 4px;"><a href="oldBSEDFilipino/oldbsedfil.php" target="myFrame">BSE - Filipino</a></li>
          <?php
          }
        ?>


        <!-- Course BSED MATH -->
        <?php 
          include "db_conn.php";
					$course = 'Bachelor of Secondary Education';
					$major = "Mathematics";
            $sql1 = mysqli_query($conn, "SELECT * FROM tbl_oldstudent WHERE notif='0' AND course='$course' AND major='$major'");
            $count1 = mysqli_num_rows($sql1);

            if ($count1) {
          ?>
          	<li class="breadcrumb-item list" style="margin: -5px;"><a href="oldBSEDMath/oldbsedmath.php" target="myFrame">BSE - Math<span class="badge badge-light" id="count"><?php echo $count1;?></span></a></li>
          <?php
          }else{
          ?>
            <li class="breadcrumb-item list" style="margin: 4px;"><a href="oldBSEDMath/oldbsedmath.php" target="myFrame">BSE - Math</a></li>
          <?php
          }
        ?>

        
        <!-- Course BSED MATH -->
        <?php 
          include "db_conn.php";
					$course = 'Bachelor of Secondary Education';
					$major = "Science";
            $sql1 = mysqli_query($conn, "SELECT * FROM tbl_oldstudent WHERE notif='0' AND course='$course' AND major='$major'");
            $count1 = mysqli_num_rows($sql1);

            if ($count1) {
          ?>
          	<li class="breadcrumb-item list" style="margin: -5px;"><a href="oldBSEDScience/oldbsedsci.php" target="myFrame">BSE - Science<span class="badge badge-light" id="count"><?php echo $count1;?></span></a></li>
          <?php
          }else{
          ?>
            <li class="breadcrumb-item list" style="margin: 4px;"><a href="oldBSEDScience/oldbsedsci.php" target="myFrame">BSE - Science</a></li>
          <?php
          }
        ?>


        <!-- Course BEE -->
        <?php 
          include "db_conn.php";
					$course = 'Bachelor of Elementary Education';
           $sql1 = mysqli_query($conn, "SELECT * FROM tbl_oldstudent WHERE notif='0' AND course = '$course'");
            $count1 = mysqli_num_rows($sql1);

            if ($count1) {
          ?>
          	<li class="breadcrumb-item list" style="margin: -5px;"><a href="oldBEE/oldbee.php" target="myFrame">BEE<span class="badge badge-light" id="count"><?php echo $count1;?></span></a></li>
          <?php
          }else{
          ?>
            <li class="breadcrumb-item list" style="margin: 4px;"><a href="oldBEE/oldbee.php" target="myFrame">BEE</a></li>
          <?php
          }
        ?>

			</ol>
		</div>
	</div>

	<!-- <div class="container-fluid">
		<div class="my-content">
			<h2 class="display-1">LIST OF OLD STUDENT</h3>
			<ol class="breadcrumb" style="font-weight: bold; font-size: 1.4rem; text-transform: uppercase; text-align:center;">
			    <li class="breadcrumb-item list active" style="margin: 5px;"><a href="oldAB/oldab.php" target="myFrame">AB-Econ</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="oldBAFinMan/oldbafinman.php" target="myFrame">BSBA - FinMan</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="oldBAMarketing/oldbamarketing.php" target="myFrame">BSBA - Marketing</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="oldCS/oldcs.php" target="myFrame">BSCS</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="oldBSEDEnglish/oldbsedeng.php" target="myFrame">BSE - English</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="oldBSEDFilipino/oldbsedfil.php" target="myFrame">BSE - Filipino</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="oldBSEDMath/oldbsedmath.php" target="myFrame">BSE - Math</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="oldBSEDScience/oldbsedsci.php" target="myFrame">BSE - Science</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="oldBEE/oldbee.php" target="myFrame">BEE</a></li>
			</ol>
		</div>
	</div> -->

<script>
	let list = document.querySelectorAll('.list');
	for (let i=0; i<list.length; i++){
		list[i].onclick = function (){ 
			let j = 0;
			while(j < list.length){
				list[j++].className = 'list';
			}
			list[i].className = 'list active';
		}
				
	}
</script>
</body>
</html>