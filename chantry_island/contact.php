<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $popContact = getContact();

  require_once("includes/header.php");
?>

      <!-- Header section -->
      <div class="row aboutInfo">
        <div class="small-12 medium-12 large-12 columns aboutHead">
          <h2>Contact</h2>
          <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
        </div>
      </div>

      <div class="row bookingSec3">
        <div class="small-12 small-centered medium-12 large-12 columns">
          <div class="small-12 medium-6 large-6 columns" id="addressSec">
            <h3>Mailing Address</h3>
            <p><?php echo $popContact['contact_address'] ?></p>
          </div>
          <div class="small-12 medium-6 large-6 columns" id="bookTour3">
            <h3>Book a Tour</h3>
            <p>Pre-book to avoid disappointment.<br>
            Call: <a href="tel:<?php echo $popContact['contact_phone'] ?>"><?php echo $popContact['contact_phone'] ?></a><br>
            Toll Free: <a href="tel:<?php echo $popContact['contact_tollphone'] ?>"><?php echo $popContact['contact_tollphone'] ?></a></p>
          </div>
        </div>
      </div>

      <div class="row" id="mapSec">
        <div class="small-12 medium-12 large-12 columns">
          <h3>Map</h3>
          <div class="preload-wrapper">
            <i class="fa fa-spinner fa-spin"></i>
            <span>Loading map, please wait...</span>
          </div>
          <div class="map-wrapper"></div>
        </div>
        <div class="small-12 medium-12 large-12 columns" id="locatBlurb">
          <h3>Location</h3>
          <p><?php echo $popContact['contact_address'] ?></p>
        </div>
        <div class="small-12 medium-12 large-12 columns" id="directBlurb">
          <h3>Directions</h3>
          <p>From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street (the main street), turn north on Huron or Grosvenor Street and look for the signs.</p>
        </div>
      </div>

      <div class="row" id="contactSec">
        <div class="small-12 medium-12 large-12 columns">
          <h3>Contact</h3>
          <form action="contact.php" method="post">
              <input type="text" name="fname" placeholder="First Name" required>
              <input type="text" name="lname" placeholder="Last Name" required><br>
              <input type="tel" name="phone" placeholder="Phone Number" required>
              <input type="email" name="email" placeholder="Email" required>
              <input type="text" name="subject" placeholder="Subject" required>
              <textarea placeholder="Message" name="message" required></textarea>
              <input type="submit" name="submit" value="Submit" style="font-size: large;">
            </form>
        </div>
      </div>

     <!-- Footer -->
     <?php
        require_once("includes/footer.php");
      ?>
