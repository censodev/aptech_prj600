<?php
if (count($_POST) > 0) {
    $_POST['user_id'] = $_SESSION['user_id'];
    (new Profile())->insert($_POST);
    Helper::redirect('');
}
$countries = (new MasterCountry())->findAll();
$nations = (new MasterNation())->findAll();
$provinces = (new MasterProvince())->findAll();
include_once Helper::view('injection-registration');