<section class="row">
	<div class="medium-8 large-6 small-centered columns company formSection">
		<h2>Order History</h2>

		<ul class="panelSection">
			<?php if($orders): ?>
				<?php for($i = 0 ; $i < count($orders); $i ++): ?>
					<li>
					<h3>Order #<?php echo $orders[$i]['order_num']; ?></h3>
					<p>Ordered: <?php echo date('l, F j, Y', strtotime($orders[$i]['order_date'])); ?> at <?php echo date('g:i a', strtotime($orders[$i]['order_date'])); ?></p>
						<?php foreach($ladders[$i] as $ladder): ?>
						<ul class="small-block-grid-3 orders">
							<li><?php echo $ladder['ladders_name']; ?></li>
							<li><?php echo $ladder['ladders_quantity']; ?></li>
							<li>$<?php echo $ladder['ladders_price'] * $ladder['ladders_quantity']; ?>.00</li>
						</ul>
						<?php endforeach; ?>
					<p>Subtotal: $<?php echo $orders[$i]['orders_price']; ?>.00</p>
					<p>Shipping: $50.00</p>
					<p>Tax: $<?php echo $orders[$i]['orders_price'] * 0.30; ?>.00</p>
					<p>Total: $<?php echo $orders[$i]['orders_price'] + 50 + ($orders[$i]['orders_price'] * 0.30); ?>.00</p>
					</li>
				<?php endfor; ?>
			<?php else: ?>
				<p>No Order History to Show.</p>
			<?php endif ?>
		</ul>

	</div>
</section>
