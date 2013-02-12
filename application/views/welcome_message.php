<?php $this->load->view('sections/head'); ?>

<br>
<div class="row">
<div id="container" class="panel">
	<h1>Challenge Accepted Skeleton</h1>

	<div id="body">
		<p>This is a test for using the Facebook API.  It will return the basic user informaton and their friends info. Once logged in you will see the results below.</p>

		
			</div>
	<?php if (@$user_profile): ?>
		        <pre>
            <?php echo print_r($user_profile, TRUE) ?>
            <?php echo print_r($user_friends, TRUE) ?>
        </pre>
        <a href="<?php echo $logout_url ?>">Logout of this thing</a>
    <?php else: ?>
        <h2>Welcome to this facebook thing, please login below</h2>
        <a href="<?php echo $login_url ?>">Login to this thing</a>
    <?php endif; ?>	</div>


	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
</div>

<?php $this->load->view('sections/footer_scripts'); ?>