<?php $this->load->view('sections/head'); ?>
<br>
	<div data-role="Home">
		<div class="row">
			<div id="container">
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
				   <?php echo validation_errors();?>
					<?php echo form_open('verifylogin'); ?>
						<div data-role="fieldcontain" class="ui-hide-label center-image">
						     <input type="text" id="username" placeholder="Email" value="seancasey08@gmail.com" name="username"/>
						</div>
						<div data-role="fieldcontain" class="ui-hide-label center-image">
						     <input type="password" id="password" placeholder="Password" value="skapunk456" name="password"/>
						</div>
						<div class="six columns centered">
						     <input type="submit" value="Login" class="button"/>
						</div>
						    
					   </form> 
				
							<hr />
				<div class="row">
					<div class="six columns centered">
						<button data-theme="b">Sign in with Facebook</button>
						<button data-theme="a">Register the Boring Way</button>
					</div>
				</div>
			</div>
		</div>

<?php $this->load->view('sections/footer_scripts'); ?>