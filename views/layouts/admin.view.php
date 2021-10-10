<?php
Helper::adminGuard();
$navbar = [
    ['link' => Helper::url('admin'), 'icon' => 'users', 'title' => 'Danh sách đăng ký tiêm'],
    ['link' => Helper::url('admin/vaccine'), 'icon' => 'box', 'title' => 'Quản lý vaccine'],
    ['link' => Helper::url('admin/injection-site'), 'icon' => 'home', 'title' => 'Quản lý điểm tiêm'],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
          content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="<?php echo Helper::assets('img/icons/icon-48x48.png') ?>"/>

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html"/>

    <title>VMS | Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="<?php echo Helper::assets('css/app.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
<?php if (Helper::isAdmin()): ?>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="">
                    <span class="align-middle">VMS ADMIN</span>
                </a>
                <ul class="sidebar-nav">
                    <?php foreach ($navbar as $nav_item): ?>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?php echo $nav_item['link'] ?>">
                                <i class="align-middle" data-feather="<?php echo $nav_item['icon'] ?>"></i> <span
                                        class="align-middle"><?php echo $nav_item['title'] ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                               data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                               data-bs-toggle="dropdown">
                                <span class="text-dark"><?php echo Helper::session('phone') ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="<?php echo Helper::url('admin/logout') ?>"><i
                                            class="align-middle me-1"
                                            data-feather="log-out"></i> Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php echo $layout_content ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
<?php else: ?>
    <?php echo $layout_content ?>
<?php endif; ?>
<script src="<?php echo Helper::assets('js/app.js') ?>"></script>

</body>

</html>
