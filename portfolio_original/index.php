<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $tbl = "tbl_services";
  $icons = getAll($tbl);

  $tbl2 = "tbl_portfolio";
  $id = "portfolio_id";
  $portfolio = getAll2($tbl2, $id);

  $col = "portfolio_modal";
  $id2 = "portfolio_modal";
  $getSingle = getSingle();

  $errors = array();

  if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $message = $_POST['message'];
    $direct = "index.php";

    $required = array("name", "email", "message");
    foreach($required as $require) {
      $value = trim($_POST[$require]);
      if(!has_value($value)) {
        $errors[$require]=$require." cannot be blank";
      }
    }

    if(has_value($value)) {
      sendMessage($name, $email, $company, $message, $direct);
    }else{
      $errors[$require];
    }

  }

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amanda Mercer - Front End Web Developer</title>
    <meta property="og:title" content="Amanda Mercer - Front End Web Developer" />
    <meta property="og:description" content="I am a dynamically trained artist who enjoys creating responsive, user-friendly websites; engaging, timeless designs; and powerful and meaningful entertainment experiences." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="www.amandamercer.ca" />
    <meta property="og:image" content="http://amandamercer.ca/images/header_img.jpg" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/TweenMax.min.js"></script>
    <script src="js/plugins/ScrollToPlugin.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="favicon/mstile-310x310.png" />

  </head>
  <body>

  <div class="preLoad"><p>Loading your experience...</p></div>
  <h1 class="hide">Amanda Mercer - Front End Web Developer</h1>
    
    <!-- Navigation -->
    <a href="#"><div class="logo-box">
      <img src="images/logo.svg" alt="Logo" class="logo">
    </div></a>
    <div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
      <div class="nav-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="top-bar trans-nav" id="example-animated-menu" data-animate="hinge-in-from-top hinge-out-from-top">
      <div class="top-bar-left">
        <ul class="dropdown menu main-menu" data-dropdown-menu>
          <li><a href="#" class="links" id="top">Home</a></li>
          <li><a href="#" class="links" id="services">Services</a></li>
          <li><a href="#" class="links" id="about">About</a></li>
          <li><form class="resume" method="get" action="files/amanda_resume.pdf" target="_blank"><button class="links">Résumé</button></form></li>
          <li><a href="#" class="links" id="portfolio">Portfolio</a></li>
          <li><a href="#" class="links" id="contact">Contact</a></li>
        </ul>
        <ul class="social-media">
          <li><a href="https://www.instagram.com/devamandamercer/" target="_blank" class="links"><img src="images/instagram.svg" alt="Instagram" class="icons"></a></li>
          <li><a href="https://www.linkedin.com/in/amandacmercer/" target="_blank" class="links"><img src="images/linkedin.svg" alt="LinkedIn" class="icons"></a></li>
          <li><a href="https://github.com/amandamercer/portfolio" target="_blank" class="links"><img src="images/github.svg" alt="GitHub" class="icons"></a></li>
        </ul>
      </div>
    </div>

    <!-- Splash Section -->
    <header class="expanded row parallax">
    <h2 class="hide">Splash Section</h2>
      <div class="small-12 medium-5 large-5 columns end parallex header-grey"></div>
        <p class="deco-text">Mercer</p>
        <p class="intro-text">Hello, my name is <span class="col-change">Amanda Mercer</span>.<br>
        I am a front-end web developer from Ontario, Canada.</p>
        <div class="line"></div>
        <div class="box"></div>
    </header>

    <!-- Services Section -->
    <section class="expanded row parallax services">
    <h2 class="hide">Services Section</h2>
      <div class="small-12 medium-6 large-6 columns left-section">
        <div class="title-section">
          <h3>My <span class="hide">Services</span></h3>
          <svg version="1.1" id="services-title" class="path " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="691.836px" height="156.071px" viewBox="0 0 691.836 156.071" enable-background="new 0 0 691.836 156.071" xml:space="preserve">
            <g>
              <path fill="none" stroke="#3C363C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" d="M2.842,125.19
                c0,0,211.158,68.13,305.881-50.64l2.847-2.682c0,0-2.766,13.479-1.789,18.194c0,0-3.333,59.718-36.667,64.052
                c0,0-15.667-1.667-3-16c0,0,4-7.667,40.667-25.667c0,0,52.334-24,56.667-39c0,0-1.334-4.333-6.667-1.333
                c0,0-17.333,10.334-10,21.667c0,0,6.999,12,27.333,1c0,0,31.334-15,69.667-64c0,0,3-7-9,1.333c0,0-25.666,20.667-6.333,36.333
                c0,0-12,19-2.667,19.667c0,0,22.333,1.333,56-37c0,0-5.666,20-1.333,23c0,0,13.333,1,26.333-30c0,0-6.001-7.667-10.667,6
                c0,0-9.334,20.333,16,13.333c0,0,10.667-2.333,27.667-19.333c0,0-20.001,28,4.666,17.333c0,0,20.333-10.333,27-17.333
                c0,0,15.666-18,21-11.333c0,0-4,7.333-6.333,8c0,0,16.667-18.667-8.333-4.333c0,0-18.334,21.333-5.667,23.667
                c0,0,7.667,4,36.667-19c0,0,25.999-16.333,14.666-20.333c0,0-10.333-0.667-16.333,15c0,0-0.666,14.667,18.667,13
                c0,0,28.999-5.667,60.666-46.333c0,0,1.333,33-7,38.667c0,0-6,9-18.333-1"/>
            </g>
            <g>
              <g>
                <path fill="none" stroke="#3C363C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" d="M545.447,30.782
                  c0,0,1.933-0.138,3.844-2.991"/>
                  <path fill="none" stroke="#3C363C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="3.2179,0" d="
                  M549.291,27.791c0.502-0.749,1.003-1.686,1.466-2.856"/>
                <path fill="none" stroke="#3C363C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" d="M550.76,24.927
                  c0.513-1.296,0.979-2.879,1.354-4.812"/>
              </g>
            </g>
            </svg>
          <div class="box-two"></div>
        </div>
        <div class="services-info float-right">
          <div id="slider">
            <ul>
              <li><h4>Design</h4>
                <p>UI/UX design involves wireframing to plan a website's architecture and layout. Once the proper content and information structure is in place, I then design the visual component to create a beautiful user experience. My constant desire to learn comes into play by giving me the knowledge of the latest innovations to implement into my designs.<br><br></p></li>
              <li><h4>Front End Development</h4>
                <p>The front-end of an application is what a user sees, interacts with and experiences, which makes it distinctly human. I bring that human experience into my front-end development and create a unique user experience with each website I build. I build responsive websites mobile-first and make sure they work across all browsers and platforms.</p></li>
              <li ><h4>Research and Learn</h4>
                <p>I understand that technology and the web industry are in a constant state of change and growth. I'm always eager to get my hands on books, articles, videos—anything that will provide me with the opportunity to learn more about web design and development.</p></li>
            </ul> 
          </div>
            <div class="control_prev"></div> 
            <div class="control_next"></div>
        </div>
      </div>
      <div class="small-12 medium-6 large-6 columns right-section">
        <div class="hide-for-small-only medium-12 large-8 columns end float-left">
          <img src="images/services_img.jpg" alt="Services Image">
        </div>
        <div class="columns align-self-bottom float-right">
          <p class="deco-text-two">Services</p>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="expanded row parallax2 about">
    <h2 class="hide">About Section</h2>
      <div class="small-12 medium-6 large-5 columns header-grey">
        <div class="title-section">
          <svg version="1.1" id="about-title" class="path " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="660.471px" height="158.259px" viewBox="0 0 660.471 158.259" enable-background="new 0 0 660.471 158.259" xml:space="preserve">
            <g>
              <path fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" d="M2.503,136.334
                      c0,0,141.5,55.5,274-17c0,0,18.5-20,29-12c0,0-20-6.5-28,21c0,0,0.5,9.5,16-2l21.5-21c0,0-10,13.5-2.5,16c0,0,7.5,1,14-6.5
                      c0,0,54.5-45.5,63.5-65c0,0,13.5-20,0-11c0,0-27,18.5-50,71c0,0-6,12,3.5,14.5c0,0,14.5-4.5,20.5-22.5c0,0,0-12-7.5-6
                      c0,0-3,12,12,11c0,0,13.5,5.5,42.5-26.5c0,0-14,6-14.5,22c0,0,5.5,11.5,20.5-2c0,0,18-22,5.5-27c0,0-16.5,16-7.5,24.5
                      c0,0,6.5,9,36-12c0,0,9.5-8,11-10.5s-10,18,2,17.5c0,0,11.5-3,21-16c0,0-8.5,15,2,16.5c0,0,17-2,48.5-34c0,0,57.5-50,46.5-57.5
                      c0,0-18,12.5-28,24l103.5-13c0,0-138.5,11.5-158,28c0,0,28-11.5,53.25-14.25c0,0-20,28.5-24.5,41.75c0,0-9.5,17.5,5.25,16.5
                      c0,0,24,0.5,63.25-32.25"/>
            </g>
          </svg>
          <h3><span class="hide">About </span>Me</h3>
          <div class="box-three"></div>
        </div>
        <div class="about-info float-left">
          <p>My name is Amanda Mercer. I am graduate from the joint Interactive Media Design program at Western University and Fanshawe College. Through this program I have had the opportunity to gain critical, theory-based knowledge about media, technology, advertising and marketing, as well as hands-on experience with design, back-end and front-end coding, branding, photography and editing.<br><br>I am an incredibly organized individual who loves working as part of a team as well as independently, and who never wants to stop learning and expanding my world view. I have a passion for coding, developing, designing, and fine art. As a dynamically trained artist, I enjoy creating responsive, user-friendly websites; engaging, timeless designs; and powerful and meaningful entertainment experiences. There is nothing quite like creating something from nothing, whether it be coding a website from scratch, creating an entire brand identity for a company, or producing a work of art with nothing but a blank piece of paper and a pencil.</p><br>
          <form class="resume" method="get" action="files/amanda_resume.pdf" target="_blank"><button class="button">my résumé</button></form><br>
          <div class="line-two"></div>
          <p class="deco-text">About</p>
        </div>
      </div>
      <div class="small-12 medium-6 large-7 columns skills-section">
        <h4>I am fluent in:</h4>
        <ul>
          <li>HTML</li>
          <li>CSS</li>
          <li>JavaScript</li>
          <li>jQuery</li>
          <li>Foundation</li>
          <li>CodeIgniter</li>
          <li>Laravel</li>
          <li>Agile</li>
          <li>GitHub</li>
          <li>SVG</li>
          <li>Greensock</li>
          <li>SASS</li>
          <li>Slack</li>
          <li>Photoshop</li>
          <li>Illustrator</li>
          <li>InDesign</li>
          <li>After Effects</li>
          <li>Sketch</li>
        </ul>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section class="expanded row portfolio">
    <h2 class="hide">Portfolio Section</h2>
      <div class="small-12 medium-6 large-6 columns">
        <div class="title-section">
          <h3>My <span class="hide">Portfolio</span></h3>
            <svg version="1.1" id="portfolio-title" class="path " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="820.47px" height="256.66px" viewBox="0 0 820.47 256.66" enable-background="new 0 0 820.47 256.66" xml:space="preserve">
                <g>
                  <path fill="none" stroke="#3C363C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" d="M4.302,185.957
                    c0,0,158.715,57.798,277.981-23.854c0,0,4.507-4.165,4.174-7.832c0,0,9,9.999-20.333,75.666c0,0-19.334,39.667-21.667,18.667
                    c0,0,19.666-70.333,63-99.333c0,0,11.666,1.333,2,17.667c0,0-19,36.666-31.333,23.333c0,0,3-7,35-21c0,0,31.001-18.333,36.667-30
                    c0,0-15.334,6.667-14.334,21.667c0,0,5.334,11,18.334,0.333c0,0,18.333-17.333,10.333-29.333c0,0-6.333-1-10,8.333
                    c0,0-9.667,20,8.333,17.667c0,0,22-3.667,52-38c0,0,25.666-27,18-24.667c0,0-12,1.667-21.333,20.333c0,0-4.001,10,7.333,19.667
                    c0,0-9.334,11.667-6,18.667c0,0,8,8.333,45-22c0,0,48-38.667,64-69.667c0,0,2.666-7.667-7.667,0.667c0,0-15.667,13-23.667,24
                    c0,0,43.001-7.333,46.334-6.667c0,0-61.667,6.667-87.667,16c0,0,31.104-9.021,40.917-9.208c0,0-28.75,40.375-23.75,51.875
                    c0,0,6.5,18,72-30c0,0,78-64.5,71-74.5c0,0-5.5-4-21.5,21l-42,79c0,0-37,66-27,66.5c0,0,15.5-3,37.5-77.5c0,0,7.5-15.5-1.5-16
                    c0,0-5,13,7,12c0,0,25,2.5,54-31c0,0-18,12.5-13.5,24c0,0,14,16.5,29-22c0,0,2.5-15-8.5-4.5c0,0-9,15.5-3,19.5c0,0,4.5,9,27-7
                    c0,0,38.5-24.5,84-90.5c0,0,4.5-10-5-3.5c0,0-41.5,31-67.5,93c0,0-4.5,20.5,32.5,1.5c0,0,31-15,36.5-27c0,0-14,20-4.5,21.5
                    c0,0,22.5-3,50-34c0,0-15.5,8-14.5,20.5c0,0,5,17.5,25.5-6c0,0,13-24.5-1-21.5c0,0-18,20-1,27c0,0,26-8,36.5-21"/>
                </g>
                <g>
                  <g>
                    <path fill="none" stroke="#3C363C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" d="M728.958,59.938
                      c0,0,1.401-1.713,2.987-4.009"/>
                    <path fill="none" stroke="#3C363C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" d="M733.03,54.305
                      c0.911-1.418,1.795-2.942,2.428-4.367"/>
                  </g>
                </g>
              </svg>
          <div class="box-two"></div>
        </div>
      </div>
      <div class="small-12 medium-12 large-12 columns port-images">
        <?php
            while($row=mysqli_fetch_array($portfolio)){
                echo "<div class=\"small-6 medium-4 large-3 columns thumbnails \">";
                echo "<div class=\"small-6 medium-4 large-3 columns overlay\"><div class=\"text\"><h4>{$row['portfolio_title']}</h4><p>{$row['portfolio_cat']}</p>
                      <a data-open=\"{$row['portfolio_modal']}\" aria-controls=\"{$row['portfolio_modal']}\" aria-haspopup=\"true\" tabindex=\"0\" class=\"modalClick\">
                      <button class=\"button\">View</button></a>
                      </div></div>";
                echo "<img id=\"{$row['portfolio_id']}\" src=\"images/thumbnails/{$row['portfolio_thumb']}\" alt=\"{$row['portfolio_title']}\">";
                echo "</div>";
              }
          ?>
      </div>
      <?php
            while($row=mysqli_fetch_array($getSingle)) {
                echo "<div class=\"reveal full\" id=\"{$row['portfolio_modal']}\" data-reveal  data-animation-in=\"fade-in\" data-animation-out=\"fade-out\">";
                  echo "<div class=\"modalHeader\">";
                  echo "<h4 class=\"modalTitle\">{$row['portfolio_title']}</h4>";
                  echo "<p class=\"lead\">{$row['portfolio_cat']}</p>";
                  echo "</div>";
                echo "<div class=\"info-hold\">";
                  echo "<div class=\"small-12 medium-4 large-4 columns modalAbout\">";
                  echo "<p class=\"subLead\">ABOUT</p>";
                  echo "<p class=\"modalDescInfo\">{$row['portfolio_about']}</p>";
                  echo "</div>";
                  echo "<div class=\"small-12 medium-5 large-5 columns modalProcess\">";
                  echo "<p class=\"subLead\">PROCESS</p>";
                  echo "<p class=\"modalDescInfo\">{$row['portfolio_process']}</p>";
                  echo "</div>";
                  echo "<div class=\"small-12 medium-3 large-3 columns modalDetails\">";
                  echo "<p class=\"subLead\">DETAILS</p>";
                  echo "<ul class=\"modalDescInfo\">";
                    echo "<li><span class=\"spanBold\">Title: </span>{$row['portfolio_title']}</li>";
                    echo "<li><span class=\"spanBold\">Created: </span>{$row['portfolio_date']}</li>";
                    echo "<li><span class=\"spanBold\">Project: </span>{$row['portfolio_type']}</li>";
                    echo "<li><span class=\"spanBold\">Tools: </span>{$row['portfolio_tools']}</li>";
                    echo "<li><span class=\"spanBold\">Tags: </span>{$row['portfolio_tags']}</li>";
                    if(!empty($row['portfolio_live'])) {
                      echo "<li>Click <span class=\"spanBold\"><a href=\"{$row['portfolio_live']}\" target=\"_blank\">here</a></span> to view this website live.</li>";
                    }
                  echo "</ul></div>";
                echo "</div>";
                echo "<div class=\"row port-img-wrap\">";
                if(!empty($row['images_one'])) {
                    echo "<div class=\"main-port-img\">{$row['images_one']}</div>";
                }
                if(!empty($row['images_two'])) {
                    echo "<div class=\"main-port-img\">{$row['images_two']}</div>";
                }
                if(!empty($row['images_three'])) {
                    echo "<div class=\"main-port-img\">{$row['images_three']}</div>";
                }
                if(!empty($row['images_four'])) {
                    echo "<div class=\"main-port-img\">{$row['images_four']}</div>";
                }
                if(!empty($row['images_five'])) {
                    echo "<div class=\"main-port-img\">{$row['images_five']}</div>";
                }
                if(!empty($row['images_six'])) {
                    echo "<div class=\"main-port-img\">{$row['images_six']}</div>";
                }
                if(!empty($row['images_seven'])) {
                    echo "<div class=\"main-port-img\">{$row['images_seven']}</div>";
                }
                if(!empty($row['images_eight'])) {
                    echo "<div class=\"main-port-img\">{$row['images_eight']}</div>";
                }
                if(!empty($row['images_nine'])) {
                    echo "<div class=\"main-port-img\">{$row['images_nine']}</div>";
                }
                if(!empty($row['images_ten'])) {
                    echo "<div class=\"main-port-img\">{$row['images_ten']}</div>";
                }
                if(!empty($row['images_eleven'])) {
                    echo "<div class=\"main-port-img\">{$row['images_eleven']}</div>";
                }
                if(!empty($row['images_twelve'])) {
                    echo "<div class=\"main-port-img\">{$row['images_twelve']}</div>";
                }
                if(!empty($row['images_thirteen'])) {
                    echo "<div class=\"main-port-img\">{$row['images_thirteen']}</div>";
                }
                if(!empty($row['images_fourteen'])) {
                    echo "<div class=\"main-port-img\">{$row['images_fourteen']}</div>";
                }
                if(!empty($row['images_fifteen'])) {
                    echo "<div class=\"main-port-img\">{$row['images_fifteen']}</div>";
                }
                if(!empty($row['images_sixteen'])) {
                    echo "<div class=\"main-port-img\">{$row['images_sixteen']}</div>";
                }
                if(!empty($row['images_seventeen'])) {
                    echo "<div class=\"main-port-img\">{$row['images_seventeen']}</div>";
                }
                if(!empty($row['images_eighteen'])) {
                    echo "<div class=\"main-port-img\">{$row['images_eighteen']}</div>";
                }
                echo "</div>";
                  echo "<button class=\"close-button\" data-close aria-label=\"Close modal\" type=\"button\">";
                  echo "<span aria-hidden=\"true\">&times;</span>";
                  echo "</button>";
                echo "</div>";
            }
          ?>
      <p class="deco-text-two">Portfolio</p>
    </section>

    <!-- Contact Section -->
    <section class="expanded row parallax3 contact">
    <h2 class="hide">Contact Section</h2>
      <div class="small-12 medium-6 large-5 columns header-grey">
        <div class="title-section">
          <svg version="1.1" id="contact-title" class="path " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="760px" height="183.838px" viewBox="0.308 -0.322 760 183.838" enable-background="new 0.308 -0.322 760 183.838" xml:space="preserve">
                  <g>
                    <path fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" d="M2.308,160.564
                      c0,0,160,58,276-19c0,0,18-18,21-10.5c0,0-2,5.5-6,8.5c0,0,13.25-14.125-1.5-8.125c0,0-22.5,15-15,26.625c0,0,9.5,6.5,47-24
                      c0,0,15-13,15-15s-15,9.5-15,20c0,0,5,14,21,0c0,0,19.5-25.5,5-27.5c0,0-15.5,13.5-7,24c0,0,4,8,26.5-6c0,0,18-12,19-17
                      c0,0,1.5-1,1-2.5s7.5,6-5.5,24c0,0-4.5-4.5,27.5-27c0,0,7-2.5,4.5,6.5c0,0-5.5,16,3.5,16c0,0,16.5-2.5,45.5-31.5c0,0,56-55,48.5-62
                      l-30,28c0,0,32-7.5,47-7.5c0,0-65.5,7.5-88.5,18c0,0,37.104-11.042,41.688-10.438c0,0-27.188,37.271-24.354,47.771
                      c0,0-5.333,18.166,31.167,0.166c0,0,27.5-15,32.5-20c0,0,8.5-12,19.5-5.5c0,0-10-8-22.5,9.5c0,0-11,13.5-0.5,15c0,0,20-10,31.5-28
                      c0,0-7.5,13.5-2,16c0,0,8,5.5,26.5-16c0,0,14-16.5,20.5-12.5c0,0,0,4.5-5.5,9.5c0,0,14.166-16.166-2.917-7.333
                      c0,0-19.582,13.333-13.416,25.333c0,0,4.833,12,53.833-30.5c0,0,45-36,54-65.5c0,0-0.5-5.5-28.5,25c0,0,85.5-19,105-14.5
                      c0,0-87.5,2.5-161,30c0,0,52.438-16.625,56.531-15.844c0,0-26.197,36.344-26.697,47.011c0,0-5.334,12.167,6.499,12.667
                      c0,0,11.5,5.667,63.833-34.167"/>
                  </g>
                  </svg>
          <h3><span class="hide">Contact </span>Me</h3>
          <div class="box-three"></div>
        </div>
        <div class="about-info float-left">
          <p>If you like my work, if you're interested in hiring me or if you have any questions, please don't hesitate to send me a message. I will get back to you as soon as possible.</p>
          <div class="line-two"></div>
          <p class="deco-text">Contact</p>
        </div>
      </div>
    </section>

    <footer class="expanded row">
      <div class="small-12 columns copyright">
        <p class="text-center">© 2017 <b>Amanda Mercer</b> All Rights Reserved.</p>
      </div>
    </footer>
    
    <script src="js/app.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
