<?php
include_once 'core/bootstrap.php';

session_start();

$route = $_GET['url'] ?? 'home';
$route = $route == 'admin' || $route == 'admin/' ? 'admin/home' : $route;

// API
if (str_contains($route, 'api')) {
    header('Content-Type: application/json; charset=utf-8');
    include_once "./core/$route.php";
    return;
}

// MVC
$controller = "./core/controllers/$route.controller.php";

if (!file_exists($controller)) {
    echo '404 Page not found';
    return;
}

$layout_content = Helper::load($controller);

if (str_contains($controller, 'admin')) {
    include_once('./views/layouts/admin.view.php');
} else {
    include_once('./views/layouts/default.view.php');
}
?>
