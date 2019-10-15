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
}
else if ($q == 'typetravel'){
  $controller = 'typetravel';
}
else if ($q == 'petabc'){
  $controller = 'petabc';
}


// Include controller
include '../controllers/'.$controller.'.php';