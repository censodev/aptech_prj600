<?php
$profiles = (new Profile())->findAll(['phone' => $_SESSION['phone'] ]);
$qr = new QrService();

include_once Helper::view('home');
