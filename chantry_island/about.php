<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $popForm = getAbout();

  require_once("includes/header.php");
?>

      <!-- Header section -->
      <div class="row aboutInfo">
        <div class="small-12 medium-12 large-12 columns aboutHead">
          <h2>About Chantry Island</h2>
          <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
        </div>

        <div class="small-12 medium-12 large-12 columns aboutVid">
          <video controls style="max-width: 600px; width:100%; margin-top: 2em;">
          <source src="video/Chantry-Island-Final_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>

        <div class="small-12 medium-12 large-12 columns aboutBlurb">
          <p>Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island is a majestic Imperial Lighthouse built in the mid 1800’s, as well as the Keeper’s quarters and a boat house. In 1822, during a hydrographic survey, Captain Henry Bayfield of the Royal Navy christened the island and named it after his friend and British sculptor Sir Francis Chantry.</p>
        </div>
      </div>

      <div class="row" id="tabsSec">
        <div class="small-12 medium-12 large-12 columns">
          <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
            <li class="tabs-title is-active"><a href="#panel1">ISLAND</a></li>
            <li class="tabs-title"><a href="#panel2">LIGHTHOUSE</a></li>
            <li class="tabs-title"><a href="#panel3">BIRD SANCTUARY</a></li>
            <li class="tabs-title"><a href="#panel4">SUNSETS</a></li>
          </ul>
         <div class="tabs-content" data-tabs-content="collapsing-tabs">
            <div class="tabs-panel is-active row" id="panel1">
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/george_plant/peerless_3.jpg" alt="Tour Boat">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <h4>Chantry Island</h4>
                <p><?php echo $popForm['about_tabone'] ?></p>
              </div>
            </div>

            <div class="tabs-panel row" id="panel2">
              <div class="small-12 medium-6 large-6 columns">
                <h4>The Lighthouse History</h4>
                <p><?php echo $popForm['about_tabtwo'] ?></p>
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/vicki_tomori/island_1.jpg" alt="Lighthouse">
              </div>
            </div>

            <div class="tabs-panel row" id="panel3">
              <div class="small-12 medium-6 large-6 columns">
                <h4>Federal Bird Sanctuary</h4>
                <p><?php echo $popForm['about_tabthree'] ?></p>
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/carol_walberg/birds_1.jpg" alt="Birds">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/nancy_calder/birds_3.jpg" alt="Birds">
              </div>
            </div>

            <div class="tabs-panel row" id="panel4">
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/terry_thomas/sunset_3.jpg" alt="Sunset">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/terry_thomas/sunset_4.bmp" alt="Sunset">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="subCats">
        <div class="small-12 medium-6 large-4 columns" id="newsSec">
          <a href="news.php"><div id="newsImg"><h3>News</h3></div></a>
          <p>Want to know what is NEW around the Marine Heritage Society and Chantry Island? Click below to learn more about new projects, and get information about ongoing projects.</p>
          <a href="news.php" class="button">CLICK HERE >></a>
        </div>
        <div class="small-12 medium-6 large-4 columns" id="eventsSec">
          <a href="events.php"><div id="eventsImg"><h3>Events</h3></div></a>
          <p>Looking for information about up coming events held on Chantry Island or by the Marine Heritage Society? Click the link below to access that information.</p>
          <a href="events.php" class="button">CLICK HERE >></a>
        </div>
        <div class="small-12 medium-6 large-4 columns" id="restSec">
          <a href="restoration.php"><div id="restImg"><h3>Restoration</h3></div></a>
          <p>Interested in the restoration of Chantry Island’s iconic cottage and lighthouse? Click the link to learn about the process and history behind this beautiful island.</p>
          <a href="restoration.php" class="button">CLICK HERE >></a>
        </div>
      </div>

<?php
  require_once("includes/footer.php");
?>