<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $popVol = getVolunteers();
  $tbl = "tbl_volunteers";
  $col = "volunteers_id";
  $id = "volunteers_id";
  $volunteers = getSingle($tbl, $col, $id);

  require_once("includes/header.php");
?>

      <!-- Header section -->
      <div class="row aboutInfo">
        <div class="small-12 medium-12 large-12 columns aboutHead">
          <h2>Marine Heritage Society Volunteers</h2>
          <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
        </div>
        <div class="small-12 medium-12 large-12 columns aboutBlurb">
          <p>The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community's marine history. Since so many people volunteer their time and energy to help our organization function, this page is dedicated to our wonderful volunteers. Thank you all very much, this would not be possible without your time and donations.</p>
        </div>
      </div>

      <div class="row" id="volSec" align="center">
        <?php
              while($row = mysqli_fetch_array($volunteers)) {
                echo "<div class=\"small-6 medium-6 large-3 columns end\">";
                echo "<img src=\"images/volunteers/{$row['volunteers_image']}\" alt=\"{$row['volunteers_name']}\">";
                echo "<h4>{$row['volunteers_name']}</h4>";
                echo "<h5>{$row['volunteers_role']}</h5>";
                echo "</div>";
              }
        ?>
      </div>

<?php
  require_once("includes/footer.php");
?>