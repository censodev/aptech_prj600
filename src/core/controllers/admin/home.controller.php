<?php
$_GET['status'] = $_GET['status'] ?? 0;
if (count($_GET) > 0) {
    $profile = new Profile();
    $profiles = $profile->findAll(['status' => $_GET['status']]);
    $profiles = [
        ['id' => 1, 'identity_card' => '1234567890', 'full_name' => 'Bui Viet Phuong', 'phone' => '0987654321', 'gender' => 1, 'birthday' => '2000-11-11'],
    ];
}

include_once Helper::view('admin/home');
