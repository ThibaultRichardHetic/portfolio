<?php require('../views/partials/header.php'); ?>

  <main id="fullpage" class="main">

    <section class="section section--1">
      <div class="container--title">
        <h1 class="title">
          <span class="title__wave js-wave">Hey</span>
          <span class="title__wave js-wave"> ! </span>
          <span class="title__wave js-wave">I'm </span>
          <span class="title__wave js-wave">Thibault</span>
          <span class="title__wave js-wave">, </span>
          <span class="title__wave js-wave">french </span>
          <span class="title__wave js-wave">front-end</span>
          <span class="title__wave js-wave"> developer</span>
        </h1>
      </div>
    </section>
    <section class="section section--2">
      <div class="container--project">
        <div class="container--content">
          <div class="container--text">
            <h4 class="project__name">Registration website</h4>
            <h3 class="project__title">Service Prestige</h3>
            <p class="project__date">2019</p>
            <p class="project__description">
            School project for a VTC comgny who want a new platform to presents all the avantages of service prestige and to register their news drivers by a form.
            </p>
            <p class="project__tech">Techs used : HTML, CSS, JS, PHP</p>
          </div>
          <div class="container--img">
            <a class="project__link" href="#">
              <img class="project__img" src="<?= URL ?>/assets/images/sp-dev.jpg" alt="">
            </a>
            <div class="img__calque">
              
            </div>
          </div>
        </div>
        <div class="container--pagination">
          
        </div>
      </div>
    </section>

  </main>

<?php require('../views/partials/footer.php'); ?>