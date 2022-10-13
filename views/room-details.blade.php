@extends('layout')

@section('content')
<section class="section banner px-20">
  <h2 class="h2 banner__h2">The ultimate luxury</h2>
  <h1 class="h1">Ultimate Room</h1>
  <div class="breadcrumb">
    <a href="../index.html" class="a breadcrumb__a">Home</a><span class="breadcrumb__line">|</span><span class="breadcrumb__current">Room Details</span>
  </div>
</section>
<section class="section px-20">
  <h2 class="h2 section__h2">Double bed</h2>
  <h3 class="h3 section__h3">Luxury Double Bed</h3>
  <div class="price">
    <span class="price__amount">$345</span><span class="price__night">/Night</span>
  </div>
  <div class="room__image"></div>
</section>
<section class="section">
  <div class="check-date check-date--light">
    <h4 class="check-date__h4">Check Availability</h4>
    <form class="check-date__form">
      <label for="arrivalDate" class="check-date__label">Check In</label>
      <input id="arrivalDate" type="date" class="check-date__input" value="2020-03-24">
      <label for="ledepartureDate" class="check-date__label">Check Out</label>
      <input id="ledepartureDate" type="date" class="check-date__input" value="2020-03-24">
    </form>
    <button class="button check-date__button">Check Availability</button>
  </div>
</section>
<section class="section px-20">
  <p class="section__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
    anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
    ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
    labore et dolore magnam aliquam quaerat voluptatem.</p>
</section>
<section class="section section--m-0 px-20">
  <h4 class="h4">Amenities</h4>
  <hr class="separator">
  <div class="amenities-container">
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--ac"></i><span class="amenitie__name">Air
        conditioner</span></div>
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--breakfast"></i><span class="amenitie__name">Breakfast</span></div>
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--cleaning"></i><span class="amenitie__name">Cleaning</span></div>
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--grocery"></i><span class="amenitie__name">Grocery</span></div>
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--shop"></i><span class="amenitie__name">Shop
        near</span></div>
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--support"></i><span class="amenitie__name">24/7
        Online Support</span></div>
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--security"></i><span class="amenitie__name">Smart
        Security</span></div>
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--wifi"></i><span class="amenitie__name">High
        Speed WiFi</span></div>
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--kitchen"></i><span class="amenitie__name">Kitchen</span></div>
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--shower"></i><span class="amenitie__name">Shower</span></div>
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--bed"></i><span class="amenitie__name">Single
        bed</span></div>
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--towels"></i><span class="amenitie__name">Towels</span></div>
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--key"></i><span class="amenitie__name">Strong
        Locker</span></div>
    <div class="amenitie"><i class="amenitie__icon amenitie__icon--expert"></i><span class="amenitie__name">Expert
        Team</span></div>
  </div>
</section>
<section class="section">
  <div class="person">
    <div class="person__img"></div>
    <h2 class="h4 person__name">Rosalina D. William</h2>
    <h4 class="h2 section__h2 person__subtitle">Founder, Qux co.</h4>
    <p class="section__p person__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore.</p>
  </div>
</section>
<section class="section px-20">
  <h4 class="h4">Cancellation</h4>
  <hr class="separator">
  <p class="section__p">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus
    mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days
    to get a full refund.</p>
</section>
<section class="section">
  <h4 class="h4 px-20">Related Rooms</h4>
  <hr class="separator px-20">
  <div class="home-rooms">
    <div class="swiper rooms-swiper px-20">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide__room"></div>
        <div class="swiper-slide swiper-slide__room"></div>
        <div class="swiper-slide swiper-slide__room"></div>
        <div class="swiper-slide swiper-slide__room"></div>
        <div class="swiper-slide swiper-slide__room"></div>
        <div class="swiper-slide swiper-slide__room"></div>
        <div class="swiper-slide swiper-slide__room"></div>
        <div class="swiper-slide swiper-slide__room"></div>
        <div class="swiper-slide swiper-slide__room"></div>
      </div>
      <div class="swiper-button-prev swiper-button-prev--out"></div>
      <div class="swiper-button-next swiper-button-next--out"></div>
    </div>
    <div class="icon-bar icon-bar--bottom">
      <div class="icon-bar__icon icon-bar__icon--bed"></div>
      <div class="icon-bar__icon icon-bar__icon--wifi"></div>
      <div class="icon-bar__icon icon-bar__icon--car"></div>
      <div class="icon-bar__icon icon-bar__icon--ac"></div>
      <div class="icon-bar__icon icon-bar__icon--gym"></div>
      <div class="icon-bar__icon icon-bar__icon--nosmoke"></div>
      <div class="icon-bar__icon icon-bar__icon--bar"></div>
    </div>
    <h4 class="h4 home-rooms__h4">Minimal duplex room</h4>
    <p class="p section__p home-rooms__p px-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
      eiusmod tempor incididunt ut labore et dolore.</p>
    <div class="price price--booking">
      <div>
        <span class="price__amount price__amount--same-size">$345</span><span class="price__night price__night--same-size">/Night</span>
      </div>
      <a href="room-details.html" class="room__booking-now">Booking Now</a>
    </div>
  </div>
</section>
@endsection