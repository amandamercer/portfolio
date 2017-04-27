<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $popContact = getContact();

?> 

     <!-- Footer -->
      <footer class="row" id="footerSec">
        <div class="small-12 medium-12 medium-centered large-9 columns" id="footerPad">
          <div class="small-12 medium-3 large-3 columns" id="bookingFoot">
            <a href="index.php"><img src="images/new_logo.svg" id="footerLogo" alt="Logo"></a>
            <h4>Book a Tour</h4>
            <p>We offer tours throughout the summer season from late May to mid-September. During June and July, we offer the tour daily, click <a href="bookings.php">here</a> for the exact schedule. Note, it does change on a yearly basis.</p>
            <a href="booking.php" class="button" id="tourBut2">BOOK NOW >></a>
          </div>
          <div class="hide-for-small-only medium-2 large-3 columns" id="footNav">
            <div class="medium-4 large-6 columns" id="leftNav">
              <ul>
                <li><a href="index.php" class="mainLink">HOME</a></li>
                <li><a href="about.php" class="mainLink">ABOUT</a></li>
                <li><a href="restoration.php" class="subLink">RESTORATION</a></li>
                <li><a href="news.php" class="subLink">NEWS</a></li>
                <li><a href="events.php" class="subLink">EVENTS</a></li>
                <li><a href="volunteers.php" class="subLink">VOLUNTEERS</a></li>
              </ul>
            </div>
            <div class="medium-4 large-6 columns" id="midNav">
              <ul>
                <li><a href="booking.php" class="mainLink">BOOKING</a></li>
                <li><a href="schedule.php" class="subLink">SCHEDULE & RATES</a></li>
                <li><a href="gallery.php" class="mainLink">GALLERY</a></li>
                <li><a href="donations.php" class="mainLink">DONATIONS</a></li>
              </ul>
            </div><br>
            <div class="medium-4 large-6 columns" id="rightNav">
              <ul>
                <li><a href="contact.php" class="mainLink">CONTACT</a></li>
                <li><a href="signin.php" class="mainLink">ADMIN</a></li>
              </ul>
            </div>
          </div>
          <div class="small-12 medium-3 large-4 columns end" id="address">
            <h4>Contact Us</h4>
            <p><b>ADDRESS:</b> <?php echo $popContact['contact_address'] ?><br>
            <b>CALL:</b> <a href="tel:<?php echo $popContact['contact_phone'] ?>"><?php echo $popContact['contact_phone'] ?></a><br>
            <b>TOLL FREE:</b> <a href="tel:<?php echo $popContact['contact_tollphone'] ?>"><?php echo $popContact['contact_tollphone'] ?></a></p>
          </div>
          <div class="small-12 medium-4 large-3 columns end" id="conForm">
            <h5>Fill in this form to contact us via email.</h5>
            <form action="contact.php" method="post">
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="lname" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea placeholder="Message" name="message"></textarea>
            <input type="submit" name="submit" value="Submit">
          </form>
          </div>
        </div>
          <div class="small-12 medium-12 large-12 columns" id="copyright">
            <p>© 2017 Marine Heritage Society. All Rights Reserved.</p>
          </div>
      </footer>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/map_api.js"></script>
    <script src="js/app.js"></script>
    <script src="js/main.js"></script>
    <script src="js/TweenMax.min.js"></script>
  </body>
</html>
