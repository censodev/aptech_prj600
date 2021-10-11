<?php
$injection_sites = (new InjectionSite())->findAll(['status' => 1]);

$_GET['status'] = $_GET['status'] ?? 0;
$_GET['date'] = $_GET['date'] ?? date('Y-m-d');
$_GET['s'] = $_GET['s'] ?? '';
$_GET['injection_site'] = $injection_sites[0]['id'] ?? '';

// TODO: bổ sung query related
$profiles = (new Profile())->findAll([
    'status' => $_GET['status'],
    'injection_site_id' => $_GET['injection_site'],
    'injection_date' => $_GET['date'],
]);

// mock
$profiles = [
    ['id' => 1, 'identity_card' => '1234567890', 'full_name' => 'Bui Viet Phuong', 'phone' => '0987654321', 'gender' => 1, 'birthday' => '2000-11-11'],
];

include_once Helper::view('admin/home');
