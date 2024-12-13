
<?php
require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;

// Autoloader for autoloading path not needing require statements 
/* require basePath('Framework/Database.php');
require basePath('Framework/Router.php');
 */
// Using autoloading in composer.json
/* spl_autoload_register(function ($class) {
    $path = basePath('Framework/' . $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
}); */

// initiating the router
$router = new Router();

// get routes
$routes = require basePath('routes.php');

// get current URI and HTTP methods
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route the request
$router->route($uri);
