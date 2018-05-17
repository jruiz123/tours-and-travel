<!doctype html>
<html lang="en">
	<head>
		<title>Golden Travels and Tour | About Us</title>
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
					<li class="active">
						<a href="#">About Us</a>
					</li>
					<li>
						<a href="contact-us.php">Contact Us</a>
					</li>
				</ul>
			</div>
		</nav>
    <section class="text-center grey darken-2">
      <br /><br /><br />
      <div class="container">
        <a href="index.php">
          <img id="page-logo" src="assets/images/gtat_logo_2.png" height="140" alt="">
        </a>
      </div>
      <br />
    </section>

    <div class="container">
      <div class="row grey-text text-darken-3">
        <h1>About Golden Travels and Tour</h1>
        <p>Lorem ipsum dolor sit amet, et vis quis soluta perpetua. An utinam iisque qualisque mea, ei vel unum iusto consequuntur. Ad nec magna errem. Rebum diceret admodum at sea, in dolorum consectetuer comprehensam mei. Te quo euismod sensibus comprehensam, eu vidit adipisci prodesset vel, quo ut esse vocent. Suscipit recusabo dissentiunt at nam. Alienum iracundia pri an. Duo et officiis mediocrem, qui ex tota veniam. Per ad probo inani, odio mazim vix cu.</p>
        <p>Nobis periculis argumentum eu vix. Solum mucius epicurei mei at. Inani aperiri quaestio mel cu, simul percipitur eu eum. Pro te novum nullam consetetur.</p>
        <p>Lorem ipsum dolor sit amet, et vis quis soluta perpetua. An utinam iisque qualisque mea, ei vel unum iusto consequuntur. Ad nec magna errem. Rebum diceret admodum at sea, in dolorum consectetuer comprehensam mei. Te quo euismod sensibus comprehensam, eu vidit adipisci prodesset vel, quo ut esse vocent. Suscipit recusabo dissentiunt at nam. Alienum iracundia pri an. Duo et officiis mediocrem, qui ex tota veniam. Per ad probo inani, odio mazim vix cu.</p>
        <p>Nobis periculis argumentum eu vix. Solum mucius epicurei mei at. Inani aperiri quaestio mel cu, simul percipitur eu eum. Pro te novum nullam consetetur.</p>p
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