<?php
$injectionSites = (new InjectionSite())->findAllWithJoin();
include_once Helper::view('admin/injection-site');