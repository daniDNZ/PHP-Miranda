<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/styles.css">
  <title>Hotel Miranda</title>
</head>

<body>
  <header class="header">
    <div class="header__box">
      <span class="header__pre-title">We Make You Feel Comfortable</span>
      <div class="header__left">
        <button id="menuBtn" class="header__menu-btn"></button>
        <a href="./index.html" class="logo logo--header">
          <div class="logo__img logo__img--header"></div>
          <div class="logo__name logo__name--header"></div>
        </a>
      </div>
      <div id="menu" class="header__menu">
        <nav class="header__nav nav">
          <ul class="nav__ul">
            <li class="nav__li"><a href="about.php" class="nav__a">About Us</a></li>
            <li class="nav__li"><a href="rooms.php" class="nav__a">Rooms</a></li>
            <li class="nav__li"><a href="html/offers.html" class="nav__a">Offers</a></li>
            <li class="nav__li"><a href="html/contact.html" class="nav__a">Contact</a></li>
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
    <div class="home-banner px-20">
      <div class="wrapper-desktop">
        <h2 class="h2 home-banner__subtitle">The ultimate luxury experience</h2>
        <h1 class="h1 home-banner__title">The perfect base for you</h1>
        <a href="html/rooms.html" class="button home-banner__button">Take a tour</a>
        <a href="html/about.html" class="button button--outline home-banner__button home-banner__button--outline">Learn
          more</a>
      </div>
    </div>
    <div class="check-date px-20">
      <div class="wrapper-desktop">
        <form class="check-date__form">
          <div class="check-date__input-group">
            <label for="arrivalDate" class="check-date__label">Arrival Date</label>
            <input id="arrivalDate" type="date" class="check-date__input" value="2020-03-24">
          </div>
          <div class="check-date__input-group">
            <label for="ledepartureDate" class="check-date__label">LeDeparture Date</label>
            <input id="ledepartureDate" type="date" class="check-date__input" value="2020-03-24">
          </div>
        </form>
        <button class="button check-date__button">Check Availability</button>
      </div>
    </div>
    <section class="section">
      <div class="home-about wrapper-desktop">
        <div class="home-about__top px-20">
          <h2 class="h2 section__h2">About us</h2>
          <h3 class="h3 section__h3">Discover our underground.</h3>
          <p class="section__p">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum accusamus voluptatibus est provident quaerat
            quos placeat laborum possimus. Maxime necessitatibus placeat culpa iure quibusdam natus perspiciatis tempore
            voluptate distinctio eius?
          </p>
          <button class="button home-about__button">Book now</button>
        </div>
        <div class="home-about__bottom">
          <div class="wrapper-x home-about__wrapper">
            <div class="home-about__first-image card card--image"></div>
            <div class="home-about__card--team card">
              <div class="home-about__card-icon--people card__icon"></div>
              <h4 class="h4 home-about__h4 card__h4">Strong Team</h4>
              <p class="home-about__p card__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor.</p>
              <div class="home-about__bg-image card__bg-image"></div>
            </div>
            <div class="card card--image"></div>
            <div class="home-about__card card card--dark">
              <div class="home-about__card-icon--calendar card__icon"></div>
              <h4 class="h4 home-about__h4 card__h4">Luxury Room</h4>
              <p class="home-about__p card__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor.</p>
              <div class="home-about__bg-image card__bg-image"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section--justified">
      <div class="home-rooms">
        <h2 class="h2 section__h2 section__h2--justified">Rooms</h2>
        <h3 class="h3 section__h3">Hand picked rooms</h3>
        <div class="icon-bar">
          <div class="icon-bar__icon icon-bar__icon--bed"></div>
          <div class="icon-bar__icon icon-bar__icon--wifi"></div>
          <div class="icon-bar__icon icon-bar__icon--car"></div>
          <div class="icon-bar__icon icon-bar__icon--ac"></div>
          <div class="icon-bar__icon icon-bar__icon--gym"></div>
          <div class="icon-bar__icon icon-bar__icon--nosmoke"></div>
          <div class="icon-bar__icon icon-bar__icon--bar"></div>
        </div>
        <div class="swiper rooms-swiper">
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
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="wrapper-x home-rooms__wrapper">
          <h4 class="h4 home-rooms__h4">Minimal duplex room</h4>
          <p class="p section__p home-rooms__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore.</p>
          <div class="price">
            <span class="price__amount">$345</span><span class="price__night">/Night</span>
          </div>
        </div>
      </div>
    </section>
    <section class="section section--dark px-20">
      <div class="intro-video">
        <h2 class="h2 section__h2 section__h2--dark intro-video__h2">Intro video</h2>
        <h3 class="h3 section__h3">Meet with our luxury place.</h3>
        <p class="p section__p section__p--dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
        <div class="video video--square"></div>
        <button class="button">Book now</button>
      </div>
    </section>
    <section class="section section--justified features-container">
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
    <section class="section">
      <div class="food-donut"></div>
      <div class="px-20">
        <h2 class="h2 section__h2">Menu</h2>
        <h3 class="h3 section__h3">Our Foods Menu</h3>
        <div class="food-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide food">
              <div class="food__img"></div>
              <div class="food__text">
                <h4 class="h4 food__h4">Eggs & bacon</h4>
                <p class="p food__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
              </div>
            </div>
            <div class="swiper-slide food">
              <div class="food__img"></div>
              <div class="food__text">
                <h4 class="h4 food__h4">Tea or Coffee</h4>
                <p class="p food__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
              </div>
            </div>
            <div class="swiper-slide food">
              <div class="food__img"></div>
              <div class="food__text">
                <h4 class="h4 food__h4">Chia oatmeal</h4>
                <p class="p food__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
              </div>
            </div>
            <div class="swiper-slide food">
              <div class="food__img"></div>
              <div class="food__text">
                <h4 class="h4 food__h4">Fruit parfait</h4>
                <p class="p food__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
              </div>
            </div>
            <div class="swiper-slide food">
              <div class="food__img"></div>
              <div class="food__text">
                <h4 class="h4 food__h4">Marmalade selection</h4>
                <p class="p food__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
              </div>
            </div>
            <div class="swiper-slide food">
              <div class="food__img"></div>
              <div class="food__text">
                <h4 class="h4 food__h4">Cheese plate</h4>
                <p class="p food__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-button-next food-swiper__button food-swiper__button--next"></div>
          <div class="swiper-button-prev food-swiper__button food-swiper__button--prev"></div>
        </div>
      </div>
      <div class="swiper food-images-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper-slide__food"></div>
          <div class="swiper-slide swiper-slide__food"></div>
          <div class="swiper-slide swiper-slide__food"></div>
        </div>
        <div class="food-images-swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
        </div>
      </div>
    </section>
    <section class="section section--dark section--justified">
      <div class="hits-container">


        <div class="hit">
          <div class="hit__icon hit__icon--rocket"></div>
          <span class="hit__big">84k</span><span class="hit__plus">+</span>
          <span class="hit__subtitle">Projects are Completed</span>
        </div>
        <div class="hit">
          <div class="hit__icon hit__icon--suits"></div>
          <span class="hit__big">10M</span><span class="hit__plus">+</span>
          <span class="hit__subtitle">Active Backers Around World</span>
        </div>
        <div class="hit">
          <div class="hit__icon hit__icon--stonks"></div>
          <span class="hit__big">02k</span><span class="hit__plus">+</span>
          <span class="hit__subtitle">Categories Served</span>
        </div>
        <div class="hit">
          <div class="hit__icon hit__icon--book"></div>
          <span class="hit__big">100M</span><span class="hit__plus">+</span>
          <span class="hit__subtitle">Idea Raised Funds</span>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <a href="./index.html" class="logo logo--footer">
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
        <a href="#" class="legal-block__a">Terms of Use</a><span class="legal-block__line">|</span><a href="#" class="legal-block__a">Privacy Environmental Policy</a>
      </div>
    </div>
  </footer>
  <script src="./main.js" type="module"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>