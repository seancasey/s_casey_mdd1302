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
					    <h3>Welcome First Name!</h3>
					    <p>Please choose from one of the options below.</p>
				    </div>
				</div>
		   <div>
		
				 
			
						<div class="row">
				<div class="six columns centered center-image">
					
					<button data-theme="b">Find Your Friends</button>
					<button data-theme="b">Create a New Challenge</button>
					<button data-theme="b">View Your Challenges</button>
					<button data-theme="a">Logout</button>
				</div>
			</div>
		</div>
	</div>

<?php $this->load->view('sections/footer_scripts'); ?>