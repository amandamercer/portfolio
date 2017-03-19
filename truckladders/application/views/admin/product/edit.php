
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin adminPanel">
	<h2><?php echo $title; ?></h2>
		<ul class="small-block-grid-2 catalog">
			<?php foreach($ladders as $ladder): ?>
				<li class="editProduct">
					<h3><?php echo $ladder['ladders_name'];?></h3>
					<img src="<?php echo base_url(); ?>images/<?php echo $ladder['ladders_image1'];?>" alt="<?php echo $ladder['ladders_name'];?>">
					<a class="button" href="<?php echo base_url(); ?>admin/product/edit/<?php echo $ladder['ladders_id'];?>">Edit</a>
					<a class="button redBG" href="<?php echo base_url(); ?>admin/deleteProduct/<?php echo $ladder['ladders_id'];?>" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
