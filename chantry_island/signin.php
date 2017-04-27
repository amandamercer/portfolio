<?php
  ini_set('display errors',1);
  error_reporting(E_ALL);

  require_once("admin/phpscripts/init.php");
  
  $ip = $_SERVER["REMOTE_ADDR"];
  //echo $ip;
  if(isset($_POST['submit'])) {
    //echo "Thanks for clicking...";
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if($username != "" && $password != "") {
      $result = logIn($username, $password, $ip);
      $message = $result;
    }else{
      $message = "Please fill in the required fields.";
    }
  }

  require_once("includes/header.php");
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
          <div class="errorMsg"><?php if(!empty($message)){echo $message;} ?></div>
          <form action="signin.php" method="post">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Sign In">
          </form>
        </div>
      </div>     

<?php
  require_once("includes/footer.php");
?>