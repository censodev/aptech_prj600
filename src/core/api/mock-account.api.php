<?php
$user = new User();
$users = $user->findAll();
if (count($users) == 0) {
    $phone = '0987654321';
    $user->insert([
        'phone' => $phone,
        'password' => password_hash('123456', PASSWORD_DEFAULT),
    ]);
    echo json_encode(['msg' => "Tạo thành công tài khoản với số điện thoại: $phone"]);
    return;
}
echo json_encode(['msg' => 'Không thể mock tài khoản']);