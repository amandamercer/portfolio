@extends('mainheader')
@section('content')

 <div class="centerContainer">

<header class="row" id="splashSec">
        <div class="small-12 large-12 columns">
          <a href="index.html"><img src="images/hero_logo.svg" alt="Logo"></a>
        </div>
      </header>

      <!-- News/Facebook API Section -->
      <section class="row" id="newsSec">
        <div class="small-12 medium-12 large-5 columns float-right">
          <img src="images/news_img.jpg" alt="Cake" id="newsImg">
        </div>
        <div class="small-12 medium-12 large-7 columns float-left newsStory">
          <div class="small-10 medium-10 large-11 columns float-center mainNews">
            <h2>News</h2>
            <h3 id="date"><span class="year"><!-- 2017 --></span></h3>
            <p id="newsText"></p>
          </div>
          <div class="small-2 medium-2 large-1 columns float-right rightArrow">
            <div class="dummy"></div>
            <img src="images/right_arrow.svg" id="right-arrow" alt="Right Arrow" class="rightArrowImg">
          </div>
        </div>
      </section>

      <!-- Gallery/Instagram API Section -->
      <section class="row" id="galSec">
        <h2 class="hide">Gallery</h2>
        <div class="small-12 medium-12 large-12 columns float-left galSec">
          <div id="galleryApi" class="small-12 medium-12 large-10 large-offset-1 columns float-center">
            <!-- Instagram Gallery Content -->
          </div>
        </div>
      </section>

      <!-- Reviews Section -->
      <section class="row" id="reviewsSec">
        <div class="small-12 medium-12 large-5 columns float-right">
          <img src="images/reviews_img.jpg" alt="Cupcake" id="reviewsImg">
        </div>
        <div class="small-12 medium-12 large-7 columns float-left reviewsCenter">
          <div class="small-12 medium-12 large-12 columns float-center mainReviews">
            <h2>Reviews</h2>
            <p class="reviewText">"Beautiful cake! Exactly what I was hoping for and the ladies were a pleasure to work with. Thank you!!"<br>—Monica<br><br>
            "You ladies out did yourself! Our cake, smash cake and cup cakes were amazing! And they tasted as good as they looked! Thank you!"<br>—Michelle<br><br>
            "Thank you ladies!!! The cakes were so beautiful we almost didn't want to eat them but we're so glad we did. They were delicious!!"<br>—Rhonda</p>
          </div>
        </div>
      </section>
    </div>
@endsection