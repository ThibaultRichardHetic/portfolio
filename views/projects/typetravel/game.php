<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TYPE TRAVEL</title>
    <meta name="description" content="Jeu Type Travel">
    <link rel="icon" type="image/png" href="<?= URL ?>/assets/projects/typetravel/images/logotype.png" />
    <link rel="stylesheet" href="<?= URL ?>/assets/projects/typetravel/styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
  </head>
  <body>

    <div class="game" id="game">
      <div class="startGame" id="startGame">
        <h3 id="start">CLIQUEZ POUR COMMENCER</h3>
        <p>Écrivez le plus vite possible!</p>
      </div>
      <div class="endGame" id="endGame">
        <h3 id="gameover">GAME OVER</h3>
        <button type="button" id="restart">REJOUER</button>
        <p>Votre score:</p>
      </div>
      <div id="word"></div>
      <div class="tech-slideshow">
        <div class="mover-1"></div>
        <img src="<?= URL ?>/assets/projects/typetravel/images/darkVoyager.png" alt="personnage" id="player" class="player-anim-1">
      </div>
      <div class="info">
        <span id="pseudo" >pseudo : anonyme</span>
        <span id="score" >score : 0</span>
        <span id="combo" ></span>
      </div>
    <form>
      <input id="case" type="text" class="search" autofocus>
    </form>
    </div>
    <script src="<?= URL ?>/assets/projects/typetravel/script/data.js"></script>
    <script src="<?= URL ?>/assets/projects/typetravel/script/app.js"></script>
  </body>
</html>
