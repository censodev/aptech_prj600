<?php
$profile = (new Profile())->findById($_GET['id']);
$countries = (new MasterCountry())->findAll();
$nations = (new MasterNation())->findAll();
$provinces = (new MasterProvince())->findAll();
$districts = (new MasterDistrict())->findAll(['province_id' => $profile['province_id']]);
$wards = (new MasterWard())->findAll(['district_id' => $profile['district_id']]);
$vaccines = (new Vaccine())->findAvailable();
include_once Helper::view('admin/profile');