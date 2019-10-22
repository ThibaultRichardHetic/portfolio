<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>iTreater</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="iTreater is an automatic pet feeder using the internet. When your pet is left alone, (s)he might be blue. Most of all, having dried food all day can be the biggest torture to the pet." />
  <link rel="icon" type="image/jpg" href="<?= URL ?>/assets/projects/petabc/images/favicon.jpg"/>
  <link rel="stylesheet" type="text/css" media="screen" href="<?= URL ?>/assets/projects/petabc/styles/scss/style--generalStyles.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?= URL ?>/assets/projects/petabc/styles/scss/main/style--header_footer.min.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="<?= URL ?>/assets/projects/petabc/styles/scss/landing/style--landing.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
  <header>
    <div class="wrapper">
      <div class="wrapper__header">
        <img src="<?= URL ?>/assets/projects/petabc/images/logo.png" alt="logo iTreater">
          <a class="wrapper__header__a" href="<?= URL ?>/petabc">HOME</a>
          <a class="wrapper__header__a" href="<?= URL ?>/petabc/story">STORY</a>
          <a  class="wrapper__header__a" href="<?= URL ?>/petabc/product">PRODUCT</a>
          <a class="wrapper__header__button" href="http://kck.st/2Oprih9">KICKSTARTER</a>
      </div>
    </div>
    <div class="burgerMenu">
      <img src="<?= URL ?>/assets/projects/petabc/images/logo.png" alt="logo iTreaetr" class="logo">
      <input id="burger" type="checkbox" />
      <label for="burger" id="burgerMenu">
        <span></span>
        <span></span>
        <span></span>
      </label>
      <nav id="navIndex">
        <ul>
            <li><a href="<?= URL ?>/petabc">Home</a></li>
            <li><a href="<?= URL ?>/petabc/story">Story</a></li>
            <li><a href="<?= URL ?>/petabc/product">Product</a></li>
            <li><a href="http://kck.st/2Oprih9">Kickstarter</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div class="content">
      <section class="content__landing">
        <div class="filter--grey"></div>
        <video autoplay muted loop id="myVideo">
          <source src="<?= URL ?>/assets/projects/petabc/video/landing_video.mp4" type="video/mp4">
        </video>
        <div class="landing__text">
          <h2>The PetABC iTreater</h2>
          <p>
            Automatic pet feeder<br />
            for cats, dogs and rabbits<br />
          </p>
        </div>
        <a href="https://www.kickstarter.com/projects/1966606055/petabc-itreater?ref=discovery">
          <img src="<?= URL ?>/assets/projects/petabc/images/kickstarter/logo.png" alt="kickstarter" class="icon-kickstarter" />
        </a>
      </section>
      <section class="content__presentationProduct">
        <div class="presentationProduct__item" id="inital">
          <div class="presentationProduct__text end-product" data-aos="slide-right">
            <div>
              <h2>Late ? We take care of<br />
                  everything
              </h2>
              <p>
                  Thanks to our application,<br />
                  program the iTreater<br />
                  before your departure and<br />
                  record your voice to<br />
                  reassure the animals.
              </p>
              <div class="presentationProduct__icon">
                <a href="https://itunes.apple.com/fr/genre/ios/id36?mt=8">
                  <img src="<?= URL ?>/assets/projects/petabc/images/icon-store/appstore.png" alt="appstore" class="presentationProduct1__appstore"/>
                </a>
                <a href ="https://play.google.com/store?id=CBE0rgEACAAJ&hl=fr">
                  <img src="<?= URL ?>/assets/projects/petabc/images/icon-store/playstore.png" alt="playstore" class="presentationProduct1__playstore"/>
                </a>
              </div>
            </div>
          </div>
          <img src="<?= URL ?>/assets/projects/petabc/images/product/product1.png" alt="product" class="presentationProduct__img--1" data-aos="slide-left" />
        </div>
        <div class="presentationProduct__item" id="inverse">
          <div class="presentationProduct__img-right">
            <img src="<?= URL ?>/assets/projects/petabc/images/product/product2.jpg" alt="product" class="presentationProduct__img--2" data-aos="slide-right"/>
          </div>
          <div class="presentationProduct__text" data-aos="slide-left">
            <h2>Do not worry about<br />
                anything
            </h2>
            <p>
              Leave the peace of mind<br />
              of iTreater this burden of<br />
              all. Your animals will no<br />
              longer notice your<br />
              absence.
            </p>
          </div>
        </div>
      </section>
      <section class="parallaxMouse your-element content__tilt" data-tilt data-tilt-max="0" data-tilt-speed="0"
          data-tilt-perspective="0">
        <div class="parallaxMouse__textContainer" data-tilt data-tilt-max="20" data-tilt-speed="100"
            data-tilt-perspective="800">
          <div>
            <img src="<?= URL ?>/assets/projects/petabc/images/parallax/icone-microphone.png" alt="microphone icon" class="parallaxMouse__textContainer__i1">
            <p class="parallaxMouse__textContainer__p1">
              Recording your voice
            </p>
          </div>
          <div class="">
            <img src="<?= URL ?>/assets/projects/petabc/images/parallax/icone-telephone.png" alt="telephone icon" class="parallaxMouse__textContainer__i2">
            <p class="parallaxMouse__textContainer__p2">Remote Checking leftover food & Feeding</p>
          </div>
          <div class="">
            <img src="<?= URL ?>/assets/projects/petabc/images/parallax/icone-bone.png" alt="bones icon" class="parallaxMouse__textContainer__i3">
            <p class="parallaxMouse__textContainer__p3">regularly feed your pet</p>
          </div>
          <div class="">
            <img src="<?= URL ?>/assets/projects/petabc/images/parallax/icone-video.png" alt="video icon" class="parallaxMouse__textContainer__i4">
            <p class="parallaxMouse__textContainer__p4">Video & Music</p>
          </div>
          <div class="">
            <img src="<?= URL ?>/assets/projects/petabc/images/parallax/icone-temperature.png" alt="temperature icon" class="parallaxMouse__textContainer__i5">
            <p class="parallaxMouse__textContainer__p5">Check the temperature</p>
          </div>
          <a href="<?= URL ?>/assets/projects/petabc/pages/product.html">
            <img class="parallaxMouse__machine" src="<?= URL ?>/assets/projects/petabc/images/parallax/machine-noire.png" alt="Black feeder itreater">
          </a>
        </div>
      </section>
      <section class="content__kickstarter">
        <div class="kickstarter__banner">
          <img src="<?= URL ?>/assets/projects/petabc/images/kickstarter/banner.png" alt="banner kickstarter" />
          <div class="kickstarter__text">
            <h2>Kickstarter</h2>
            <p>We need 4249$ to<br/>
                produce our project
            </p>
            <a href="https://www.kickstarter.com/projects/1966606055/petabc-itreater?ref=discovery">Contribute</a>
          </div>
        </div>
      </section>
    </div>
  </main>
  <footer>
    <div id="wrapper" class="wrapper">
      <div class="wrapper__services">
        <a href="#">Services</a>
        <a href="#">Legal Information</a>
        <a href="#">saltnlight2018@gmail.com</a>
      </div>
      <div id="wrapper__medias" class="wrapper__medias">
        <a class="facebookIcon" href="https://www.facebook.com/pages/category/Shopping---Retail/Pet-Alone-But-Connected-i-Treater-1875845302709565/" target="_blank">
          <img src="<?= URL ?>/assets/projects/petabc/images/icon-social/icon-facebook.svg" alt="facebookIcon">
        </a>
        <a class="instagramIcon" href="https://www.instagram.com/petabc_itreater/" target="_blank">
          <img src="<?= URL ?>/assets/projects/petabc/images/icon-social/icon-instagram.svg" alt="instagramIcon">
        </a>
      </div>
      <div class="wrapper__button">
        <input placeholder="Sign for updates"/>
        <button>Submit</button>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="<?= URL ?>/assets/projects/petabc/scripts/vanilla-tilt.min.js"></script>
  <script type="text/javascript">
      VanillaTilt.init(document.querySelector(".your-element"), {
          max: 25,
          speed: 400
      });
  </script>
  <script type="text/javascript"  src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script type="text/javascript"  src="<?= URL ?>/assets/projects/petabc/scripts/aos.min.js"></script>
  <script>
      AOS.init();
  </script>
</body>
</html>
