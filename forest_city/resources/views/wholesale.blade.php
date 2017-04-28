@extends('header')
@section('content')
<!-- Wholesale Information -->
<div class="container">
    <section class="row width-8">
            <div class="small-12 columns top-text">
               <h2>Wholesale Request</h2>
               <p>Visit our <a href="{{ route('about') }}" class="button clickBut">FAQ</a> to learn more about the wholesale process.</p>
               <p>Minimum order of <span>three dozen</span><span class="text-type"> cupcakes</span> or <span>two dozen</span><span class="text-type"> jar cakes</span> (one dozen per flavour based on rotating menu).
               </p>
               <p><span class="size">72 hours</span> notice required for changes to standing orders.</p>
               <p>Want to make an order that isn't wholesale? Want a custom made flavour you don't see on the menu? Click <a href="{{ route('contact')}}" class="button clickBut">here</a> to get in touch with us.</p>
            </div>         
    </section>
<!-- Delivery Frequency Information -->
    <form action="{{ route('wholesale.create') }}" method="POST" id="wholesaleForm">
            <section class="row width grey">
                <h3>How Often?</h3>
                <div class="small-4 columns">
                    <input id="oneTime" type="radio" name="delivery" value="One Time" checked>
                        <label>
                            One Time
                        </label>
                </div>
                <div class="small-4 columns">
                    <input type="radio" name="delivery" value="Monthly" id="monthly">
                        <label>
                            Monthly
                        </label>
                </div>
                <div class="small-4 columns">
                    <input type="radio" name="delivery" value="Weekly" id="weekly">
                        <label>
                            Weekly<br> *Free Delivery
                        </label>
                </div>
            </section>
<!-- Pick up or Delivery -->
            <section class="row width flex">
                <h3 class="hide">Pick Up or Delivery</h3>
                    <div class="small-4 columns delPickup">
                          <img src="images/pickup.svg" alt="pickup"><br><br>
                            <input type="radio" name="pickup" value="Pick Up" checked id="pickup">
                            <label class="pickupDel">Pick Up</label>
                    </div>
                    <div class="small-4 columns delPickup">
                          <img src="images/delivery.svg" alt="delivery"><br><br>
                            <input type="radio" name="pickup" value="Delivery" id="delivery">
                            <label class="pickupDel">Delivery</label>
                    </div>
            </section>
            <section class="row width dateTime">
                <h4 class="hide">Date and Time</h4>
                    {{ csrf_field() }}
                    <div class="small-6 columns">
                    <label>Pick Up Date</label>
                    <input type="text" name="date" id="date" placeholder="yyyy/mm/dd">
                         @if ($errors->has('date'))
                            <span class="help-block">
                                <strong>{{ $errors->first('date') }}</strong><br><br>
                            </span>
                        @endif
                    </div>
                    <div class="small-6 columns">
                    <label>Pick Up Time</label>
                    <input type="text" name="time" id="time" placeholder="00:00 AM/PM">
                        @if ($errors->has('time'))
                            <span class="help-block">
                                <strong>{{ $errors->first('time') }}</strong><br><br>
                            </span>
                        @endif
                    </div>
            </section>
<!-- Flavour Selection -->
            <section>
                <h3>Flavours</h3>
                <div class="row width-8">
                    <div class="small-2 large-1 columns close">
                        <input type="text" value="1" id="inputCounter" name="flavourCounter" style="display:none;">
                    </div>
                    <div class="small-7 large-9 columns my-drop" id="flavourSelection">
                        <select name="flavours1" class="flavourName">
                             <option disabled selected="">--- CLASSIC FLAVOURS ---</option>
                                    <option disabled>--- Always available ---</option>
                                        @foreach($classicsData as $classicData)
                                            <option value="{{ $classicData->flavour->id }}" >{{ $classicData->flavour->flavours_name }}</option>
                                        @endforeach
                                    <option disabled>--- SPRING/SUMMER FLAVOURS ---</option>
                                    <option value="" disabled>--- Only Available May-August ---</option>
                                        @foreach($springsData as $springData)
                                            <option value="{{ $springData->flavour->id }}">{{ $springData->flavour->flavours_name }}</option>
                                        @endforeach
                                    <option disabled>--- FALL/WINTER FLAVOURS ---</option>
                                    <option disabled>--- Only Available September-December ---</option>
                                        @foreach($fallsData as $fallData)
                                            <option value="{{ $fallData->flavour->id }}">{{ $fallData->flavour->flavours_name }}</option>
                                        @endforeach
                        </select>
                            @if ($errors->has('flavours'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('flavours') }}</strong><br><br>
                                </span>
                            @endif
                    </div>
                    <div class="small-3 large-2 columns spinnerWrap">
                        <input type="number" name="quantity1" min="24" step="12" class="quanNum">
                    </div>
                </div>
                    <div id="newInput"></div>
                    <div class="row width add">
                        <div>
                            <img src="images/add.svg" alt="add input" id="wholesaleADD">
                        </div>
                    </div>
                    <div class="row width-input notes">
                        <label class="label-input">Notes:</label>
                            <textarea name="notes" rows="10"></textarea>      
                    </div>
            </section>
