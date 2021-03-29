<?php

// Configuration 
  // define('URL', 'http://localhost:8888/perso/portfolio/public');
  define('URL', 'https://www.richard-thibault.com');
session_start();


// GET 'q' param
$q = empty($_GET['q']) ? '' : $_GET['q'];


// Define controller
$controller = '404';

if($q == '')
{
  $controller = 'home';
}
else if ($q == 'about') {
  $controller = 'about';
}


else if ($q == 'crehappy'){
  $controller = 'crehappy';
}
else if ($q == 'crehappy/registration'){
  $controller = 'crehappy-registration';
}
else if ($q == 'crehappy/discover'){
  $controller = 'crehappy-discover';
}
else if ($q == 'crehappy/commentary'){
  $controller = 'crehappy-commentary';
}
else if ($q == 'crehappy/my-journal'){
  $controller = 'crehappy-myjournal';
}
else if ($q == 'crehappy/clubcrea'){
  $controller = 'crehappy-clubcrea';
}


else if ($q == 'typetravel'){
  $controller = 'typetravel';
}
else if ($q == 'typetravel/registration'){
  $controller = 'typetravel-registration';
}
else if ($q == 'typetravel/game'){
  $controller = 'typetravel-game';
}


else if ($q == 'petabc'){
  $controller = 'petabc';
}
else if ($q == 'petabc/story'){
  $controller = 'petabc-story';
}
else if ($q == 'petabc/product'){
  $controller = 'petabc-product';
}

// Include controller
include '../controllers/'.$controller.'.php';