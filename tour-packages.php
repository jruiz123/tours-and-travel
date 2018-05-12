<!doctype html>
<html lang="en">
	<head>
		<title>Golden Travels and Tour | Tour Packages</title>
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
	<body style="background:linear-gradient(#F34646,#AF3AEB);">
		<nav class="navbar fixed-top navbar-toggleable-sm navbar-inverse">
			<div class="col-xs-1 menu-button">
				<button type="button" id="sidebarCollapse" class="navbar-toggler white-text">
					<span class="oi oi-menu" title="menu" aria-hidden="true"></span>
				</button>
			</div>
			<div class="col-xs-10">
				<a class="navbar-brand mx-auto" href="index.php" style="margin-left: -130px;">
					<img src="assets/images/gtat_logo_2.png" height="90" alt="">
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
					<li>
						<a href="index.php">Home</a>
					</li>
					<li class="active">
						<a href="tour-packages.php">Tour Packages</a>
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
		<div class="row black">
			<h1>Hello World!</h1>
		</div>




		<footer class="footer fixed-bottom red">
			<div class="row">
				<div class="col col-xs-1"></div>
				<div class="col col-xs-5">
					<a href="" id="footer-link" class="btn btn-outline-light btn-sm btn-block">
						Cebu Tour Packages
					</a>
				</div>
				<div class="col col-xs-5">
					<a href="" id="footer-link" class="btn btn-outline-light btn-sm btn-block">
						Bohol Tour Packages
					</a>
				</div>
				<div class="col col-xs-1"></div>
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