<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $tbl = "tbl_gallery";
  $images = getAll($tbl);

  require_once("includes/header.php");
?>

      <!-- Header section -->
      <div class="row aboutInfo">
        <div class="small-12 medium-12 large-12 columns aboutHead">
          <h2>Photo Gallery</h2>
          <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
        </div>
        <div class="small-12 medium-12 large-12 columns aboutBlurb">
          <p>Welcome to our photo gallery. This section includes pictures of Chantry Island and the area of Lake Huron surrounding the Island. It also includes pictures of the lighthouse and keeper's cottage inside and out, as well as photos of some of the birds and flowers native to the island.</p>
        </div>
      </div>

      <div class="row" id="galSec">
        <div id="photo-viewer">
          <!-- <img src="images/gallery/aerial_1.jpg" alt="Aerial View" class="gallery-large hidden"> -->
          <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
            <ul class="orbit-container">
              <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
              <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                <?php
                  while($row=mysqli_fetch_array($images)){
                      echo "<li class=\"orbit-slide\">";
                      echo "<img class=\"orbit-image\" src=\"images/gallery/{$row['gallery_image']}\" alt=\"{$row['gallery_credit']}\">";
                      echo "<figcaption class=\"orbit-caption\"><p class=\"desc-text\">Photo taken by: Karen Smith</p></figcaption>";
                      echo "</li>";
                    }
                  ?>
              </ul>
            </div>
          <!-- <p class="desc-text">Photo taken by: Karen Smith</p> -->
        </div>
        <div id="thumbnails">
         <!-- <?php
            while($row=mysqli_fetch_array($images)){
                echo "<img id=\"{$row['gallery_id']}\" src=\"images/gallery/{$row['gallery_image']}\" alt=\"{$row['gallery_credit']}\">";
              }
          ?> -->
        </div>
      </div>

      <div class="row" id="socialBlurb">
        <div class="small-12 medium-12 large-12 columns">
          <p>Do you have some photos of your trip to Chantry Island? Click the social media link on the left side of the page to go to our Facebook page and share them with us. They will have the opportunity to be featured in our website's gallery for all other visitors to see.</p>
        </div>
      </div>

<?php
  require_once("includes/footer.php");
?>