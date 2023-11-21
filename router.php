<?php

#$base_path = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);
$base_path = '/webchat/';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove leading slash and handle the root route
$route = ($uri === $base_path) ? 'home' : trim(str_replace($base_path, '', $uri), '/');

switch ($route) {
      case 'home':
            $page = 'pages/home.php';
            break;
      case 'chat':
            $page = 'pages/chat.php';
            
            break;
      case 'login':
            $page = 'pages/login.php';
            break;
      case 'register':
            $page = 'pages/register.php';
            break;
      default:
            header('HTTP/1.0 404 Not Found');
            $page = 'pages/404.php';
            break;
}

// Include the layout for all pages
require 'templates/layout.php';
