<?php
(new Profile())->update($_GET['id'], ['status' => ProfileStatus::CHECKED_IN]);
Helper::redirect('admin/home?status=' . ProfileStatus::CREATED);