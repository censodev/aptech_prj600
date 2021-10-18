<?php
$profiles = (new Profile())->findAll(['user_id' => $_SESSION['user_id'] ]);
$qr = new QrService();
include_once Helper::view('home');
