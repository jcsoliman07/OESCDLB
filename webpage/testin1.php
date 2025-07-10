z<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar">
		<h1 class="logo">Colegio de Los Baños</h1>
		<ul class="nav-links">
			<li class="active"><a href="#"></a>Home</li>
			<li><a href="#"></a>Our Education</li>
			<li><a href="#"></a>About Us</li>
			<li><a href="#"></a>JoinCDLB</li>
			<li class="ctn"><a href="#"></a>MY.CDLB</li>
		</ul>
		<img src="image/menu-btn.png" alt="" class="menu-btn">
	</nav>


	<header>
		<div class="header-content">
			<h2>Explore The Colorful World</h2>
			
			<div class="line"></div>
			<h1>A WONDERFUL GIFT</h1>
			<a href="#" class="ctn">Learn More</a>
		</div>
	</header>
	<!-- == Events == -->
	<section class="events">
		<div class="title">
			<h1>CDLB Offers You</h1>
			<div class="line"></div>
		</div>
		<div class="row">
			<div class="col">
				<img class="image2" src="image/image2.png" alt="">
				<h4>Senior High School</h4>
				<p>
					Quality Educatiom Lorem, dolor sit ameet consectertur adipisicing
				</p>
				<a href="#" class="ctn">Learn More</a>
			</div>

			<div class="col">
				<img class="image1" src="image/image2.png" alt="">
				<h4>College</h4>
				<p>
					Quality Educatiom Lorem, dolor sit ameet consectertur msandafmsnbdisicing
				</p>
				<a href="#" class="ctn">Learn More</a>
			</div>
		</div>
	</section>

	<section class="explore">
		<div class="explore-content">
			<h1>EXPLORE THE WORLD</h1>
			<div class="line"></div>
			<p>Quality Education within your Reach</p>
			<a href="#" class="ctn"> Learn More</a>
		</div>
	</section>

	<section class="tours">
		<div class="row">
			<div class="col content-col">
				<h1>UPCOMING TOURS & DESTINATION<h1>
				<div class="line"></div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur qoute</p>
				<a href="#" class="ctn"> Learn More</a>
			</div>
			<div class="col">
				<div class="image-gallery">
					<img src="image/img3.png" alt="">
					<img src="image/img4.png" alt="">
					<img src="image/img5.png" alt="">
					<img src="image/img6.png" alt="">		
				</div>
			</div>
		</div>
	</section>

	<section class="footer">
		<p>Lopez Avenue St. Batong Malake Los Banos Laguna | Email: cdlb1994@gmail.com</p>
		<p>Copyright © 2020 Colegio De Los Banos</p>
		
	</section>
	<script>
		const menuBtn = document.querySelector('.menu-btn')
		const navlinks = document.querySelector('.nav-links')

		menuBtn.addEventListener('click',()=>
		{
			navlinks.classList.toggle('mobile-menu')
		})
	</script>


</body>
</html>