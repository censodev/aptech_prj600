<?php
include_once 'core/bootstrap.php';

session_start();

$url = $_GET['url'] ?? 'home';
$url = $url == 'admin' || $url == 'admin/' ? 'admin/home' : $url;

if (str_contains($url, 'api')) {
    header('Content-Type: application/json; charset=utf-8');
    include_once "./core/$url.php";
    return;
}

$template = './views/' . $url . '.view.php';

if (file_exists($template)) {
    $layout_content = Helper::render($template);
} else {
    die;
}

if (str_contains($template, 'admin')) {
    include_once('./views/layouts/admin.view.php');
} else {
    include_once('./views/layouts/default.view.php');
}
?>
