<?php namespace core\Router;
    class Router {
        public function getPage($uri): string {
            $viewDir = VIEWS_DIR;
            switch ($uri) {
                case '/':
                    $viewDir .= '/home.php';
                    break;
                case '/add-products':
                    $viewDir .= '/add-products.php';
                    break;
                default:
                    $viewDir .= '/404.php';
            }
            return $viewDir;
        }
    }