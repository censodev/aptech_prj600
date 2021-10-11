<?php
if (count($_POST) > 0) {
    (new InjectionSite())->update($_POST['id'], $_POST);
    Helper::redirect('admin/injection-site');
}
$injection_site = (new InjectionSite())->findById($_GET['id']);
$provinces = (new MasterProvince())->findAll();
$districts = (new MasterDistrict())->findAll(['province_id' => $injection_site['province_id']]);
include_once Helper::view('admin/injection-site-update');
