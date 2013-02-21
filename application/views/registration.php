<!DOCTYPE html> 
<html> 
	<head> 
		<title>Challenge Accepted</title> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	</head>
	<body> 
		<div data-role="page" data-theme="a" id="home">
			<div data-role="header">
				<h1 id="header">Register</h1>
				<?php echo validation_errors();?>
				Sign in with Facebook
				<hr />
				<?php echo form_open('user'); ?>
					<input type="hidden" name="form_type" id="form_type" value="register"/>
					<input type="text" name="reg_email" id="reg_email" value="seancasey08@gmail.com" placeholder="Email Address"/>
					<input type="text" name="reg_fname" id="reg_fname" value="Sean" placeholder="First Name"/>
					<input type="text" name="reg_lname" id="reg_lname" value="Sean" placeholder="Last Name"/>
					<input type="password" name="reg_pass" id="reg_pass" value="skapunk456" placeholder="Password"/>
					<input type="password" name="reg_pass_confirm" id="reg_pass_confirm" value="skapunk456" placeholder="Confirm Password"/>
					<input type="submit" class="" value="Sign in" />
				</form>
			</div>
			<script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
     </body>
</html>