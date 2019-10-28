<?php require('../views/partials/header.php'); ?>

  <main class="main--about">
    <div class="container--about">
      <h1 class="about__title">I'm a French Web Developer</h1>
      <p class="about__info">
        Hey I am Thibault Richard, 3rd year student at HETIC (n°1 web school) located in Paris.
        I am passionate about web and mobile development. I also practice design and digital marketing. 
        Feel free to download my CV for more information or send me an email for a freelance assignment. 
      </p>
      <div class="about__resume">
        <a href="<?= URL ?>/assets/images/CV-Thibault-Richard.pdf" download="CV-Thibault-Richard.pdf" class="resume__dl">
          <p class="resume__title">My resume</p>
          <img src="<?= URL ?>/assets/images/download-logo.svg" alt="image de téléchargement" class="resume__logo">
        </a>
      </div>
    </div>
    <div class="container--competencies">
      <div class="skill">
        <h2 class="skill__title">My Skills</h2>
        <div class="skill__icons">
          <img class="skill__icon" src="<?= URL ?>/assets/images/html-logo.svg" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/css-logo.svg" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/js-logo.svg" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/php-logo.svg" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/webpack-logo.svg" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/git-logo.svg" alt="">
        </div>
      </div>
      <div class="language">
        <h2 class="language__title">My Languages</h2>
        <div class="language__list">
          <div class="language__groupe">
            <p class="language__country">French</p>
            <p class="language__level">Native</p>
          </div>
          <div class="language__groupe">
            <p class="language__country">English</p>
            <p class="language__level">Advanced</p>
          </div>
          <div class="language__groupe">
            <p class="language__country">Spanish</p>
            <p class="language__level">Scholar</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container--formation">
      <h2 class="formation__title">My Formation</h2>
      <div class="formation__content">
        <p class="formation__description">HETIC - "Grande école cursus"</p>
        <p class="formation__date">2017 - 2022</p>
      </div>
      <div class="formation__content">
        <p class="formation__description">Baccalauréat - Scientifique </p>
        <p class="formation__date">2017</p>
      </div>
    </div>
  </main>

<?php require('../views/partials/footer.php'); ?>