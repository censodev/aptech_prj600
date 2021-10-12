<?php
$seed_profiles = [
    [
        'id' => 1,
        'identity_card' => '1234567890',
        'full_name' => 'Bùi Việt Phương',
        'phone' => '0987654321',
        'gender' => 1,
        'birthday' => '2000-11-11',
        'country_id' => 100001,
        'nation_id' => 1,
        'career' => 'Lập trình viên',
        'workspace' => 'Làm tại nhà',
        'province_id' => 1,
        'district_id' => 8,
        'injection_site_id' => 1,
        'injection_date' => date('Y-m-d'),
        'user_id' => 1,
    ],
];
if (Helper::seed(new Profile(), $seed_profiles)) {
    echo json_encode(['msg' => 'Seed successfully']);
} else {
    echo json_encode(['msg' => 'No need seeding']);
}