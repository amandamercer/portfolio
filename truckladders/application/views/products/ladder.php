
<section class="ladder row">
	<div class="medium-7 medium-push-5 large-6 large-push-6 columns">
		<h2><?php echo $ladder->ladders_name; ?></h2>
		<ul>
			<li>Material: <?php echo $ladder->ladders_material;?></li>
			<li>Price: $<?php echo $ladder->ladders_price;?></li>
		</ul>
		<p><?php echo $ladder->ladders_desc; ?></p>
		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>
	<div class="medium-5 medium-pull-7 large-6 large-pull-6 columns ladderImages">
		<div class="large-8 columns">
			<img id="featureImg" src="<?php echo base_url(); ?>images/<?php echo $ladder->ladders_image1;?>" alt="<?php echo $ladder->ladders_name;?>">
		</div>
		<div class="large-4 columns">
			<ul class="small-block-grid-3 large-block-grid-1 thumbDiv">
				<li><img src="<?php echo base_url(); ?>images/<?php echo $ladder->ladders_image2;?>" alt="<?php echo $ladder->ladders_name;?>"></li>
				<li><img src="<?php echo base_url(); ?>images/<?php echo $ladder->ladders_image3;?>" alt="<?php echo $ladder->ladders_name;?>"></li>
				<li><img src="<?php echo base_url(); ?>images/<?php echo $ladder->ladders_image4;?>" alt="<?php echo $ladder->ladders_name;?>"></li>
			</ul>
		</div>
	</div>
</section>

<script type="text/javascript">
	var mainImg = document.querySelector("#featureImg");
	var thumbnails = document.querySelectorAll(".thumbDiv img");

	function switchImage(){
		if(this.src.indexOf("default.png") === -1){
			var srcMain = mainImg.src;
			var srcThumb = this.src;
			mainImg.src = srcThumb;
			this.src = srcMain;
		}
	}

	[].forEach.call(thumbnails, function(el) {
		el.addEventListener("click", switchImage, false);
	});
</script>