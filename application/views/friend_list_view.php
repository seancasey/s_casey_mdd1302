<?php $this->load->view('sections/head'); ?>
<br>
	<div class="row">
		<div id="container" class="panel">
			<div class="twelve columns centered center-image">
				<img id="dash-logo" src="<?php echo base_url('assets/images/logo.png')?>" />
			</div>
			
			<div class="row">
				<div class="eight columns centered">
          	    	<div class="panel callout radius intro-panel">
					    <h3>Challenge Your Friends</h3>
					    <p>Click on one of your friends below to challenge them.</p>
				    </div>
				</div>
		   <div>
		
				 
			
						<div class="row">
				<div class="six columns centered center-image">
					
					<ul data-role="listview">
						<li><a href="#">Friend 1</a></li>
						<li><a href="#">Friend 2</a></li>
						<li><a href="#">Friend 3</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php $this->load->view('sections/footer_scripts'); ?>