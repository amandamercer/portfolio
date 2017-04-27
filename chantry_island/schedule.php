<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $popContact = getContact();

  $id = 1;
  $popRates = getRates($id);


  require_once("includes/header.php");
?>

      <!-- Header section -->
      <div class="row aboutInfo">
        <div class="small-12 medium-12 large-12 columns aboutHead">
          <h2>Booking Schedule & Rates</h2>
          <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
        </div>
      </div>

      <div class="row bookingSec">
        <div class="small-12 small-centered medium-12 large-12 columns">
          <div class="small-12 medium-7 large-7 columns" id="ratesSec">
            <h3>Chantry Island Tour Schedule and Rates</h3>
            <p><?php echo $popRates['schedule_text'] ?></p>
          </div>
          <div class="small-12 medium-4 large-4 columns" id="bookTour2">
            <h3>Book a Tour</h3>
            <p>Pre-book to avoid disappointment.<br>
            Call: <a href="tel:<?php echo $popContact['contact_phone'] ?>"><?php echo $popContact['contact_phone'] ?></a><br>
            Toll Free: <a href="tel:<?php echo $popContact['contact_tollphone'] ?>"><?php echo $popContact['contact_tollphone'] ?></a></p>
          </div>
        </div>
      </div>

      <div class="row" id="tabsSec">
        <div class="small-12 medium-12 large-12 columns">
          <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
            <li class="tabs-title is-active"><a href="#panelA">MAY</a></li>
            <li class="tabs-title"><a href="#panelB">JUNE</a></li>
            <li class="tabs-title"><a href="#panelC">JULY</a></li>
            <li class="tabs-title"><a href="#panelD">AUGUST</a></li>
            <li class="tabs-title"><a href="#panelE">SEPTEMBER</a></li>
          </ul>

          <div class="tabs-content" data-tabs-content="collapsing-tabs">
            <div class="tabs-panel is-active row" id="panelA">
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/may.png" alt="May Calender">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <h4>MAY (WEEKENDS ONLY, 27, 28)</h4>
                <p style="float:left;">Tours leave at: <br>1:00 pm and 3:00 pm</p>
              </div>
            </div>

            <div class="tabs-panel row" id="panelB">
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/june.png" alt="June">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <h4>JUNE (WEEKENDS ONLY)</h4>
                <p style="float:left;">Tours leave at: <br>1:00 pm and 3:00 pm</p>
              </div>
            </div>

            <div class="tabs-panel row" id="panelC">
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/july.png" alt="July">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <h4>JULY (7 Days a week)</h4>
                <p style="float:left;">During the week tours leave at: <br>1:00 pm and 3:00 pm</p>
                <p style="float:left;">Weekend tours leave at: <br>9:30 am, 1:00  pm and 3:00 pm</p>
              </div>
            </div>

            <div class="tabs-panel row" id="panelD">
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/august.png" alt="August">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <h4>AUGUST (7 Days a week)</h4>
                <p style="float:left;">Everyday tours leave at: <br>9:30 am, 1:00  pm and 3:00 pm</p>
              </div>
            </div>

            <div class="tabs-panel row" id="panelE">
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/sept.png" alt="September">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <h4>SEPTEMBER (1,2,3,4)</h4>
                <p style="float:left;">Tours leave at: <br>1:00  pm and 3:00 pm</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="schedSec">
        <div class="small-12 medium-12 large-12 columns">
          <h3>Chantry Island Tour Base & Gift Shop </h3>
          <table class="tg">
            <tr>
              <th class="tg-s6z2" id="dateTitle">DATE</th>
              <th class="tg-baqh" id="timeTitle" colspan="2">TIME</th>
            </tr>
            <tr>
              <td class="tg-s6z2 borderClass row1">May 27, 28</td>
              <td class="tg-s6z2 borderClass row1">12:00 PM</td>
              <td class="tg-s6z2 row1">5:30 PM</td>
            </tr>
            <tr>
              <td class="tg-s6z2 borderClass row2">June 3, 4, 10, 11, 17, 18, 24, 25</td>
              <td class="tg-s6z2 borderClass row2">12:00 PM</td>
              <td class="tg-s6z2 row2">5:30 PM</td>
            </tr>
            <tr>
              <td class="tg-s6z2 borderClass row3">July 1 - Sept 4<br>(7 days a week)</td>
              <td class="tg-s6z2 borderClass row3">9:00 AM</td>
              <td class="tg-s6z2 row3">5:30 PM</td>
            </tr>
          </table>
        </div>
        <div class="small-12 medium-12 large-12 columns" id="ratesBlurb">
          <h3>Rates</h3>
          <p><?php echo $popRates['schedule_rates'] ?></p>
        </div>
      </div>     

<?php
  require_once("includes/footer.php");
?>