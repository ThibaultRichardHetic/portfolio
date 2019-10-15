<?php

// Configuration 
  define('URL', 'http://localhost:8888/perso/portfolio/public');
  //define('URL', 'http://richard-thibault.com');

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
  define('URL_crehappy', 'http://localhost:8888/perso/portfolio/views/projects/crehappy/');
  // define('URL_crehappy', 'http://richard-thibault.com/../views/projects/crehappy/');
}
else if ($q == 'typetravel'){
  $controller = 'typetravel';
  define('URL_typetravel', 'http://localhost:8888/perso/portfolio/views/projects/typetravel/');
  // define('URL_typetravel', 'http://richard-thibault.com/../views/projects/typetravel/');
}
else if ($q == 'petabc'){
  $controller = 'petabc';
  define('URL_petabc', 'http://localhost:8888/perso/portfolio/views/projects/petabc/');
  // define('URL_petabc', 'http://richard-thibault.com/../views/projects/petabc/');
}

// Include controller
include '../controllers/'.$controller.'.php';