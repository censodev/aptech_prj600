<?php
$profiles = (new Profile())->findAll(['phone' => $_SESSION['phone'] ]);

include_once Helper::view('home');
