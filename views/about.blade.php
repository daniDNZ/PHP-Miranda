@extends('layout')

@section('content')
<section class="section banner px-20">
  <h2 class="h2 banner__h2">The ultimate luxury</h2>
  <h1 class="h1">About us</h1>
  <div class="breadcrumb">
    <a href="../index.html" class="a breadcrumb__a">Home</a><span class="breadcrumb__line">|</span><span class="breadcrumb__current">About</span>
  </div>
</section>
<section class="section about-intro px-20">
  <div class="about-intro__video"></div>
  <p class="p about-intro__p">Hello. Our hotel has been present for over 20 years. We make the best for all our
    customers.</p>
  <div class="about-intro__features">
    <div class="about-feature">
      <div class="about-feature__icon about-feature__icon--breakfast"></div>
      <span class="about-feature__text">Breakfast</span>
    </div>
    <div class="about-feature">
      <div class="about-feature__icon about-feature__icon--plane"></div>
      <span class="about-feature__text">Airport pickup</span>
    </div>
    <div class="about-feature">
      <div class="about-feature__icon about-feature__icon--map"></div>
      <span class="about-feature__text">City guide</span>
    </div>
    <div class="about-feature">
      <div class="about-feature__icon about-feature__icon--room"></div>
      <span class="about-feature__text">Luxury room</span>
    </div>
  </div>
</section>
<section class="section px-20">
  <div class="restaurant-card px-20 py-20">
    <div class="restaurant-card__image"></div>
    <h2 class="h2 section__h2 restaurant-card__h2">Restaurant</h2>
    <h3 class="h3 section__h3 restaurant-card__h3">Get Restaurant facilities & many other more</h3>
    <p class="section__p restaurant-card__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
      eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
      exercitation ullamco laboris nisi ut aliquip.</p>
    <button class="button restaurant-card__button">Take a tour</button>
  </div>
</section>
<section class="section section--justified features-container features-container--dark">
  <h2 class="h2 section__h2 section__h2--justified">Facilities</h2>
  <h3 class="h3 section__h3">Core Features</h3>
  <div class="swiper feature-swiper">
    <div class="swiper-wrapper">
      <div class="feature feature--active swiper-slide" aria-label="1 / 6">
        <div class="feature__icon feature__icon--one"></div>
        <span class="feature__number">01</span>
        <h4 class="h4 feature__h4">Have high rating</h4>
        <p class="p feature__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna..</p>
      </div>
      <div class="feature swiper-slide" aria-label="2 / 6">
        <div class="feature__icon feature__icon--two"></div>
        <div class="feature__number">02</div>
        <h4 class="h4 feature__h4">Quiet hours</h4>
        <p class="p feature__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna..</p>
      </div>
      <div class="feature swiper-slide" aria-label="3 / 6">
        <div class="feature__icon feature__icon--three"></div>
        <div class="feature__number">03</div>
        <h4 class="h4 feature__h4">Best Locations</h4>
        <p class="p feature__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna..</p>
      </div>
      <div class="feature swiper-slide" aria-label="4 / 6">
        <div class="feature__icon feature__icon--four"></div>
        <div class="feature__number">04</div>
        <h4 class="h4 feature__h4">Free cancellation</h4>
        <p class="p feature__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna..</p>
      </div>
      <div class="feature swiper-slide" aria-label="5 / 6">
        <div class="feature__icon feature__icon--five"></div>
        <div class="feature__number">05</div>
        <h4 class="h4 feature__h4">Payment options</h4>
        <p class="p feature__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna..</p>
      </div>
      <div class="feature swiper-slide" aria-label="6 / 6">
        <div class="feature__icon feature__icon--six"></div>
        <div class="feature__number">06</div>
        <h4 class="h4 feature__h4">Special Offers</h4>
        <p class="p feature__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna..</p>
      </div>
    </div>
    <div class="feature-swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
    </div>
  </div>
</section>
<section class="section px-20">
  <h2 class="h2 section__h2">Counter</h2>
  <h3 class="h3 section__h3">Some fun facts</h3>
  <div class="facts-container">
    <div class="fact">
      <div class="fact__icon fact__icon--happy"></div>
      <div class="fact__text">
        <span class="fact__big-text">8000</span><span class="fact__small-text">Happy users</span>
      </div>
      <button class="fact__arrow"></button>
    </div>
    <div class="fact">
      <div class="fact__icon fact__icon--thumbup"></div>
      <div class="fact__text">
        <span class="fact__big-text">10M</span><span class="fact__small-text">Reviews & Appriciate</span>
      </div>
      <button class="fact__arrow"></button>
    </div>
    <div class="fact">
      <div class="fact__icon  fact__icon--world"></div>
      <div class="fact__text">
        <span class="fact__big-text">100</span><span class="fact__small-text">Country coverage</span>
      </div>
      <button class="fact__arrow"></button>
    </div>
  </div>
  <div class="swiper facts-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide__fact"></div>
      <div class="swiper-slide swiper-slide__fact"></div>
    </div>
    <div class="facts-images-swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
    </div>
  </div>
</section>
@endsection