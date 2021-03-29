<?php require('../views/partials/header.php'); ?>

  <main class="main--about">
    <div class="container--about">
      <h1 class="about__title">I'm a French Web Developer</h1>
      <p class="about__info">
        HI, I am Thibault Richard, a 4th year student at hetic (n1 web school) located in Paris.  
        I am currently looking for a 6-month internship starting in May 2021, in the field of web development. 
        I am passionate about web and mobile development.  I also like and practice product design and digital marketing. 
        Feel free to download my resume or contact me by email for more information.
      </p>
      <div class="about__resume">
        <a href="<?= URL ?>/assets/images/Thibault_Richard_CV.pdf" download="CV_Thibault_Richard.pdf" class="resume__dl">
          <p class="resume__title">My resume</p>
          <img src="<?= URL ?>/assets/images/download-logo.svg" alt="image de téléchargement" class="resume__logo">
        </a>
      </div>
    </div>
    <div class="container--competencies">
      <div class="skill">
        <h2 class="skill__title">My Skills</h2>
        <div class="skill__icons">
          <img class="skill__icon" src="<?= URL ?>/assets/images/html-logo.png" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/css-logo.png" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/js-logo.svg" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/logo-vue.png" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/logo-react.png" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/php-logo.svg" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/oracle-logo.png" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/scss-logo.png" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/git-logo.png" alt="">
          <img class="skill__icon" src="<?= URL ?>/assets/images/adobe-logo.png" alt="">
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
            <p class="language__level">Academic</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container--formation">
      <h2 class="formation__title">My Education</h2>
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