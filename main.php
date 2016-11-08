<!-- 
Author : Sugam Malviya
project url : https://github.com/Sugamm/wateranna/ 
 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" ){
	$location = $_POST['location'];
	header("location:order.php?p=".$location);
	exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Water Anna</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Water Anna" />
<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta charset utf="8">
<!--font-awsome-css-->
     <link rel="stylesheet" href="css/font-awesome.min.css"> 
<!--bootstrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--custom css-->
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--component-css-->
	<script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!--script-->
	<script src="js/modernizr.custom.js"></script>
    <script src="js/bigSlide.js"></script>
           <script>
				$(document).ready(function() {
				$('.menu-link').bigSlide();
				});
     </script>
<!-- web-fonts -->  
  <link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<!-- pop-up-box -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	    <script>
			$(document).ready(function() {
				$('.popup-top-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});																							
			}); 
		</script>
<!--//pop-up-box -->
    </head>
<body>
<div class="body-back">
	<div class="masthead pdng-stn1">
		<div id="menu" class="panel" role="navigation">
			<div class="wrap-content">
				<div class="profile-menu text-center">
					<span class="glyphicon glyphicon-map-marker" style="font-size:30px; color:#fff;" aria-hidden="true"></span>
					<!-- <img class="border-effect" src="images/logo.png" alt=" "> -->
						<h3>MENU</h3>

						<div class="pro-menu">
							<div class="logo">
								<li><a class=" link link--yaku  active" href="main.html"><span>H</span><span>o</span><span>m</span><span>e</span></a></li>
								<li><a class=" link link--yaku" href="about.html"><span>A</span><span>b</span><span>o</span><span>u</span><span>t</span></a></li>
								<li><a class=" link link--yaku" href="short-codes.html"><span>S</span><span>e</span><span>r</span><span>v</span><span>i</span><span>c</span><span>e</span><span>s</span></a></li>
								<li><a class=" link link--yaku" href="destination.html"><span>D</span><span>e</span><span>s</span><span>t</span><span>i</span><span>n</span><span>a</span><span>t</span><span>i</span><span>o</span><span>n</span><span>s</span></a></li>
								<li><a class=" link link--yaku" href="contact.html"><span>C</span><span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span></a></li>
							</div>
				

						</div>
				</div>
			</div>
		</div>
		<div class="phone-box wrap push" id="home">
			<div class="menu-notify">
				<div class="profile-left">
					<a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
				</div>
				<div class="Profile-mid">
					<h5 class="pro-link"><a href="main.html">Water Anna</a></h5>
				</div>
				<div class="Profile-right">
					<a href="#small-dialog" class="sign-in popup-top-anim"> <i class="fa fa-user"></i></a> 
						<!-- modal -->
					<div id="small-dialog" class="mfp-hide">
						<div class="login-modal"> 	
							<div class="booking-info">
							   <h3><a href="main.html">W<span>a</span>t<span>e</span>r<span></span> <span>A</span>n<span>n</span>a</a></h3>
								
							</div>
							<div class="login-form">
								<form action="#" method="post">
									<p>Your mobile</p>
									<div class="input-group">
								      <div class="input-group-addon">+91 </div>
								      <input type="number" class="form-control" id="" placeholder="Enter Your Number">
								      
								    </div>
									<a href="#small-dialog1"><input type="submit" value="CONTINUE"></a>	
								</form>
							</div> 
						</div>
					</div>
					<!-- //modal --> 
						<!-- modal-two -->
					<div id="small-dialog1" class="mfp-hide">
						<div class="login-modal">  
							<div class="booking-info">
							    <h3><a href="main.html">W<span>a</span>t<span>e</span>r<span></span> <span>C</span>a<span>n</span></a></h3>
								
							</div>
							<div class="login-form signup-form">
								<form action="#" method="post">
									<p>Verify Mobile</p>
									<input type="text" name="text" placeholder="Code" required=""/>	
									
									<input type="submit" value="Sign Up">		
								</form> 
							</div> 
						</div>
					</div>
					<!-- //modal-two --> 
					
				</div>
				<div class="clearfix"></div>
			</div> 
<!-- banner -->
   <div class="details-grid">
				<div class="details-shade">
						<div class="details-right">
							<span class="glyphicon glyphicon-map-marker" style="font-size:70px; color:#fff;" aria-hidden="true"></span>
							<!-- <img src="images/logo.png" alt=" "> -->
							<h3>Welcome To Water Anna</h3>
							<h4>You’re going to like us.</h4>
								
							
						</div>
						<div class="banner_search">
								<form method="post">
									<div class="form-group">
									   <input type="text" class="form-control" id="city" placeholder="Chennai" value="chennai">
									</div>
									<select class="form-control" id="place" name="location"  required>
										<option value="">Select Your Place</option>
								        <option value="abode">Abode</option>
								        <option value="vgn">VGN</option>
								        <option value="safaa">Safaa</option>
								        <option value="estensia">Estancia</option>
								        <option value="akshay">Akshay</option>
								    </select>
								    <div class="form-group">
									    <div class="" >
									      <button type="submit" class="btn btn-primary">CONTINUE</button>
									    </div>
									  </div>
									
								</form>
						</div> 

				
				</div>
			</div>
		<div class="w3agile banner-bottom">
			<h3>Our Place</h3>
			<hr>
				<ul>
				    <li><a href="flight.html" class="hvr-radial-out"><i class="fa fa-bed" aria-hidden="true"></i></a><h6>Aborde</h6></li>
					<li><a href="train.html" class="hvr-radial-out"><i class="fa fa-bed" aria-hidden="true"></i></a><h6>VGN</h6></li>
					<li><a href="bus.html" class="hvr-radial-out"><i class="fa fa-bed" aria-hidden="true"></i></a><h6>Akshay</h6></li>
					<li><a href="hotel.html" class="hvr-radial-out"><i class="fa fa-bed" aria-hidden="true"></i></a><h6>Safaa</h6></li>
					<li><a href="hotel.html" class="hvr-radial-out"><i class="fa fa-bed" aria-hidden="true"></i></a><h6>Estancia</h6></li>
				</ul>
				<hr>
			</div>
   <!-- //banner -->
</div>
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>