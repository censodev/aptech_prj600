<?php
    $profile = (new Profile())->findFirst(['identity_card' => $_GET['id']]);
    if( $profile != NULL){

    $country =(new MasterCountry())->findById($profile['country_id'])['name'];

    $nation =(new MasterNation())->findById($profile['nation_id'])['name'];

    $ward  =(  new MasterWard())->findById($profile['ward_id'])['name'];

    $district = (new MasterDistrict())->findById($profile['district_id'])['name'];

    $province = (new MasterProvince())->findById($profile['province_id'])['name'] ;

    $profiles = (new Profile())->findFirst(['identity_card' => $_GET['identity_card']]);
    }
include_once Helper::view('vaccine-passport');?>
