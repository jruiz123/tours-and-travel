<!doctype html>
<html lang="en">
	<head>
		<title>Golden Travels and Tour</title>
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
		<nav class="navbar fixed-top navbar-toggleable-sm navbar-inverse bg-gradient">
			<div class="col-xs-1 menu-button">
				<button type="button" id="sidebarCollapse" class="navbar-toggler white-text">
					<span class="oi oi-menu" title="menu" aria-hidden="true"></span>
				</button>
			</div>
			<div class="col-xs-10">
				<a class="navbar-brand mx-auto" href="index.php" style="margin-left: -130px;">
					<img id="home-logo" src="assets/images/gtat_logo_2.png" height="90" alt="">
				</a>
			</div>
			<div class="col-xs-1">
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
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="tour-packages.php">Tour Packages</a>
					</li>
					<li>
						<a href="about-us.php">About Us</a>
					</li>
					<li>
						<a href="contact-us.php">Contact Us</a>
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
					<!-- <div class="carousel-item active" style="background-image: url('assets/images/low_res/kawasan.jpg')"> -->
					<div class="carousel-item item-1 active">
						<div class="carousel-caption d-md-block">
							<p class="h5">Take a dip in the cold waters of the majestic Kawasan Falls.</p>
							<a href="tour-packages.php#cebu" class="btn btn-danger btn-lg">Check Details</a>
							<br /><br />
		            </div>
					</div>
					<div class="carousel-item" style="background-image: url('assets/images/low_res/island_hopping.jpg')">
						<div class="carousel-caption d-md-block">
							<p class="h5">Explore the colorful reefs hidden in the islands of Bohol.</p>
							<a href="tour-packages.php#cebu" class="btn btn-danger btn-lg">Check Details</a>
							<br /><br />
            		</div>
					</div>
					<div class="carousel-item" style="background-image: url('assets/images/low_res/chocolate_hills.jpg')">
						<div class="carousel-caption d-md-block">
							<p class="h5">Visit the magnificient Chocolate Hill of Bohol.</p>
							<a href="tour-packages.php#cebu" class="btn btn-danger btn-lg">Check Details</a>
							<br /><br />
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
  	<footer class="footer fixed-bottom ">
			<div class="row">
				<div class="col-xs-5 col-sm-4 offset-sm-2 offset-md-2 btn-cebu-package">
					<a href="tour-packages.php#cebu" class="btn btn-outline-light btn-block btn-golden">
						Cebu Tour Packages
					</a>
				</div>
				<!-- <div class="col col-xs-5"> -->
				<div class="col-xs-5 col-sm-4">
					<a href="tour-packages.php#bohol" id="footer-link" class="btn btn-outline-light btn-block btn-golden">
						Bohol Tour Packages
					</a>
				</div>
			</div>
			<div class="break"></div>
		</footer>
		
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