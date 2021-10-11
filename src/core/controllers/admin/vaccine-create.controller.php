<?php
if (count($_POST) > 0) {
    $vaccine = new Vaccine();
    $vaccine->insert($_POST);
    Helper::redirect('admin/vaccine');
}
include_once Helper::view('admin/vaccine-create');
