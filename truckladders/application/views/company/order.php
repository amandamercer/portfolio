
<section class="row">
	<div class="medium-10 large-8 small-centered columns company formSection">
		<h2><?php echo $title; ?></h2>
	    <div class="row">
			<div class="small-12 columns">
			<?php echo validation_errors(); ?>
			<?php echo form_open('company/sendOrder'); ?>
				<ul class="small-block-grid-3 orders">
						<li><h3>Name</h3></li>
						<li><h3>Price</h3></li>
						<li><h3>Quantity</h3></li>
					<?php $i = 0; ?>
					<?php foreach($ladders as $ladder): ?>
						<?php $i++; ?>
						<li>
							<label><?php echo $ladder['ladders_name']; ?></label>
							<input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $ladder['ladders_id']; ?>">
						</li>
						<li>
							<p>$<?php echo $ladder['ladders_price']; ?></p>
							<input type="hidden" name="price<?php echo $i; ?>" value="<?php echo $ladder['ladders_price']; ?>">
						</li>
						<li><input type="number" name="quantity<?php echo $i; ?>" min="0" value="0"></li>
					<?php endforeach; ?>
				</ul>
			<input type="hidden" name="num" value="<?php echo $i; ?>">
			<input class="right" type="submit" value="Submit Order">
			</form>
			</div>
		</div>
	</div>
</section>
