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
		<div data-role="page" id="home">
		<!--Start Header-->
			<div data-role="header">				
				<header>
			        <nav>
			            <div id="nav-btn"  data-role="controlgroup" data-type="horizontal" data-mini="true">
						    <a href="<?php echo base_url('index.php');?>" data-role="button" data-icon="home" data-theme="a"><span class="btn-txt">HOME</span></a>
						    <a href="<?php echo base_url('index.php/user/about');?>" data-role="button" data-icon="info" data-theme="a"><span class="btn-txt">ABOUT</span></a>
						    <a href="<?php echo base_url('index.php/user/register');?>" data-role="button" data-icon="gear" data-theme="a" data-transition="flip"><span class="btn-txt">REGISTER</span></a>
						</div>			            
						<div id="small-nav">
							<a href="<?php echo base_url('index.php/user');?>">HOME</a>
							<a href="<?php echo base_url('index.php/user/about');?>">ABOUT</a>
							<a href="<?php echo base_url('index.php/user/register');?>" data-transition="flip">REGISTER</a>
						</div>
			
			            
			        </nav>
			
			        <h1>Challenge<span>Accepted</span></h1>
			    </header>
			</div>
			<div data-role="content" id="main-content">
	 <!--End Header-->

				
				<h2>Welcome to Challenge Accepted</h2>

            <p>Make challenges for yourself and your friends. A simple app that can be used for motivaiton or procrastination!<hr /><a href="<?php echo base_url('index.php/user/register');?>" data-transition="flip">register now</a>, or sign in below.</p>

				
				<div class="errors"><div><?php echo validation_errors();?></div></div>
				<?php echo form_open('user'); ?>
					<input type="hidden" name="form_type" id="form_type" value="login"/>
					<input type="text" name="si_email" id="si_email" value="" placeholder="Email Address"/>
					<input type="password" name="si_pass" id="si_pass" value="" placeholder="Password"/>
					<input type="submit" class="" value="Sign in" />
				</form>
				
				
				
			</div>
			<div data-role="footer">
				Challenge Accepted &copy; 2013
			</div>
			 </div>
	 <script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
   </body>
</html>


