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
	<body> <!-- first page is the view that you will see when you log in -->
		<div data-role="page" data-theme="a" id="dashboard">
			<div data-role="header">
				<h1 id="header">Home</h1>
				<a class="logout" href="<?php echo base_url('index.php')?>" data-icon="delete"  class="ui-btn-left" data-transition="slidefade">Home</a>
				<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
			</div>
			<!-- /header -->
			<div data-role="content">
				<a href="<?php echo base_url('index.php/challenges/newchallenge')?>" data-prefetch data-role="button" data-icon="star">Create a Challenge</a>
				<?php echo form_open('challenges'); ?>
					<input type="hidden" name="form_type" id="form_type" value="challenge2"/>
					<input type="submit" class="" value="View Challenges" data-icon="star" />
			    </form>
				<a href="#" data-role="button" data-icon="star">Add Friends</a>
			</div>
			<div data-role="footer">
				Privacy Statement | Challenge Accepted Copyright 2013 | documentation
			</div>
	 </div>
	 <script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
   </body>
</html>
