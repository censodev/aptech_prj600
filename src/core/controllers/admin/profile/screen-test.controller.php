<?php
$body = [
    'status' => ProfileStatus::SCREENED,
    'screen_test' => json_encode($_POST['screens']),
];
(new Profile())->update($_GET['id'], $body);
Helper::redirect('admin/home?status=' . ProfileStatus::CHECKED_IN);
