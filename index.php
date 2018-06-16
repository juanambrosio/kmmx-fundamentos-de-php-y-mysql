<?php
    require_once("./core/autoloader.php");
    define('VIEWS_DIR', __DIR__ . "/views");
    define('CTRLS_DIR', __DIR__ . "/controllers");
    $router = new \core\Router\Router();
    $viewFile = $router->getPage($_SERVER["REQUEST_URI"]);
    require_once($viewFile);
