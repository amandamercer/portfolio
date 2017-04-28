@extends('header')
@section('content')

<div id="prodWrapper">

    <section class="row" id="prodInfo">
        <div class="small-9 medium-5 large-4 columns float-left end">
          <ul class="gfArea">
            <li><img src="images/badge.png" alt="Vegan & Gluten Free Badge" class="gfBadge"></li>
            <li><p>Vegan & Gluten Free</p></li>
          </ul>
        </div>
        <div class="small-12 medium-12 large-12 columns float-center end prodTitle">
          <h2>Our Products</h2>
        </div>
        <div class="small-12 medium-4 large-2 large-offset-2 columns cupcakeInfo">
          <ul class="flavTItle">
            <li><img src="images/cupcake_icon.png" alt="Cupcake Icon" class="cupcakeIcon"></li>
            <li><h3>Cupcakes</h3></li>
          </ul>
          <img src="images/cupcake_placeholder.jpg" alt="Cupcake Image">
          <p>Minimum order: One dozen per flavour.<br><br><br></p>
          <h4>$30/dozen</h4>
          <ul class="gfArea">
            <li><img src="images/badge.png" alt="Vegan & Gluten Free Badge" class="gfBadge"></li>
            <li><h4>$40/dozen</h4></li>
          </ul>
        </div>
        <div class="small-12 medium-4 large-2 large-offset-1 columns cupcakeInfo">
          <ul class="flavTItle">
            <li><img src="images/jarcake_icon.png" alt="Jar Cake Icon" class="jarcakeIcon"></li>
            <li><h3>Jar Cakes</h3></li>
          </ul>
          <img src="images/jarcake_placeholder.jpg" alt="Jar Cake Image">
          <p>Minimum order: Half a dozen per flavour.<br><br><br></p>
          <h4>$48/half dozen</h4>
          <ul class="gfArea">
            <li><img src="images/badge.png" alt="Vegan & Gluten Free Badge" class="gfBadge"></li>
            <li><h4>Available</h4></li>
          </ul>
        </div>
        <div class="small-12 medium-4 large-2 large-offset-1 columns end cupcakeInfo">
          <ul class="flavTItle">
            <li><img src="images/cake_icon.png" alt="Cake Icon" class="cakeIcon"></li>
            <li><h3>Cakes</h3></li>
          </ul>
          <img src="images/cake_placeholder.jpg" alt="Cake Image">
          <p>For more information about custom cakes & prices, check out our</p>
          <a href="{{ route('about') }}" class="button clickBut margin">FAQ</a><br>
          <ul class="gfArea">
            <li><img src="images/badge.png" alt="Vegan & Gluten Free Badge" class="gfBadge"></li>
            <li><h4>Available</h4></li>
          </ul>
        </div>
    </section>
<!-- Classic Flavours Section -->
    <section class="row">
        <div class="small-12 large-12 columns float-center flavours">
          <ul class="availFlav">
            <li><h2>Classic</h2></li>
            <li><p>All flavours available in </p></li>
            <li><img src="images/cupcake_icon.png" alt="Cupcake Icon"></li>
            <li><img src="images/jarcake_icon.png" alt="Jar Cake Icon"></li>
            <li><img src="images/cake_icon.png" alt="Cake Icon"></li>
          </ul>
          <div class="flavsSec">
            @foreach($classic as $classicflavour)
            <div class="small-12 medium-5 large-5 large-offset-1 columns float-center classFlav">
              <h4>{{ $classicflavour->flavour->flavours_name }}</h4>
              <p>{{ $classicflavour->products_desc }}</p>
            </div>
            @endforeach
          </div>
        </div>
      </section>

<!-- Spring/Summer Flavours Section -->
    <section class="row">
        <div class="small-12 large-12 columns float-center flavours">
          <ul class="availFlav">
            <li><h2>Spring/Summer</h2></li>
            <li><p>All flavours available in </p></li>
            <li><img src="images/cupcake_icon_blue.png" alt="Cupcake Icon"></li>
            <li><img src="images/jarcake_icon_blue.png" alt="Jar Cake Icon"></li>
            <li><img src="images/cake_icon_blue.png" alt="Cake Icon"></li>
            <li><p>Only available May to August.</p></li>
          </ul>
          <div class="flavsSec">
            @foreach($springSum as $springSumflavour)
            <div class="small-12 medium-5 large-5 large-offset-1 columns float-center springFlav">
              <h4>{{ $springSumflavour->flavour->flavours_name }}</h4>
              <p>{{ $springSumflavour->products_desc }}</p>
            </div>
            @endforeach
          </div>
        </div>
      </section>

<!-- Fall/Winter Flavours Section -->
    <section class="row">
        <div class="small-12 large-12 columns float-center flavours">
          <ul class="availFlav">
            <li><h2>Fall/Winter</h2></li>
            <li><p>All flavours available in </p></li>
            <li><img src="images/cupcake_icon_grey.png" alt="Cupcake Icon"></li>
            <li><img src="images/jarcake_icon_grey.png" alt="Jar Cake Icon"></li>
            <li><img src="images/cake_icon_grey.png" alt="Cake Icon"></li>
            <li><p>Only available September to January.</p></li>
          </ul>
          <div class="flavsSec">
            @foreach($winterFall as $winterFallflavour)
            <div class="small-12 medium-5 large-5 large-offset-1 columns float-center fallFlav">
              <h4>{{ $winterFallflavour->flavour->flavours_name }}</h4>
              <p>{{ $winterFallflavour->products_desc }}</p>
            </div>
            @endforeach
          </div>
        </div>
    </section>

    <div class="small-12 medium-12 large-12 columns float-center end prodTitle">
      <p>Want a custom made flavour you don't see on the menu?<br> Click <a href="{{ route('contact') }}" class="button clickBut">here</a> to get in touch with us.</p>
    </div>

    </div>


@endsection
