<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forest City Cakes</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHuRH-nH7GkryP_c4sXj7SA6fWcrhMrPY&callback=initMap"
  type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  </head>
  <body>

    <h1 class="hide">Forest City Cakes Products</h1>
    <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
      <!-- Close Button -->
      <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
      </button>
      <!-- Mobile Menu -->
      <ul class="vertical menu">
        <li><a href="{{ route('home') }}">HOME</a></li>
        <li><a href="{{ route('about') }}">ABOUT</a></li>
        <li><a href="{{ route('products') }}">PRODUCTS</a></li>
        <li><a href="{{ route('wholesale') }}">WHOLESALE</a></li>
        <li><a href="{{ route('contact') }}">CONTACT</a></li>
      </ul>
    </div>

    <!-- Mobile Nav Bar Content -->
    <div class="off-canvas-content" data-off-canvas-content>
      <div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
        <button type="button" data-open="offCanvasLeft" class="menuBut"><img src="images/menu_icon.svg" alt="Menu Button"></button>
        <div class="title-bar-title"><a href="index.html"><img src="images/nav_logo.svg" id="mobLogo" alt="Logo" class="hide"></a></div>
          <ul class="socialNavMob float-right">
            <li><a href="https://twitter.com/forestcitycakes#" target="_blank">
            <img src="images/twitter.svg" alt="Twitter"></a></li>
            <li><a href="https://www.facebook.com/forestcitycakes/" target="_blank">
            <img src="images/facebook.svg" alt="Facebook"></a></li>
            <li><a href="https://www.instagram.com/forestcitycakes/" target="_blank">
            <img src="images/instagram.svg" alt="Instagram"></a></li>
          </ul>
      </div>
    </div>

      <!-- Desktop Menu -->
      <div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
        <nav class="top-bar-left float-center scrollNav">
         <h3 class="hide">Desktop Navigation</h3>
          <ul class="dropdown menu float-center" data-dropdown-menu>
            <li><a href="{{ route('about') }}">ABOUT</a></li>
            <li><a href="{{ route('products') }}">PRODUCTS</a></li>
            <li><a href="{{ route('home') }}"><img src="images/nav_logo.svg" id="deskLogo" alt="Logo" class="float-center"></a></li>
            <li><a href="{{ route('wholesale') }}">WHOLESALE</a></li>
            <li><a href="{{ route('contact') }}">CONTACT</a></li>
          </ul>
        </nav>
          <ul class="socialNavMain float-right">
            <li><a href="https://twitter.com/forestcitycakes#">
            <img src="images/twitter.svg" alt="Twitter"></a></li>
            <li><a href="https://www.facebook.com/forestcitycakes/">
            <img src="images/facebook.svg" alt="Facebook"></a></li>
            <li><a href="https://www.instagram.com/forestcitycakes/">
            <img src="images/instagram.svg" alt="Instagram"></a></li>
          </ul>
      </div>

      <section class="content">
       @yield('content')
      </section>

       <footer class="row">
        <div class="small-12 medium-12 large-12 columns float-center">
          <a href="index.html"><img src="images/hero_logo.svg" alt="Logo" id="footerLogo"></a>
        </div>
        <nav class="small-12 medium-12 large-12 columns float-center footNav">
         <h3 class="hide">Footer Navigation</h3>
          <ul id="footNav">
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li><a href="{{ route('about') }}">ABOUT</a></li>
            <li><a href="{{ route('products') }}">PRODUCTS</a></li>
            <li><a href="{{ route('wholesale') }}">WHOLESALE</a></li>
            <li><a href="{{ route('contact') }}">CONTACT</a></li>
          </ul>
        </nav>
        <div class="small-12 medium-12 large-12 columns float-center copyright">
          <p>© FOREST CITY CAKES 2017</p>
        </div>
      </footer>
    
    <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendor/what-input.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendor/foundation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/TweenMax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/form.js') }}"></script>
  </body>
</html>