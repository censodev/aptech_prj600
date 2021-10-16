<?php
$profile = (new Profile())->findById($_GET['id']);
include_once Helper::view('profile-patient');