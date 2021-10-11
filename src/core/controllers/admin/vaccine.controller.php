<?php
$vaccine = new Vaccine();
$vaccines = $vaccine->findAll();
include_once Helper::view('admin/vaccine');
