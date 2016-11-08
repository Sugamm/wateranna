<?php
require 'clockworksms/class-Clockwork.php';
include ('phpcode/dbconfig.php');
$orderid = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST" ){
		$to = $_POST['mobile'];
		$digits = 4;
		$code = rand(pow(10, $digits-1), pow(10, $digits)-1);
		$API_KEY = '19b8c15afdb982d333f09440c97a192a02744e7b';
		try
		{
		    // Create a Clockwork object using your API key
		    $clockwork = new Clockwork( $API_KEY );

		    // Setup and send a message
		    $message = array( 'to' => $to, 'message' => 'Use Code'.$code.' to verifying your number on WaterCan.' );
		    $result = $clockwork->send( $message );

		    // Check if the send was successful
		    if($result['success']) {
		        if ($res) {
					header("location: verify.php?uid=".$orderid."&phone=".$to."&code=".$code);
					exit();
				}
		    } else {
		        echo 'Message failed - Error: ' . $result['error_message'];
		    }
		}
		catch (ClockworkException $e)
		{
		    echo 'Exception sending SMS: ' . $e->getMessage();
		}
		
		echo $code;
		
	} 
?>
<!DOCTYPE html>

<html lang="en">
<head>
<title>Water Can</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Water Can" />
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
					<h5 class="pro-link"><a href="main.html">Water Can</a></h5>
				</div>
				
				<div class="clearfix"></div>
			</div> 
<!-- banner -->
			<div class="booking-info" style="margin-top:10%; text-align:center;">
				<span class="glyphicon glyphicon-map-marker" style="font-size:70px; color:#2ad2c9;" aria-hidden="true"></span>
			   <h3><a href="main.html">W<span>a</span>t<span>e</span>r<span></span> <span>C</span>a<span>n</span></a></h3>
				
			</div>
			<div class="login-form" style="padding-bottom:72%">
				<form method="post" action=""#>
					<p>Your mobile</p>
					<div class="input-group">
				      <div class="input-group-addon">+91 </div>
				      <input type="number" class="form-control" id="mobile" name="mobile"  required onkeyup="check(); return false;" required="">
				      
				    </div>
				    <div id="message"></div>
					<input type="submit" value="CONTINUE">
				</form>
			</div> 
			<script type="text/javascript">
				function check()
				{

				    var pass1 = document.getElementById('mobile');


				    var message = document.getElementById('message');

				   var goodColor = "#0C6";
				    var badColor = "#f12808";

				    if(mobile.value.length!=10){

				        // mobile.style.backgroundColor = badColor;
				        // message.style.color = badColor;
				        message.innerHTML = '<p style="color:'+badColor+'">required 10 digits, match requested format!</p>'
				    }else{
				    	// message.style.color = goodColor;
				        message.innerHTML = '<p style="color:'+goodColor+';">Looking Good</p>'
				    }

					}
			</script>
			
				
   <!-- //banner -->
</div>
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>