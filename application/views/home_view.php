<?php $this->load->view('sections/head'); ?>
<br>
	<div class="row">
		<div id="container" class="panel">
			<div class="twelve columns centered center-image">
				<img id="logo" src="<?php echo base_url('assets/images/logo.png')?>" />
			</div>
			
			<div class="row">
				<div class="eight columns centered">
          	    	<div class="panel callout radius intro-panel">
					    <h3>Welcome to Challenge Accepted!</h3>
					    <p>Members may sign in below.  If you are new to this app you can either sign in with Facebook or click the register button below.</p>
				    </div>
				</div>
		   <div>
		
				 
			
			<form action="form.php" method="post">
				<div data-role="fieldcontain" class="ui-hide-label center-image">
					<label for="username">Email:</label>
					<input type="text" name="username" id="username" value="" placeholder="Username"/>
				</div>
				<div data-role="fieldcontain" class="ui-hide-label center-image">
					<label for="username">Password:</label>
					<input type="text" name="username" id="username" value="" placeholder="Password"/>
				</div>
				<div class="row">
					<div class="six columns centered">
						<div data-role="fieldcontain" class="ui-hide-label">
							<input type="button" class="small button radius " value="Login" />
						</div>
					</div>
				</div>
			</form>
			<hr />
			<div class="row">
				<div class="six columns centered">
					<button data-theme="b">Sign in with Facebook</button>
					<div class="small button radius">Register</div>
				</div>
			</div>
		</div>
	</div>

<?php $this->load->view('sections/footer_scripts'); ?>