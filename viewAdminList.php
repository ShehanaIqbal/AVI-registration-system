<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<?php require_once('./PHP/initialize.php'); ?>

<head>
	<title>Admin List</title>

	<style >
    		table{
    			border-collapse: collapse;
    			width: 95%;
    			color: #588c7e;
    			font-family: monospace;
    			font-size: 15px;
    			text-align: left;
    			margin: 2.5% 0 0 2.5%;
    		}
    		th{
    			background-color: #3d3d29;
    			color: white;
    			padding: 1%;
    		}tr{
    			background-color: #f2f2f2;
    		}
    		td{
    			height: 30px;
    		}
    	</style>

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
							<li><a style="color: #0b0b0b" href="homePage.php">Home</a></li>
							<li><a href="viewAdminList.php" class="active">View Admin List</a></li>
							<li><a style="color: #0b0b0b" href="viewGeneralUserList.php">View General Users</a></li>
                            <li><a style="color: #0b0b0b" href="LogOut.php">Logout</a></li>
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
    <div>
    	<table>
    		<tr>
    			<th>Admin</th>
    			<th>Branch</th>
    			<th>Registration No</th>
    			<th style='text-align: center;'>Status</th>
    			<th style='text-align: center;'>Edit</th>
    			<th style='text-align: center;'>Remove</th>
    		</tr>

    <?php
    if ($_SESSION['set']=true){
    	$adminList=$_SESSION['adminList'];
    	foreach ($adminList as $admin){
    		$fullName=$admin['name'];
    		$adminID=$admin['adminID'];
    		$branch=$admin['branchName'];
    		$regNo=$admin['regNo'];
    		if ($admin['isActive']=='1'){
    			$isActive="Active";
    		}else{
    			$isActive="Inactive";
    		}
    		echo "<tr>
    		<form class=\"box\" action=\"./PHP/manager.php\" method=\"post\">
    			<input type='hidden' name='name' value=". $fullName . ">
    			<input type='hidden' name='branch' value=". $branch . ">
    			<input type='hidden' name='regNo' value=". $regNo . ">
    						<td style='border: 1px solid #3d3d29; padding:0.5%;'>".$fullName."</td>
    			<td style='border: 1px solid #3d3d29; padding:0.5%;'>".$branch."</td>
    			<td style='border: 1px solid #3d3d29; padding:0.5%;'>".$regNo."</td>
    			<td style='text-align: center; border: 1px solid #3d3d29;'>".$isActive."</td>
    			<td style='text-align: center; border: 1px solid #3d3d29;'>" .  '<button name="edit_admin" type="submit" value="'.$adminID .'" >Edit Details</button>'.  "</td>
    			<td style='text-align: center; border: 1px solid #3d3d29;'>" .  '<button name="remove_admin" type="submit" value="'.$adminID .'" >Change State</button>'.  "</td>

    			</form>
    		</tr>";
    }
    	echo "</table>";
    }
     ?>
     </table>
    </div>

</body>
</html>