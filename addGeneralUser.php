<!DOCTYPE HTML>
<html>
<head>
	<title>AVI registration</title>
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
					<li><a style="color: #0b0b0b" href="index.php">home</a></li>
					<li><a style="color: #0b0b0b" href="about.php">about</a></li>
					<li><a style="color: #0b0b0b" href="addAdmin.php" >Add New Admin</a></li>
					<li><a class="active" href="addGeneralUser.php">Add General User</a></li>
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
	<div class="banner">
		<div class="bnr2">
		</div>
	</div>
</div>
<div class="content">
	<div class="mail">
		<!-- container -->
		<div class="container">
			<h3>Add A General User</h3>
		</div>
		<div class="col-md-6 contact-form">
				<form action="./PHP/manager.php" method="post">
				<input type="text" name='fullName' placeholder="Full Name" required="">
				<input type="text" name='regNo' placeholder="Registration No" required="">
				<select name="branch" id="categorylist" required>
                						<option name='matara' value="1">Matara</option>
                						<option name='galle'value="2">Galle</option>
                						<option name='hambantota'value="3">Hambantota</option>
                						<option name='moratuwa'value="4">Moratuwa</option>
                					</select>
				<input type="text" name='username' placeholder="Username" required="">
				<input type="text"name='password' placeholder="Password" required="">
				<input type="submit" name='add_general_user' value="SEND">
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //container -->
<!-- //mail -->

<!--footer-->
<div class="footer-section">
	<div class="container">
		<div class="footer-top">
			<p>Copyright &copy; 2015 <span>Car Racing.</span> All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
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