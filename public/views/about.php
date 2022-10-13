<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../css/styles.css">
  <title>Hotel Miranda - About Us</title>
</head>

<body>
  <header class="header">
    <div class="header__box">
      <span class="header__pre-title">We Make You Feel Comfortable</span>
      <div class="header__left">
        <button id="menuBtn" class="header__menu-btn"></button>
        <a href="../index.html" class="logo logo--header">
          <div class="logo__img logo__img--header"></div>
          <div class="logo__name logo__name--header"></div>
        </a>
      </div>
      <div id="menu" class="header__menu">
        <nav class="header__nav nav">
          <ul class="nav__ul">
            <li class="nav__li"><a href="about.html" class="nav__a">About Us</a></li>
            <li class="nav__li"><a href="rooms.html" class="nav__a">Rooms</a></li>
            <li class="nav__li"><a href="offers.html" class="nav__a">Offers</a></li>
            <li class="nav__li"><a href="contact.html" class="nav__a">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="header__right">
        <button class="header__icon header__icon--login"></button>
        <button class="header__icon header__icon--search"></button>
      </div>
    </div>
  </header>
  <main>
    <section class="section banner px-20">
      <h2 class="h2 banner__h2">The ultimate luxury</h2>
      <h1 class="h1">About us</h1>
      <div class="breadcrumb">
        <a href="../index.html" class="a breadcrumb__a">Home</a><span class="breadcrumb__line">|</span><span
          class="breadcrumb__current">About</span>
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
        <div
          class="feature-swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
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
        <div
          class="facts-images-swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <a href="../index.html" class="logo logo--footer">
      <div class="logo__img logo__img--footer"></div>
      <div class="logo__name logo__name--footer"></div>
    </a>
    <div class="footer__block footer__description">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laudantium, natus maxime sapiente voluptatum
      nihil perferendis voluptate omnis perspiciatis consectetur aliquid vel officia blanditiis nisi soluta repellat
      temporibus asperiores minima!
    </div>
    <div class="footer__block social-row">
      <a href="#" class="social-row__a social-row__a--fb"></a>
      <a href="#" class="social-row__a social-row__a--tw"></a>
      <a href="#" class="social-row__a social-row__a--be"></a>
      <a href="#" class="social-row__a social-row__a--in"></a>
      <a href="#" class="social-row__a social-row__a--yt"></a>
    </div>
    <div class="footer__block services-block">
      <h3 class="footer__title">Services.</h3>
      <ul class="services-block__ul">
        <li>+ Restaurant & Bar</li>
        <li>+ Swimming Pool</li>
        <li>+ Wellness & Spa</li>
        <li>+ Restaurant</li>
        <li>+ Conference Room</li>
        <li>+ Coctail Party House</li>
        <li>+ Gaming Zone</li>
        <li>+ Marriage Party</li>
        <li>+ Party Planning</li>
        <li>+ Tour Consultancy</li>
      </ul>
    </div>
    <div class="footer__block contact-block">
      <h3 class="footer__title">Contact Us</h3>
      <div class="contact-block__item">
        <div class="contact-block__icon contact-block__icon--phone"></div>
        <div>
          <span class="contact-block__item-title">Phone Number</span>
          <span class="contact-block__item-subtitle">+987 876 765 76 577</span>
        </div>
      </div>
      <div class="contact-block__item">
        <div class="contact-block__icon contact-block__icon--mail"></div>
        <div>
          <span class="contact-block__item-title">Phone Number</span>
          <span class="contact-block__item-subtitle">+987 876 765 76 577</span>
        </div>
      </div>
      <div class="contact-block__item">
        <div class="contact-block__icon contact-block__icon--map"></div>
        <div>
          <span class="contact-block__item-title">Phone Number</span>
          <span class="contact-block__item-subtitle">+987 876 765 76 577</span>
        </div>
      </div>
    </div>
    <div class="footer__block legal-block">
      <span class="legal-block__copyright">Copyright@Example - 2022</span>
      <div>
        <a href="#" class="legal-block__a">Terms of Use</a><span class="legal-block__line">|</span><a href="#"
          class="legal-block__a">Privacy Environmental Policy</a>
      </div>
    </div>
  </footer>
  <script src="../main.js" type="module"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>