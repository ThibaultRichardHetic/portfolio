<div class="container">
        <div class="container__navbar">
            <div class="navbar__reasearch">
                <form class="reasearch__form" method="post">
                <input name="saisie" type="text" placeholder="Recherche" required />
                </form>
                <div class="navbar__magnifyingglass">
                <a href="#">
                    <img src="<?= URL ?>/assets/projects/crehappy/src/Navbar/Glass.png">
                </a>
                </div>
            </div>
            <div class="navbar__logo">
                <a href="discover.php">
                <img src="<?= URL ?>/assets/projects/crehappy/src/all/logo.png" alt="">
                </a>  
            </div>
            <div class="navbar__profil">
                <a href="myjournal.php">
                <img src="<?= URL ?>/assets/projects/crehappy/src/Navbar/User.png">
                </a>
            </div>
        </div>
        <div class="container__sidebar">
            <div class="sidebar__avatarpicture">
                <a href="myjournal.php">
                    <img class="js-avatarpicture" src="<?= URL ?>/assets/projects/crehappy/src/Discovery/Main/Posts/PP/images.png" alt="">
                </a>
                <div class="avatarpicture__pseudo">
                    <p>Pseudo</p>
                </div>
            </div>
            <div class="sidebar__topics">
                <ul class="js-ul-side">
                    <a href="discover.php">
                        <li class="topics__mytopics">
                           <p>Mes Thèmes</p> 
                        </li>
                    </a>
                    <li class="topics__videos">
                        <a href="#">Musique</a>
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Hexagon_White.png">
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Music.png" class="topics__iconmusic">
                    </li>
                    <li class="topics__sport">
                        <a href="#">Sport</a>
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Hexagon_White.png">
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Sport.png" class="topics__iconsport">
                    </li>
                    <li class="topics__videosgames">
                        <a href="#">Jeux</a>
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Hexagon_White.png">
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Controller.png" class="topics__iconcontroller">
                    </li>
                    <li class="topics__art">
                        <a href="#">Art</a>
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Hexagon_White.png">
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Pencil.png" class="topics__iconpencil">
                    </li>
                    <li class="topics__music">
                        <a href="#">Cuisine</a>
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Hexagon_White.png">
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Cook.png" class="topics__iconcook">
                    </li>
                    <li class="topics__tutoriels">
                        <a href="#">Tutoriels</a>
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Hexagon_White.png">
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Scissors.png" class="topics__iconscissors">
                    </li>
                    <li class="topics__humor">
                        <a href="#">Humour</a>
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Hexagon_White.png">
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Tongue.png" class="topics__icontongue">
                    </li>
                    <li class="topics__myclubs js-add-club">
                        <a href="#">Créer Clubs</a>
                        <img src="<?= URL ?>/assets/projects/crehappy/src/Sidebar/Cross.png">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="<?= URL ?>/assets/projects/crehappy/scripts/header.js"></script>
