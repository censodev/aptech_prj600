<?php
if (count($_GET) > 0) {
    $district_id = $_GET['district_id'];
    echo json_encode((new InjectionSite())->findAll(['district_id' => $district_id, 'status' => 1]));
}