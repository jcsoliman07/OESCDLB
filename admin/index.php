<?php
  session_start();

  if (isset($_SESSION['username'])) {
    echo "<input type='hidden' value='".$_SESSION['username']."'";
  }
  else{
    header("Location:../mainlogin.php");
  } 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <title>Administrator Panel</title>

    <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="shortcut icon" type="image/png" href="SchoolLogo.png">
	  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script> -->

   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img class="logo" src="../SchoolLogo.png" alt="">
      <span class="logo_name">Colegio de Los Baños</span>
    </div>

    <ul class="nav-links">

      <li class="list active">
        <a href="Home/home.php" target="frame_body">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Home</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-graduation'></i>
            <span class="link_name">Students</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Students</a></li>
          <li class="list"><a href="Masteral/index.php" target="frame_body">Masteral</a></li>
          <li class="list"><a href="College/collegeframe.php" target="frame_body">College</a></li>
          <li class="list"><a href="SeniorHigh/frame.php" target="frame_body">Senior High School</a></li>
          <li class="list"><a href="JuniorHigh/frame.php" target="frame_body">Junior High School</a></li>
        </ul>
      </li>

      <li class="list">
        <a  href="subject/subjectframe.php" target="frame_body">
          <i class='bx bxs-book'></i>
          <span class="link_name">Subjects</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name">Subjects</a></li>
        </ul>
      </li>

      <li class="list">
        <a href="instructor/instructor.php" target="frame_body">
          <i class='bx bx-user'></i>
          <span class="link_name">Instructor</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Instructor</a></li>
        </ul>
      </li>

      <li class="list">
        <a href="department/department.php" target="frame_body">
          <i class='bx bxs-school'></i>
          <span class="link_name">Department</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Department</a></li>
        </ul>
      </li>

      <li class="list">
        <a href="course/course.php" target="frame_body">
          <i class='bx bxs-book-open'></i>
          <span class="link_name">Course</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Course</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-user-circle'></i>
            <?php
              include "../db_conn.php";
              $count = mysqli_query($conn, "SELECT COUNT(*) as count FROM tbl_newstudent WHERE notif='0'");
              $result_count = mysqli_fetch_assoc($count);

              $count1 = mysqli_query($conn, "SELECT COUNT(*) as count1 FROM tbl_masteralnew WHERE notif='0'");
              $result_count1 = mysqli_fetch_assoc($count1);

              $count2 = mysqli_query($conn, "SELECT COUNT(*) as count2 FROM tbl_jhs_newstudent WHERE notif='0'");
              $result_count2 = mysqli_fetch_assoc($count2);

              $count3 = mysqli_query($conn, "SELECT COUNT(*) as count3 FROM tbl_shs_newstudent WHERE notif='0'");
              $result_count3 = mysqli_fetch_assoc($count3);

              $total_count = $result_count['count'];
              $total_count1 = $result_count1['count1'];
              $total_count2 = $result_count2['count2'];
              $total_count3 = $result_count3['count3'];
              $total = $total_count + $total_count1 + $total_count2 + $total_count3;
              if ($total) {
            ?>
            <span class="link_name">New Enrollees<span class="badge badge-light" id="count1"><?php echo $total;?></span></span>
            <?php
              }
              else
              {
            ?>
            <span class="link_name">New Enrollees</span>
            <?php
              }
            ?>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">New Enrollees<span class="badge badge-light" id="count"><?php echo $total_count;?></span></a></li>

          <?php 
          include "../db_conn.php";
            $sql3 = mysqli_query($conn, "SELECT * FROM tbl_masteralnew WHERE notif='0'");
            $count3 = mysqli_num_rows($sql3);

            if ($count3) {
          ?>
            <li class="list"><a href="newenrolleesMasteral/index.php" target="frame_body"><span class="badge badge-light" id="count"><?php echo $count3;?></span> Masteral </a></li>
          <?php
          }else{
          ?>
            <li class="list"><a href="newenrolleesMasteral/index.php" target="frame_body"> Masteral</a></li>
          <?php
          }
          ?>

          <?php 
          include "../db_conn.php";
            $sql = mysqli_query($conn, "SELECT * FROM tbl_newstudent WHERE notif='0'");
            $count = mysqli_num_rows($sql);

            if ($count) {
          ?>
            <li class="list"><a href="newenrollees/framemain.php" target="frame_body"><span class="badge badge-light" id="count"><?php echo $count;?></span>College </a></li>
          <?php
          }else{
          ?>
            <li class="list"><a href="newenrollees/framemain.php" target="frame_body">College</a></li>
          <?php
          }
          ?>

          <?php 
          include "../db_conn.php";
            $sql1 = mysqli_query($conn, "SELECT * FROM tbl_shs_newstudent WHERE notif='0'");
            $count1 = mysqli_num_rows($sql1);

            if ($count1) {
          ?>
            <li class="list"><a href="newenrolleesSHS/frame.php" target="frame_body"><span class="badge badge-light" id="count"><?php echo $count1;?></span>Senior High School </a></li>
          <?php
          }else{
          ?>
            <li class="list"><a href="newenrolleesSHS/frame.php" target="frame_body">Senior High School</a></li>
          <?php
          }
          ?>


          <?php 
          include "../db_conn.php";
            $sql2 = mysqli_query($conn, "SELECT * FROM tbl_jhs_newstudent WHERE notif='0'");
            $count2 = mysqli_num_rows($sql2);

            if ($count2) {
          ?>
            <li class="list"><a href="newenrolleesJHS/frame.php" target="frame_body"><span class="badge badge-light" id="count"><?php echo $count2;?></span>Junior High School </a></li>
          <?php
          }else{
          ?>
           <li class="list"><a href="newenrolleesJHS/frame.php" target="frame_body">Junior High School</a></li>
          <?php
          }
          ?>

          
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-user-circle'></i>
            <?php
              include "../db_conn.php";
              $count = mysqli_query($conn, "SELECT COUNT(*) as count FROM tbl_oldstudent WHERE notif='0'");
              $result_count = mysqli_fetch_assoc($count);

              $count1 = mysqli_query($conn, "SELECT COUNT(*) as count1 FROM tbl_masteralold WHERE notif='0'");
              $result_count1 = mysqli_fetch_assoc($count1);

              $count2 = mysqli_query($conn, "SELECT COUNT(*) as count2 FROM tbl_jhs_oldstudent WHERE notif='0'");
              $result_count2 = mysqli_fetch_assoc($count2);

              $count3 = mysqli_query($conn, "SELECT COUNT(*) as count3 FROM tbl_shs_oldstudent WHERE notif='0'");
              $result_count3 = mysqli_fetch_assoc($count3);

              $total_count = $result_count['count'];
              $total_count1 = $result_count1['count1'];
              $total_count2 = $result_count2['count2'];
              $total_count3 = $result_count3['count3'];
              $total = $total_count + $total_count1 + $total_count2 + $total_count3;
              if ($total) {
            ?>
            <span class="link_name">Old Student<span class="badge badge-light" id="count1"><?php echo $total;?></span></span>
            <?php
              }
              else
              {
            ?>
            <span class="link_name">Old Student</span>
            <?php
              }
            ?>
            
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Old Student</a></li>

          <?php 
          include "../db_conn.php";
            $sql6 = mysqli_query($conn, "SELECT * FROM tbl_masteralold WHERE notif='0'");
            $count6 = mysqli_num_rows($sql6);

            if ($count6) {
          ?>
            <li class="list"><a href="oldstudentMasteral/index.php" target="frame_body"><span class="badge badge-light" id="count"><?php echo $count6;?></span> Masteral </a></li>
          <?php
          }else{
          ?>
            <li class="list"><a href="oldstudentMasteral/index.php" target="frame_body"> Masteral</a></li>
          <?php
          }
          ?>

          <?php 
          include "../db_conn.php";
            $sql4 = mysqli_query($conn, "SELECT * FROM tbl_oldstudent WHERE notif='0'");
            $count4 = mysqli_num_rows($sql4);

            if ($count4) {
          ?>
          <li class="list"><a href="oldstudent/framemain.php" target="frame_body"><span class="badge badge-light" id="count"><?php echo $count4;?></span>College</a></li>
          <?php
            }else{
          ?>
            <li class="list"><a href="oldstudent/framemain.php" target="frame_body">College</a></li>
          <?php
            }
          ?>

          <?php 
          include "../db_conn.php";
            $sql5 = mysqli_query($conn, "SELECT * FROM tbl_shs_oldstudent WHERE notif='0'");
            $count5 = mysqli_num_rows($sql5);

            if ($count5) {
          ?>
          <li class="list"><a href="oldstudentSHS/frame.php" target="frame_body"><span class="badge badge-light" id="count"><?php echo $count5;?></span>Senior High School</a></li>
          <?php
            }else{
          ?>
             <li class="list"><a href="oldstudentSHS/frame.php" target="frame_body">Senior High School</a></li>
          <?php
            }
          ?>


           <?php 
          include "../db_conn.php";
            $sql7 = mysqli_query($conn, "SELECT * FROM tbl_jhs_oldstudent WHERE notif='0'");
            $count7 = mysqli_num_rows($sql7);

            if ($count7) {
          ?>
            <li class="list"><a href="oldstudentJHS/frame.php" target="frame_body"><span class="badge badge-light" id="count"><?php echo $count1;?></span>Junior High School </a></li>
          <?php
          }else{
          ?>
           <li class="list"><a href="oldstudentJHS/frame.php" target="frame_body">Junior High School</a></li>
          <?php
          }
          ?>

        </ul>
      </li>


      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-user-check'></i>
            <?php
              include "../db_conn.php";
              $count = mysqli_query($conn, "SELECT COUNT(*) as count FROM tbl_approvalstudent WHERE notif='0'");
              $result_count = mysqli_fetch_assoc($count);

              $count1 = mysqli_query($conn, "SELECT COUNT(*) as count1 FROM tbl_masteralapproval WHERE notif='0'");
              $result_count1 = mysqli_fetch_assoc($count1);

              $total_count = $result_count['count'];
              $total_count1 = $result_count1['count1'];
              $total = $total_count + $total_count1;
              if ($total) {
            ?>
            <span class="link_name">For Approval<span class="badge badge-light" id="count1"><?php echo $total;?></span></span>
            <?php
              }
              else
              {
            ?>
            <span class="link_name">For Approval</span>
            <?php
              }
            ?>
            
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">For Approval<span class="badge badge-light" id="count"></a></li>

          <?php 
          include "../db_conn.php";
            $sql3 = mysqli_query($conn, "SELECT * FROM tbl_masteralapproval WHERE notif='0'");
            $count3 = mysqli_num_rows($sql3);

            if ($count3) {
          ?>
            <li class="list"><a href="approvalmasteral/approval/approval.php" target="frame_body"><span class="badge badge-light" id="count"><?php echo $count3;?></span> Masteral </a></li>
          <?php
          }else{
          ?>
            <li class="list"><a href="approvalmasteral/approval/approval.php" target="frame_body"> Masteral</a></li>
          <?php
          }
          ?>

          <?php 
          include "../db_conn.php";
            $sql = mysqli_query($conn, "SELECT * FROM tbl_approvalstudent WHERE notif='0'");
            $count = mysqli_num_rows($sql);

            if ($count) {
          ?>
            <li class="list"><a href="approval/approvalframe.php" target="frame_body"><span class="badge badge-light" id="count"><?php echo $count;?></span>College </a></li>
          <?php
          }else{
          ?>
            <li class="list"><a href="approval/approvalframe.php" target="frame_body">College</a></li>
          <?php
          }
          ?>
        </ul>
      </li>


     <!--  <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-user-check'></i>
            <span class="link_name">For Approval</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">For Approval</a></li>
          <li class="list"><a href="approvalmasteral/approval/approval.php" target="frame_body">Masteral</a></li>
          <li class="list"><a href="approval/approvalframe.php" target="frame_body">College</a></li>
        </ul>
      </li> -->

      <li class="list">
        <a href="semester/schedule/index.php" target="frame_body">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Semester / Schedule</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Semester/Schedule</a></li>
        </ul>
      </li>

      <li class="list">
        <a href="academicyear/index.php" target="frame_body">
          <i class='bx bxs-calendar'></i>
          <span class="link_name">Academic Year</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="academicyear/index.php" target="frame_body">Academic Year</a></li>
        </ul>
      </li>

      <li class="list">
        <a href="Retrieve/main/framemain.php" target="frame_body">
          <i class='bx bxs-archive-in'></i>
          <span class="link_name">Retrieve</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="Retrieve/framemain.php" target="frame_body">Retrieve Information</a></li>
        </ul>
      </li>
      
      <li class="list">
        <a href="Transferee/update.php" target="frame_body">
          <i class='bx bxs-user-plus'></i>
          <span class="link_name">Transferee / Update</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="Transferee/update.php" target="frame_body">Transferee/Update</a></li>
        </ul>
      </li>

      <li class="list">
        <a href="" target="frame_body">
          <!-- <i class='bx bxs-user-plus'></i> -->
          <span class="link_name"></span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="Transferee/update.php" target="frame_body"></a></li>
        </ul>
      </li>

      <li class="list">
        <a href="" target="frame_body">
          <!-- <i class='bx bxs-user-plus'></i> -->
          <span class="link_name"></span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="Transferee/update.php" target="frame_body"></a></li>
        </ul>
      </li>


   
  <li>
    <div class="profile-details">
        <div class="profile_name">
        	<a onclick="checker()" href="../logout.php?logout" target="_parent" style="color: white;"><i class='bx bx-log-out' style="color: darkred;"></i>Log-out</a>
        </div>
    </div>
  </li>
</ul>

  </div>

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

  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;
   arrowParent.classList.toggle("showMenu");
    });
  }
  </script>

  <script>
  function checker() {
    var result = confirm('Are you sure you want to Logout?');
    if (result == false){
      event.preventDefault();
    }
  }
</script>
</body>
</html>