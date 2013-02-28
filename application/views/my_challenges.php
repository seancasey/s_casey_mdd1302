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
		<div data-role="page" data-theme="a" id="my_challenges">
			<div data-role="header">
				<h1 id="header">Home</h1>
				<a class="logout" href="<?php echo base_url('index.php/user')?>" data-icon="delete"  class="ui-btn-left" data-transition="slidefade">Home</a>
				<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
			</div>
			<!-- /header -->
			<div data-role="content">
				<?php 
				$pending = 0;
				$accepted = 0;
				$completed = 0;
				if($uc){
					
					
					foreach($uc as $crow1){
						if($crow1->challenge_accepted < 1){
							$pending +=1;
					}} 	
					
					foreach($uc as $crow1){
						if($crow1->challenge_accepted == 1){
							$accepted +=1;
					}} 	
					
					foreach($uc as $crow1){
						if($crow1->challenge_accepted ==2){
							$completed +=1;
					}} 	
					
				?>
				<h2>Challenges you have created</h2><hr />
					<!-- Pending Challenges -->
					
					<div data-role="collapsible">
					<h4>Pending<div style="float:right;" class="pnum1"><?php echo $pending; ?></div></h4>
					<?php if($pending < 1){?>
						<p>There are no Challenges Pending</p>
					<?php }else{?>
					
					<ul data-role="listview" data-inset="true" id="pending-stuff">
					
					
					<li data-role="list-divider" data-theme="d">Pending<span class="ui-li-count pnum"><?php echo $pending; ?></span></li>
					<?php 
					
					foreach($uc as $crow){
						if($crow->challenge_accepted < 1){
					?>
					
					<li class="pending-<?php echo $crow->challenge_id;?>">
						<div data-role="collapsible">
							<h4 class="h4_size"><?php echo $crow->challenge_name . ': ' . $crow->cofname . ' ' . $crow->colname;?> <hr /><div style="float:left;"><strong>Created:6:24</strong>PM</div><div style="float:right;">
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
						<a href="#" data-role="button"  class="delmc" data-mini="true" data-icon="arrow-r" data-iconpos="right" data-inline="true" data-mc = "<?php echo $crow->challenge_id;?>">delete</a> </div></li>
						
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
					
					foreach($uc as $crow){
						if($crow->challenge_accepted == 1){
					?>
					
					<li>
						<div data-role="collapsible">
							<h4 class="h4_size"><?php echo $crow->challenge_name . ': ' . $crow->cofname . ' ' . $crow->colname;?> <hr /><div style="float:left;"><strong>Created:6:24</strong>PM</div><div style="float:right;">
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
						</div></li>
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
					
					foreach($uc as $crow){
						if($crow->challenge_accepted == 2){
					?>
					
					<li>
						<div data-role="collapsible">
							<h4 class="h4_size"><?php echo $crow->challenge_name . ': ' . $crow->cofname . ' ' . $crow->colname;?> <hr /><div style="float:left;"><strong>Created:6:24</strong>PM</div><div style="float:right;">
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
						</div></li>
					<?php } } } }else{
						
					?>
						You currently have no challenges. <a href="<?php echo base_url('index.php/challenges/newchallenge');?>" data-role="button" data-mini="true" data-icon="arrow-r" data-iconpos="right" data-inline="true">Create Challenge</a> 
					<?php } ?>			</div><hr />
<!-- 			End Completed Challenges -->
<!-- End challenges you created -->
<?php 
				$mpending = 0;
				$maccepted = 0;
				$mcompleted = 0;
				if($muc){
					
					
					foreach($muc as $crow1){
						if($crow1->challenge_accepted < 1){
							$mpending +=1;
					}} 	
					
					foreach($muc as $crow1){
						if($crow1->challenge_accepted == 1){
							$maccepted +=1;
					}} 	
					
					foreach($muc as $crow1){
						if($crow1->challenge_accepted ==2){
							$mcompleted +=1;
					}} 	
					
				?>
				<h2>Challenges you have created</h2><hr />
					<!-- Pending Challenges -->
					
					<div data-role="collapsible">
					<h4>Pending<div style="float:right;" class="mpnum1"><?php echo $mpending; ?></div></h4>
					<?php if($mpending < 1){?>
						<p>There are no Challenges Pending</p>
					<?php }else{?>
					
					<ul data-role="listview" data-inset="true" id="mpending-stuff">
					
					
					<li data-role="list-divider" data-theme="d">Pending<span class="ui-li-count mpnum"><?php echo $mpending; ?></span></li>
					<?php 
					
					foreach($muc as $crow){
						if($crow->challenge_accepted < 1){
					?>
					
					<li class="mpending-<?php echo $crow->challenge_id;?>">
						<div data-role="collapsible">
							<h4 class="h4_size"><?php echo $crow->challenge_name . ': ' . $crow->cofname . ' ' . $crow->colname;?> <hr /><div style="float:left;"><strong>Created:6:24</strong>PM</div><div style="float:right;">
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
						<a href="#" data-role="button"  class="accmc" data-mini="true"  data-icon="check" data-iconpos="right" data-inline="true"  data-mc = "<?php echo $crow->challenge_id;?>" data-uc="21" data-opc = "<?php echo $crow->opponent_id;?>" data-cpc = "<?php echo $crow->challenger_id;?>">Accept</a>
						<a href="#" data-role="button"  class="delmc" data-mini="true"  data-icon="delete" data-iconpos="right" data-inline="true"  data-mc = "<?php echo $crow->challenge_id;?>" data-uc="21" data-opc = "<?php echo $crow->opponent_id;?>" data-cpc = "<?php echo $crow->challenger_id;?>">delete</a> </div></li>
						
					<?php } } } ?>
			</div>
<!-- 			End Pending Challenges -->
<!-- Accepted Challenges -->
					
					
					

					<div data-role="collapsible">
					<h4>Accepted<div style="float:right;"><?php echo $maccepted; ?></div></h4>
					<?php if($maccepted < 1){?>
						<p>There are no Challenges Accepted</p>
					<?php }else{?>
					<ul data-role="listview" data-inset="true">
					
					
					<li data-role="list-divider" data-theme="d">Pending<span class="ui-li-count"><?php echo $maccepted; ?></span></li>
					<?php 
					
					foreach($muc as $crow){
						if($crow->challenge_accepted == 1){
					?>
					
					<li>
						<div data-role="collapsible">
							<h4 class="h4_size"><?php echo $crow->challenge_name . ': ' . $crow->cofname . ' ' . $crow->colname;?> <hr /><div style="float:left;"><strong>Created:6:24</strong>PM</div><div style="float:right;">
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
						</div></li>
					<?php } } }?>
			</div>
<!-- 			End Accepted Challenges -->

<!-- Accepted Completed -->
					
					
					

					<div data-role="collapsible">
					<h4>Completed<div style="float:right;"><?php echo $mcompleted; ?></div></h4>
					<?php if($mcompleted < 1){?>
						<p>There are no Challenges Completed</p>
					<?php }else{?>
					<ul data-role="listview" data-inset="true">
					
					
					<li data-role="list-divider" data-theme="d">Completed<span class="ui-li-count"><?php echo $mcompleted; ?></span></li>
					<?php 
					
					foreach($muc as $crow){
						if($crow->challenge_accepted == 2){
					?>
					
					<li>
						<div data-role="collapsible">
							<h4 class="h4_size"><?php echo $crow->challenge_name . ': ' . $crow->cofname . ' ' . $crow->colname;?> <hr /><div style="float:left;"><strong>Created:6:24</strong>PM</div><div style="float:right;">
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
						</div></li>
					<?php } } } }else{
						
					?>
						You currently have no challenges. <a href="<?php echo base_url('index.php/challenges/newchallenge');?>" data-role="button" data-mini="true" data-icon="arrow-r" data-iconpos="right" data-inline="true">Create Challenge</a> 
					<?php } ?>			</div><hr />
<!-- 			End Completed Challenges -->
<!-- End challenges you created -->
			<h2>Your Challenges to Conquer!</h2><hr />
			</div>
			<div data-role="footer">
				<a href="<?php echo base_url('index.php/user/privacy_policy');?>">Privacy Statement</a> | Challenge Accepted Copyright 2013 | documentation
			</div>
	 </div>
	 <script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
   </body>
</html>
