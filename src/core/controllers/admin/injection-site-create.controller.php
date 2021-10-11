<?php
if (count($_POST) > 0) {
    (new InjectionSite())->insert($_POST);
    Helper::redirect('admin/injection-site');
}
$provinces = (new MasterProvince())->findAll();
include_once Helper::view('admin/injection-site-create');