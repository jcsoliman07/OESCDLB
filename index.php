<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDLB</title>
    
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.css">
    
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
             <li class="sub-item more">
                <a class="more-btn" href="#"> Graduate Programs <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
                  <li class="more-item"><a href="Masteral/enrollFormmasteral.php" target="_blank">Master in Management</a></li>
                </ul>
              </li>
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
                  <li class="more-item"><a href="JHS/enrollFormjhs.php" target="_blank">Junior High School</a></li>
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

    <section class="section-home">
      <h1>"Quality Education is within your reach"</h1>
    </section>

    <section class="mySlider reveal">
      <p>Academic Programs</p>

      <div class="dot"></div>

      <div class="slider">
        <!-- Slide 1 -->
        <div class="slide active">
            <img src="image/image4-1.png" alt="">
            <div class="infobox">
              <h2>Graduate Programs</h2>
              <p>Our graduate programs are a commitment to our students’ personal and career development. We offer Juris Doctor and various graduate and post-graduate programs in the School of Graduate Studies. These programs, which are taught by renowned faculty members, provide the students with the knowledge and skills they can use to expand the frontiers of science, education, and commerce in the region, as well as in the country.</p>
              <a href="#" class="ctn">Read More</a>
            </div>
        </div>
        <!-- End of Slide 1 -->

        <!-- Slide 2 -->
        <div class="slide">
            <img src="image/image1.png" alt="">
            <div class="infobox">
              <h2>Undergraduate Programs</h2>
              <p>We are one of the few colleges in Laguna that offer an extensive range of undergraduate programs. These include bachelor’s degree programs in Computer Science, Business Administration and Education. Through these undergraduate programs, we provide our graduates with the skills and qualifications necessary to enter a dynamic global workforce environment.</p>
              <a href="#" class="ctn">Read More</a>
            </div>
        </div>
        <!-- End of Slide 2 -->

        <!-- Slide 3 -->
        <div class="slide">
            <img src="image/image5.png" alt="">
            <div class="infobox">
              <h2>Senior High School</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="ctn">Read More</a>
            </div>
        </div>
        <!-- End of Slide 3 -->

        <!-- Slide 4 -->
        <div class="slide">
            <img src="image/image6.png" alt="">
            <div class="infobox">
              <h2>Junior High School</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="ctn">Read More</a>
            </div>
        </div>
        <!-- End of Slide 4 -->
        

        <div class="navigation1">
            <i class="fas fa-chevron-left prev-btn"></i>
            <i class="fas fa-chevron-right next-btn"></i>
        </div>

        <div class="navigation-visibility">
            <div class="slide-icon active"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
        </div>
      </div>

    </section>
    
    <section class="section-two">
      <div class="vid">
        <video width="800" controls autoplay muted>
          <source src="image/vid1.mp4" type="video/mp4">
          <source src="cdlbvid.ogg" type="video/ogg">
        </video>
      </div>
    </section>

    <section class="cdlbfam">
      <div class="cdlbfam-info">
        <h2>Growing Family</h2>
        <h1>Be part of the growing CDLB family!</h1>
        <ul>
          <li>Quality, Responsive, and Relevant Education</li>
          <li>Air-Conditioned Classrooms</li>
          <li>Licensed and Highly qualified faculty members</li>
          <li>Ideal, scale, and secure location</li>
          <li>Balance between curricular and co-curricular activities fo the child's holistic development</li>
          <li>You may inquire also about our Home Schooling Program</li>
        </ul>
      </div>
    </section>

   <section class="footer">
      <p>Lopez Avenue, Batong Malake, Los Baños, Laguna, Philippines 4030</p>
      <p>Email: cdlb1994@yahoo.com</p>
      <p>Copyright © 2022 Colegio De Los Banos</p>
      <ul class="socials">
          <li><a href="https://www.facebook.com/CDLBOfficial"><i class="fa fa-facebook"></i></a></li>
      </ul>
    </section>

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
