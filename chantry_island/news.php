<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $type = 1;
  $popForm = getNews($type);
  $tbl = "tbl_news";
  $col = "news_type";
  $id = 1;
  $news = dynamicNews($tbl, $col, $id);

  require_once("includes/header.php");
?>

      <!-- Header section -->
      <div class="row aboutInfo">
        <div class="small-12 medium-12 large-12 columns aboutHead">
          <h2>News</h2>
          <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
        </div>
        <div class="small-12 medium-12 large-12 columns aboutBlurb">
          <p>Welcome to our News page. Here we'll cover new projects, and give information about ongoing projects. Our Events page has news about upcoming events and things you don't want to miss. Don't forget to connect to our Facebook page as well to find out more.<br><br>
          Check back soon for more news about the island and updates on all of our projects. Expect to see more frequent updating during our operating season from the end of May to mid-September. View our <a href="schedule.php">schedule</a> for exact dates.</p>
        </div>
      </div>

      <div class="row" id="newsStories">
        <div class="small-12 medium-12 large-12 columns" id="featured">
          <h3>Latest News</h3>
        </div>
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