@extends('header')

@section('content')

<div class="contactContainer">

  <!-- Google Map Section -->
  <section class="row" id="mapSec">
    <h2 class="hide">Map Location</h2>
    <div class="small-12 medium-12 large-12 columns" id="map">
    </div>
  </section>

  <!-- Contact and Retailers Section -->
  <section class="row" id="contactSec">
    <div class="small-12 medium-12 large-12 columns float-center">
      <div class="small-12 medium-12 large-6 columns float-left contactBlurb">
        <h3>Contact</h3>
        <p>Please feel free to get in touch with us if you have any questions or if you'd like to place an order. We would be happy to discuss any custom order requests or answer any questions you may have.</p>
        <form action="{{ route('contact.create') }}" method="post" class="contactForm">
        {{ csrf_field() }}
          <label>Name:</label>
          <input type="text" name="name">
            @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong><br><br>
              </span>
            @endif
          <label>Email:</label>
          <input type="email" name="email">
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong><br><br>
              </span>
            @endif
          <label>Message:</label>
          <textarea name="notes" rows="10"></textarea>
            @if ($errors->has('notes'))
              <span class="help-block">
                <strong>{{ $errors->first('notes') }}</strong><br><br>
              </span>
            @endif
          <input id="requestBut" type="submit" value="Submit">
        </form>
      </div>
      <div class="small-12 medium-12 large-6 columns float-left retailerBlurb">
        <h3>Retailers</h3>
        <p><b>Nuts for Cheese</b><br>Upstairs at the Western Fair Farmer's & Artisans’ Market<br>Dundas St. East at Ontario St.<br>Open every Saturday 8am to 3pm<br>All year round</p>
        <p>Click <a href="http://nutsforcheese.com/" class="button clickBut" target="_blank">here</a> to visit their site.</p>
      </div>
    </div>
  </section>

</div>

@endsection

<script>
  var map_dropper = "{{ asset('images/map_dropper.svg') }}";
</script>