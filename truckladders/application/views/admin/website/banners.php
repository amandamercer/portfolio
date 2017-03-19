
<section class="row">
	<div class="medium-8 large-6 small-centered columns admin adminPanel">
	<h2><?php echo $title; ?></h2>
		<ul class="small-block-grid-2 catalog">
			<?php foreach($banners as $banner): ?>
				<li class="editProduct">
					<h3><?php echo $banner['banners_name'];?></h3>
					<img src="<?php echo base_url(); ?>images/<?php echo $banner['banners_image'];?>" alt="<?php echo $banner['banners_alt'];?>">
					<a class="button" href="<?php echo base_url(); ?>admin/banners/<?php echo $banner['banners_id'];?>">Update Banner</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
