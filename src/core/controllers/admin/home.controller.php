<?php
$injection_sites = (new InjectionSite())->findAll(['status' => 1]);

$_GET['status'] = $_GET['status'] ?? 0;
$_SESSION['injection_date'] = $_GET['date'] ?? $_SESSION['injection_date'] ?? date('Y-m-d');
$_SESSION['injection_site'] = $_GET['injection_site'] ?? $_SESSION['injection_site'] ?? $injection_sites[0]['id'] ?? '';

// TODO: bổ sung query related
$profiles = (new Profile())->findAll([
    'status' => $_GET['status'],
    'injection_site_id' => $_SESSION['injection_site'],
    'injection_date' => $_SESSION['injection_date'],
]);

include_once Helper::view('admin/home');
