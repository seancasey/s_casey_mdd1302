<!DOCTYPE html> 
<html> 
	<head> 
		<title>Challenge Accepted</title> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
		<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>/css/jquery_mobile/theme_d.css" /> -->
	</head>
	<body> 
		<div data-role="page" id="about">
		<!--Start Header-->
			<div data-role="header">				
				<header>
			        <nav>
			            <div id="nav-btn"  data-role="controlgroup" data-type="horizontal" data-mini="true">
						    <a href="<?php echo base_url('index.php');?>" data-role="button" data-icon="home" data-theme="a"><span class="btn-txt">BACK</span></a>
						    
						    
						</div>			            
						<div id="small-nav">
							<a href="<?php echo base_url('index.php/user');?>">BACK</a>
							
							
						</div>
			
			            
			        </nav>
			
			        <h1>Challenge<span>Accepted</span></h1>
			    </header>
			</div>
			<div data-role="content" id="main-content">
				<h1>Challenge Accepted</h1>
				<p>Welcome to our about page.  Our web application was created so people can challenge each other and motivate their friends as well as themselves. You can find the documentation below and if you have any questions feel free to contact us and we will respond as soon as possible.	<h2>Contact Information</h2>
					<h3>Challenge Accepted</h3>
					<p>
						Orlando, FL 32811<br />
						555-555-5555<br />
						challange.accepted.web@gmail.com
					</p>
				<h2>Documentation</h2>
				<h3>Registering/Login</h3>
				<p>If you are new to our site, you will have to register for an account first by going to the registration page.  Fill out the information and then press submit.  If successful, you will be automatically logged in and taken to your dashboard.  If you have already signed up, you just need to use the Sign In form located on our home page using your email address you used to sign up with, and your password you created when you registered.</p>
				<h3>Dashboard</h3>
				<p>The dashboard is where you will be taken upon logging in, it will have all of the navigation you need to roam around the applicaiton.  From here you can create new challenges, view your challenges, and add friends to your friends list.</p>
				<h3>Create a New Challenge</h3>
				<p>To create a new challenge you would click o the 'Create a Challenge button located in the Dashboard.  From here you will be shown a list of friends, click on the friend that you would like to challenge and give the challenge a name and description.  Once you submit the challenge a confirmation email will be sent to both you and your friend.</p>
				
				<h3>View Your Challenges</h3>
				<p>To view your challenges you will click on the 'View Challenges' button on the Dashboard.  From here the challenges will be broken up into three categories, pending, accepted, and completed.  A challenge will be pending if the challenge was created, but the friend has not accepted it yet.  Accepted will be when the challenge has been accepted but not completed, and completed is when the challenge is finished.</p>
				<h3>Reporting Misuse</h3>
				<p>If you find that one of your friends is misusing the site, please email us at challange.accepted.web@gmail.com.  We take pride in our customer base and want to make sure that you have a positive experience while using the applicaiton. </p>
			</div>
			<div data-role="footer">
				<a href="<?php echo base_url('index.php/user/privacy_policy');?>">Privacy Statement</a> | Challenge Accepted Copyright 2013 | documentation
			</div>
			 </div>
	 <script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
   </body>
</html>

