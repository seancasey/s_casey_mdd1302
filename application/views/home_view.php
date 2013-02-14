<?php $this->load->view('sections/head'); ?>
<br>
	<div class="row">
		<div id="container" class="panel">
			<div class="twelve columns centered center-image">
				<img id="logo" src="<?php echo base_url('assets/images/logo.png')?>" />
			</div>
			<form action="form.php" method="post">
				<div data-role="fieldcontain" class="ui-hide-label">
					<label for="username">Email:</label>
					<input type="text" name="username" id="username" value="" placeholder="Username"/>
				</div>
				<div data-role="fieldcontain" class="ui-hide-label">
					<label for="username">Password:</label>
					<input type="text" name="username" id="username" value="" placeholder="Password"/>
				</div>
				<input type="button" class="small button radius" value="Login" />
			</form>
			<div class="small button radius">Register</div>
		</div>
	</div>

<?php $this->load->view('sections/footer_scripts'); ?>