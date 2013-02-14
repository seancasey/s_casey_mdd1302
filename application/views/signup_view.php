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
					    <h3>Register Today!</h3>
					    <p>Once you register you will be able to create and accept fitness challenges, and keep track of all the challenges you have accomplished!</p>
				    </div>
				</div>
		   <div>
		
				 
			
			<form action="form.php" method="post">
				<div data-role="fieldcontain" class="ui-hide-label center-image">
					<label for="username">Email:</label>
					<input type="text" name="username" id="email" value="" placeholder="Email Address"/>
				</div>
				<div data-role="fieldcontain" class="ui-hide-label center-image">
					<label for="username">Password:</label>
					<input type="text" name="username" id="username" value="" placeholder="Password"/>
				</div>
				<div data-role="fieldcontain" class="ui-hide-label center-image">
					<label for="username">First Name:</label>
					<input type="text" name="username" id="username" value="" placeholder="First Name"/>
				</div>
				<div data-role="fieldcontain" class="ui-hide-label center-image">
					<label for="username">Last Name:</label>
					<input type="text" name="username" id="username" value="" placeholder="Last Name"/>
				</div>
				<div class="row">
					<div class="six columns centered">
						<div data-role="fieldcontain" class="ui-hide-label">
							<input type="button" class="small button radius " value="Register" />
						</div>
					</div>
				</div>
			</form>
			<hr />
			<div class="row">
				<div class="six columns centered center-image">
					<strong>OR</strong>
					<button data-theme="b">Sign in with Facebook</button>
				</div>
			</div>
		</div>
	</div>

<?php $this->load->view('sections/footer_scripts'); ?>