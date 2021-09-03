<?php
ob_start();
include('admin/includes/db.php');
if (!isset($_GET["id"])) {
	header('location:index.php');
} else {
	$project_id = $_GET["id"];

	$query = $conn->prepare(

		"SELECT *
			FROM projects 
			Where id='$project_id'"

	);

	$query->execute();

	$result = $query->fetch(PDO::FETCH_ASSOC);

	$folder = "img/project_images/";
}
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

	<title><?php echo ucfirst($result["title"]) ?> - Solid House</title>
</head>

<body>
	<header class="container-fluid">
		<div class="container header-block">
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
							<a class="nav-link " href="index.php">Home</a>
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
			<div class="col-lg-6 col-md-12 no-padding-left no-padding-right">
				<img class="width-100 img-project" src="<?php echo $folder. $result["image_one"]; ?>" alt="Card image cap" >
						
			</div>
			<div class="header-text col-lg-3 col-md-12">
				<div>
					<h1><?php echo ucfirst($result["title"]); ?></h1>
					<hr align="center" class="divider pd-bottom text-center">
					<a href="#about"><button type="button" class="button-dark pd-top">Read More</button><br></a>
				</div>
			</div>
		</div>
	</header>
	<section id="about">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 offset-lg-1 pd-bottom order-md-1 order-lg-1 order-1 wow fadeInLeft" style="word-break:break-all;">
					<h3><?php echo $result["title"] ?></h3>
					
					
					
					<?php echo ($result["description"]); ?>
					
					
					
				
				</div>
				<div class="col-lg-4 offset-lg-1 order-md-2 order-lg-2 order-2 wow fadeIn">
					
					<img class="img-fluid" src="<?php echo $folder. $result["image_sec"]; ?>" alt="Card image cap" >
				
				</div>
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
		const scroll = new SmoothScroll('.header-text  a[href*="#"]', {
			speed: 800
		});
	</script>
	<!-- END smooth scroll DOWB-->

	<!-- Include cookiealert script -->
	<script src="lib/cookie/js/cookiealert.js"></script>
</body>

</html>