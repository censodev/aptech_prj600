<?php
$seed_vaccines = [
    [
        'name' => 'COVID-19 Vaccine Comirnaty (Pfizer)',
        'lot' => 'FF4222',
        'producer' => 'Pfizer',
        'supplier' => 'CDC',
        'doses' => '3000',
        'expire_date' => '2022-01-01',
    ],
    [
        'name' => 'Vaccine AstraZeneca',
        'lot' => 'PV46707',
        'producer' => 'AstraZeneca',
        'supplier' => 'CDC',
        'doses' => '10000',
        'expire_date' => '2022-01-01',
    ],
    [
        'name' => 'Vaccine Moderna',
        'lot' => '064D21A',
        'producer' => 'Moderna',
        'supplier' => 'CDC',
        'doses' => '10000',
        'expire_date' => '2022-01-01',
    ],
];

if (Helper::seed(new Vaccine(), $seed_vaccines)) {
    echo json_encode(['msg' => 'Seed successfully']);
} else {
    echo json_encode(['msg' => 'No need seeding']);
}
