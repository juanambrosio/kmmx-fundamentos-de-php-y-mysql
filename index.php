<?php
    require_once("./core/autoloader.php");
    define('VIEWS_DIR', __DIR__ . "/views");
    define('CTRLS_DIR', __DIR__ . "/controllers");
    $router = new \core\Router\Router();
    // Start Route Setup
    $router->setRoute('/', 'home');
    $router->setRoute('/add-products', 'add-products');
    $router->setRoute('/product-list', 'list-products');
    // End Route Setup
    $router->loadView($_SERVER["REQUEST_URI"]);
