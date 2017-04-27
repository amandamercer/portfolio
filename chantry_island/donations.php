<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $popContact = getContact();

  $popDonate = getDonate();

  require_once("includes/header.php");
?>

      <!-- Header section -->
      <div class="row aboutInfo">
        <div class="small-12 medium-12 large-12 columns aboutHead">
          <h2>Donations</h2>
          <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
        </div>
      </div>

      <div class="row bookingSec2">
        <div class="small-12 small-centered medium-12 large-12 columns">
          <div class="small-12 medium-7 large-7 columns" id="donateSec">
            <p>Since 1997 we have had a tremendous amount of support by donations. If you would like to be included, please send a cheque or money order to the mailing address provided.</p>
          </div>
          <div class="small-12 medium-4 large-4 columns" id="mailAdd">
            <h3>Mailing Address</h3>
            <p><?php echo $popContact['contact_address'] ?><br><br>
            Please specify your donation preference:<br>
            Chantry Island and/or New Tour Boat</p>
          </div>
          <div class="small-12 medium-7 large-7 columns" id="sunsetPic">
            <img src="images/terry_thomas/sunset_1.jpg" alt="Sunset Picture">
          </div>
        </div>
      </div>

      <div class="row" id="donorSec">
        <div class="small-12 medium-12 large-12 columns" id="donorList">
          <h3>Donor Category List</h3>
          <div><?php echo $popDonate['donation_text'] ?><br><br> <span style="font-weight: bold;"> Please mail your donations to:<br><?php echo $popContact['contact_address'] ?></span>
          <!-- <a href="#"><img src="images/btn_donate.gif" alt="Donate Button"></a> -->
        </div>
        </div>
        <div class="small-12 medium-6 large-4 columns status">
          <p><?php echo $popDonate['donation_shipmate'] ?></p>
        </div>
        <div class="small-12 medium-6 large-4 columns status">
          <p><?php echo $popDonate['donation_lifesaving'] ?></p>
        </div>
        <div class="small-12 medium-6 large-4 columns status">
          <p><?php echo $popDonate['donation_assistant'] ?></p>
        </div>
        <div class="small-12 medium-6 large-4 columns status">
          <p><?php echo $popDonate['donation_lighthouse'] ?></p>
        </div>
        <div class="small-12 medium-6 large-4 columns status">
          <p><?php echo $popDonate['donation_captain'] ?></p>
        </div>
        <div class="small-12 medium-6 large-4 columns status">
          <p><?php echo $popDonate['donation_queen'] ?></p>
        </div>
      </div>

<?php
  require_once("includes/footer.php");
?>
