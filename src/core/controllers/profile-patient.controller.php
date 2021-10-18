<?php
    $profile = (new Profile())->findById($_GET['id']);

    $screenTest = json_decode($profile['screen_test']);

    $country =(new MasterCountry())->findById($profile['country_id'])['name'];

    $nation =(new MasterNation())->findById($profile['nation_id'])['name'];

    $ward  =(  new MasterWard())->findById($profile['ward_id'])['name'];

    $district = (new MasterDistrict())->findById($profile['district_id'])['name'];

    $province = (new MasterProvince())->findById($profile['province_id'])['name'] ;

include_once Helper::view('profile-patient');