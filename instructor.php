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

	<section class="section-ins-head">
      <h1>School Faculty</h1>

	<div class="section-ins">
	<?php
    	include "db_conn.php";

    	$sql = mysqli_query($conn, "SELECT * FROM tbl_instructor") or die(mysqli_error());
    	while ($result = mysqli_fetch_array($sql)) {
    ?>
		<div class="card-ins reveal-ins">
			<div class="bg-image-ins">
				<img src="image/hisheader.jpg" alt="">
			</div>
			<div class="card-pic-ins">
				<img src="<?php echo $result['ins_image']?>" alt="">
			</div>
			<div class="card-info-ins">
				<h3> <?php echo $result['ins_name']?> </h3>
				<span style="font-style: italic; font-weight: 500;">" <?php echo $result['ins_description']?> "</span>
				<!-- <p> <?php echo $result['ins_description']?> </p> -->
			</div>
			<div class="card-icons-ins">
				<a href="#" class="fab fa-facebook"></a>
			</div>
		</div>
	<?php 
		} 
	?>
	</div>
</section> 

<?php include('partials/footer.php')?>

<!-- Script for Nav Menu -->
  <script type="text/javascript">
    //jquery for toggle dropdown menus
    $(document).ready(function(){
      //toggle sub-menus
      $(".sub-btn").click(function(){
        $(this).next(".sub-menu").slideToggle();
      });

      //toggle more-menus
      $(".more-btn").click(function(){
        $(this).next(".more-menu").slideToggle();
      });
    });

    //javascript for the responsive navigation menu
    var menu = document.querySelector(".menu");
    var menuBtn = document.querySelector(".menu-btn");
    var closeBtn = document.querySelector(".close-btn");

    menuBtn.addEventListener("click", () => {
      menu.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove("active");
    });

    //javascript for the navigation bar effects on scroll
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    });
  </script>
<!-- End of Script for Nav Menu -->


<!-- Script for SLider -->
    <script type="text/javascript">
  const slider = document.querySelector(".slider");
  const nextBtn = document.querySelector(".next-btn"); 
  const prevBtn = document.querySelector(".prev-btn"); 
  const slides = document.querySelectorAll(".slide");

  const slideIcons = document.querySelectorAll(".slide-icon");
  const numberOfSlides = slides.length;
  var slideNumber = 0;

  //image slide next button
  nextBtn.addEventListener("click", () => {
    slides.forEach((slide) =>{
      slide.classList.remove("active");
    });

    slideIcons.forEach((slideIcon) =>{
      slideIcon.classList.remove("active");
    });

    slideNumber++;

    if (slideNumber > (numberOfSlides - 1)) {
      slideNumber = 0;
    }

    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
  });

  //image slide prev button
  prevBtn.addEventListener("click", () => {
    slides.forEach((slide) =>{
      slide.classList.remove("active");
    });

    slideIcons.forEach((slideIcon) =>{
      slideIcon.classList.remove("active");
    });

    slideNumber--;

    if (slideNumber < 0) {
      slideNumber = numberOfSlides - 1;
    }

    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
  });

  //image slide autoplay

  var playSlider;

  var repeater = () =>{
    playSlider = setInterval(function(){
      slides.forEach((slide) =>{
        slide.classList.remove("active");
      });

      slideIcons.forEach((slideIcon) =>{
        slideIcon.classList.remove("active");
      });

      slideNumber++;

      if (slideNumber > (numberOfSlides - 1)) {
        slideNumber = 0;
      }

      slides[slideNumber].classList.add("active");
      slideIcons[slideNumber].classList.add("active");
    },10000);
  }
  repeater();

  //stop autoplay on mouse over
  slider.addEventListener("mouseover",() => {
    clearInterval(playSlider);
  });

  //start autoplay on mouse out
  slider.addEventListener("mouseout",() => {
    repeater();
  });
</script>
<!-- End of Script for Slider -->

<!-- Script for  Scroll Animation SLider -->
<script type="text/javascript">
  function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
</script>
<!-- End of Script for Scroll Animation SLider -->

<!-- Script for  Scroll Animation Faculty -->
<script type="text/javascript">
  function reveal() {
  var reveals = document.querySelectorAll(".reveal-ins");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
</script>
<!-- End of Script for Scroll Animation SLider -->

<!-- Script for Collapse Bar -->
<script>
  const accordion = document.getElementsByClassName('contentBox');

  for (i = 0; i<accordion.length; i++ ){
    accordion[i].addEventListener('click', function(){
      this.classList.toggle('active')
    })
  }
</script>
<!--End of Script for Collapse Bar -->
</body>
</html>