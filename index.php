<?php


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  '/' => 'views/home.php',
  '/products' => 'views/products.php',
  '/contact' => 'views/contact.php',
  '/about' => 'views/about.php',
];


if(array_key_exists($uri, $routes)){
  require $routes[$uri];
} else {
  http_response_code(404);

  require 'views/404.php';

  die();
}


?>