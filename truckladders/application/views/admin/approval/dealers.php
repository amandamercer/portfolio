
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin adminPanel">
	<h2><?php echo $title; ?></h2>
		<?php if($num > 0): ?>
			<ul>
				<?php foreach($dealers as $dealer): ?>
				<div class="large-10 small-centered Adealer column">
					<li class="text-center">
						<h3><?php echo $dealer['dealers_contact'];?> at <?php echo $dealer['dealers_name'];?></h3>
						<a class="button" href="<?php echo base_url(); ?>admin/approveDealer/<?php echo $dealer['dealers_id'];?>" onclick="return confirm('Are you sure you want to approve this dealer?');">Approve</a>
					</li>
				</div>
				<?php endforeach; ?>
			</ul>
		<?php else: ?>
			<p class="text-center">There are currently no dealers to approve.</p>
		<?php endif ?>
	</div>
</section>
