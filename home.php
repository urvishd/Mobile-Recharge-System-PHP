
<!DOCTYPE html>
<html>
<head>
<title>Freecharge-Mobile Recharge</title>

<link href="home/css/bootstrap.css" rel="stylesheet">
<link href="home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Recharge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->

<script type="text/javascript" src="home/js/jquery.min.js"></script>
<!-- js -->
								<script>
									$(document).ready(function () {
										//Initialize tooltips
										$('.nav-tabs > li a[title]').tooltip();
										
										//Wizard
										$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

											var $target = $(e.target);
										
											if ($target.parent().hasClass('disabled')) {
												return false;
											}
										});

										$(".next-step").click(function (e) {

											var $active = $('.wizard .nav-tabs li.active');
											$active.next().removeClass('disabled');
											nextTab($active);

										});
										$(".prev-step").click(function (e) {

											var $active = $('.wizard .nav-tabs li.active');
											prevTab($active);

										});
									});

									function nextTab(elem) {
										$(elem).next().find('a[data-toggle="tab"]').click();
									}
									function prevTab(elem) {
										$(elem).prev().find('a[data-toggle="tab"]').click();
									}
								</script>
</head>
<body>

<div class="banner">
	<div class="header">	
			<div class="logo">
                            <h1><a href="#"><i><img src="home/images/cell.png" alt=" " /></i>Freerecharge</a></h1>
			</div>
			<div class="top-nav">
                            <span class="menu"><img src="home/images/menu.png" alt=" " /></span>
				<ul class="nav1">
					<li><a href="#" ><?php 
                                        session_start();
                                                unset($_SESSION['ticket_num']);
                                        echo "Hello ".$_SESSION['Fname'];?></a></li>
					&nbsp;&nbsp;&nbsp;
                                        <li><a href="profile.php"  data-target="profile.php">Profile</a></li>
                                        <li><a href="Transaction.php"  data-target="Transaction.php">Transactions</a></li>
                                        <li><a href="help.php"  data-target="help.php">Help</a></li>
                                        <li><a href="logout.php"  data-target="Logout.php">Logout</a></li>
				</ul>
						<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.nav1" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
						<!-- /script-for-menu -->
			</div>
			
				
			
			<div class="clearfix"> </div>
	</div>
	<div class="container">
		<div class="banner-info">
			<h3>Hassle Free Payments within few Steps</h3>
		</div>
		<div class="buttons">
			<ul>
                            <li ><a class="hvr-shutter-in-vertical" href="home1.php"  data-target="home1.html">Mobile Recharge</a></li>
				
			</ul>
			
		</div>
	</div>
</div>


<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>RECHARGE IN <span>3 SIMPLE STEPS</span></h3>
			</div>
			<div class="col-md-3 coupons-gd">
                            <h4><span><img src="home/images/web.png" alt=" " /></span></h4>
				<p>LOGIN TO YOUR ACCOUNT</p>
			</div>
			<div class="col-md-3 coupons-gd">
                            <h4><span><img src="home/images/credit.png" alt=" " /></span></h4>
				<p>ENTER RECHARGE DETAILS</p>
			</div>
			<div class="col-md-3 coupons-gd">
                            <h4><span><img src="home/images/security.png" alt=" " /></span></h4>
				<p>MAKE PAYMENT</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="content-bottom-two">
		<div class="col-md-6 content-left text-center">
                    <img src="home/images/bbb5.png" alt="" />
		</div>
		<div class="col-md-6 content-right text-center">
                    <img src="home/images/bbb3.png" alt="" />
		</div>
		<div class="clearfix"></div>
		<div class="btm-pos">
			<h3>Exclusive Offers</h3>
			<p> Experiance hassle free Payment on our platform.
				Our aim is User privacy and provide secure payment facility.</p>
		</div>
</div>
<div class="footer-top">
	<div class="container">
		<div class="foo-grids">
			<div class="col-md-3 foo-grid">
				<h3>MOBILE RECHARGES</h3>
				<ul>
					<li><a href="#">Airtel</a></li>
					<li><a href="#">Jio</a></li>
					<li><a href="#">BSNL</a></li>
					<li><a href="#">Idea</a></li>
					<li><a href="#">Vodafone</a></li>
				</ul>
			</div>
			

			<div class="col-md-3 foo-grid">
				<h3>PAYMENT OPTIONS</h3>
				<ul>
					<li>Credit Cards</li>
					<li>Debit Cards</li>
					<li>Net Banking</li>
					
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>	
</div>

<div class="footer">
	<div class="container">
		<h2>Freecharge</h2>
		<p>© 2020 Freerecharge. All Rights Reserved | Designed by Urvish</p>
		<ul>
			<li><a class="face1" href="https://www.facebook.com/"></a></li>
			<li><a class="face4" href="https://twitter.com/"></a></li>
		</ul>
	</div>
</div>
			
			
			
<!-- for bootstrap working -->
		<script src="home/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>