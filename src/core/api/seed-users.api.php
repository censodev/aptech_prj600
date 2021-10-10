<?php
$seed_users = [
    [
        'phone' => '0987654321',
        'password' => password_hash('123456', PASSWORD_DEFAULT),
    ]
];
if (Helper::seed(new User(), $seed_users)) {
    echo json_encode(['msg' => 'Seed successfully']);
} else {
    echo json_encode(['msg' => 'No need seeding']);
}
