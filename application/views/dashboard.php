<!-- first page is the view that you will see when you log in -->
	<div data-role="page" data-theme="a" id="home">
		<div data-role="header">
			<h1 id="header">Home</h1>
			<a class="logout" href="#home" data-icon="delete" class="ui-btn-left" data-transition="slidefade">Home</a>
			<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
		</div>
		<!-- /header -->
