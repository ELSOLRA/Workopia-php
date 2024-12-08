
<?php
require '../helpers.php';
require basePath('Database.php');
require basePath('Router.php');

// initiating the router
$router = new Router();

// get routes
$routes = require basePath('routes.php');

// get current URI and HTTP methods
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri, $method);
