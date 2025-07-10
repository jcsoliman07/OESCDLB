<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CDLB</title>

	<link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
    <link rel="shortcut icon" type="image/png" href="SchoolLogo.png">

</head>
<body>

<header>
      <div class="upper">
        <img src="image/SchoolLogo.png" class="school">
        <p>Colegio de Los Baños</p>
      </div>
      
      <div class="navigation">
        <ul class="menu">
          <div class="close-btn"></div>
          <li class="menu-item active"><a href="index.php">Home</a></li>
          <li class="menu-item">
            <a class="sub-btn" href="#"> Join CDLB <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="#">Graduate Programs</a></li>
              <li class="sub-item more">
                <a class="more-btn" href="#"> Undergraduate Programs <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
                  <li class="more-item"><a href="college/enrollFormAB.php">AB Economics</a></li>
                  <li class="more-item"><a href="college/enrollFormBA.php">Business Administration</a></li>
                  <li class="more-item"><a href="college/enrollFormCS.php">Computer Science</a></li>
                  <li class="more-item"><a href="college/enrollFormBEE.php">Elementary Education</a></li>
                  <li class="more-item"><a href="college/enrollFormBSED.php">Secondary Education</a></li>
                </ul>
              </li>
              <li class="sub-item more">
                <a class="more-btn" href="#"> Senior High School <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
                  <li class="more-item"><a href="#">ABM</a></li>
                  <li class="more-item"><a href="#">GAS</a></li>
                  <li class="more-item"><a href="#">HUMSS</a></li>
                  <li class="more-item"><a href="#">ICT</a></li>
                  <li class="more-item"><a href="#">STEM</a></li>
                </ul>
              </li>
              <li class="sub-item"><a href="#">Junior High School</a></li>
            </ul>
          </li>

           <li class="menu-item">
            <a class="sub-btn" href="#"> About Us <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="#">History</a></li>
              <li class="sub-item"><a href="#">Mission and Vision</a></li>
              <li class="sub-item"><a href="#">School Director</a></li>
              <li class="sub-item"><a href="admin/instructor/instructorpage.php">Faculty</a></li>
            </ul>
          </li>

          <!-- <li class="menu-item"><a href="#">About Us</a></li> -->
          <!-- <li class="menu-item"><a href="adm.php">Our Education</a></li> -->

          <li class="menu-item">
            <a class="sub-btn" href="#"> Our Education <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="adm.php">Admission Requirements</a></li>
              <li class="sub-item"><a href="#">Basic Education</a></li>
              <li class="sub-item"><a href="#">Undergraduate Programs</a></li>
              <li class="sub-item"><a href="#">Graduate Programs</a></li>
            </ul>
          </li>

          <li class="menu-item"><a href="#">MyCDLB</a></li>
        </ul>
      </div>
      <div class="menu-btn"></div>
    </header>

	<section class="section-hs">
		<!-- <img src="image/s1.jpg" alt=""> -->
		<h1>SENIOR HIGH SCHOOL</h1>
	</section>

	<section class="section-hs-home">
		
	</section>


	<?php include ('partials/footer.php');?>

</body>
</html>