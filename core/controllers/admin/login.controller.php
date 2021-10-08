<?php
if (count($_POST) > 0) {
    // TODO: check DB -> ...
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['isAdmin'] = true;
    Helper::redirect('admin');
}
Helper::view('admin/login');
