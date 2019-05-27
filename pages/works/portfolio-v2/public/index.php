<?php

// Configuration 
  define('URL', 'http://localhost:8888/cours/basket/public/');

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

// Include controller
include '../controllers/'.$controller.'.php';