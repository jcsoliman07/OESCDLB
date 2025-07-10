<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
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
                  <li class="more-item"><a href="college/enrollFormAB.php" target="_blank">AB Economics</a></li>
                  <li class="more-item"><a href="college/enrollFormBA.php" target="_blank">Business Administration</a></li>
                  <li class="more-item"><a href="college/enrollFormCS.php" target="_blank">Computer Science</a></li>
                  <li class="more-item"><a href="college/enrollFormBEE.php" target="_blank">Elementary Education</a></li>
                  <li class="more-item"><a href="college/enrollFormBSED.php" target="_blank">Secondary Education</a></li>
                </ul>
              </li>
              <li class="sub-item more">
                <a class="more-btn" href="#"> Basic Education <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
                  <li class="more-item"><a href="SHS/enrollFormshs.php" target="_blank">Senior High School</a></li>
                  <li class="more-item"><a href="#" target="_blank">Junior High School</a></li>
                </ul>
              </li>
            </ul>
          </li>

           <li class="menu-item">
            <a class="sub-btn" href="#"> About Us <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="History.php">History</a></li>
              <li class="sub-item"><a href="mv.php">Mission and Vision</a></li>
              <li class="sub-item"><a href="admin/instructor/instructorpage.php">Faculty</a></li>
            </ul>
          </li>

          <!-- <li class="menu-item"><a href="#">About Us</a></li> -->
          <!-- <li class="menu-item"><a href="adm.php">Our Education</a></li> -->

          <li class="menu-item">
            <a class="sub-btn" href="#"> Our Education <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="adm.php">Admission Requirements</a></li>
              <li class="sub-item"><a href="basiceducation.php">Basic Education</a></li>
              <li class="sub-item"><a href="#">Undergraduate Programs</a></li>
              <li class="sub-item"><a href="#">Graduate Programs</a></li>
            </ul>
          </li>

          <li class="menu-item"><a href="mainlogin.php" target="_blank">MyCDLB</a></li>
        </ul>
      </div>
      <div class="menu-btn"></div>
    </header>

<section class="acad-home">
	<div class="acad-card">
		<h1>Academic Programs</h1>
		<div class="dot"></div>
	</div>
</section>

<?php include('partials/footer.php')?>

</body>
</html>