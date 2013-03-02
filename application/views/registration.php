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
		<div data-role="page" id="registration">
		<!--Start Header-->
			<div data-role="header">				
				<header>
			        <nav>
			            <div id="nav-btn"  data-role="controlgroup" data-type="horizontal" data-mini="true">
						    <a href="<?php echo base_url('index.php');?>" data-role="button" data-icon="home" data-theme="a"><span class="btn-txt">HOME</span></a>
						    <a href="#" data-role="button" data-icon="info" data-theme="a"><span class="btn-txt">ABOUT</span></a>
						   <a href="<?php echo base_url('index.php/user/register');?>" data-role="button" data-icon="gear" data-theme="a" data-transition="flip"><span class="btn-txt">REGISTER</span></a>
						</div>			            
						<div id="small-nav">
							<a href="<?php echo base_url('index.php/user');?>">HOME</a>
							<a href="#">ABOUT</a>
							<a href="<?php echo base_url('index.php/user/logout');?>" data-transition="flip">LOGOUT</a>
						</div>
			
			            
			        </nav>
			
			        <h1>Challenge<span>Accepted</span></h1>
			    </header>
			</div>
			<div data-role="content" id="main-content">


							<h1 id="header">Register</h1>
				
				Sign in with Facebook
				<hr />
				
					<div class="errors"><div><?php echo validation_errors();?></div></div>
				
				<?php echo form_open('user'); ?>
					<input type="hidden" name="form_type" id="form_type" value="register"/>
					<input type="text" name="reg_email" id="reg_email" value="seancasey08@gmail.com" placeholder="Email Address"/>
					<input type="text" name="reg_fname" id="reg_fname" value="Sean" placeholder="First Name"/>
					<input type="text" name="reg_lname" id="reg_lname" value="Sean" placeholder="Last Name"/>
					<input type="password" name="reg_pass" id="reg_pass" value="skapunk456" placeholder="Password"/>
					<input type="password" name="reg_pass_confirm" id="reg_pass_confirm" value="skapunk456" placeholder="Confirm Password"/>
					<input type="submit" class="" value="Register" />
				</form>
			</div>
			<script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
     </body>
</html>