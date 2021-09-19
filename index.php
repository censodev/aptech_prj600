<?php
include_once 'core/bootstrap.php';
session_start();
$url = $_GET['url'] ?? 'home';
$url = $url == 'admin' || $url == 'admin/' ? 'admin/home' : $url;
?>
<?php if (!str_contains($url, 'api')): ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VMS</title>
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap">
</head>

<body>
<?php endif; ?>
<?php
if (str_contains($url, 'api')) {
    header('Content-Type: application/json; charset=utf-8');
    include_once "./core/$url.php";
    return;
}
$template = './views/' . $url . '.view.php';
$layout_content = file_exists($template)
    ? Helper::render($template)
    : Helper::render('./views/404.view.php');
if (str_contains($template, 'admin')) {
    include_once('./views/layouts/admin.view.php');
} else if (str_contains($template, 'login')) {
    echo $layout_content;
} else {
    include_once('./views/layouts/default.view.php');
}
?>
<?php if (!str_contains($url, 'api')): ?>
</body>

</html>
<?php endif; ?>