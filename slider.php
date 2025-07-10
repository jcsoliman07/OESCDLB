<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="css/styleindex.css">
	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<div class="slider">
    <!-- Slide 1 -->
    <div class="slide active">
        <img src="image/image4-1.png" alt="">
        <div class="infobox">
        	<h2>Graduate Programs</h2>
        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        	tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <!-- End of Slide 1 -->

    <!-- Slide 2 -->
    <div class="slide">
        <img src="image/image.png" alt="">
        <div class="infobox">
        	<h2>Undergraduate Programs</h2>
        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        	tempor incididunt ut labore et dolore magna aliqua.</p>
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
        </div>
    </div>
    <!-- End of Slide 3 -->

    <!-- Slide 4 -->
    <div class="slide">
        <img src="image/image6.png" alt="">
        <div class="infobox">
        	<h2>Senior High School</h2>
        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        	tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <!-- End of Slide 4 -->
    

    <div class="navigation">
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
		},4000);
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

</body>
</html>