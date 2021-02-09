

<!DOCTYPE html>
<html>
<head>
<title>Freerecharge</title>
<?php
session_start();?>
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
<!--animate-->
<link href="home/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="home/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
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
<form action="home.html" method="post">
<div class="banner page-head">
	<div class="header">
			<div class="logo">
			   <h1><a href="home.php"><i><img src="home/images/cell.png" alt=" " /></i>Freerecharge</a></h1>
			</div>
			<div class="top-nav">
				<span class="menu"><img src="{% static 'plan/images/menu.png' %}" alt=" " /></span>
				<ul class="nav1">
					<li><a href="home.php"  data-target="home.php">Home</a></li>
					<li><a href="profile.php"  data-target="profile.php">Profile</a></li>
					<li><a href="logout.php"  data-target="logout.php">Logout</a></li>
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

			<div class="clearfix"> </div>
	</div>

</div>
<div class="banner-bottom">
	<div class="container">
		<div class="view_plans">
			<h4 class="view_title">Our Latest Recharge Plans</h4>

			<div class="clearfix"> </div>
			<script src="home/js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});

				</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="col-md-3 recharge-left">
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Best Plans for you</span></li>
									  </ul>
								</div>
								<div class="col-md-9 recharge-right">
									<div class="price-gds">
										<div class="rchge-one">
											<h3>Price</h3>
										</div>
										<div class="rchge-two">
											<h3>Talktime</h3>
										</div>
										<div class="rchge-three">
											<h3>Description</h3>
										</div>
										<div class="rchge-four">
											<h3>Validity</h3>
										</div>
										<div class="clearfix"></div>
									</div>
									<!-- full talktime -->

											<div class="recharge_plans">
                                             <?php

$operator=$_SESSION['operator']; //Opeartor 
try {
    $conn =new PDO('mysql:host=127.0.0.1;dbname=urvish_php','root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
    $sql22=$conn->query("select price,talktime,description,validity from plans where operator='$operator'");
    while($row=$sql22->fetch()) {
                                                                            echo"        <div class='validity'>
													<a href='#'>
														<div class='rchge-one'>
															<p>". $row['price']."</p>
														</div>
														<div class='rchge-two'>
															<p>". $row['talktime']."</p>
														</div>
														<div class='rchge-three'>
															<p>". $row['description']."</p>
														</div>
														<div class='rchge-four'>
															<p>". $row['validity']."</p>
														</div>
														<div class='clearfix'></div>
													</a>
												</div>";
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    ?>

												

									<!-- //full talktime -->

									</div>
								</div>
							</div>
						</div>
		</div>
	</div>
			<!-- //signup -->
<div class="content-bottom-two">
		<div class="col-md-6 content-left text-center">
			<img src="home/plan/images/bbb5.png" alt="" />
		</div>
		<div class="col-md-6 content-right text-center">
			<img src="home/plan/images/bbb3.png" alt="" />
		</div>
		<div class="clearfix"></div>
		<div class="btm-pos">
			<h3>Exclusive Service</h3>
			<p> Your money is yours until you got paid for it. </p>
		</div>
</div>
<div class="footer-top">

</div>

<div class="footer">
	<div class="container">
		<h2><a href="home.php">Freerecharge</a></h2>
		<p>© 2020 Freerecharge payments Ltd.  All Rights Reserved </p>

	</div>
</div>
<!-- for bootstrap working -->
		<script src="home/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</form>
</body>
</html>
