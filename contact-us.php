<!doctype html>
<html lang="en">
	<head>
		<title>Golden Travels and Tour | Contact Us</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   <!-- CSS -->
	   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	   <link rel="stylesheet" href="assets/css/style.css">
	   <link rel="stylesheet" href="assets/css/colors.css">
	   <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.css">
		<link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">

		<link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
      
      <!-- Browser Tab Icon -->
      <link rel="icon" type="text/css" href="assets/images/gtat_logo_1.png">

	</head>
	<body>
		<nav class="navbar navbar-toggleable-sm navbar-inverse fixed-top grey darken-3">
			<div class="col-xs-1">
				<button type="button" id="sidebarCollapse" class="navbar-toggler white-text">
					<span class="oi oi-menu" title="menu" aria-hidden="true"></span>
				</button>
			</div>
			<div class="col-xs-10">
        <!-- <a class="navbar-brand mx-auto" href="index.php">
					<img id="page-logo" src="assets/images/gtat_logo_2.png" height="40" alt="">
				</a> -->
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
					<li>
						<a href="tour-packages.php">Tour Packages</a>
					</li>
					<li>
						<a href="about-us.php">About Us</a>
					</li>
					<li class="active">
						<a href="#">Contact Us</a>
					</li>
				</ul>
			</div>
		</nav>
    <section class="text-center grey darken-2">
      <br /><br /><br />
      <div class="container">
        <img id="page-logo" src="assets/images/gtat_logo_2.png" height="140" alt="">
      </div>
      <br />
    </section>

    <div class="container">
      <div class="row grey-text text-darken-3">
        <p class="h1">Contact Us</p>
        <br /><br /><br /><br />
        <p class="h4">Contact us for your inquiries and reservations</p>
        <p>Please use the form below to make inquiries or reservations. All your information is safe and secure with us. Please read our <a href="#">privacy policy</a> for more details.</p>
        <p>If you don't want to use the form, you can call/text us at +639162292783 (Globe). You can also e-mail us at goldentravelsandtour@gmail.com</p>
        
        <form>
          <input type=""/>
        </form>
        
        
        
      </div>
    </div>

	   <footer class="text-muted">
	      <div class="container">
	      	<p class="float-right">
	         	<a href="#" class="grey-text text-darken-2"><span class="oi oi-chevron-top" title="chevron top" aria-hidden="true"></span>&nbsp;Back to top</a>
	      	</p>
	      	<p>&copy; All Rights Reserved 2018</p>
	      </div>
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