<?php
if (count($_GET) > 0) {
    $district_id = $_GET['district_id'];
    $wards = (new MasterWard())->findAll(['district_id' => $district_id]);
    echo json_encode($wards);
}