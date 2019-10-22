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
    <link rel="stylesheet" type="text/css" media="screen" href="<?= URL ?>/assets/projects/petabc/styles/scss/story/style--story.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
  <header>
    <div class="wrapper">
      <div class="wrapper__header">
        <img src="../images/logo.png" alt="logo">
          <a class="wrapper__header__a" href="<?= URL ?>/petabc">HOME</a>
          <a class="wrapper__header__a" href="<?= URL ?>/petabc/story">STORY</a>
          <a  class="wrapper__header__a" href="<?= URL ?>/petabc/product">PRODUCT</a>
          <a class="wrapper__header__button" href="http://kck.st/2Oprih9">KICKSTARTER</a>
      </div>
    </div>
    <div class="burgerMenu">
      <img src="images/logo.png" alt="logo iTreater" class="logo">
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
    <div class="content--story">
      <section class="story">
        <div class="story__text">
            <h1>Our Story</h1>
            <p>
                The value of iTreater is to help people who are too busy
                with their work schedules to raise a pet by providing the functions to treat their pets instead of those pet owners.
                Using IoT (Internet of Things) technology, we have implemented those functions on iTreater.
            </p>
        </div>
      </section>
      <section class="timeline">
        <div>
          <h2>Our project over the years</h2>
          <div class="under_h2year"></div>
        </div>
        <div class="timeline__bar">
          <aside>
            <div class="progress-container">
              <div class="progress-bar" id="myBar"></div>
            </div>
          </aside>
          <article data-aos="slide-right">
            <h3>2014</h3>
            <div class="under_date"></div>
            <h4>September - December</h4>
            <p>Proof of idea</p>
          </article>
          <article data-aos="slide-right">
            <h3>2015</h3>
            <div class="under_date"></div>
            <h4>June</h4>
            <p>Concept prototype</p>
            <h4>November - December</h4>
            <p>1st Voice of customer</p>
            <img src="../images/timeline/product/product__1.png" alt="first product"/>
          </article>
          <article data-aos="slide-right">
             <h3>2016</h3>
             <div class="under_date"></div>
             <h4>June</h4>
             <p>2nd Voice of Customer</p>
             <h4>November - December</h4>
             <p>First Working Prototype</p>
             <img src="<?= URL ?>/assets/projects/petabc/images/timeline/product/product__2.png" alt="second product"/>
             <img src="<?= URL ?>/assets/projects/petabc/images/timeline/logo/logo__1.png" alt="first logo"/>
          </article>
          <article data-aos="slide-right">
             <h3>2017</h3>
             <div class="under_date"></div>
             <h4>May</h4>
             <p>Second working prototype</p>
             <img src="<?= URL ?>/assets/projects/petabc/images/timeline/product/product__3.png" alt="third product"/>
             <h4>November</h4>
             <p>Third prototypes</p>
             <h4>December</h4>
             <p>TPatent registered</p>
             <img src="<?= URL ?>/assets/projects/petabc/images/timeline/logo/logo__2.png" alt="second logo"/>
          </article>
          <article data-aos="slide-right">
             <h3>2018</h3>
             <div class="under_date"></div>
             <p>PetABC iTreater</p>
             <img src="<?= URL ?>/assets/projects/petabc/images/timeline/logo/logo__3.png" alt="third logo"/>
          </article>
        </div>
      </section>
      <section class="presentationTeam">
        <h2>Our Team</h2>
        <div class="team">
          <div class="block__imgprofils">
            <img class="block__imgprofils__img" src="<?= URL ?>/assets/projects/petabc/images/story/profils/id1.png" alt="team member">
            <div class="block__imgprofils__p">
              <p>Boyun Eom</p>
              <p>CEO</p>
            </div>
            </div>
            <div class="block__imgprofils">
              <img class="block__imgprofils__img" src="<?= URL ?>/assets/projects/petabc/images/story/profils/id2.png" alt="team member">
              <div class="block__imgprofils__p">
                <p>Jahye Jung</p>
                <p>Senior Researcher</p>
              </div>
            </div>
            <div class="block__imgprofils">
              <img class="block__imgprofils__img" src="<?= URL ?>/assets/projects/petabc/images/story/profils/id3.png" alt="team member">
              <div class="block__imgprofils__p">
                <p>Dahun Jung</p>
                <p>Senior Researcher</p>
              </div>
            </div>
            <div class="block__imgprofils">
              <img class="block__imgprofils__img" src="<?= URL ?>/assets/projects/petabc/images/story/profils/id4.png" alt="team member">
              <div class="block__imgprofils__p">
                <p>David C. Chong</p>
                <p>Technical Adviser</p>
              </div>
            </div>
            <div class="block__imgprofils">
              <img class="block__imgprofils__img" src="<?= URL ?>/assets/projects/petabc/images/story/profils/id5.png" alt="team member">
              <div class="block__imgprofils__p">
                <p>Jihun Shim</p>
                <p>Researcher</p>
              </div>
            </div>
            <div class="block__imgprofils">
              <img class="block__imgprofils__img" src="<?= URL ?>/assets/projects/petabc/images/story/profils/id6.png" alt="team member">
              <div class="block__imgprofils__p">
                <p>Sunjae Her</p>
                <p>Web designer</p>
              </div>
            </div>
            <div class="block__imgprofils">
              <img class="block__imgprofils__img" src="<?= URL ?>/assets/projects/petabc/images/story/profils/id7.png" alt="team member">
              <div class="block__imgprofils__p">
                <p>Heeju Maeng</p>
                <p>Marketing</p>
              </div>
            </div>
        </div>
      </section>
    </div>

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

  <script type="text/javascript"  src="<?= URL ?>/assets/projects/petabc/scripts/scroll.js"></script>
  <script type="text/javascript"  src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script type="text/javascript"  src="<?= URL ?>/assets/projects/petabc/scripts/aos.min.js"></script>
  <script>
  AOS.init();
  </script>
</body>
</html>
