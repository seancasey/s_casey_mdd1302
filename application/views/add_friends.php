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
		<div data-role="page" id="add_commment">
		<!--Start Header-->
			<div data-role="header">				
				<header>
			        <nav>
			            <div id="nav-btn"  data-role="controlgroup" data-type="horizontal" data-mini="true">
						    <a href="<?php echo base_url('index.php');?>" data-role="button" data-icon="home" data-theme="a"><span class="btn-txt">HOME</span></a>
						    <a href="<?php echo base_url('index.php/user/about');?>" data-role="button" data-icon="info" data-theme="a"><span class="btn-txt">ABOUT</span></a>
						    <a href="<?php echo base_url('index.php/user/logout');?>" data-role="button" data-icon="delete" data-theme="a" data-transition="flip"><span class="btn-txt">LOGOUT</span></a>
						</div>			            
						<div id="small-nav">
							<a href="<?php echo base_url('index.php/user');?>">HOME</a>
							<a href="<?php echo base_url('index.php/user/about');?>">ABOUT</a>
							<a href="<?php echo base_url('index.php/user/logout');?>" data-transition="flip">LOGOUT</a>
						</div>
			
			            
			        </nav>
			
			        <h1>Challenge<span>Accepted</span></h1>
			    </header>
			</div>
			
			<div data-role="content" id="main-content">
				<h1>Add A Friend!</h1>
				<p>To add a new friend, simply write their email address in the input box below and press the add friend button.  Once they have approved your friendship you will be notified, their name will be added to your list, and you can start challenging them!</p><hr />
				<?php echo form_open('challenges'); ?>
				<input type="hidden" name="form_type" id="form_type" value="newf"/>
				<input type="text" name="nc_desc" id="nc_desc" value="" placeholder="Enter an Email Address..."></textarea>
				<input type="submit" class="" value="Create Comment" />
				
			</div>
			<div data-role="footer">
				Challenge Accepted &copy; 2013
			</div>
			 </div>
	 <script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
   </body>
</html>

