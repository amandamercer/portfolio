
<div class="fixed">
	
	<header>	
		<div class="small-6 medium-2 columns">
			<a href="<?php echo base_url(); ?>"><img class="logo" src="<?php echo base_url(); ?>images/logo.svg" alt="TruckLadders Logo"></a>
		</div>

		<div class="small-6 medium-10 columns">
			<nav class="visible-for-medium-up">
			<h2 class="hide">TruckLadders Navigation</h2>
				<ul>
					<li><a href="<?php echo base_url(); ?>home">Home</a></li>
					<li><a href="<?php echo base_url(); ?>products">Products</a></li>
					<li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
					<?php if($this->session->userdata('loggedIn')): ?>
					<li>
						<div class="dropdown">
							<a class="dropbtn">Account<span class="arrow">&#9660;</span></a>
						  	<div class="dropdown-content">
							  	<a href="<?php echo base_url(); ?>company">Profile</a>
							    <a href="<?php echo base_url(); ?>company/order">Order Form</a>
							    <a href="<?php echo base_url(); ?>company/history">Order History</a>
							    <a href="<?php echo base_url(); ?>home/logout">Logout</a>
						  	</div>  
						</div>
					</li>
					<?php else: ?>
					<li data-dropdown="signin" aria-controls="signin" aria-expanded="false">Sign In</li>
					<?php endif ?>
				</ul>
			</nav>

			<img id="menu" class="hidden-for-medium-up" src="<?php echo base_url(); ?>images/menu.png" alt="Mobile Navigation">	
		</div>
	</header>

	<div id="signin" data-dropdown-content class="f-dropdown" aria-hidden="true" aria-autoclose="false">
		<h2>Sign In</h2>
		<?php echo form_open('home/submit'); ?>
			<p class="red"></p>
			<?php echo form_error('username'); ?>
			<input type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" max="100">
			<?php echo form_error('password'); ?>
			<input type="password" name="password" placeholder="Password" max="100">
			<a class="red" href="<?php echo base_url(); ?>home/reset">Forgot Password</a>
			<input type="submit" value="Login">
		</form>
		<a href="<?php echo base_url(); ?>home/register" class="button">Register</a>
	</div>

	<nav id="nav" class="show-for-small-only">
	<h2 class="hide">TruckLadders Mobile Navigation</h2>
		<ul>
			<li><a href="<?php echo base_url(); ?>home">Home</a></li>
			<li><a href="<?php echo base_url(); ?>products">Products</a></li>
			<li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
			<?php if($this->session->userdata('loggedIn')): ?>
				<li id="accountSignin">Account</li>
			<?php else: ?>
				<li id="navSignin">Sign In</li>
			<?php endif ?>
		</ul>
	</nav>

	<nav id="account" class="show-for-small-only">
	<h2 class="hide">TruckLadders Account Navigation</h2>
		<ul>
			<li><a href="<?php echo base_url(); ?>company">Profile</a></li>
			<li><a href="<?php echo base_url(); ?>company/order">Order Form</a></li>
			<li><a href="<?php echo base_url(); ?>company/history">Order History</a></li>
			<li><a href="<?php echo base_url(); ?>home/logout">Logout</a></li>
			<li id="accountBack">Back</li>
		</ul>
	</nav>

	<div id="mobileSignin" class="row">
		<?php echo form_open('home/submit'); ?>
		<div class="small-12 columns">
			<h2>Sign In</h2>
			<p class="red"></p>
			<?php echo form_error('username'); ?>
			<input type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" max="100">
			<?php echo form_error('password'); ?>
			<input type="password" name="password" placeholder="Password" max="100">
			<a class="red" href="<?php echo base_url(); ?>home/reset">Forgot Password</a>
			<input type="submit" value="Login">
			<a href="<?php echo base_url(); ?>home/register" class="button">Register</a>
		</div>
		</form>
		<div id="close"></div>
	</div>

</div>
