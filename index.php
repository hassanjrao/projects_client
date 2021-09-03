<?php
ob_start();
include('admin/includes/db.php');
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Favicon-->
	<link rel="shortcut icon" href="img/logo-nova-01-01.jpg">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">

	<!--My css-->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--Animate-->
	<link rel="stylesheet" href="lib/animate/css/animate.min.css">

	<!-- Cookie-->
	<link rel="stylesheet" href="lib/cookie/css/cookiealert.css">

	<script src="https://kit.fontawesome.com/65e8f222c3.js" crossorigin="anonymous"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<title>Make your project - Solid House</title>

</head>

<body>
	<header class="container-fluid">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light pd-top">
				<a class="navbar-brand" href="#">
					<img src="img/logo-nova-01-01.jpg" width="50'" height="50" class="d-inline-block align-top img-fluid" alt="logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about-us.php">About us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="projects.php">Projects</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="row d-flex align-items-center">
			<div class="header-home col-lg-3 offset-lg-1 col-sm-12">
				<div>
					<h1>Solid House</h1>
					<hr class="divider pd-bottom">
					<p class="pd-bottom">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
					<a href="#presentation"><button type="button" class="button-dark">Read More</button><br></a>
				</div>
			</div>
			<div class="col-lg-7 offset-lg-1 col-sm-12 slider no-padding-right no-padding-left">
				<!--col-lg-8 offset-lg-1 col-sm-12-->
				<div class="bs-example">
					<div id="myCarousel" class="carousel slide" data-interval="300000" data-ride="carousel">
						<!-- Carousel indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active">01</li>
							<li data-target="#myCarousel" data-slide-to="1">02</li>
							<li data-target="#myCarousel" data-slide-to="2">03</li>
						</ol>
						<!-- Wrapper for carousel items -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/slider-img-1.jpg" class="min-vh-100 h-100" alt="First Slide">
							</div>
							<div class="carousel-item">
								<img src="img/slider-img-1.jpg" class="min-vh-100 h-100" alt="Second Slide">
							</div>
							<div class="carousel-item">
								<img src="img/slider-img-1.jpg" class="min-vh-100 h-100" alt="Third Slide">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="presentation" class="wow fadeInDown">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<h2>Lorem ipsum dolor sit amet, consectetur adipiscing proin cursus </h2>
					<hr class="divider ml-auto mr-auto">
					<p class="pd-top pd-bottom">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea dolorem ducimus, tempore aut. Dolorem veritatis nesciunt similique, in temporibus odit!
					</p>
					<button onclick="location.href='about-us.php'" type="button" class="button-light">Read More</button>
				</div>
			</div>
		</div>
	</section>
	<!-- <section id="about">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 offset-lg-1 pd-bottom order-md-1 order-lg-1 order-1 wow fadeInLeft">
					<h3>Realization of our ideas</h3>
					<hr class="divider pd-bottom">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacus nibh, rhoncus ac risus at, scelerisque vehicula sem. Nam ultrices tempor turpis sed placerat. 
						Aliquam pharetra nec orci quis posuere. Nulla in porta tortor. 
					</p>
					<a href="#" class="link">Read more</a>
				</div>
				<div class="col-lg-6 offset-lg-1 order-md-2 order-lg-2 order-2 wow fadeIn">
					<img src="img/pres-slider-1.jpg" class="img-fluid" alt="slider-1">
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-6 order-md-4 order-lg-3 order-4 wow fadeIn">
					<img src="img/pres-slider-2.png" class="img-fluid" alt="slider-1">
				</div>
				<div class="col-lg-4 offset-lg-1 pd-top order-md-3 order-3 order-lg-4 pd-bottom wow fadeInRight">
					<h3>Realization of our ideas</h3>
					<hr class="divider pd-bottom">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacus nibh, rhoncus ac risus at, scelerisque vehicula sem. Nam ultrices tempor turpis sed placerat. 
						Aliquam pharetra nec orci quis posuere. Nulla in porta tortor. 
					</p>
					<a href="#" class="link">Read more</a>
				</div>
			</div>
		</div>
	</section> -->
	<section id="projects">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 m-auto text-center wow fadeInDown">
					<h2>Projects</h2>
					<hr class="divider ml-auto mr-auto">
					<p class="pd-bottom">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacus nibh
					</p>
				</div>
			</div>
			<div class="row pd-bottom">

				<?php

				$query = $conn->prepare(
					"SELECT * from projects order by id desc LIMIT 2"
				);
				$query->execute();

				$folder = "img/project_images/";

				while ($result = $query->fetch(PDO::FETCH_ASSOC)) {

				?>

					<div class="col-lg-6 pd-bottom wow fadeInLeft">
						<div class="card">
							<img class="card-img-top" height="250px" src="<?php echo $folder. $result["image_one"]; ?>" alt="Card image cap" >
							<div class="card-body">
								<h3 class="pd-bottom"><?php echo ucfirst($result["title"]) ?></h3>
								<p class="card-text"><?php echo strlen(strip_tags($result["description"])) >100 ? substr(strip_tags($result["description"]), 0, 50)." ...." : strip_tags($result["description"]); ?></p>
								
								<div class="social float-left">
									<a href="#"><i class="fab fa-facebook pd-right"></i></a>
									<a href="#"><i class="fab fa-instagram "></i></a>
								</div>
								<a href="<?php echo "project.php?id=".$result["id"] ?>"><i class="fas fa-chevron-right icon float-right"></i></a>
							</div>
							<div class="clearfix pd-bottom"></div>
						</div>
					</div>

				<?php
				}
				?>

			</div>
			<div class="row pd-top">
				<div class="col-lg-6 m-auto text-center wow fadeIn">
					<button onclick="location.href='projects.php'" type="button" class="button-light">Read More</button>
				</div>
			</div>
		</div>
	</section>
	<section id="about-us">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 m-auto text-center">
					<h2>About us</h2>
					<hr class="divider ml-auto mr-auto">
					<p class="pd-bottom pd-top">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacus nibh
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 video-section no-padding-left no-padding-right">
					<img src="img/video-preview.jpg" class="img-fluid img-fluid" alt="bg-video">
					<img src="img/play-button.png" class="play-button img-fluid" alt="play-botton">
				</div>
			</div>
			<div class="row">
				<div class="col bg-dark pd-top pd-bottom">
					<div class="row pd-top pd-bottom">
						<div class="col-lg-6 m-auto text-center wow fadeInDown">
							<h2 class="white">Goals</h2>
							<hr class="divider ml-auto mr-auto">
						</div>
					</div>
					<div class="row pd-top text-center wow fadeInUp white">
						<div class="col-lg col-md-4 col-sm-12 m-auto pd-bottom">
							<h5 class="no-padding white">N <span class="counter">1</span></h5>
							<h3 class="white">Best architecture in italy</h3>
						</div>
						<div class="col-lg col-md-4 col-sm-12 m-auto pd-bottom">
							<h5 class="no-padding counter white">110</h5>
							<h3 class="white">Employed worker with us</h3>
						</div>
						<div class="col-lg col-md-4 col-sm-12 m-auto pd-bottom">
							<h5 class="no-padding counter white">190</h5>
							<h3 class="white">Project that we realize</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="contact">
		<div class="container wow fadeInUpBig">
			<div class="row">
				<div class="col-lg-5 m-auto text-center">
					<h2>Contacts</h2>
					<hr class="divider ml-auto mr-auto">
					<p class="pd-bottom pd-top">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacus nibh
					</p>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-7">
					<img src="img/map-solid-house.jpg" class="img-fluid" alt="map">
				</div>
				<div class="col-lg-3 pd-top ml-auto">
					<h3>Milan</h3>
					<p class="pd-bottom">
						Via G. Tellera 8, 46100, Milan<br>
						+39 3497331082<br>
						+0376 423 234<br>
						info@solidhouse.it<br>
					</p>
					<div class="social">
						<a href=""><i class="fab fa-facebook pd-right"></i></a>
						<a href=""><i class="fab fa-instagram "></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 m-auto text-center wow fadeInDown">
					<h2>Send e-email</h2>
					<hr class="divider ml-auto mr-auto">
					<p class="pd-bottom">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacus nibh
					</p>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<form>
					<input type="text" name="field1" placeholder="Full Name" />
					<input type="email" name="field2" placeholder="Email" />
					<textarea placeholder="Message" onkeyup="adjust_textarea(this)"></textarea>
					<input type="button" value="Send Message" class="button-light" />
				</form>
			</div>
		</div>
	</section>
	<footer class="bg-dark pd-bottom pd-top white">
		<div class="container align-self-start">
			<div class="row text-center">
				<div class="col-lg-4 m-auto col-md-4 col-sm-12">
					<h4 class="">Solid House</h4>
					<hr class="divider ml-auto mr-auto">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam corporis illum deserunt, esse quia quaerat.</p>
				</div>
				<div class="col-lg-4 m-auto col-md-4 col-sm-12">
					<h4 class="">Links</h4>
					<hr class="divider ml-auto mr-auto">
					<p class="pd-bottom">
						<a href="#" class="">About Us</a><br>
						<a href="#" class="">Projects</a><br>
						<a href="#" class="">Contacts</a><br>
					</p>
				</div>
				<div class="col-lg-4 m-auto col-md-4 col-sm-12">
					<h4 class="">Contacts</h4>
					<hr class="divider ml-auto mr-auto">
					<p class="pd-bottom">
						Via G. Tellera 8, 46100, Milan<br>
						+0376 423 234<br>
						info@solidhouse.it<br>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- START Bootstrap-Cookie-Alert -->
	<div class="alert text-center cookiealert" role="alert">
		<b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="https://cookiesandyou.com/" target="_blank">Learn more</a>

		<button type="button" class="btn btn-primary btn-sm acceptcookies">
			I agree
		</button>
	</div>
	<!-- END Bootstrap-Cookie-Alert -->

	<!--<script src="js/jquery-3.4.1.slim.min.js"></script>-->
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>

	<!-- START wow & animated-->
	<script src="lib/animate/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- END wow & animated-->

	<!-- counter number-->
	<script src="lib/counterup/js/jquery.counterup.min.js"></script>
	<script src="lib/counterup/js/waypoints.min.js"></script>

	<script>
		$('.counter').counterUp({
			delay: 100,
			time: 1000
		});
	</script>

	<!-- START smooth scroll DOWN-->
	<script src="lib/smooth-scroll/js/smooth-scroll.polyfills.min.js"></script>
	<script>
		const scroll = new SmoothScroll('.header-home  a[href*="#"]', {
			speed: 800
		});
	</script>
	<!-- END smooth scroll DOWB-->

	<!-- Include cookiealert script -->
	<script src="lib/cookie/js/cookiealert.js"></script>
</body>

</html>