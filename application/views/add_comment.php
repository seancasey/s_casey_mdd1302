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
						    <a href="#" data-role="button" data-icon="info" data-theme="a"><span class="btn-txt">ABOUT</span></a>
						    <a href="<?php echo base_url('index.php/user/logout');?>" data-role="button" data-icon="delete" data-theme="a" data-transition="flip"><span class="btn-txt">LOGOUT</span></a>
						</div>			            
						<div id="small-nav">
							<a href="<?php echo base_url('index.php/user');?>">HOME</a>
							<a href="#">ABOUT</a>
							<a href="<?php echo base_url('index.php/user/logout');?>" data-transition="flip">Logout</a>
						</div>
			
			            
			        </nav>
			
			        <h1>Challenge<span>Accepted</span></h1>
			    </header>
			</div>
			
			<div data-role="content" id="main-content">
				<hi>Add a Comment to :<?php echo $uc[0]->challenge_name;?></h1>
				<?php echo form_open('challenges'); ?>
				<input type="hidden" name="form_type" id="form_type" value="add_comment2"/>
				<input type="hidden" name="cid" id="cid" value="<?php echo $uc[0]->challenge_id; var_dump($user);?>"/>
				<input type="hidden" name="uid" id="uid" value="<?php echo $user;?>"/>
				<textarea name="nc_desc" id="nc_desc" value="" placeholder="Enter Comment Here..."></textarea>
				<input type="submit" class="" value="Create Comment" />
				
			</div>
			<div data-role="footer">
				<a href="<?php echo base_url('index.php/user/privacy_policy');?>">Privacy Statement</a> | Challenge Accepted Copyright 2013 | documentation
			</div>