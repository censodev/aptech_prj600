<?php
$country = new MasterCountry();
$arr = $country->findAll(['name' => 'Viet Nam']);
include_once Helper::view('admin/home');
