<?php
if (count($_GET) > 0) {
    $province_id = $_GET['province_id'];
    $districts = (new MasterDistrict())->findAll(['province_id' => $province_id]);
    echo json_encode($districts);
}