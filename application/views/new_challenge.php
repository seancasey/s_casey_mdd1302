<!DOCTYPE html> 
<html> 
	<head> 
		<title>Page Title</title> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700|Roboto:400,700,500,400italic,500italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css" />
		
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/css/jquery_mobile/theme_d.css" />
	</head>
	<body> 
	<!-- first page is the view that you will see when you log in -->
		<div data-role="page" data-theme="d" id="newc">
			<div data-role="header" data-theme="d">
				<h1 id="header">Home</h1>
				<a class="logout" href="<?php echo base_url('index.php/user')?>" data-icon="delete" class="ui-btn-left" data-transition="slidefade">Home</a>
				<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
			</div>
			<!-- /header -->
			<div data-role="content">
			<?php echo form_open('challenges'); ?>
				<input type="text" name="nc_friend_name" id="nc_friend_name" disabled="true" value="" placeholder="Who Would you like to challenge?" />
				<input type="hidden" name="nc_friend_id" id="nc_friend_id" value="" />
				<ul data-role="listview" data-inset="true" data-filter="true"  data-filter-placeholder="Choose a Friend" class="" data-filter-reveal="true">	
					<?php 
						if(isset($userData)){ ?>
						<li friend-id="<?php echo $userData['id'];?>" class="flist_item">Me - Challenge Yourself</li>
					<?php } ?>
					<?php if(isset($friendData)){
						foreach($friendData as $fc){ ?>
							<li friend-id="<?php echo $fc->friend_id;?>" class="flist_item"><?php echo $fc->fname .' ' . $fc->fname;?></li>
					<?php } } ?>
					<!--
<li friend-id="2" class="flist_item">Brad Cerny</li>
					<li friend-id="3" class="flist_item">Keith Caulkins</li>
					<li friend-id="4" class="flist_item">Angel Diaz</li>
					<li friend-id="5" class="flist_item">Romaine Simon</li>
					<li friend-id="6" class="flist_item">Simon Fig-Newton</li>
-->
				</ul>
				<input type="hidden" name="form_type" id="form_type" value="new_challenge1"/>
				<input type="text" name="nc_title" id="nc_title" value="" placeholder="Name of Challenge"/>
				<textarea name="nc_desc" id="nc_desc" value="" placeholder="Challenge Details"></textarea>
				<input type="submit" class="" value="Create Challenge" />
			</form> 
						<div data-role="footer">
				Privacy Statement | Challenge Accepted Copyright 2013 | documentation
			</div>
			</div>
	 </div>
	 <script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
   </body>
</html>
