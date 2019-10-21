<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>iTreater</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="iTreater is an automatic pet feeder using the internet. When your pet is left alone, (s)he might be blue. Most of all, having dried food all day can be the biggest torture to the pet." />
  <link rel="icon" type="image/jpg" href="<?= URL ?>/assets/projects/petabc/images/favicon.jpg"/>
  <link rel="stylesheet" type="text/css" media="screen" href="<?= URL ?>/assets/projects/petabc/styles/scss/style--generalStyles.min.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="<?= URL ?>/assets/projects/petabc/styles/scss/main/style--header_footer.min.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="<?= URL ?>/assets/projects/petabc/styles/scss/product/style--product.min.css"/>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
  <header>
    <div class="wrapper">
      <div class="wrapper__header">
        <img src="<?= URL ?>/assets/projects/petabc/images/logo.png" alt="logo">
          <a class="wrapper__header__a" href="<?= URL ?>petabc">HOME</a>
          <a class="wrapper__header__a" href="<?= URL ?>petabc/story">STORY</a>
          <a  class="wrapper__header__a" href="<?= URL ?>petabc/product">PRODUCT</a>
          <a class="wrapper__header__button" href="http://kck.st/2Oprih9">KICKSTARTER</a>
      </div>
    </div>
    <div class="burgerMenu">
      <img src="images/logo.png" alt="##">
      <input id="burger" type="checkbox"/>
      <label for="burger">
        <span></span>
        <span></span>
        <span></span>
      </label>
      <nav>
        <ul>
          <li><a href="<?= URL ?>petabc">Home</a></li>
          <li><a href="<?= URL ?>petabc/story">Story</a></li>
          <li><a href="<?= URL ?>petabc/product">Product</a></li>
          <li><a href="http://kck.st/2Oprih9">Kickstarter</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <section class="models">
      <div class="models__title">
        <h2 class="models__h2">Product</h2>
        <div class="models__blue"></div>
      </div>
      <div class="models__container--grid">
        <aside class="models__aside">
          <div class="aside__colorBack">
            <img class="models__img" src="<?= URL ?>/assets/projects/petabc/images/productPage/distributeurBlack.png" alt="black pet feeder">
            <div class="aside__colorBack--rotation">
              <div class="colorBack--top"></div>
              <div class="colorBack--bottom"></div>
            </div>
          </div>
          <div class="models__choice" >
            <div class="models__containerBorder">
              <div class="models__divColor models__containerBorder--red"></div>
              <div class="models__divColor models__containerBorder--black"></div>
              <div class="models__divColor models__containerBorder--white"></div>
            </div>
            <div class="models__containerColor">
              <div class="models__divColor models__divColor--red"></div>
              <div class="models__divColor models__divColor--black"></div>
              <div class="models__divColor models__divColor--white"></div>
            </div>
          </div>
        </aside>
        <article class="models__article">
          <h3>Technical specification</h3>
          <p>Model name: Snl-sf100</p>
          <p>Dimensions: 16.1" hight x 9.4" wide x 11.8" deep</p>
          <p>Volume: Around 120 oz</p>
          <h3>Features:</h3>
          <p>-Remote Checking leftover food & Feeding</p>
          <p>-Remote Snacking</p>
          <p>-Recording your voice</p>
          <p>-Video & Music</p>
          <p>-Easy to wash</p>
          <p>-Portableness</p>
          <p>-Timer setting</p>
          <p>-Button Operation</p>
          <p>Only for middle or small size dog (less than 3kg)</p>
        </article>
      </div>
    </section>
    <section class="faq">
      <div class="faq__title">
        <h2 class="faq__h2">Frequently Asked Questions</h2>
        <div class="faq__blue"></div>
      </div>
      <div class="faq__container">
        <article>
          <h4>What is the purpose of the iTreater ?</h4>
          <p>The purpose of the iTreater is to feed your pets when you are not there.</p>
          <img src="<?= URL ?>/assets/projects/petabc/images/productPage/bulle.png" alt="comic strip bubble icon" class="bulle1">
          <img src="<?= URL ?>/assets/projects/petabc/images/productPage/bulle2.png" alt="comic strip bubble icon" class="bulle2">
        </article>
        <article>
          <h4>How does it work ?</h4>
          <p>The machine stock the food and serve the meal to your animals at the scheduled times.</p>
          <img src="<?= URL ?>/assets/projects/petabc/images/productPage/bulle.png" alt="comic strip bubble icon" class="bulle1">
          <img src="<?= URL ?>/assets/projects/petabc/images/productPage/bulle2.png" alt="comic strip bubble icon" class="bulle2">
        </article>
        <article>
          <h4>Which animals can use the iTreater ?</h4>
          <p>Dogs, cats and rabbits.</p>
          <img src="<?= URL ?>/assets/projects/petabc/images/productPage/bulle.png" alt="comic strip bubble icon" class="bulle1">
          <img src="<?= URL ?>/assets/projects/petabc/images/productPage/bulle2.png" alt="comic strip bubble icon" class="bulle2">
        </article>
        <article>
          <h4>How to control the PetABC iTreater ?</h4>
          <p>You can control your iTreater with your application or directly on the machine.</p>
          <img src="<?= URL ?>/assets/projects/petabc/images/productPage/bulle.png" alt="comic strip bubble icon" class="bulle1">
          <img src="<?= URL ?>/assets/projects/petabc/images/productPage/bulle2.png" alt="comic strip bubble icon" class="bulle2">
        </article>
        <article>
          <h4>What are the differences between the different models ?</h4>
          <p>There are no differences between the models.</p>
          <img src="<?= URL ?>/assets/projects/petabc/images/productPage/bulle.png" alt="comic strip bubble icon" class="bulle1">
          <img src="<?= URL ?>/assets/projects/petabc/images/productPage/bulle2.png" alt="comic strip bubble icon" class="bulle2">
        </article>
      </div>
    </section>
  </main>

  <footer>
    <div id="wrapper" class="wrapper">
      <div class="wrapper__services">
        <p>Services</p>
        <p>Legal Information</p>
        <p>saltnlight2018@gmail.com</p>
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

<script type="text/javascript"  src="<?= URL ?>/assets/projects/petabc/scripts/productPage.js"></script>
</body>
</html>
