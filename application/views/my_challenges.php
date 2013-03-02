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
		<div data-role="page" id="my_challenges">
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
			
				<?php 
				$pending = 0;
				$accepted = 0;
				$completed = 0;
				if($uc){
					
					
					foreach($muc2 as $crow1){
						if($crow1->challenge_accepted < 1){
							$pending +=1;
					}} 	
					
					foreach($muc2 as $crow1){
						if($crow1->challenge_accepted == 1){
							$accepted +=1;
					}} 	
					
					foreach($muc2 as $crow1){
						if($crow1->challenge_accepted ==2){
							$completed +=1;
					}} 	
					
				?>
				<div class="errors"><div><?php echo validation_errors();?></div></div>
				<h2>Challenges</h2><hr />
					<!-- Pending Challenges -->
					
					<div data-role="collapsible">
					<h4>Pending<div style="float:right;" class="pnum1"><?php echo $pending; ?></div></h4>
					<?php if($pending < 1){?>
						<p>There are no Challenges Pending</p>
					<?php }else{?>
					
					<ul data-role="listview" data-inset="true" id="pending-stuff">
					
					
					<li data-role="list-divider" data-theme="d">Pending<span class="ui-li-count pnum"><?php echo $pending; ?></span></li>
					<?php 
					
					foreach($muc2 as $crow){
						if($crow->challenge_accepted < 1){
					?>
					
					<li class="pending-<?php echo $crow->challenge_id;?>">
						<div data-role="collapsible">
							<h4><p><?php echo $crow->challenge_name . ': ' . $crow->cofname . ' ' . $crow->colname;?></p></h4><hr /><div style="float:left;">
							<?php if($crow->challenger_id == $user){ ?>
								<strong><span class="myuser">Created By:<?php echo $crow->fname . ' ' . $crow->lname;?></span></strong>
							<?php }else{?>
							<strong>Created By:<?php echo $crow->fname . ' ' . $crow->lname;?></strong><?php }?></div><div style="float:right;">
								<?php if($crow->challenge_accepted < 1){?>
								P
							<?php }elseif($crow->challenge_accepted == 1){ ?>
								A
							<?php }elseif($crow->challenge_accepted == 2){ ?>
								C
							<?php } ?>

							</div><div style="clear:both;"></div></h4>
							<strong>Description</strong><hr />
							
							<p><?php echo $crow->challenge_desc; ?></p>
							
							<hr /><strong>Status :</strong>
							<?php if($crow->challenge_accepted < 1){?>
								Pending
							<?php }elseif($crow->challenge_accepted == 1){ ?>
								Accepted
							<?php }elseif($crow->challenge_accepted == 2){ ?>
								Completed
							<?php } ?>
							<!-- <strong>Comments</strong> -->
						<hr />
						<?php if($crow->opponent_id == $user){ ?><a href="#" data-role="button"  class="accmc" data-mini="true"  data-icon="check" data-iconpos="right" data-inline="true"  data-mc = "<?php echo $crow->challenge_id;?>" data-uc="21" data-opc = "<?php echo $crow->opponent_id;?>" data-cpc = "<?php echo $crow->challenger_id;?>">Accept</a><?php } ?>
						<a href="#" data-role="button"  class="delmc" data-mini="true"  data-icon="delete" data-iconpos="right" data-inline="true"  data-mc = "<?php echo $crow->challenge_id;?>" data-uc="21" data-opc = "<?php echo $crow->opponent_id;?>" data-cpc = "<?php echo $crow->challenger_id;?>">delete</a> 
						<ul data-role="listview" data-inset="true" id="pending-cstuff">
							<li data-role="list-divider" data-theme="d">Comments</li>
						</ul> 
						<?php echo form_open('challenges/add_comment');?>
							<input type="hidden" name="cid" id="cid" value="<?php echo $crow->challenge_id;?>"/>
							<input data-mini="true" data-icon="arrow-r" data-iconpos="right" data-inline="true"  type="submit" class="" value="Add a Comment" />
						</form>
							
						 </div>
							</li>
						
					<?php } } } ?>
			</div>
<!-- 			End Pending Challenges -->


<!-- Accepted Challenges -->
					
					
					

					<div data-role="collapsible">
					<h4>Accepted<div style="float:right;"><?php echo $accepted; ?></div></h4>
					<?php if($accepted < 1){?>
						<p>There are no Challenges Accepted</p>
					<?php }else{?>
					<ul data-role="listview" data-inset="true">
					
					
					<li data-role="list-divider" data-theme="d">Pending<span class="ui-li-count"><?php echo $accepted; ?></span></li>
					<?php 
					
					foreach($muc2 as $crow){
						if($crow->challenge_accepted == 1){
					?>
					
					<li>
						<div data-role="collapsible">
							<h4 class="h4_size"><?php echo $crow->challenge_name . ': ' . $crow->cofname . ' ' . $crow->colname;?> <hr /><div style="float:left;">
							<?php if($crow->challenger_id == $user){ ?>
								<strong><span class="myuser">Created By:<?php echo $crow->fname . ' ' . $crow->lname;?></span></strong>
							<?php }else{?>
							<strong>Created By:<?php echo $crow->fname . ' ' . $crow->lname;?></strong><?php }?></div><div style="float:right;">
								<?php if($crow->challenge_accepted < 1){?>
								P
							<?php }elseif($crow->challenge_accepted == 1){ ?>
								A
							<?php }elseif($crow->challenge_accepted == 2){ ?>
								C
							<?php } ?>

							</div><div style="clear:both;"></div></h4>
							<strong>Description</strong><hr />
							
							<p><?php echo $crow->challenge_desc; ?></p>
							
							<hr /><strong>Status :</strong>
							<?php if($crow->challenge_accepted < 1){?>
								Pending
							<?php }elseif($crow->challenge_accepted == 1){ ?>
								Accepted
							<?php }elseif($crow->challenge_accepted == 2){ ?>
								Completed
							<?php } ?>
							<!-- <strong>Comments</strong> -->
							<?php if($crow->opponent_id == $user){ ?>
							<hr /><a href="#" data-role="button"  class="comc" data-mini="true" data-icon="arrow-r" data-iconpos="right" data-inline="true" data-mc = "<?php echo $crow->challenge_id;?>">Completed</a><?php } ?>
						<ul data-role="listview" data-inset="true" id="pending-cstuff">
							<li data-role="list-divider" data-theme="d">Comments</li>
						</ul> </div></li>
					<?php } } }?>
			</div>
<!-- 			End Accepted Challenges -->

<!-- Accepted Completed -->
					
					
					

					<div data-role="collapsible">
					<h4>Completed<div style="float:right;"><?php echo $completed; ?></div></h4>
					<?php if($completed < 1){?>
						<p>There are no Challenges Completed</p>
					<?php }else{?>
					<ul data-role="listview" data-inset="true">
					
					
					<li data-role="list-divider" data-theme="d">Completed<span class="ui-li-count"><?php echo $completed; ?></span></li>
					<?php 
					
					foreach($muc2 as $crow){
						if($crow->challenge_accepted == 2){
					?>
					
					<li>
						<div data-role="collapsible">
							<h4 class="h4_size"><?php echo $crow->challenge_name . ': ' . $crow->cofname . ' ' . $crow->colname;?> <hr /><div style="float:left;">
							<?php if($crow->challenger_id == $user){ ?>
								<strong><span class="myuser">Created By:<?php echo $crow->fname . ' ' . $crow->lname;?></span></strong>
							<?php }else{?>
							<strong>Created By:<?php echo $crow->fname . ' ' . $crow->lname;?></strong><?php }?></div><div style="float:right;">								<?php if($crow->challenge_accepted < 1){?>
								P
							<?php }elseif($crow->challenge_accepted == 1){ ?>
								A
							<?php }elseif($crow->challenge_accepted == 2){ ?>
								C
							<?php } ?>

							</div><div style="clear:both;"></div></h4>
							<strong>Description</strong><hr />
							
							<p><?php echo $crow->challenge_desc; ?></p>
							
							<hr /><strong>Status :</strong>
							<?php if($crow->challenge_accepted < 1){?>
								Pending
							<?php }elseif($crow->challenge_accepted == 1){ ?>
								Accepted
							<?php }elseif($crow->challenge_accepted == 2){ ?>
								Completed
							<?php } ?>
							<!-- <strong>Comments</strong> -->
						<ul data-role="listview" data-inset="true" id="pending-cstuff">
							<li data-role="list-divider" data-theme="d">Comments</li>
							
						</ul> </div></li>
					<?php } } } }else{
						
					?>
						You currently have no challenges. <a href="<?php echo base_url('index.php/challenges/newchallenge');?>" data-role="button" data-mini="true" data-icon="arrow-r" data-iconpos="right" data-inline="true">Create Challenge</a> 
					<?php } ?>			</div><hr />
<!-- 			End Completed Challenges -->
<!-- End challenges you created -->

			
			</div>
			<div data-role="footer">
				Challenge Accepted &copy; 2013

			</div>
	 </div>
	 <script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
   </body>
</html>

				
	