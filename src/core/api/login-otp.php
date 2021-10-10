<?php
if (isset($_GET['phone'])) {
    $phone = $_GET['phone'];
    $user = new User();
    $users = $user->findAll(['phone' => $phone]);
    if (count($users) == 0) {
        $user->insert([
            'phone' => $phone,
        ]);
    }
    $_SESSION['phone'] = $phone;
    echo json_encode(['msg' => 'Đăng nhập thành công']);
}
