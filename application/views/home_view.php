<!DOCTYPE html> 
<html> 
	<head> 
		<title>Page Title</title> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/css/jquery_mobile/theme_d.css" />
	</head>
	<body> 
		<div data-role="page" data-theme="a" id="home">
			<div data-role="header" data-theme="d">
				
				<div id="header" >Welcome to Challenge Accepted!</div>
				
				<img id="logo" src="<?php echo base_url(); ?>/images/logo1.png" />
				
				<?php echo validation_errors();?>
				<?php echo form_open('user'); ?>
					<input type="hidden" name="form_type" id="form_type" value="login"/>
					<input type="text" name="si_email" id="si_email" value="seancasey08@gmail.com" placeholder="Email Address"/>
					<input type="password" name="si_pass" id="si_pass" value="skapunk456" placeholder="Password"/>
					<input type="submit" class="" value="Sign in" />
				</form>
				<a href="<?php echo base_url('index.php/user/register')?>" data-role="button" data-icon="star">Register</a>
			</div>
			<script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
     </body>
</html>
	
		
