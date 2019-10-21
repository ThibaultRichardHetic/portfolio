<?php

// Configuration 
  // define('URL', 'http://localhost:8888/perso/portfolio/public');
  define('URL', 'http://richard-thibault.com');

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
else if ($q == 'crehappy/inscription'){
  $controller = 'crehappy-inscription';
}
else if ($q == 'crehappy/decouverte'){
  $controller = 'crehappy-decouverte';
}
else if ($q == 'crehappy/commentaire'){
  $controller = 'crehappy-commentaire';
}

else if ($q == 'typetravel'){
  $controller = 'typetravel';
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