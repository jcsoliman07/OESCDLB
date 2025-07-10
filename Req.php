<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDLB</title>
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
    <link rel="shortcut icon" type="image/png" href="SchoolLogo.png">
  </head>

  <body>

    <?php include ('partials/header.php')?>

    <section class="section-adm">
      <h1>Admission Requirements</h1>
    </section>
    

   <?php include ('partials/footer.php')?>

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
