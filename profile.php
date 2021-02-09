
<!DOCTYPE html>
<html>
<head>
<title>Your Profile</title>
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
<!--animate-->
<link href="home/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="home/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
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
    

<div class="banner page-head">
	<div class="header">	
			<div class="logo">
			   <h1><a href="home.html"><i><img src="home/images/cell.png" alt=" " /></i>Freerecharge</a></h1>
			</div>
			<div class="top-nav">
				<span class="menu"><img src="images/menu.png" alt=" " /></span>
				<ul class="nav1">
                                    <li><a href="home.php"  data-target="home.php">Home</a></li>
                                    <li><a href="Transaction.php"  data-target="Transaction.php">Transactions</a></li>
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
		<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										
										 
							<div class="clearfix"> </div>
						</ul>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<div class="set-content">
	<div class="container">
		<h4 class="view_title">PROFILE SETTINGS</h4>
							<div class="bs-example bs-example-tabs orders-tab" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Personal info</a></li>
								  <li role="presentation"><a href="#return" role="tab" id="return-tab" data-toggle="tab" aria-controls="return">Change Password</a></li>
								</ul>
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tabs-para tab-pane fade in active" id="home" aria-labelledby="home-tab">
										<div class="profile-gd">
											<ul class="pro-left">
                                                                                            
                                                                                            
                                                                                       
												<li>Name</li>
												<li>Gender</li>
												<li>Mobile</li>
												<li>Email</li>
											</ul>
											<ul class="pro-right">
                                                                                            <?php
                                                                                            
                                                                                            $username=$_SESSION['user_mobile'];
                                                                                            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=urvish_php','root','');
                                                                                           
                                                                                            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                                                                                            $sql20=$dbhandler->query("select Mobile,Gender,Name,Email from customer where Mobile='$username' ");
                                                                                            while($r=$sql20->fetch())
                                                                                            {
                                                                                                $name1=$r['Name'];
                                                                                                $mailid=$r['Email'];
                                                                                                $gender=$r['Gender'];
                                                                                            }
                                                                                            
                                                                                           echo '<li>:';
                                                                                            echo $name1;
                                                                                            echo '</li>';
                                                                                            echo '<li>:';
                                                                                            echo $gender;
                                                                                            echo '</li>';
                                                                                            echo '<li>:';
                                                                                            echo $username;
                                                                                            echo '</li>';
                                                                                            echo '<li>:';
                                                                                            echo $mailid;
                                                                                            echo '</li>';?>
												
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								  <div role="tabpanel" class="tabs-para tab-pane fade" id="return" aria-labelledby="return-tab">
									<div class="profile-gd">
											<form action="Post7.php" method="post">
												<div class="tab-for-sett">				
													<h5>old password</h5>													
                                                                                                        <input type="password" name='pass1' value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="" minlength="5">
													<h5>new password</h5>													
                                                                                                        <input type="password" value="" name='pass2' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="" minlength="5" maxlength="13">
													<h5>confirm password</h5>													
                                                                                                        <input type="password" value="" name="pass3" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="" minlength="5" maxlength="13">
                                                                                                        <h4>
                                                                                                            <?php
                                                                                                            if(isset($_SESSION['pass_reset']))
                                                                                                                {
                                                                                                                echo $_SESSION['pass_reset'];
                                                                                                                }?>
                                                                                                        </h4>
												</div>
                                                                                            <br>
												<div class="clearfix"></div>
                                                                                                <br>
												<input type="submit" value="SAVE">
											</form>
										</div>
								  </div>
								 
								</div>
							</div>
	</div>
</div>
	
<!-- mobile -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
										<form role="form">
											<div class="content-bottom-two">
		<div class="col-md-6 content-left text-center">
                    <img src="home/images/bbb5.png" alt="" />
		</div>
		<div class="col-md-6 content-right text-center">
                    <img src="home/images/bbb3.png" alt="" />
		</div>
		<div class="clearfix"></div>
</div>

<div class="footer">
	<div class="container">
		<h2><a href="index.html">Freerecharge</a></h2>
		<p>© 2020 Freerecharge. All Rights Reserved | Design by Urvish</a></p>
		
	</div>
</div>
<!-- for bootstrap working -->
		<script src="home/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>