<!-- Extra Packaging Options -->
            <section class="row width grey">
                <h3>Extra Packaging Options</h3>
                    <div class="small-4 columns">
                        <input type="radio" name="packaging" value="No Thanks!" checked id="noPackg">
                            <label>No Thanks!</label>
                    </div>
                    <div class="small-4 columns">
                        <input type="radio" name="packaging" value="Single Cupcake Holder" id="singlePckg">
                            <label>$1 each<br>Single Cupcake Holder</label>
                    </div>
                    <div class="small-4 columns">
                        <input type="radio" name="packaging" value="Six Cupcake Holder" id="sixPckg">
                            <label>$1 each<br>Six Cupcake Holder</label>
                    </div>
            </section>
<!-- Contact Information -->
            <section>
                <h2>Contact Information</h2>
                    <div class="row width-input label-input">
                        <div class="small-12 large-6 columns">
                            <label>
                                First Name:
                            </label>
                                <input type="text" name="firstname" value="{{ old('firstname') }}" id="firstName">
                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong><br><br>
                                        </span>
                                    @endif
                        </div>
                        <div class="small-12 large-6 columns">
                            <label>
                                Last Name:
                            </label>
                                <input type="text" name="lastname" value="{{ old('lastname') }}" id="lastName">
                                 @if ($errors->has('lastname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong><br><br>
                                        </span>
                                @endif
                        </div>  
                    </div>
                <div class="row width-input label-input">
                    <div class="small-12 columns">
                        <label>
                            Email:
                        </label>
                            <input type="text" name="email" value="{{ old('email')}}" id="email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong><br><br>
                                    </span>
                                @endif
                    </div>
                </div>
                <div class="row width-input label-input">
                    <div class="small-12 columns">
                        <label>
                            Phone:
                        </label>
                            <input type="text" name="phone" value="{{ old('phone') }}" id="phone">
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong><br><br>
                                    </span>
                                @endif
                    </div>
                </div>
                <div class="row width-input grey">
                    <div class="small-12 large-6 columns label-input">
                        <p>Perferred method of payment upon delivery?</p>
                    </div>
                    <div class="small-6 large-3 columns ">
                        <input type="radio" name="payOpt" checked value="Cash" id="cash">
                            <label>
                                Cash
                            </label>
                    </div>
                    <div class="small-6 large-3 columns">
                        <input type="radio" name="payOpt" value="E-Transfer" id="eTrans">
                            <label>
                                E-Transfer
                            </label>
                    </div>
                </div>
                <div class="row width-input label-input">
                    <div class="small-12 columns">
                        <label>
                            Address:
                        </label>
                            <input type="text" name="address" value="{{ old('address') }}" id="address">
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong><br><br>
                                    </span>
                                @endif
                    </div>
                </div>
                <div class="row width-input label-input">
                    <div class="small-12 large-4 columns">
                        <label>
                            City:
                        </label>
                            <input type="text" name="city" value="{{ old('city') }}" id="city">
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong><br><br>
                                    </span>
                                @endif
                    </div>
                    <div class="small-12 large-4 columns">
                        <label>
                            Province:
                        </label>
                            <input type="text" name="province" value="{{ old('province') }}" id="province">
                                @if ($errors->has('province'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('province') }}</strong><br><br>
                                    </span>
                                @endif
                    </div>
                    <div class="small-12 large-4 columns">
                        <label>
                            Postal Code:
                        </label>
                            <input type="text" name="postalcode" value="{{ old('postalcode') }}" id="postal">
                                @if ($errors->has('postalcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postalcode') }}</strong><br><br>
                                    </span>
                                @endif
                    </div>
                </div>
            </section>
<!-- Delivery Information -->
            <section>
                <h2>Delivery Information</h2>
                <p>(If different from contact information address)</p>
                    <div class="row width-input label-input">
                    <div class="small-12 columns">
                            <label>
                                Contact Name:
                            </label>
                                <input type="text" name="conName" value="{{ old('conName') }}" >
                                    @if ($errors->has('conName'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('conName') }}</strong><br><br>
                                        </span>
                                    @endif
                        </div>
                        <div class="small-12 columns">
                            <label>
                                Business:
                            </label>
                                <input type="text" name="busName" value="{{ old('busName') }}" id="business">
                                    @if ($errors->has('busName'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('busName') }}</strong><br><br>
                                        </span>
                                    @endif
                        </div>
                    </div>
                    <div class="row width-input label-input">
                        <div class="small-12 columns">
                            <label>
                                Phone:
                            </label>
                                <input type="text" name="busPhone" value="{{ old('busPhone') }}">
                                    @if ($errors->has('busPhone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('busPhone') }}</strong><br><br>
                                        </span>
                                    @endif
                        </div>
                    </div>
                    <div class="row width-input label-input">
                        <div class="small-12 columns">
                            <label>
                                Address:
                            </label>
                                <input type="text" name="delStreet" value="{{ old('delStreet') }}">
                                    @if ($errors->has('delStreet'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('delStreet') }}</strong><br><br>
                                        </span>
                                    @endif
                        </div>
                    </div>
                    <div class="row width-input label-input">
                        <div class="small-12 large-4 columns">
                            <label>
                                City:
                            </label>
                                <input type="text" name="delCity" value="{{ old('delCity') }}">
                                    @if ($errors->has('delCity'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('delCity') }}</strong><br><br>
                                        </span>
                                    @endif
                        </div>
                        <div class="small-12 large-4 columns">
                            <label>
                                Province:
                            </label>
                                <input type="text" name="delProvince" value="{{ old('delProvince') }}">
                                    @if ($errors->has('delProvince'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('delProvince') }}</strong><br><br>
                                        </span>
                                    @endif
                        </div>
                        <div class="small-12 large-4 columns">
                            <label>
                                Postal Code:
                            </label>
                            <input type="text" name="delPostal" value="{{ old('delPostal') }}">
                                    @if ($errors->has('delPostal'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('delPostal') }}</strong><br><br>
                                        </span>
                                    @endif
                        </div>  
                <div class="small-12 large-12 columns"><br>
                    <p><b>PLEASE NOTE:</b><br><br>Your order <b>must</b> have a <b>minimum</b> of three dozen cupcakes or two dozen jar cakes (one dozen per flavour based on rotating menu).<br><br>
                    72 hours notice is required for changes to standing orders.</p></p>
                  </div>
                    </div>  
                <!-- <p id="requestBut">Review Request</p> -->
                <input data-open="sendModal" id="requestBut" type="submit" value="Send Request">
                </section>

                <!-- <div class="hide" id="reviewModal">
                  <div class="small-12 medium-12 large-12 columns float-center reviewModalInner">
                  <div class="small-12 large-12 columns logoName">
                    <img src="images/nav_logo.svg" alt="Logo" class="reviewLogo">
                    <ul class="name">
                      <li><p>Name of Orderer</p></li>
                      <li><p>Business Name</p></li>
                    </ul>
                  </div>
                  <div class="small-12 medium-4 large-4 columns">
                    <ul class="address">
                      <li><h4>Contact Information</h4></li>
                      <li><p>197 Cortez Turnpike</p></li>
                      <li><p>London, ON</p></li>
                      <li><p>N6H 3M6</p></li>
                    </ul>
                  </div>
                  <div class="small-12 medium-4 large-4 columns">
                    <ul class="contactInfo">
                      <li><h4>Person of Contact</h4></li>
                      <li><p>Name</p></li>
                      <li><p>Email</p></li>
                      <li><p>519-555-5555</p></li>
                    </ul>
                  </div>
                  <div class="small-12 medium-4 large-4 columns">
                    <ul class="delivery">
                      <li><h4>Delivery Address</h4></li>
                      <li><p>25 Ona Keys</p></li>
                      <li><p>London, ON</p></li>
                      <li><p>N6X 0Y8</p></li>
                    </ul>
                  </div>
                  <div class="small-12 large-12 columns">
                  <div class="divider"></div>
                    <ul class="price">
                      <li><p>3 Dozen X Cupcakes - Chocolate</p></li>
                      <li><p>$90.00</p></li>
                    </ul>
                    <ul class="price">
                      <li><p>2 Dozen X Jar Cakes - Caramel</p></li>
                      <li><p>$96.00</p></li>
                    </ul>
                    <ul class="delFee">
                      <li class="height"><p><b>Delivery</b></p></li>
                      <li><p>$15.00</p></li>
                    </ul>
                    <ul class="payMethod">
                      <li class="height"><p><b>Payment Method on Delivery</b></p></li>
                      <li><p>E-transfer</p></li>
                    </ul>
                    <ul class="pckOpt">
                      <li><p><b>Extra Packaging</b></p></li>
                      <li><p>No</p></li>
                    </ul>
                    <ul class="total">
                      <li class="height"><p><b>Total</b></p></li>
                      <li><p>$201.00 *not including taxes</p></li>
                    </ul>
                  </div>
                  <div class="small-12 large-12 columns"><br><br><br>
                    <p><b>PLEASE NOTE:</b><br><br>Your order <b>must</b> have a <b>minimum</b> of three dozen cupcakes or two dozen jar cakes (one dozen per flavour based on rotating menu).<br><br>
                    72 hours notice is required for changes to standing orders.</p></p>
                  </div>
                  </div>

                  <div class="small-12 medium-12 large-12 columns float-center reviewButtons">
                    <button class="editBut" data-close aria-label="Close modal" type="button">Edit</button>
                    <input data-open="sendModal" id="requestBut" type="submit" value="Send Request">
                  </div>
                </div> -->
    </form>

                <div class="reveal" id="sendModal" data-reveal>
                  <img src="images/hero_logo.svg" alt="Logo" class="whiteLogo">
                  <p>We’re busy baking right now!<br>Forest City Cakes will contact you within the next business day regarding your request.<br>Thank you!</p>
                  <a href="{{ route('home') }}"><button class="close-button" data-close aria-label="Close modal" type="button">
                    <span aria-hidden="true">&times;</span>
                  </button></a>
                </div>
</div>


<script>
//wholesale add input
var wholesaleAddInput = document.querySelector("#wholesaleADD");
var add = document.querySelector('#newInput');
var items = 1;
var counting = document.querySelector("#inputCounter");

function addNewInput()
    {
        items++;

        add.innerHTML+=" <div class='row width-8'><div id='closeInput' onclick='deleteInput(event)' class='small-2 large-1 columns close'><img src='images/close.svg' alt='close'></div><div class='small-7 large-9 columns my-drop' id='flavourSelection'><select name='flavours"+items+"'><option disabled selected=''>--- CLASSIC FLAVOURS ---</option><option disabled>--- Always available ---</option>@foreach($classicsData as $classicData)<option value='{{ $classicData->flavour->id }}' >{{ $classicData->flavour->flavours_name }}</option>@endforeach<option disabled>--- SPRING/SUMMER FLAVOURS ---</option><option value='' disabled>--- Only Available May-August ---</option>@foreach($springsData as $springData)<option value='{{ $springData->flavour->id }}'>{{ $springData->flavour->flavours_name }}</option>@endforeach<option disabled>--- FALL/WINTER FLAVOURS ---</option><option disabled>--- Only Available September-December ---</option>@foreach($fallsData as $fallData)<option value='{{ $fallData->flavour->id }}'>{{ $fallData->flavour->flavours_name }}</option>@endforeach</select>@if ($errors->has('flavours'))<span class='help-block'><strong>{{ $errors->first('flavours') }}</strong><br><br></span>@endif</div><div class='small-3 large-2 columns spinnerWrap'><input type='number' name='quantity"+items+"'  min='24' step='12'></div></div>";

        counting.value = items;
        console.log(items);

    }



function deleteInput(e)
{
    e = e || window.event;
    var target = e.target || e.srcElement;
    console.log(target.parentNode.parentNode);
    target.parentNode.parentNode.style.display='none';
    target = removeChild(target.parentNode.parentNode);
}

wholesaleAddInput.addEventListener("click", addNewInput, false);

</script>


@endsection