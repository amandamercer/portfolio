
<div class="banner">
	<img src="<?php echo base_url(); ?>images/<?php echo $banner->banners_image; ?>" alt="<?php echo $banner->banners_alt; ?>">
</div>

<section class="row account">
	<div class="small-12 medium-6 large-5 columns">
        <h2>My Account</h2>
        <div id="info">
	        <h3><?php echo $company->dealers_contact; ?></h3>
	        <p><?php echo $company->dealers_email; ?></p>
	        <p><?php echo $company->dealers_phone; ?></p>
	        <br>
	        <h3><?php echo $company->dealers_name; ?></h3>
	        <p><?php echo $company->dealers_street; ?><br><?php echo $company->dealers_city; ?>, <?php echo $company->dealers_province; ?><br><?php echo $company->dealers_postalCode; ?></p>
    		<br>
    		<button id="editButton" class="button">Edit Profile</button>
    	</div>
		
		<?php echo validation_errors(); ?>
    	<div id="edit">
    		<?php echo form_open('company/edit'); ?>
	        <input type="text" name="contact" value="<?php echo $company->dealers_contact; ?>" max="100">
	        <input type="email" name="email" value="<?php echo $company->dealers_email; ?>" max="100">
	        <input type="text" name="phone" value="<?php echo $company->dealers_phone; ?>" max="50">
	        <input type="text" name="company" value="<?php echo $company->dealers_name; ?>" max="100">
	        <input type="text" name="street" value="<?php echo $company->dealers_street; ?>" max="200">
            <input type="text" name="city" value="<?php echo $company->dealers_city; ?>" max="100">
            <?php echo $provinces; ?>
            <input type="text" name="postalCode" value="<?php echo $company->dealers_postalCode; ?>" max="7">
    		<input type="submit" value="Save">
    		</form>
    	</div>
    </div>

    <div class="small-12 medium-6 large-5 columns">
        <h2>Recent Order</h2>
        <div class="panel">
            <?php if($order): ?>
        	<p class="smallText">Order placed on:<br><?php echo date('F jS, Y', strtotime($order->order_date)); ?><br><br>Order Number : #<?php echo $order->order_num; ?></p>
        	<ul class="small-block-grid-3">
                <?php foreach($ladders as $ladder): ?>
        		<li><?php echo $ladder['ladders_name']; ?></li>
        		<li class="text-center">Qty: <?php echo $ladder['ladders_quantity']; ?></li>
        		<li class="text-right">$<?php echo $ladder['ladders_price'] * $ladder['ladders_quantity']; ?>.00</li>
                <?php endforeach; ?>
        	</ul>
        	<div class="row">
        		<div class="small-6 columns">
	        		<p class="smallText">Subtotal:</p>
                    <p class="smallText">Shipping:</p>
	        		<p class="smallText">Tax:</p>
	        		<br>
	        		<p class="smallText red">Total:</p>
	        	</div>
	        	<div class="small-6 columns">
	        		<p class="smallText text-right">$<?php echo $order->orders_price; ?>.00</p>
                    <p class="smallText text-right">$50.00</p>
	        		<p class="smallText text-right">$<?php echo $order->orders_price * 0.30; ?>.00</p>
	        		<br>
	        		<p class="smallText red text-right">$<?php echo $order->orders_price + 50 + ($order->orders_price * 0.30); ?>.00</p>
	        	</div>
        	</div>
            <?php else: ?>
                <p>No Order History to Show.</p>
            <?php endif ?>
        </div>
    </div>
</section>
