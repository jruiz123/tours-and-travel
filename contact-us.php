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
<!--         <a class="navbar-brand mx-auto" href="index.php">
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
        <a href="index.php">
          <img id="page-logo" src="assets/images/gtat_logo_2.png" height="140" alt="">
        </a>
      </div>
      <br />
    </section>
    
    <div class="container">
      <div class="row grey-text text-darken-3">
        <div class="col-sm-12">
          <p class="h1">Contact Us</p>
          <p class="h4">Contact us for your inquiries and reservations</p>
        </div>
        <div class="col-md-6">
          <p>Please use the form below to make inquiries or reservations. All your information is safe and secure with us. Please read our <a href="#">privacy policy</a> for more details.</p>
          <p>If you don't want to use the form, you can call/text us at +639162292783 (Globe). You can also e-mail us at goldentravelsandtour@gmail.com</p>
        </div>
        <div class="col-md-6 card">
          <form>
            <div class="form-group">
              <label for="name" class="control-label"><strong>Full Name:</strong></label>
              <input type="text" class="form-control" id="name" placeholder="Your Name" required/>
            </div>
            <div class="form-group">
              <label for="email" class="control-label"><strong>Email:</strong></label>
              <input type="email" class="form-control" id="email" placeholder="Your Email" required/>
            </div>
            <div class="form-group">
              <label for="phone" class="control-label"><strong>Phone:</strong></label>
              <input type="mobile" class="form-control" id="phone" placeholder="Your Phone Number" required/>
            </div>
            <div class="form-group">
              <label for="address" class="control-label"><strong>Address:</strong></label>
              <input type="mobile" class="form-control" id="address" placeholder="Pick Up Address or Hotel Name" required/>
            </div>
            <div class="form-group">
              <label for="subject" class="control-label"><strong>Subject:</strong></label>
              <select class="form-control" id="subject">
                <option class="disabled">--Select One--</option>
                <option>To Hire Our Service</option>
                <option>To Ask A Question</option>
                <option>To Report Problem with Website</option>
                <option>Others</option>
              </select>
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea class="form-control" id="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            <div class="break"></div>
          </form>
        </div>
      </div>
    </div>
    <div class="break"></div>
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