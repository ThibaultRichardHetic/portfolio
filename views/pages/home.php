<?php require('../views/partials/header.php'); ?>

  <main id="fullpage" class="main">

    <section class="section section--1">
      <div class="container--title">
        <h1 class="title">
          <span class="title__wave js-wave">Hi</span>
          <span class="title__wave js-wave"> ! </span>
          <span class="title__wave js-wave">I'm </span>
          <span class="title__wave js-wave">Thibault</span>
          <span class="title__wave js-wave">, </span>
          <span class="title__wave js-wave">french </span>
          <span class="title__wave js-wave">junior</span>
          <span class="title__wave js-wave"> developer</span>
        </h1>
      </div>
    </section>
    <section class="section section--2">
      <div class="container--project">
        <div class="container--content">
          <div class="text--relative">
            <div class="container--text">
              <h4 class="project__name">Registration website</h4>
              <h3 class="project__title">Service Prestige</h3>
              <p class="project__date">2019</p>
              <p class="project__description">
                Freelance project for a VTC company looking for a website to recruit new drivers. The emphasis on luxury and quality is important. 
              </p>
              <p class="project__tech">Techs used : HTML, CSS, JS, PHP</p>
            </div>
          </div>
          <div class="project__illu">
            <a class="project__link" href="http://www.serviceprestige.com" target="_blank">
              <div class="container--img">
                <img class="project__img" src="<?= URL ?>/assets/images/sp-dev.jpg" alt="service prestige developpement web site">
                <div class="img__calque"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="container--pagination">
          <p class="pagination__total">04</p>
          <div class="pagination__line"></div>
          <p class="pagination__current">01</p>
        </div>
      </div>
    </section>
    <section class="section section--3">
      <div class="container--project">
        <div class="container--content">
          <div class="text--relative">
            <div class="container--text">
              <h4 class="project__name">Social Network</h4>
              <h3 class="project__title">Crehappy</h3>
              <p class="project__date">2018</p>
              <p class="project__description">
                A two-week school project on "Technology and Humans". So I chose to create a secure and utopian social network for young people, in order to give them a first experience of the web. 
              </p>
              <p class="project__tech">Techs used : HTML, CSS, JS, PHP, API</p>
            </div>
          </div>
          <div class="project__illu">
            <a class="project__link" href="<?= URL ?>/crehappy" target="_blank">
              <div class="container--img">
                <img class="project__img" src="<?= URL ?>/assets/images/crehappy.jpg" alt="crehappy web site">
                <div class="img__calque"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="container--pagination">
          <p class="pagination__total">04</p>
          <div class="pagination__line"></div>
          <p class="pagination__current">02</p>
        </div>
      </div>
    </section>
    <section class="section section--4">
      <div class="container--project">
        <div class="container--content">
          <div class="text--relative">
            <div class="container--text">
              <h4 class="project__name">Presentation Website</h4>
              <h3 class="project__title">The PetABC</h3>
              <p class="project__date">2018</p>
              <p class="project__description">
                School project. 4 days to choose a project on kick starter, and create a showcase website on it.
              </p>
              <p class="project__tech">Techs used : HTML, CSS, JS, PHP</p>
            </div>
          </div>
          <div class="project__illu">
            <a class="project__link" href="<?= URL ?>/petabc" target="_blank">
              <div class="container--img">
                <img class="project__img" src="<?= URL ?>/assets/images/pet-abc.jpg" alt="pet abc web site">
                <div class="img__calque"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="container--pagination">
          <p class="pagination__total">04</p>
          <div class="pagination__line"></div>
          <p class="pagination__current">03</p>
        </div>
      </div>
    </section>
    <section class="section section--5">
      <div class="container--project">
        <div class="container--content">
          <div class="text--relative">
            <div class="container--text">
              <h4 class="project__name">Web Game</h4>
              <h3 class="project__title">Type Travel</h3>
              <p class="project__date">2018</p>
              <p class="project__description">
                School project. 4 days to develop a website game using native languages.
              </p>
              <p class="project__tech">Techs used : HTML, CSS, JS</p>
            </div>
          </div>
          <div class="project__illu">
            <a class="project__link" href="<?= URL ?>/typetravel" target="_blank">
              <div class="container--img">
                <img class="project__img" src="<?= URL ?>/assets/images/type-travel.jpg" alt="type travel web site">
                <div class="img__calque"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="container--pagination">
          <p class="pagination__total">04</p>
          <div class="pagination__line"></div>
          <p class="pagination__current">04</p>
        </div>
      </div>
    </section>

  </main>

<?php require('../views/partials/footer.php'); ?>