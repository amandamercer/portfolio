<?php
  require_once("includes/header.html");
?>

      <!-- Header section -->
      <div class="row aboutInfo">
        <div class="small-12 medium-12 large-12 columns aboutHead">
          <h2>Admin Sign In</h2>
          <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
        </div>
      </div>

      <div class="row" id="signinSec">
        <div class="small-12 medium-12 large-12 columns">
          <form action="signin.php" method="post">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Sign In">
          </form>
        </div>
      </div>     

<?php
  require_once("includes/footer.html");
?>