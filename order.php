<?php

if (!isset($_GET['p'])) {
	header('LOCATION: main.php');
	exit();
}else{
	session_start();
	$_SESSION["location"] = $_GET['p'];
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
		<script type="text/javascript">

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
				<div class="Profile-right">
					<a href="#small-dialog" class="sign-in popup-top-anim"> <i class="fa fa-user"></i></a> 
						<!-- modal -->
					<div id="small-dialog" class="mfp-hide">
						<div class="login-modal"> 	
							<div class="booking-info">
							   <h3><a href="main.html">W<span>a</span>t<span>e</span>r<span></span> <span>C</span>a<span>n</span></a></h3>
								
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
				<h3 style="text-align:center;padding:1%;"> <?php echo "Hello ".$_GET['p']."ians";?></h3>
				<img class="img-responsive centre" src="images/can.png" style="height:170px;margin:10% 0 0 35%">
				<h3 style="text-align:center;padding:1%;">20L</h3>
				
				
				  <div class="form-group">
				    <H4 style="text-align:center;padding:20px 0 10px 0;">Enter Number of Cans</H4>
				   	<div class="btn-group btn-group-justified" role="group" aria-label="...">
					  <div class="btn-group" role="group">
					    <button type="button" class="btn btn-info" id="minus"><span class="glyphicon glyphicon-minus" style="font-size:14px;" aria-hidden="true"></span></button>
					  </div>
					  <div class="btn-group" role="group">
					    <button type="button" class="btn btn-default" id="counter" style="padding:10px">2 L</button>
					  </div>
					  <div class="btn-group" role="group">
					    <button type="button" class="btn btn-info" id="plus"><span class="glyphicon glyphicon-plus" style="font-size:14px;" aria-hidden="true"></span></button>
					  </div>
					</div>
				  </div>
				  <div style="text-align:center;font-size:20px;">
						<H4 style="text-align:center;padding:20px 0 10px 0;">Select your suitable time.</H4>
						<span style="padding-right:10px">
						  <label class="radio-inline">
						    <input type="radio" style="width: 20px;height: 20px; margin-right:10px;" name="time" id="time" value="morning" checked>
						    10AM-1PM
						  </label>
						</span>
						<span style="border-left:1px solid black;padding-left:10px">
						  <label class="radio-inline">
						    <input type="radio" style="width: 20px;height: 20px; margin-right:10px;" name="time" id="time" value="afternoon">
						    5PM-9PM
						  </label>
						</span>
						

					</div>
					<hr>
				  <h1 id="priceCal" style="text-align:center;padding:10px">Rs. 60 </h1>
				  <hr>
				  <button type="button" id="valsubmit" name ="valsubmit" class="btn btn-primary">Submit</button>
				   <hr>
				
				<script type="text/javascript">
				
				$(document).ready(function(){
                window.count = 2;
                window.price = 60;
                window.timepro = document.getElementById("time").value;
                	
				  $("#minus").click(function(){
				  	count--;
				  	price = price-30;
				  	if(count >= 2){

				  	$("#counter").html(count+' L');
				  	$('#priceCal').html('Rs. '+price);
				  	
				  }else{
				  	$("#counter").html('Sorry');
				  	$('#priceCal').html("We Don't Provide");
				  	
				  }

				  });
				  $("#plus").click(function(){
				  	count++;
				  	price = price+30;
				  	$("#counter").html(count+' L');
				  	$('#priceCal').html('Rs. '+price);
				  });
				 $("#valsubmit").click(function(){
			       window.location.href = "validation.php?c=" + count+"&t="+timepro;  
			    });

				 
				});
				
				</script>
				
   <!-- //banner -->
</div>
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>