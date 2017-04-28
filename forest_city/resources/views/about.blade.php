@extends('header')
@section('content')
<div class="aboutCon">

<!-- About Blurb Section -->
	<section class="row" id="aboutSec">
		<h2>About Forest City Cakes</h2>
			<div class="small-12 medium-12 large-5 columns float-right">
			  	<img src="images/about_img.jpg" alt="Cupcakes" id="aboutImg">
			</div>
			<div class="small-12 medium-12 large-7 columns float-left aboutBlurb">
			  	<p>Small batch from scratch desserts, vegan and gluten-free options always available. Currently making all things baked and unbaked including jar cakes and cheesecakes as well as rawsquares and tarts, we use organic and local products whenever possible. We love to collaborate with our local business pals. Please be in touch if you think we can work together and have some fun.<br><br>Check out one of our <a href="{{ route('contact') }}" class="button clickBut">local retail partners</a> for a taste of Forest City Cakes or <a href="{{ route('contact') }}" class="button clickBut">contact us</a> with a custom order for your next celebration!</p>
			</div>
	</section>
	<section class="row" id="faqSec">
        <h2>Frequently Asked Questions</h2>
        <div class="small-12 medium-12 large-12 columns float-center">
          <h4>Custom Cakes:</h4>
            <ul class="cakeInfo">
              <li><p>All of our cakes come in any of the flavours seen on our Products page (based on seasonal rotation). If you would like to make a custom order for a flavour you do not see on our menu, please email or phone us and we would be happy to discuss what we can do for you.</p></li>
              <li><p>All of our cakes are 3 layers and the sizes are 6” or 8”.</p></li>
            </ul>
            <ul class="cakeImages">
              <li><img src="images/6_inch_cake_icon.png" alt="6inch Cake" id="sixInch"><img src="images/8_inch_cake_icon.png" alt="8inch Cake" id="eightInch"></li><br><br>
              <li class="inlineSpace"><p>*serves 6-8 people</p></li>
              <!-- <li class="inlineSpace"></li> -->
              <li class="inlineSpace"><p>*serves 8-10 people</p></li>
            </ul>
          <h4>Wholesale Process:</h4>
            <ul class="wholesaleInfo">
              <li><p>Minimum standing order of three dozen cupcakes or two dozen jar cakes (one dozen per flavour based on rotating seasonal menu) weekly.</p></li>
              <li><p>Delivery available Wednesday or Friday.</p></li>
              <li><p>Invoice will be emailed a day prior to delivery. Payment is expected on the day of delivery unless an alternative agreement is arranged.</p></li>
              <li><p>72 hours notice is required for changes to standing orders.</p></li>
            </ul>
            <h4>Miscellaneous:</h4>
            <ul>
              <li><p><span class="pinkBold">q:</span> Do you sell mini cupcakes?</p></li>
              <li><p><span class="pinkBold">a:</span> No, only standard medium size cupcakes are available.</p></li>
            </ul>
            <ul>
              <li><p><span class="pinkBold">q:</span> How do I store my products and how long will they last?</p></li>
              <li><p><span class="pinkBold">a:</span> We do not use any preservatives, so our cupcakes and cakes are always meant to be enjoyed fresh and at room temperature. Always keep your cupcakes at room temperature, never in the refrigerator as this will dry them out. If you aren’t able to consume our products right away or have ordered ahead of time, place in an airtight container and freeze. Allow cupcakes to defrost and come to room temperature before enjoying.</p></li>
            </ul>
            <ul>
              <li><p><span class="pinkBold">q:</span> Do you sell vegan, wheat/gluten and dairy free cupcakes?</p></li>
              <li><p><span class="pinkBold">a:</span> Yes we offer both vegan and gluten free products, however we are not certified gluten free but use best efforts to prevent cross contamination.</p></li>
            </ul>
            <ul>
              <li><p><span class="pinkBold">q:</span> Do your products contain nuts?</p></li>
              <li><p><span class="pinkBold">a:</span> Some of our recipes are baked with nuts. We recommend that customers with sensitivity to nuts refrain from consuming our products.</p></li>
            </ul>
            <ul>
              <li><p><span class="pinkBold">q:</span> Can I purchase additional packaging for cupcakes?</p></li>
              <li><p><span class="pinkBold">a:</span> Yes, additional packaging is available for your order if required. The cost is $1.00/each for individual cupcake container or each additional six cell containers.</p></li>
            </ul>
            <ul>
              <li><p><span class="pinkBold">q:</span> What is your cancellation policy?</p></li>
              <li><p><span class="pinkBold">a:</span> Cancellations of a pre-paid order within 7  2 hours  of your order's pick-up time will be given a full refund, less than  72 hours  will be given 50% refund.</p></li>
            </ul>
            <ul>
              <li><p><span class="pinkBold">q:</span> Do you make wedding cakes?</p></li>
              <li><p><span class="pinkBold">a:</span> No. However we will make large orders of our cupcakes or jar cakes for your special event with proper advance notice. If you are looking to get a very large order please call and discuss your needs with as much time as possible.</p></li>
            </ul>
        </div>
      </section>
</div>

@endsection 