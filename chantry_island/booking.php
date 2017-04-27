<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $popContact = getContact();

  $popBooking = getBooking();

  require_once("includes/header.php");
?>

      <!-- Header section -->
      <div class="row aboutInfo">
        <div class="small-12 medium-12 large-12 columns aboutHead">
          <h2>Booking Information</h2>
          <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
        </div>
      </div>

      <div class="row bookingSec">
        <div class="small-12 small-centered medium-12 large-12 columns">
          <div class="small-12 small-centered medium-4 large-4 columns" id="bookTour">
            <h3>Book a Tour</h3>
            <p>Pre-book to avoid disappointment.<br>
            Call: <a href="tel:<?php echo $popContact['contact_phone'] ?>"><?php echo $popContact['contact_phone'] ?></a><br>
            Toll Free:<a href="tel:<?php echo $popContact['contact_tollphone'] ?>"><?php echo $popContact['contact_tollphone'] ?></a></p>
          </div>
          <div class="small-12 medium-7 large-7 columns" id="arriveSec">
            <h3>When and Where to Arrive</h3>
            <p>Come to the Chantry Island Tour Base and Gift Shop located at the south side of the Saugeen River at the harbour in Southampton (See Maps) and arrive 15 minutes ahead of your scheduled tour. Check in and receive your ticket. You will be directed to the dock for the Peerless II.</p>
          </div>
        </div>
      </div>

      <div class="row" id="tourSec">
        <div class="small-12 medium-12 large-12 columns">
          <div class="small-12 medium-7 large-7 columns">
            <h3>Tour Information</h3>
            <p>The tour is much like a medium hike and requires a degree of agility and fitness. You can enjoy the tour without climbing the 106 steps in the Lighthouse tower. However, when you do reach the light room, you will always remember the view.<br><br>
            For safety, children must be a minimum of 4 feet tall and must be accompanied by an adult.<br><br>
            Footwear suitable for hiking is mandatory. For safety reasons, flip-flops are not allowed.<br><br><br>
            <b>Also Note:</b><br>
            <?php echo $popBooking['booking_info'] ?></p>
          </div>
          <div class="small-12 medium-5 large-5 columns">
            <img src="images/vicki_tomori/island_3.jpg" alt="After Picture 1" id="afterPic1">
          </div>
        </div>
      </div>     

<?php
  require_once("includes/footer.php");
?>