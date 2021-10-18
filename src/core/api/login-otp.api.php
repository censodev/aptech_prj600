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
    $user_id = ($user->findAll(['phone' => $phone]))[0]['id'];
    $_SESSION['user_id'] = $user_id;
    $_SESSION['phone'] = $phone;
    echo json_encode(['msg' => 'Đăng nhập thành công']);
}
