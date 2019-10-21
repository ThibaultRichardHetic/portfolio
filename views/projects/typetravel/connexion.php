<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Type Travel / connexion</title>
    <meta name="description" content="description SEO de mon site">
    <link rel="icon" type="image/png" href="<?= URL ?>/assets/projects/typetravel/images/logo6Joystick.png"/>
    <link rel="stylesheet" href="<?= URL ?>/assets/projects/typetravel/styles/styleIndex.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Roboto+Condensed" rel="stylesheet">
  </head>
  <body>
    <header>
      <img src="<?= URL ?>/assets/projects/typetravel/images/logo6Joystick.png" alt="logo de l'entreprise 6 Joystick">
      <nav>
        <ul>
          <li><a href="<?= URL ?>typetravel">Histoire</a></li>
          <li><a href="<?= URL ?>typetravel/game">Jouer</a></li>
          <li><a href="<?= URL ?>typetravel/connexion">Connexion Rapide</a></li>
          <li><a href="<?= URL ?>typetravel/connexion">Inscription</a></li>
        </ul>
      </nav>
    </header>
    <h2>Connexion</h2>
    <form class="" action="games.html" method="post">
      <p>
        <label>Votre pseudo</label> : <input id="yourPseudo" type="text" name="pseudo" placeholder="Ex : fripouille93"/>
    </p>
    <input type="submit" value="Valider" action="pseudoEffect()" />
    </form>
  <script src="<?= URL ?>/assets/projects/typetravel/script/app.js" > </script>
  </body>
</html>
