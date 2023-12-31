<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Home</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
			<header id="header">
				<div class="header-top">
					<div class="container">
				  		<div class="row justify-content-center">
						      <div id="logo">
						      <!--  <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>-->
						      </div>
				  		</div>
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-center d-flex">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="agtHome.php">Profile</a></li>
						  <li><a href="logout.php">Logout</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->
					</div>
				</div>
			</header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-12 banner-content">
							<h1 class="text-white">
							&nbsp; &nbsp; &nbsp; &nbsp; <span id="uid"></span><br><br>
				</h1>
							
							<p class="text-white">

						<!--	<a href="#" class="primary-btn text-uppercase">Check Our Menu</a>-->
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start menu-area Area -->
            <br><br>
				 <!--&nbsp; &nbsp; Name &nbsp; &nbsp; : &nbsp; &nbsp; &nbsp; &nbsp; <span id="uname"></span><br><br>-->
				 <script>

			function getCookie(cname) {
				var name = cname + "=";
				var ca = document.cookie.split(';');
				for(var i = 0; i < ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) == ' ') {
						c = c.substring(1);
					}
					if (c.indexOf(name) == 0) {
						return c.substring(name.length, c.length);
					}
				}
				return "";
			}
			function convName(uname) {
				var name = ""
				for (var i = 0; i < uname.length; i++) {
					if (uname[i]=='+') {
						name = name+' ';
					}
					else {
						name = name+uname[i];
					}
				}
				return name;
			}
					uid = getCookie("user_id").replace('%40','@');
					dispId = document.getElementById('uid');
					dispId.textContent = uid;
				</script>
				<br>
			</div>


				<?php

						extract($_POST);
						$Id_req = $_COOKIE["user_id"];

						$conn = mysqli_connect("localhost","root","");
						mysqli_select_db($conn,"dbms_project");

						echo "
							<script>
							var h1 = document.querySelectorAll('#id_req_ip');
							for (i = 0, len = h1.length; i < len; i++) { 
							    h1[i].setAttribute('value','".$Id_req."');
							}
							</script>
							";
						$query = "SELECT Order_No as o, Customer_First_Name as r, Customer_Phone_No as a, Restaurant_Name as p, Restaurant_Location as d from Customer NATURAL JOIN foodorder NATURAL JOIN Delivery NATURAL JOIN Agents NATURAL JOIN Restaurant WHERE Agent_Vehicle_No = '$Id_req';";
						
					    $res = mysqli_query($conn,$query);
					    echo "<h2> &nbsp; &nbsp; Orders Received</h2><br>";
					    echo "<div class='container'><table cellpadding = 25>
					    		<tr>
					    			<th>Order_No</th>
					    			<th>Customer_Name</th>
					    			<th>Customer_Phone_No</th>
					    			<th>Restaurant_Name</th>
					    			<th>Restaurant_Location</th>
					    		</tr>";
					    while ($row = mysqli_fetch_assoc($res)) {
					    	echo "<tr>
					    			<td>".$row['o']."</td>
					    			<td>".$row['r']."</td>
					    			<td>".$row['a']."</td>
					    			<td>".$row['p']."</td>
					    			<td>".$row['d']."</td>
					    		</tr>";
					    }
					    echo "</table></div><br>";
			?>
			<!-- start footer Area -->
			<footer class="footer-area">
				<div class="footer-widget-wrap">
					<div class="container">
						<div class="row section-gap">
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Opening Hours</h4>
									<ul class="hr-list">
										<li class="d-flex justify-content-between">
											<span>Monday - Friday</span> <span>08.00 am - 10.00 pm</span>
										</li>
										<li class="d-flex justify-content-between">
											<span>Saturday</span> <span>08.00 am - 10.00 pm</span>
										</li>
										<li class="d-flex justify-content-between">
											<span>Sunday</span> <span>08.00 am - 10.00 pm</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4  col-md-6 col-sm-6">

							</div>
				
						</div>
					</div>
				</div>
				<div class="footer-bottom-wrap">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between align-items-center">
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
 			<script src="js/jquery-ui.js"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
            <script src="js/isotope.pkgd.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
