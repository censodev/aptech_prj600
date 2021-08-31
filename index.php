<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <?php if (empty($_GET['url'])): ?>
        <?php header('Location: home') ?>
    <?php elseif (str_contains($_GET['url'], 'admin')): ?>
        <!-- Start admin header -->
        <?php include_once('./admin/layouts/header.php') ?>
        <!-- End admin header -->
        <div class="d-flex">
            <?php include_once('./admin/layouts/sidebar.php') ?>
            <div class="content">
                <?php
                    $path = './admin/pages/'.str_replace('admin/', '', $_GET['url']).'.php';
                    if (file_exists($path)) {
                        include_once($path);
                    } else {
                        include_once('./admin/pages/404.php');
                    }
                ?>
            </div>
        </div>
        <!-- Start admin footer -->
        <?php include_once('./admin/layouts/footer.php') ?>
        <!-- End admin footer -->
    <?php else: ?>
        <?php include_once('./layouts/header.php') ?>
        <?php
            $path = './pages/'.$_GET['url'].'.php';
            if (file_exists($path)) {
                include_once($path);
            } else {
                include_once('./pages/404.php');
            }
        ?>
        <?php include_once('./layouts/footer.php') ?>
    <?php endif ?>
</body>
</html>