<!doctype html>
<html lang="en">
	<head>
		<title>GTAT</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   <!-- CSS -->
	   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	   <link rel="stylesheet" href="assets/css/style.css">
	   <link rel="stylesheet" href="assets/css/colors.css">
	   <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.css">
		<link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
      
      <!-- Browser Tab Icon -->
      <link rel="icon" type="text/css" href="assets/images/gtat_logo_1.png">

	</head>
	<body>
		<nav class="navbar fixed-top navbar-toggleable-sm navbar-inverse">
			<div class="col-sm-1 menu-button">
				<button type="button" id="sidebarCollapse" class="navbar-toggler white-text">
					<span class="oi oi-menu" title="menu" aria-hidden="true"></span>
				</button>
			</div>
			<div>
				<a class="navbar-brand mx-auto" href="#" style="margin-left: -130px;">
					<img src="assets/images/gtat_logo_2.png" height="100" alt="">
				</a>
			</div>
			<div class="col-sm-1">
				&nbsp;
			</div>
			<div id="sidebar">
				<div class="sidebar-header">
					<div id="dismiss">
						<span class="oi oi-x" title="Close" aria-hidden="true"></span>
					</div>
             </div>
				<ul class="list-unstyled components">
					<li class="active">
						<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
					</li>
					<li>
						<a href="#">Tour Packages</a>
					</li>
					<li>
						<a href="#">About Us</a>
					</li>
					<li>
						<a href="#">Contact Us</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="carousel-body">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<!-- Slide One - Set the background image for this slide in the line below -->
					<div class="carousel-item active" style="background-image: url('assets/images/hd1.jpg')">
						<div class="carousel-caption d-none d-md-block">
							<h3>First Slide</h3>
							<p>This is a description for the first slide.</p>
						</div>
					</div>
					<!-- Slide Two - Set the background image for this slide in the line below -->
					<div class="carousel-item" style="background-image: url('assets/images/hd2.jpg')">
						<div class="carousel-caption d-none d-md-block">
							<h3>Second Slide</h3>
							<p>This is a description for the second slide.</p>
						</div>
					</div>
					<!-- Slide Three - Set the background image for this slide in the line below -->
					<div class="carousel-item" style="background-image: url('assets/images/hd3.jpg')">
						<div class="carousel-caption d-none d-md-block">
							<h3>Third Slide</h3>
							<p>This is a description for the third slide.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<!-- Page Content -->
		<!-- <section class="py-5">
			<div class="container">
				<h1>Full Slider by Start Bootstrap</h1>
				<p>The background images for the slider are set directly in the HTML using inline CSS. The rest of the styles for this template are contained within the
				 <code>full-slider.css</code>
				 file.</p>
			</div>
		</section> -->

		<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">
				<img src="assets/images/gtat_logo_1.png" height="30" alt="">
				Golden Travels And Tour
			</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					 <span class="navbar-toggler-icon"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						 <a class="dropdown-item" href="#">Action</a>
						 <a class="dropdown-item" href="#">Another action</a>
						 <a class="dropdown-item" href="#">Something else here</a>
					</div>
					</li>
				</ul>
			</div>
		</nav> -->
		<!-- <h1>
			Hello World!
		</h1> -->
	   <!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js"><\/script>')</script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/holder.min.js"></script>

		<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

		<script type="text/javascript">
         $(document).ready(function () {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });

             $('#dismiss, .overlay').on('click', function () {
                 $('#sidebar').removeClass('active');
                 $('.overlay').fadeOut();
             });

             $('#sidebarCollapse').on('click', function () {
                 $('#sidebar').addClass('active');
                 $('.overlay').fadeIn();
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
     </script>

	</body>
</html>