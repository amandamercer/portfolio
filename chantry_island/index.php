<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $id = 1;
  $popForm = getHomepage($id);

  require_once("includes/header.php");
?>
      <!-- Header section -->
      <header class="row" id="headerSec">
        <div class="small-12 medium-12 large-12 columns" id="headBlurb">
          <p>COME AND VISIT<br><span id="chIsl">CHANTRY ISLAND</span><br><span id="lakeHur">AND LAKE HURON</span></p><br>
          <a href="booking.php" class="button" id="tourBut">BOOK A TOUR TODAY</a>
        </div>
      </header>

      <!-- Marine Heritage Society section -->
      <div class="row" id="marineHer">
        <div class="small-12 medium-12 large-12 columns">
          <h2>Marine Heritage Society</h2>
            <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
            <p><?php echo $popForm['pages_sectionone'] ?></p>
        </div>
      </div>

      <!-- Gallery section -->
      <div class="row" id="gallerySec">
        <div class="small-12 medium-12 large-12 columns">
          <div class="small-6 medium-3 large-3 columns">
            <a href="gallery.php"><img src="images/george_plant/peerless_3.jpg" alt="Boat"></a>
          </div>
          <div class="small-6 medium-3 large-3 columns">
            <a href="gallery.php"><img src="images/vicki_tomori/flower.jpg" alt="Flower"></a>
          </div>
          <div class="small-6 medium-3 large-3 columns">
            <a href="gallery.php"><img src="images/vicki_tomori/cottage_4.jpg" alt="Office"></a>
          </div>
          <div class="small-6 medium-3 large-3 columns">
            <a href="gallery.php"><img src="images/misc/tour_base_1.JPG" alt="Office Sign"></a>
          </div>
        </div>
      </div>

      <!-- Touring section -->
      <div class="row" id="touringSec">
        <div class="small-12 medium-12 large-12 columns">
          <h2>Touring Chantry Island</h2>
            <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
            <p><?php echo $popForm['pages_sectiontwo'] ?></p>
        </div>
      </div>

      <!-- Explore section -->
      <div class="row" id="exploreSec">
        <h2>Explore</h2>
        <div class="small-12 medium-12 large-12 columns">
          <div class="small-12 medium-6 large-4 columns">
            <img src="images/water.svg" alt="Water icon">
            <h3><a href="http://www.saugeenshores.ca/en/index.asp" target="_blank">Saugeen Shores</a></h3>
            <p>The Saugeen Shores website is shared between the municipality and the local Chamber of Commerce. Let this website help you plan your visit when you come to tour Chantry Island.</p>
          </div>
          <div class="small-12 medium-6 large-4 columns">
            <img src="images/game.svg" alt="Tennis icon">
            <h3><a href="http://www.southamptontennisclub.ca/" target="_blank">Southampton Tennis Club</a></h3>
            <p>The Southampton Tennis Club is a thriving seasonal tennis club on the sunny shores of Lake Huron. Visit our website for more information.</p>
          </div>
          <div class="small-12 medium-6 large-4 columns end" id="spacer2">
            <img src="images/big-binoculars.svg" alt="Binoculars icon">
            <h3>Explore Lake Huron</h3>
            <p>Learn about the Lake Huron Center for Coastal Conservation. Here you will learn about the different ecosystems around the lake and many of the beautiful areas to visit when in the area.</p>
          </div>
          <div class="small-12 medium-6 large-4 columns" id="spacer">
            <img src="images/business.svg" alt="Museum icon">
            <h3><a href="http://www.brucemuseum.ca/" target="_blank">Bruce County Museum & Cultural Centre</a></h3>
            <p>The Bruce County Museum and Cultural Centre offers a journey through thousands of years of natural and human history. Check out their awesome Marine Gallery.</p>
          </div>
          <div class="small-12 medium-6 large-4 columns">
            <img src="images/old-lighthouse.svg" alt="Lighthouse icon">
            <h3><a href="http://www.brucecoastlighthouses.com/" target="_blank">Bruce Coast Lighthouse Tour</a></h3>
            <p>Enjoy the Bruce Coast Lighthouse tour. There are 15 different lighthouses for you to explore along the shorelines of Lake Huron and Georgian Bay. The Bruce Coast Lighthouse Tour is a world-class marine heritage experience available in Ontario, Canada.</p>
          </div>
          <div class="small-12 medium-6 large-4 columns end">
            <img src="images/big-compass.svg" alt="Compass icon">
            <h3><a href="http://www.explorethebruce.com/" target="_blank">Explore the Bruce</a></h3>
            <p>Explore the Bruce is the Official Travel web site of Bruce County, one of the most spectacular all season destinations in Ontario. Check out this link for more Lighthouse Destinations.</p>
          </div>
        </div>
      </div>

<?php
  require_once("includes/footer.php");
?>