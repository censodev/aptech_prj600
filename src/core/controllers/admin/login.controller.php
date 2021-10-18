<?php
if (count($_POST) > 0) {
    $user = new User();
    $u = $user->findFirst(['phone' => $_POST['phone']]);
    if (!isset($u) || !password_verify($_POST['password'], $u['password'])) {
        $err = ('Vui lòng kiểm tra lại số điện thoại hoặc mật khẩu');
    } else {
        $_SESSION['phone'] = $u['phone'];
        $_SESSION['is_admin'] = true;
        $_SESSION['user_id'] = $u['id'];
        Helper::redirect('admin');
    }
}
include_once Helper::view('admin/login');
