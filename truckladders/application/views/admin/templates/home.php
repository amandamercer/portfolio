<?php if(!$this->session->userdata('admin')){redirect('admin/login');} ?>

<section class="row">
	<div class="medium-10 large-8 small-centered columns admin adminPanel">
	<h2>Admin Panel</h2>
		<div class="row">
			<div class="medium-6 columns">
				<div class="panelSection">
					<h3>Products</h3>
					<a href="<?php echo base_url(); ?>admin/product/add">Add New Product</a>
					<a href="<?php echo base_url(); ?>admin/product/edit">Edit Product</a>
				</div>
			</div>
			<div class="medium-6 columns">
				<div class="panelSection">
					<h3>Approvals</h3>
					<a href="<?php echo base_url(); ?>admin/dealers/approve">Approve Dealers</a>
					<a href="<?php echo base_url(); ?>admin/testimonials/approve">Approve Testimonials</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="medium-6 columns">
				<div class="panelSection">
					<h3>Website</h3>
					<a href="<?php echo base_url(); ?>admin/banners">Update Banner Images</a>
					<a href="<?php echo base_url(); ?>admin/contact">Update Contact Information</a>
					<a href="<?php echo base_url(); ?>admin/about">Update About Us</a>
				</div>
			</div>
			<div class="medium-6 columns">
				<div class="panelSection">
					<h3>Account</h3>
					<a href="<?php echo base_url(); ?>admin/account">Change Password</a>
					<a href="<?php echo base_url(); ?>admin/dealers/all">View Approved Dealers</a>
					<a href="<?php echo base_url(); ?>admin/testimonials/all">View Approved Testimonials</a>
				</div>
			</div>
		</div>
	</div>
</section>

<a class="button" href="<?php echo base_url(); ?>home/logout">Logout</a>
