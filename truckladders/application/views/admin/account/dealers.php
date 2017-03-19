
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin adminPanel">
	<h2><?php echo $title; ?></h2>
		<?php if($num > 0): ?>
			<ul>
				<?php foreach($dealers as $dealer): ?>
				<div class="large-10 small-centered column dealer">
					<h3><?php echo $dealer['dealers_contact']; ?> at <?php echo $dealer['dealers_name']; ?></h3>
					<li class="text-center panelSection">
				        <p><?php echo $dealer['dealers_phone']; ?></p>
				        <p><?php echo $dealer['dealers_email']; ?></p>
				        <p><?php echo $dealer['dealers_street']; ?> <?php echo $dealer['dealers_city']; ?>, <?php echo $dealer['dealers_province']; ?> <?php echo $dealer['dealers_postalCode']; ?></p>
					</li>
					<a class="button" href="<?php echo base_url(); ?>admin/removeDealer/<?php echo $dealer['dealers_id'];?>" onclick="return confirm('Are you sure you want to remove this dealer?');">Remove</a>
				</div>
				<?php endforeach; ?>
			</ul>
		<?php else: ?>
			<p class="text-center">There are currently no dealers that are approved.</p>
		<?php endif ?>
	</div>
</section>
