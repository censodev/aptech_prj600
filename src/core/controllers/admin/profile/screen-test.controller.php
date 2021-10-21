<?php
if ($_POST['screens'][2] == 1) {
    $status = ProfileStatus::REJECTED;
    $msg = 'Chống chỉ định tiêm chủng vắc xin';
} elseif ($_POST['screens'][0] == 1 || $_POST['screens'][3] == 1 || $_POST['screens'][4] == 1 || $_POST['screens'][5] == 1 || $_POST['screens'][6] == 1 || $_POST['screens'][7] == 1 || $_POST['screens'][8] == 1) {
    $status = ProfileStatus::REJECTED;
    $msg = 'Trì hoãn tiêm chủng';
} elseif ($_POST['screens'][1] == 1 || $_POST['screens'][9] == 1 || $_POST['screens'][10] == 1 || $_POST['screens'][11] == 1) {
    $status = ProfileStatus::REJECTED;
    $msg = 'Chuyển tiêm chủng và theo dõi tại bệnh viện';
} else {
    $status = ProfileStatus::SCREENED;
    $msg = 'Đủ điều kiện tiêm chủng';
}
$profile = (new Profile())->findById($_GET['id']);
$body = [
    'status' => $status,
    'screen_test' => json_encode($_POST['screens']),
];
(new Profile())->update($_GET['id'], $body);

include_once Helper::view('admin/profile-screen-test');