<!DOCTYPE HTML>
<html>
<head>
<title>AVI registration home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Web application integrated to the AVI system which is developed for automatic vehicle number plate recognition" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.8.3.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!---End-smoth-scrolling---->
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="header-top">
				<div class="logo">
					<a style="color: #0b0b0b" href="index.html">A V I</a>
				</div>
				<div class="top-menu">
					<span class="menu"><img src="images/nav.png" alt=""/> </span>
						<ul>
							<li><a  href="index.html" class="active">home</a></li>
							<li><a style="color: #0b0b0b" href="about.php">about</a></li>
						</ul>
				</div>
				<!--script-nav-->
						 <script>
						 $("span.menu").click(function(){
						 $(".top-menu ul").slideToggle("slow" , function(){
						 });
						 });
						 </script>
					<div class="clearfix"></div>
				</div>
				</div>
					 <!-- Slider-starts-Here -->
	 <script src="js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			pager:true,
		  });
		});
		
	   </script>
	 <div class="slider">
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">

					<div class="slid banner1">
						  <div class="caption">
								<h3 style="color: #0b0b0b">AVI USER REGISTRATION SYSTEM</h3>
								<p style="color: #0b0b0b">This application is used to register admins and users to the AVI system</p>
							  <input onclick="window.location='login.php'"; type="submit" style="padding-left: 30px; padding-right: 30px" value="LOGIN">
						  </div>
					</div>
				
				
					 <div class="slid banner2">	
						  <div class="caption">
							  <h3 style="color: #0b0b0b">AVI USER REGISTRATION SYSTEM</h3>
								<p style="color: #0b0b0b">This application is used to register admins and users to the AVI system</p>
							  <input onclick="window.location='login.php'"; type="submit" style="padding-left: 30px; padding-right: 30px" value="LOGIN">
						  </div>
					 </div>
				
				
					<div class="slid banner3">	
						<div class="caption">
							<h3 style="color: #0b0b0b">AVI USER REGISTRATION SYSTEM</h3>
							<p style="color: #0b0b0b">This application is used to register admins and users to the AVI system</p>
							<input onclick="window.location='login.php'"; type="submit" style="padding-left: 30px; padding-right: 30px" value="LOGIN">
						</div>
					</div>
				
			  </ul>
		 </div>
	 </div>
	 </div>
	 </div>
				<!--footer-->
					<div class="footer-section">
						<div class="container">
							<div class="footer-top">
								<p>Copyright &copy; 2015 <span>A V I</span> All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
							</div>
							<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
			</div>
</body>
</html>