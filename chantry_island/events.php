<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $type = 2;
  $popForm = getEvents($type);
  $tbl = "tbl_news";
  $col = "news_type";
  $id = 2;
  $news = dynamicEvents($tbl, $col, $id);

  require_once("includes/header.php");
?>

      <!-- Header section -->
      <div class="row aboutInfo">
        <div class="small-12 medium-12 large-12 columns aboutHead">
          <h2>Events</h2>
          <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
        </div>
        <div class="small-12 medium-12 large-12 columns aboutBlurb">
          <p>Welcome to our Events page. Here we'll let you know about upcoming events and ongoing events that involve the Marine Heritage Society. Check back often during our operating season so that you don't miss anything.<br><br>
          You can also connect with our Facebook page for updates about current events and more information.</p>
        </div>
      </div>

      <div class="row" id="eventsStories">
        <div class="small-12 medium-12 large-12 columns">
          <?php
              while($row = mysqli_fetch_array($news)) {
                echo "<div class=\"small-12 medium-6 medium-offset-3 large-6 large-offset-3 columns end\">";
                echo "<img src=\"images/news/{$row['news_image']}\" alt=\"{$row['news_title']}\">";
                echo "<h4>{$row['news_title']}</h4>";
                echo "<h5>{$row['news_date']}</h5>";
                echo "<p>{$row['news_content']}</p>";
                echo "</div>";
              }
            ?>
        </div>
      </div>

<?php
  require_once("includes/footer.php");
?>