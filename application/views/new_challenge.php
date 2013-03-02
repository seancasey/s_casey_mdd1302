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
		<div data-role="page" id="newc">
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
			<h1>Create a New Challenge</h1>
			<p>Choose a friend from the list below, name your challenge, add a description, and submit.  
			<?php echo form_open('challenges'); ?>
				<input type="text" name="nc_friend_name" id="nc_friend_name" disabled="true" value="" placeholder="Click on a Friend Below" />
				<input type="hidden" name="nc_friend_id" id="nc_friend_id" value="" />
				<ul id="f_list" data-role="listview" data-inset="true"  class="" data-filter-reveal="true">	
					<?php 
						if(isset($userData)){ ?>
						<li friend-id="<?php echo $userData['id'];?>" class="flist_item">Me - Challenge Yourself</li>
					<?php } ?>
					<?php if(isset($friendData)){
						foreach($friendData as $fc){ ?>
							<li friend-id="<?php echo $fc->friend_id;?>" class="flist_item"><?php echo $fc->fname .' ' . $fc->lname;?></li>
					<?php } } ?>
									</ul>
				<input type="hidden" name="form_type" id="form_type" value="new_challenge1"/>
				<input type="text" name="nc_title" id="nc_title" value="" placeholder="Name of Challenge"/>
				<textarea name="nc_desc" id="nc_desc" value="" placeholder="Challenge Details"></textarea>
				<input type="submit" class="" value="Create Challenge" />
			</form> 
						<div data-role="footer">
				<a href="<?php echo base_url('index.php/user/privacy_policy');?>">Privacy Statement</a> | &copy;2013
			</div>
			</div>
	 </div>
	 <script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
   </body>
</html>
