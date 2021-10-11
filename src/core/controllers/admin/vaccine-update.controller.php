<?php
$vaccine = new Vaccine();
if (count($_POST) > 0) {
    $vaccine->update($_POST['id'], $_POST);
    Helper::redirect('admin/vaccine');
}
$v = $vaccine->findById($_GET['id']);
include_once Helper::view('admin/vaccine-update');
