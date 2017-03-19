<div class="banner">
	<img src="<?php echo base_url(); ?>images/banner_commercial.jpg" alt="Commercial Banner">
</div>

<div id="productModal" class="reveal-modal" data-reveal aria-labelledby="productModal" aria-hidden="true" role="dialog"></div>

<section class="row">
    <div class="small-12 columns">
        <h2>Product Catalog</h2>
        <ul class="small-block-grid-2 medium-block-grid-4 catalog">
        <?php foreach($ladders as $ladder): ?>
			<li>
				<a data-reveal-id="productModal" data-reveal-ajax="true" href="<?php echo base_url(); ?>products/ladder/<?php echo $ladder['ladders_id'];?>">
				<img src="<?php echo base_url(); ?>images/<?php echo $ladder['ladders_image1'];?>" alt="<?php echo $ladder['ladders_name'];?>">
				<h3><?php echo $ladder['ladders_name'];?></h3>
				</a>
			</li>
		<?php endforeach; ?>
        </ul>
    </div>
</section>
